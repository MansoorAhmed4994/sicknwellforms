<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePedimConsentForRapidCovid19TestingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('pedim_consent_for_rapid_covid19_testings', function (Blueprint $table) {

            $table->bigIncrements('id');
            $table->text('patient_name');
            $table->text('is_patient_minor');
            $table->text('parent_guardian')->nullable(true);
            $table->text('patient_email');
            $table->text('telephone');
            $table->text('sign_responsible_party');
            $table->date('date');
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
        Schema::dropIfExists('pedim_consent_for_rapid_covid19_testings');
    }
}
