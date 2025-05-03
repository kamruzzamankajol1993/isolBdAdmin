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
        Schema::create('employee_languages', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('employee_application_id')->unsigned();
            $table->foreign('employee_application_id')->references('id')->on('employee_applications')->onDelete('cascade');
            $table->string('english_speak_level',100)->nullable();
            $table->string('english_writting_level',100)->nullable();
            $table->string('spanish_speak_level',100)->nullable();
            $table->string('spanish_writting_level',100)->nullable();
            $table->string('french_speak_level',100)->nullable();
            $table->string('french_writting_level',100)->nullable();
            $table->string('german_speak_level',100)->nullable();
            $table->string('german_writting_level',100)->nullable();
            $table->string('other1_speak_level',100)->nullable();
            $table->string('other1_writting_level',100)->nullable();
            $table->string('other2_speak_level',100)->nullable();
            $table->string('other2_writting_level',100)->nullable();
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
        Schema::dropIfExists('employee_languages');
    }
};
