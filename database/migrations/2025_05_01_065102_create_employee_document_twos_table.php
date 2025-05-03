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
        Schema::create('employee_document_twos', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('employee_application_id')->unsigned();
            $table->foreign('employee_application_id')->references('id')->on('employee_applications')->onDelete('cascade');
            $table->string('sAStatus',50)->nullable();
            $table->string('sAExpireDate',100)->nullable();
            $table->string('sACertificateNo',200)->nullable();
            $table->string('nationalStatus',50)->nullable();
            $table->string('nationalExpireDate',100)->nullable();
            $table->string('nationalNumber',100)->nullable();
            $table->string('nationalNationality',150)->nullable();
            $table->string('flagStateOneStatus',50)->nullable();
            $table->string('flagStateOneExpireDate',100)->nullable();
            $table->string('flagStateOneNumber',100)->nullable();
            $table->string('flagStateOneNationality',150)->nullable();
            $table->string('flagStateTwoStatus',50)->nullable();
            $table->string('flagStateTwoExpireDate',100)->nullable();
            $table->string('flagStateTwoNumber',100)->nullable();
            $table->string('flagStateTwoNationality',150)->nullable();
            $table->string('shipCookStatus',50)->nullable();
            $table->string('shipCookIssueDate',100)->nullable();
            $table->string('shipCookExpireDate',100)->nullable();
            $table->text('shipCookComment')->nullable();
            $table->string('other1Status',50)->nullable();
            $table->string('other1IssueDate',100)->nullable();
            $table->string('other1ExpireDate',100)->nullable();
            $table->text('other1Comment')->nullable();
            $table->string('other2Status',50)->nullable();
            $table->string('other2IssueDate',100)->nullable();
            $table->string('other2ExpireDate',100)->nullable();
            $table->text('other2Comment')->nullable();
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
        Schema::dropIfExists('employee_document_twos');
    }
};
