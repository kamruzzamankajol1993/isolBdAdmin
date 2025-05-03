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
        Schema::create('employee_history_and_education', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('employee_application_id')->unsigned();
            $table->foreign('employee_application_id')->references('id')->on('employee_applications')->onDelete('cascade');
            $table->string('employer_or_company_name_one',150)->nullable();
            $table->string('companyone_phone',100)->nullable();
            $table->string('companyone_position_in_company',150)->nullable();
            $table->string('companyone_supervisor_name',150)->nullable();
            $table->string('companyone_work_start_date',100)->nullable();
            $table->string('companyone_work_end_date',100)->nullable();
            $table->string('companyone_start_salary_usd',100)->nullable();
            $table->string('companyone_end_salary_usd',100)->nullable();
            $table->text('companyone_leave_reason')->nullable();
            $table->string('employer_or_company_name_two',150)->nullable();
            $table->string('companytwo_phone',100)->nullable();
            $table->string('companytwo_position_in_company',150)->nullable();
            $table->string('companytwo_supervisor_name',150)->nullable();
            $table->string('companytwo_work_start_date',100)->nullable();
            $table->string('companytwo_work_end_date',100)->nullable();
            $table->string('companytwo_start_salary_usd',100)->nullable();
            $table->string('companytwo_end_salary_usd',100)->nullable();
            $table->text('companytwo_leave_reason')->nullable();
            $table->string('high_school_name',200)->nullable();
            $table->string('years_in_high_school',50)->nullable();
            $table->string('high_school_start_year',50)->nullable();
            $table->string('high_school_end_year',50)->nullable();
            $table->string('high_school_major')->nullable();
            $table->string('college_name',200)->nullable();
            $table->string('years_in_college',50)->nullable();
            $table->string('college_start_year',50)->nullable();
            $table->string('college_end_year',50)->nullable();
            $table->string('college_major')->nullable();
            $table->string('university_name',200)->nullable();
            $table->string('years_in_university',50)->nullable();
            $table->string('university_start_year',50)->nullable();
            $table->string('university_end_year',50)->nullable();
            $table->string('university_major')->nullable();
            $table->string('apprenticeship_name',200)->nullable();
            $table->string('years_in_apprenticeship',50)->nullable();
            $table->string('apprenticeship_start_year',50)->nullable();
            $table->string('apprenticeship_end_year',50)->nullable();
            $table->string('apprenticeship_major')->nullable();
            $table->string('other_name',200)->nullable();
            $table->string('years_in_other',50)->nullable();
            $table->string('other_start_year',50)->nullable();
            $table->string('other_end_year',50)->nullable();
            $table->string('other_major')->nullable();
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
        Schema::dropIfExists('employee_history_and_education');
    }
};
