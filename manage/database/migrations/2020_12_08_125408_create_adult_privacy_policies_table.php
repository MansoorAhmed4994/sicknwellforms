<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdultPrivacyPoliciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adult_privacy_policies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('patient_name');
            $table->string('email')->unique();
            $table->bigInteger('telephone');
            $table->date('date_of_birth');
            $table->text('patient_signature');
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
    }
}