<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RecruitmentAgencyPart extends Model
{
    use HasFactory;

    protected $table = "recruitment_agency_parts";

    protected $fillable = [
       'employee_application_id',
       'agencyName',
            'agencyLocation',
            'prescreenedStatus',
            'prescreenedSate',
            'prescreenedDate',
            'referencesStatus',
            'referencesBy',
            'criminalStatus',
            'criminalStatus_by',
            'applicantProvided',
            'interveiwer',
            'interveiwerCommet',
            'interveiwD_date',
            'appovePosition',
            'appoveSalary',
            'overall',
            'english',
            'attitude',
            'socialSkill',
            'orgFit',
            'techProf',
            'grooming',
            'energy',
            'confidence',


];
}
