<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Job;
use App\Models\DreamJobSector;
use App\Models\DreamJobDepartment;
use App\Models\DreamJobPosition;
use App\Models\VesselOrWorkPlace;
use App\Models\Jobtitle;
use App\Models\Jobdepartment;
use App\Models\Jobcategory;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use DB;
use App\Models\Location;
use App\Models\ContactType;

use Illuminate\Support\Facades\Validator;
class JobController extends Controller
{


     public function getVesselsBySector($sector_id)
    {
        $vessels = VesselOrWorkPlace::where('dream_job_sector_id', $sector_id)->get();
        return response()->json($vessels);
    }

    public function getPositionsByDepartment($department_id)
    {
        $positions = DreamJobPosition::where('dream_job_department_id', $department_id)->get();
        return response()->json($positions);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        try{


        $job_list = Job::where('user_id',Auth::guard('admin')->user()->id)->latest()->get();
        $headline_list = Jobtitle::latest()->get();
        $headline_list2 = Jobdepartment::latest()->get();
        $headline_list1 = Jobcategory::latest()->get();

        $contactTypeList = ContactType::latest()->get();
        $locationList = Location::latest()->get();

    } catch (\Exception $e) {
        return redirect()->back()->with('error','some thing went wrong ');
      }


        return view('backend.job.index',['locationList'=>$locationList,'contactTypeList'=>$contactTypeList,'job_list'=>$job_list,'headline_list'=>$headline_list,'headline_list1'=>$headline_list1,'headline_list2'=>$headline_list2]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        try{

        $contactTypeList = ContactType::latest()->get();
        $locationList = Location::latest()->get();

        $vesselOrWorkPlaceList = VesselOrWorkPlace::latest()->get();
        $jobTitleList = DreamJobPosition::latest()->get();
        $jobDepartmentList = DreamJobDepartment::latest()->get();
        $jobCategoryList = DreamJobSector::latest()->get();

    } catch (\Exception $e) {
        return redirect()->back()->with('error','some thing went wrong ');
      }


        return view('backend.job.create',['locationList'=>$locationList,'contactTypeList'=>$contactTypeList,'vesselOrWorkPlaceList'=>$vesselOrWorkPlaceList,'jobTitleList'=>$jobTitleList,'jobDepartmentList'=>$jobDepartmentList,'jobCategoryList'=>$jobCategoryList]);
    }


    public function getJobTitleForDepartment(Request $request){

        $get_dp = Jobtitle::where('dp_id',$request->cat_name)->latest()->get();

     $data = view('backend.job.getJobTitleForDepartment',compact('get_dp'))->render();
     return response()->json($data);
 }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'job_sector_id' => 'required|exists:dream_job_sectors,id',
            'vessel_or_work_place_id' => 'required|exists:vessel_or_work_places,id',
            'job_department_id' => 'required|exists:dream_job_departments,id',
            'job_title_id' => 'required|exists:dream_job_positions,id',
            'agency_name' => 'required|string|max:255',
            'salary' => 'required|string|max:255',
            'post_date' => 'required|date',
            'expire_date' => 'required|date|after_or_equal:post_date',
            'job_experience' => 'required|string|max:255',
            'job_type' => 'required|string',
            'description' => 'required|string',
            'status' => 'required|boolean',
            'urgent_vacancy' => 'required|boolean',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        try {
            $data = $request->all();
            // Generate a unique 6-digit hexadecimal job ID
            $data['job_id'] = substr(md5(uniqid(rand(), true)), 0, 6);
            // Create a slug from the job title
            $jobTitle = DreamJobPosition::find($request->job_title_id);
            $data['job_title_slug'] = Str::slug($jobTitle->name . '-' . $data['job_id']);
            // Assuming user_id is the authenticated user
            $data['user_id'] = Auth::guard('admin')->user()->id;

            Job::create($data);

            return redirect()->route('jobList.index')->with('success', 'Vacancy created successfully.');

        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Something went wrong. ' . $e->getMessage())->withInput();
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        try {
            $job = Job::findOrFail($id);

            $contactTypeList = ContactType::latest()->get();
            $locationList = Location::latest()->get();
            $vesselOrWorkPlaceList = VesselOrWorkPlace::where('dream_job_sector_id', $job->job_sector_id)->get();
            $jobTitleList = DreamJobPosition::where('dream_job_department_id', $job->job_department_id)->get();
            $jobDepartmentList = DreamJobDepartment::latest()->get();
            $jobCategoryList = DreamJobSector::latest()->get();

            return view('backend.job.edit', compact(
                'job',
                'locationList',
                'contactTypeList',
                'vesselOrWorkPlaceList',
                'jobTitleList',
                'jobDepartmentList',
                'jobCategoryList'
            ));

        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Something went wrong.');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $job = Job::findOrFail($id);

        $validator = Validator::make($request->all(), [
            'job_sector_id' => 'required|exists:dream_job_sectors,id',
            'vessel_or_work_place_id' => 'required|exists:vessel_or_work_places,id',
            'job_department_id' => 'required|exists:dream_job_departments,id',
            'job_title_id' => 'required|exists:dream_job_positions,id',
            'agency_name' => 'required|string|max:255',
            'salary' => 'required|string|max:255',
            'post_date' => 'required|date',
            'expire_date' => 'required|date|after_or_equal:post_date',
            'job_experience' => 'required|string|max:255',
            'job_type' => 'required|string',
            'description' => 'required|string',
            'status' => 'required|boolean',
            'urgent_vacancy' => 'required|boolean',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        try {
            $data = $request->all();
            // Re-create slug in case title changed
            $jobTitle = DreamJobPosition::find($request->job_title_id);
            $data['job_title_slug'] = Str::slug($jobTitle->name . '-' . $job->job_id);

            $job->update($data);

            return redirect()->route('jobList.index')->with('success', 'Vacancy updated successfully.');

        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Something went wrong. ' . $e->getMessage())->withInput();
        }
    }
     public function show($id)
    {
        try {
            // Find the job and eager load all its relationships
            $job = Job::with([
                'position',
                'department',
                'jobSector',
                'vesselOrWorkPlace'
            ])->findOrFail($id);

            return view('backend.job.view', compact('job'));

        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Vacancy not found.');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $admins = Job::find($id);
        if (!is_null($admins)) {
            $admins->delete();
        }


        return back()->with('error','Deleted successfully!');
    }
}
