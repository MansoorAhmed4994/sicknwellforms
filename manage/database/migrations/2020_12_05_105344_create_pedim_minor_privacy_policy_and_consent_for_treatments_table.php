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
            $table->bigInteger('telephone');
            $table->text('patient_email');
            $table->text('patient_name');
            $table->date('dob');
            $table->text('sign_parent');
            $table->text('sign_witness');
            $table->date('todate');
            $table->text('witness_name');
            $table->date('wtodate');
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
