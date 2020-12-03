<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdultPrivacyPolicyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adult_privacy_policy', function (Blueprint $table) {
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
            $table->rememberToken();
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
        Schema::dropIfExists('adult_privacy_policy');
    }
}
