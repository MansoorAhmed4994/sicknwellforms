<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePedimMinorPrivacyPolicyAndConsentForTreatmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('pedim_minor_privacy_policy_and_consent_for_treatments', function (Blueprint $table) {

            $table->bigIncrements('id');
            $table->text('parent_or_legal');
            $table->text('patient_name');
            $table->string('email');
            $table->string('telephone');
            $table->date('dob');
            $table->text('parent_signature');
            $table->date('patients_today_date');
            $table->text('witness_signature');
            $table->text('witness_name');
            $table->date('witness_today_date');
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
        Schema::dropIfExists('pedim_minor_privacy_policy_and_consent_for_treatments');
    }
}
