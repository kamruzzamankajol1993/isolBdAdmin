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
        Schema::create('job_seekers', function (Blueprint $table) {
            $table->id();
            $table->longText('your_self')->nullable();
            $table->string('seaman_book_or_bd_cdc',100)->nullable();
            $table->longText('seaman_book_or_bd_cdc_detail')->nullable();
            $table->string('password_valid_till_one_year')->nullable();
            $table->string('full_vaccinated_for_covid')->nullable();
            $table->string('placement_onboard_considered')->nullable();
            $table->string('ielts_score')->nullable();
            $table->longText('ielts_score_des')->nullable();
            $table->string('work_experience',100)->nullable();
            $table->longText('work_experience_des')->nullable();
            $table->string('settled_country')->nullable();
            $table->string('interested_to_work_on_ship')->nullable();
            $table->string('relative_work_on_ship',100)->nullable();
            $table->longText('relative_work_on_ship_des')->nullable();
            $table->string('pay_isol_or_other',100)->nullable();
            $table->string('pay_third_party',100)->nullable();
            $table->string('fill_up_by_assists',100)->nullable();
            $table->string('family_members_country')->nullable();
            $table->longText('assists_and_family_des')->nullable();
            $table->longText('expected_salary')->nullable();
            $table->string('hear_about_us')->nullable();
            $table->string('married_or_not',100)->nullable();
            $table->string('qualification')->nullable();
            $table->string('hospitali_course')->nullable();
            $table->string('sea_motion_work')->nullable();
            $table->string('get_us_visa',100)->nullable();
            $table->string('visa_cancelled_or_not',100)->nullable();
            $table->string('refused_us_visa',100)->nullable();
            $table->string('travel_country',100)->nullable();
            $table->string('terrorist_organization_member',100)->nullable();
            $table->string('police_clearance_certificate',100)->nullable();
            $table->string('illegal_activity',100)->nullable();
            $table->string('arrested',100)->nullable();
            $table->string('mental_or_physical_disorder',100)->nullable();
            $table->string('disease',100)->nullable();
            $table->string('insurgent_organization',100)->nullable();
            $table->string('served_military',100)->nullable();
            $table->string('charitable_organization',100)->nullable();

            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('email_address')->nullable();
            $table->string('phone')->nullable();
            $table->string('cv')->nullable();
            $table->longText('personal_summary')->nullable();
            $table->string('team')->nullable();
            $table->string('ritz_carlton_brand_work')->nullable();
            $table->string('valid_schengen_visa')->nullable();
            $table->string('gender')->nullable();
            $table->string('gender_identity')->nullable();
            $table->string('nationality')->nullable();
            $table->string('martial_status')->nullable();
            $table->string('age_bracket')->nullable();

            $table->string('disability')->nullable();
            $table->string('veteran_status')->nullable();
            $table->string('preferred_pronouns')->nullable();
            $table->string('status')->nullable();
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
        Schema::dropIfExists('job_seekers');
    }
};
