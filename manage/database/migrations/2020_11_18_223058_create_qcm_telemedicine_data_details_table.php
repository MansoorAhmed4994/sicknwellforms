<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQcmTelemedicineDataDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('qcm_telemedicine_data_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('visit_type');
            $table->text('description');
            $table->time('appointment_from');
            $table->time('appointment_to');
            $table->date('appointment_date');
            $table->text('patient_first_name');
            $table->text('patient_middle_name');
            $table->text('patient_last_name');
            $table->text('telephone');
            $table->text('email');
            $table->text('is_patient_minor');
            $table->text('parent_guardian');
            $table->text('relation_to_patient');
            $table->string('gender', 225);
            $table->date('dob');
            $table->text('address1');
            $table->text('address2');
            $table->text('city');
            $table->text('state');
            $table->string('zip_code', 20);
            $table->text('employer_occupation');
            $table->text('qcard_number');
            $table->text('payment_option');
            $table->text('membership_type')->nullable(true);
            $table->text('cc_first_name');
            $table->text('cc_last_name');
            $table->text('cc_number');
            $table->bigInteger('cc_cvc');
            $table->text('cc_expiration');
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
        Schema::dropIfExists('qcm_telemedicine_data_details');
    }
}
