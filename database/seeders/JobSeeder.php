<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Job;
use App\Models\DreamJobSector;
use App\Models\VesselOrWorkPlace;
use App\Models\DreamJobDepartment;
use App\Models\DreamJobPosition;
use App\Models\User;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       

        // Fetch all related data to avoid querying in a loop
        $sectors = DreamJobSector::all();
        $departments = DreamJobDepartment::all();
        $vessels = VesselOrWorkPlace::all();
        $positions = DreamJobPosition::all();

        if ($sectors->isEmpty() || $departments->isEmpty() || $vessels->isEmpty() || $positions->isEmpty()) {
            $this->command->info('Please seed Sectors, Vessels, Departments, and Positions before seeding Jobs.');
            return;
        }

        for ($i = 0; $i < 50; $i++) {
            // Get random related models
            $randomSector = $sectors->random();
            $randomDepartment = $departments->random();

            // Get vessels related to the chosen sector
            $relatedVessels = $vessels->where('dream_job_sector_id', $randomSector->id);
            $randomVessel = $relatedVessels->isNotEmpty() ? $relatedVessels->random() : $vessels->random();

            // Get positions related to the chosen department
            $relatedPositions = $positions->where('dream_job_department_id', $randomDepartment->id);
            $randomPosition = $relatedPositions->isNotEmpty() ? $relatedPositions->random() : $positions->random();

            // Generate dates
            $postDate = Carbon::now()->subDays(rand(1, 60));
            $expireDate = $postDate->copy()->addDays(rand(15, 45));

            // Generate a unique 6-digit hexadecimal job ID
            $jobId = substr(md5(uniqid(rand(), true)), 0, 6);

            Job::create([
                'job_sector_id' => $randomSector->id,
                'vessel_or_work_place_id' => $randomVessel->id,
                'job_department_id' => $randomDepartment->id,
                'job_title_id' => $randomPosition->id,
                'job_title_slug' => Str::slug($randomPosition->name . '-' . $jobId),
                'agency_name' => 'Maritime Agency ' . Str::random(5),
                'salary' => '$' . rand(3000, 8000) . ' USD',
                'job_area' => 'Worldwide', // Example data
                'duration' => rand(3, 9) . ' Months', // Example data
                'job_id' => $jobId,
                'post_date' => $postDate,
                'expire_date' => $expireDate,
                'job_experience' => rand(1, 5) . ' years experience required',
                'job_type' => ['Full Time', 'Part time', 'Permanent', 'Temporary', 'Several Trips'][array_rand(['Full Time', 'Part time', 'Permanent', 'Temporary', 'Several Trips'])],
                'vessel_type' => ['Tanker', 'Bulk Carrier', 'Container Ship', 'Offshore', 'Cruise Ship'][array_rand(['Tanker', 'Bulk Carrier', 'Container Ship', 'Offshore', 'Cruise Ship'])], // Example data
                'description' => 'We are seeking a qualified ' . $randomPosition->name . ' to join our dynamic team. The ideal candidate will have experience working on a ' . $randomVessel->name . '.',
                'status' => rand(0, 1),
                'urgent_vacancy' => rand(0, 1),
                'user_id' => 1,
            ]);
        }
    }
}
