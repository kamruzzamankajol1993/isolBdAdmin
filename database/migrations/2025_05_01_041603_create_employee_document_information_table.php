<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_document_information', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('employee_application_id')->unsigned();
            $table->foreign('employee_application_id')->references('id')->on('employee_applications')->onDelete('cascade');
            $table->string('paNumber',150)->nullable();
            $table->string('paNationality',150)->nullable();
            $table->string('paIissueDate',150)->nullable();
            $table->string('paExpireDate',150)->nullable();
            
            $table->string('paIissuePlace')->nullable();
            $table->string('c1DStatus',50)->nullable();
            $table->string('c1DExpireDate',100)->nullable();
            $table->string('c1DVisaNo',150)->nullable();
            $table->string('c1DVisaType',200)->nullable();
            $table->string('c1Status',50)->nullable();
            $table->string('c1ExpireDate',100)->nullable();
            $table->string('c1VisaNo',150)->nullable();
            $table->string('c1VisaType',200)->nullable();
            $table->string('dStatus',50)->nullable();
            $table->string('dExpireDate',100)->nullable();
            $table->string('dVisaNo',150)->nullable();
            $table->string('dVisaType',200)->nullable();
            $table->string('sStatus',50)->nullable();
            $table->string('sVxpireDate',100)->nullable();
            $table->string('sVisaNo',150)->nullable();
            $table->string('sVisaType',200)->nullable();
            $table->string('other1Status',50)->nullable();
            $table->string('other1ExpireDate',100)->nullable();
            $table->string('other1VisaNo',150)->nullable();
            $table->string('other1VisaType',200)->nullable();
            $table->string('other2Status',50)->nullable();
            $table->string('other2ExpireDate',100)->nullable();
            $table->string('other2VisaNo',150)->nullable();
            $table->string('other2VisaType',200)->nullable();
            $table->string('fiAidStatus',50)->nullable();
            $table->string('fiAidExpireDate',100)->nullable();
            $table->string('fiAidcertificateNo',200)->nullable();
            $table->string('fPAndFStatus',50)->nullable();
            $table->string('fPAndFExpire_date',100)->nullable();
            $table->string('fPAndFCertificateNo',200)->nullable();
            $table->string('pSSRStatus',50)->nullable();
            $table->string('pSSRExpireDate',100)->nullable();
            $table->string('pSSRCertificateNo',200)->nullable();
            $table->string('pStStatus',50)->nullable();
            $table->string('pStExpireDate',100)->nullable();
            $table->string('pStCertificateNo',200)->nullable();
            $table->string('cMPSStatus',50)->nullable();
            $table->string('cMPSExpireDate',100)->nullable();
            $table->string('cMPSCertificateNo',200)->nullable();
            $table->string('crMHBStatus',50)->nullable();
            $table->string('crMHBExpireDate',100)->nullable();
            $table->string('crMHBCertificateNo',200)->nullable();
           
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employee_document_information');
    }
};
