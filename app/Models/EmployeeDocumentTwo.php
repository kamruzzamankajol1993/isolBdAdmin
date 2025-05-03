<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeDocumentTwo extends Model
{
    use HasFactory;

    protected $table = "employee_document_twos";

    protected $fillable = [
        'employee_application_id',
        'sAStatus',
            'sAExpireDate',
            'sACertificateNo',
            'nationalStatus',
            'nationalExpireDate',
            'nationalNumber',
            'nationalNationality',
            'flagStateOneStatus',
            'flagStateOneExpireDate',
            'flagStateOneNumber',
            'flagStateOneNationality',
            'flagStateTwoStatus',
            'flagStateTwoExpireDate',
            'flagStateTwoNumber',
            'flagStateTwoNationality',
            'shipCookStatus',
            'shipCookIssueDate',
            'shipCookExpireDate',
            'shipCookComment',
            'other1Status',
            'other1IssueDate',
            'other1ExpireDate',
            'other1Comment',
            'other2Status',
            'other2IssueDate',
            'other2ExpireDate',
            'other2Comment',


];
}
