<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInOfficeAppointmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('in_office_appointments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('visit_type');
            $table->text('description');
            $table->time('appointment_from');
            $table->time('appointment_to');
            $table->date('appointment_date');
            $table->text('first_name');
            $table->text('middle_name');
            $table->text('last_name');
            $table->text('telephone');
            $table->text('email');
            $table->string('patient_fname', 225);
            $table->string('patient_mname', 225);
            $table->string('patient_lname', 225);
            $table->date('dob');
            $table->string('is_patient_minor', 225);
            $table->text('symptoms');
            $table->string('patient_responsible_part', 225);
            $table->string('patient_insurance_subscriber', 225);
            $table->string('relation_patient', 225);
            $table->string('patient_telephone', 225);
            $table->string('patient_email', 225);
            $table->string('patient_primary_insurance_company', 225);
            $table->string('patient_secondary_insurance_company', 225);
            $table->string('accept_financial_policy', 225);
            $table->date('fp_date');
            $table->string('accept_consent_for_treatment', 225);
            $table->date('cft_date');
            $table->string('hear_about_us', 225);
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
        Schema::dropIfExists('in_office_appointments');
    }
}
