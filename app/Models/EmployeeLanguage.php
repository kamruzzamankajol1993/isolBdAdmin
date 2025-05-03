<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeLanguage extends Model
{
    use HasFactory;

    protected $table = "employee_languages";

    protected $fillable = [
        'employee_application_id',
        'english_speak_level',
        'english_writting_level',
        'spanish_speak_level',
        'spanish_writting_level',
        'french_speak_level',
        'french_writting_level',
        'german_speak_level',
        'german_writting_level',
        'other1_speak_level',
        'other1_writting_level',
        'other2_speak_level',
        'other2_writting_level',


];
}
