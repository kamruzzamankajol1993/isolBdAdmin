<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VesselOrWorkPlace extends Model
{
    use HasFactory;

     /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'vessel_or_work_places';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name','dream_job_sector_id'
    ];

    // In App\Models\VesselOrWorkPlace.php
public function dreamJobSector()
{
    return $this->belongsTo(DreamJobSector::class);
}
}
