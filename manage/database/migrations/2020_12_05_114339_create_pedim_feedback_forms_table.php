<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePedimFeedbackFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('pedim_feedback_forms', function (Blueprint $table) {

            $table->bigIncrements('id');
            $table->text('patient_name');
            $table->date('appointment_date');
            $table->time('appointment_time');
            $table->bigInteger('number');
            $table->text('patient_email');
            $table->text('contact_managment');
            $table->text('description');
            $table->bigInteger('answer');
            $table->bigInteger('client_forms_id');
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
        //
        Schema::dropIfExists('pedim_feedback_forms');
    }
}
