<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePedimTelemedicinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('pedim_telemedicines', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('visit_type');
            $table->text('description_of_issue');
            $table->time('appointment_from');
            $table->time('appointment_to');
            $table->date('appointment_date');
            $table->text('pacific');
            $table->text('patient_fname');
            $table->text('patient_mname');
            $table->text('patient_lname');
            $table->bigInteger('telephone');
            $table->text('email');
            $table->text('guardian_fname');
            $table->text('guardian_mname');
            $table->text('guardian_lname');
            $table->date('dob');
            $table->string('is_patient_minor', 225);
            $table->text('symptoms');
            $table->string('responsible_party_name', 225);
            $table->string('insurance_subscriber', 225);
            $table->string('relation_patient', 225);
            $table->bigInteger('insurance_telephone');
            $table->text('insurance_email');
            $table->text('primary_insurance_company');
            $table->string('accept_financial_policy', 225);
            $table->date('fp_date');
            $table->string('accept_consent_for_treatment', 225);
            $table->date('cft_date');
            $table->text('hear_about_us');
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
    }
}
