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
        Schema::create('recruitment_agency_parts', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('employee_application_id')->unsigned();
            $table->foreign('employee_application_id')->references('id')->on('employee_applications')->onDelete('cascade');
            $table->string('agencyName')->nullable();
            $table->string('agencyLocation')->nullable();
            $table->string('prescreenedStatus')->nullable();
            $table->string('prescreenedSate')->nullable();
            $table->string('prescreenedDate')->nullable();
            $table->string('referencesStatus')->nullable();
            $table->string('referencesBy')->nullable();
            $table->string('criminalStatus')->nullable();
            $table->string('criminalStatus_by')->nullable();
            $table->string('applicantProvided')->nullable();
            $table->string('interveiwer')->nullable();
            $table->text('interveiwerCommet')->nullable();
            $table->string('interveiwD_date')->nullable();
            $table->string('appovePosition')->nullable();
            $table->string('appoveSalary')->nullable();
            $table->string('overall')->nullable();
            $table->string('english')->nullable();
            $table->string('attitude')->nullable();
            $table->string('socialSkill')->nullable();
            $table->string('orgFit')->nullable();
            $table->string('techProf')->nullable();
            $table->string('grooming')->nullable();
            $table->string('energy')->nullable();
            $table->string('confidence')->nullable();
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
        Schema::dropIfExists('recruitment_agency_parts');
    }
};
