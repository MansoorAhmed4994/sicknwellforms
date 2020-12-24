<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppointmentLimitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appointment_limits', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('client_forms_id');
            $table->string('time_zone', 225);
            $table->date('start_date')->nullable(true);
            $table->date('end_date')->nullable(true);
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
        Schema::dropIfExists('appointment_limits');
    }
}
