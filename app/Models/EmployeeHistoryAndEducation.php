<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeHistoryAndEducation extends Model
{
    use HasFactory;

    protected $table = "employee_history_and_education";

    protected $fillable = [
       'employee_application_id',
         
            'employer_or_company_name_one',
            'companyone_phone',
            'companyone_position_in_company',
            'companyone_supervisor_name',
            'companyone_work_start_date',
            'companyone_work_end_date',
            'companyone_start_salary_usd',
            'companyone_end_salary_usd',
            'companyone_leave_reason',
            'employer_or_company_name_two',
            'companytwo_phone',
            'companytwo_position_in_company',
            'companytwo_supervisor_name',
            'companytwo_work_start_date',
            'companytwo_work_end_date',
            'companytwo_start_salary_usd',
            'companytwo_end_salary_usd',
            'companytwo_leave_reason',
            'high_school_name',
            'years_in_high_school',
            'high_school_start_year',
            'high_school_end_year',
            'high_school_major',
            'college_name',
            'years_in_college',
            'college_start_year',
            'college_end_year',
            'college_major',
            'university_name',
            'years_in_university',
            'university_start_year',
            'university_end_year',
            'university_major',
            'apprenticeship_name',
            'years_in_apprenticeship',
            'apprenticeship_start_year',
            'apprenticeship_end_year',
            'apprenticeship_major',
            'other_name',
            'years_in_other',
            'other_start_year',
            'other_end_year',
            'other_major',


];
}
