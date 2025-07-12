<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeApplication extends Model
{
    use HasFactory;

    protected $table = "employee_applications";

    protected $fillable = [
        'employee_application_id',
       'first_name',
       'middle_name',
       'last_name',
       'applicant_photo',
       'applicant_signature',
       'applicant_signature_date',
       'dob',
       'birth_place_city',
       'birth_place_country',
       'nationality',
       'gender',
        'weight',
       'weight_unit',
        'height',
       'height_unit',
       'hair_color',
       'eye_color',
       'tattoo',
       'tattoo_visible',
       'street_one',
       'street_two',
       'city',
       'state',
       'last_company',
       'postal_code',
       'country',
       'home_phone',
       'mobile_phone',
       'email_address',
       'home_airport',
       'matrial_status',
       'children_under_18',
       'emergency_contact_person_one',
       'relation_with_emergency_contact_person_one',
       'emergency_contact_person_one_home_phone',
       'emergency_contact_person_one_mobile_phone',
       'emergency_contact_person_two_email',
       'emergency_contact_person_one_email',
       'emergency_contact_person_two',
       'relation_with_emergency_contact_person_two',
       'emergency_contact_person_two_home_phone',
       'emergency_contact_person_two_mobile_phone',
       'desired_position',
       'desired_salary',
       'worked_on_cruise_ship',
       'status',


];
}
