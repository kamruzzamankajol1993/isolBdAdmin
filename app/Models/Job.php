<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
class Job extends Model
{
    use HasFactory;

     protected $fillable = [
        'job_sector_id',
        'vessel_or_work_place_id',
        'job_department_id',
        'job_title_id',
        'job_title_slug',
        'agency_name',
        'salary',
        'job_area',
        'duration',
        'job_id',
        'post_date',
        'expire_date',
        'job_experience',
        'job_type',
        'vessel_type',
        'description',
        'urgent_vacancy',
        'status',
        'user_id',
    ];


    /**
     * Get the job sector for the job.
     */
    public function jobSector(): BelongsTo
    {
        return $this->belongsTo(DreamJobSector::class, 'job_sector_id');
    }

    /**
     * Get the vessel or work place for the job.
     */
    public function vesselOrWorkPlace(): BelongsTo
    {
        return $this->belongsTo(VesselOrWorkPlace::class, 'vessel_or_work_place_id');
    }

    /**
     * Get the department for the job.
     */
    public function department(): BelongsTo
    {
        return $this->belongsTo(DreamJobDepartment::class, 'job_department_id');
    }

    /**
     * Get the position (job title) for the job.
     */
    public function position(): BelongsTo
    {
        return $this->belongsTo(DreamJobPosition::class, 'job_title_id');
    }

    /**
     * Get the user who posted the job.
     */
    public function admin(): BelongsTo
    {
        return $this->belongsTo(Admin::class, 'user_id');
    }
}
