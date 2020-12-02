<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAvailableDoctorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('available_doctors', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('client_forms_id');
            $table->bigInteger('available_doctors');
            $table->bigInteger('appointment_interval');
            $table->bigInteger('time_before_appointment');
            $table->timestamps();
            $table->bigInteger('created_by');
            $table->bigInteger('updated_by');
            $table->string('status', 20);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('available_doctors');
    }
}
