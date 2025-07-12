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
        Schema::create('employee_applications', function (Blueprint $table) {
            $table->id();
            $table->string('first_name')->nullable();
            $table->string('middle_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('applicant_photo')->nullable();
            $table->string('applicant_signature')->nullable();
            $table->string('children_under_18')->nullable();
            $table->string('applicant_signature_date')->nullable();
            $table->string('dob',150)->nullable();
            $table->string('birth_place_city')->nullable();
            $table->string('birth_place_country',150)->nullable();
            $table->string('nationality')->nullable();
            $table->string('gender',100)->nullable();
            $table->float('weight')->nullable();
            $table->string('weight_unit',100)->nullable();
            $table->float('height')->nullable();
            $table->string('height_unit',100)->nullable();
            $table->string('hair_color',100)->nullable();
            $table->string('eye_color',100)->nullable();
            $table->string('tattoo',50)->nullable();
            $table->string('tattoo_visible',50)->nullable();
            $table->string('street_one')->nullable();
            $table->string('street_two')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('postal_code',100)->nullable();
            $table->string('country',150)->nullable();
            $table->string('home_phone',50)->nullable();
            $table->string('mobile_phone',50)->nullable();
            $table->string('email_address',150)->nullable();
            $table->string('home_airport')->nullable();
            $table->string('matrial_status',100)->nullable();
            $table->string('emergency_contact_person_one')->nullable();
            $table->string('relation_with_emergency_contact_person_one')->nullable();
            $table->string('emergency_contact_person_one_home_phone',50)->nullable();
            $table->string('emergency_contact_person_one_mobile_phone',50)->nullable();
            $table->string('emergency_contact_person_two')->nullable();
            $table->string('emergency_contact_person_two_email')->nullable();
            $table->string('emergency_contact_person_one_email')->nullable();
            $table->string('relation_with_emergency_contact_person_two')->nullable();
            $table->string('emergency_contact_person_two_home_phone',50)->nullable();
            $table->string('emergency_contact_person_two_mobile_phone',50)->nullable();
            $table->string('desired_position')->nullable();
            $table->string('desired_salary',100)->nullable();
            $table->string('worked_on_cruise_ship',20)->nullable();
            $table->string('last_company')->nullable();
            
            $table->string('status',11)->nullable();
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
        Schema::dropIfExists('employee_applications');
    }
};
