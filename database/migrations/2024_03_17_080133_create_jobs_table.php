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
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->string('job_category_id')->nullable();
            $table->string('job_department_id')->nullable();
            $table->string('job_title_id')->nullable();
            $table->string('job_title_slug')->nullable();
            $table->string('agency_name')->nullable();
            $table->string('salary',100)->nullable();
            $table->string('job_area')->nullable();
            $table->string('duration')->nullable();
            $table->string('job_id')->nullable();
            $table->string('post_date')->nullable();
            $table->string('expire_date')->nullable();
            $table->string('job_experience')->nullable();
            $table->string('job_type')->nullable();
            $table->string('vessel_type')->nullable();
            $table->longText('description')->nullable();
            $table->string('status',50)->nullable();
            $table->string('user_id',50)->nullable();
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
        Schema::dropIfExists('jobs');
    }
};
