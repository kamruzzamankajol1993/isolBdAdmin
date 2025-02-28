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
        Schema::create('surveys', function (Blueprint $table) {
            $table->id();
            $table->string('employee_status')->nullable();
            $table->string('duration')->nullable();
            $table->string('enjoy_rating')->nullable();
            $table->string('encourage_rating')->nullable();
            $table->string('teamwork_rating')->nullable();
            $table->string('respect_rating')->nullable();
            $table->string('listen_rating')->nullable();
            $table->string('support_rating')->nullable();
            $table->string('benefit')->nullable();
            $table->string('loyal')->nullable();
            $table->string('leaving')->nullable();
            $table->string('contract')->nullable();
            $table->longText('do_not_offer')->nullable();
            $table->longText('onBoard')->nullable();
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
        Schema::dropIfExists('surveys');
    }
};
