<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMhstMinorPrivacyPolicyConsentTreatmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('mhst_minor_privacy_policy_consent_treatments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('parent_name');
            $table->string('email');
            $table->bigInteger('telephone');
            $table->text('patient_name');
            $table->date('dob');
            $table->text('parent_signature');
            $table->text('witness_signature');
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
        Schema::dropIfExists('mhst_minor_privacy_policy_consent_treatments');
    }
}
