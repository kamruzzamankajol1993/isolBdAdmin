<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeDocumentInformation extends Model
{
    use HasFactory;

    protected $table = "employee_document_information";

    protected $fillable = [
        'employee_application_id',
        'paNumber',
            'paNationality',
            'paIissueDate',
            'paExpireDate',
            'paIissuePlace',
            'c1DStatus',
            'c1DExpireDate',
            'c1DVisaNo',
            'c1DVisaType',
            'c1Status',
            'c1ExpireDate',
            'c1VisaNo',
            'c1VisaType',
            'dStatus',
            'dExpireDate',
            'dVisaNo',
            'dVisaType',
            'sStatus',
            'sVxpireDate',
            'sVisaNo',
            'sVisaType',
            'other1Status',
            'other1ExpireDate',
            'other1VisaNo',
            'other1VisaType',
            'other2Status',
            'other2ExpireDate',
            'other2VisaNo',
            'other2VisaType',
            'fiAidStatus',
            'fiAidExpireDate',
            'fiAidcertificateNo',
            'fPAndFStatus',
            'fPAndFExpire_date',
            'fPAndFCertificateNo',
            'pSSRStatus',
            'pSSRExpireDate',
            'pSSRCertificateNo',
            'pStStatus',
            'pStExpireDate',
            'pStCertificateNo',
            'cMPSStatus',
            'cMPSExpireDate',
            'cMPSCertificateNo',
            'crMHBStatus',
            'crMHBExpireDate',
            'crMHBCertificateNo',


];
}
