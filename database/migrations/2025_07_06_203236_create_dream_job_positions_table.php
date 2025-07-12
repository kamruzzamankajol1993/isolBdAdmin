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
        Schema::create('dream_job_positions', function (Blueprint $table) {
            $table->id();
              $table->string('name'); // Column to store the position name
            
            // Foreign key for the relationship with dream_job_departments
            $table->foreignId('dream_job_department_id')
                  ->constrained('dream_job_departments')
                  ->onUpdate('cascade')
                  ->onDelete('cascade');
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
        Schema::dropIfExists('dream_job_positions');
    }
};
