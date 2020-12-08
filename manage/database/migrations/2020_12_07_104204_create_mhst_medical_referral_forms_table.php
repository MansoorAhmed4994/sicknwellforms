<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMhstMedicalReferralFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('mhst_medical_referral_forms', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('provider_name');
            $table->bigInteger('telephone');
            $table->text('fax');
            $table->string('email');
            $table->text('contact_person');
            $table->text('facility_name')->nullable;
            $table->text('address')->nullable;
            $table->text('address_2')->nullable;
            $table->text('city')->nullable;
            $table->text('state')->nullable;
            $table->text('zip')->nullable;
            $table->text('patient_name');
            $table->date('dob');
            $table->bigInteger('phone');
            $table->bigInteger('alternate_phone')->nullable;
            $table->string('email_patient');
            $table->text('address_patient');
            $table->text('address_2_patient')->nullable;
            $table->text('city_patient');
            $table->text('state_patient');
            $table->text('zip_patient');
            $table->decimal('height');
            $table->decimal('weight');
            $table->decimal('neck_size');
            $table->text('card_front');
            $table->text('card_back');
            $table->text('symptoms');
            $table->text('oxygen');
            $table->text('lpm')->nullable;
            $table->text('diagnostic_codes');
            $table->text('sleep_testing');
            $table->text('comment');
            $table->text('physician_name');
            $table->text('signature');
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
        Schema::dropIfExists('mhst_medical_referral_forms');
    }
}
