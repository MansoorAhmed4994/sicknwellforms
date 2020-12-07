<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMhstRegisterHomeSleepTestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('mhst_register_home_sleep_tests', function (Blueprint $table) {

            $table->bigIncrements('id');
            $table->text('full_name');
            $table->text('email');
            $table->bigInteger('number');
            $table->bigInteger('d_number')->nullable();
            $table->text('state');
            $table->text('hear_about_us');
            $table->text('shipping_address');
            $table->text('shipping_line')->nullable();
            $table->text('shipping_city');
            $table->text('shipping_state');
            $table->text('shipping_zip');
            $table->date('dob');
            $table->text('gender');
            $table->text('race')->nullable();
            $table->text('preferred_language')->nullable();
            $table->double('pay_via_credit_card')->nullable();
            $table->text('patient_name')->nullable();
            $table->text('patient_email')->nullable();
            $table->text('insurance_name')->nullable();
            $table->bigInteger('member_id_1')->nullable();
            $table->text('subcribers_name_1')->nullable();
            $table->text('secondary_insurance_name')->nullable();
            $table->bigInteger('member_id_2')->nullable();
            $table->text('subcribers_name_2')->nullable();
            $table->text('front_card')->nullable();
            $table->text('back_card')->nullable();
            $table->text('patient_physician')->nullable();
            $table->text('physician_tel')->nullable();
            $table->text('extension')->nullable();
            $table->text('phy_script')->nullable();
            $table->text('name_patient_terms');
            $table->date('dob_patient_terms');
            $table->text('is_patient_minor')->nullable();
            $table->text('email_patient_terms');
            $table->text('telephone_patient_terms');
            $table->text('term_condition');
            $table->date('todate');
            $table->text('signature');
            $table->text('full_name_patient_terms');
            $table->text('legal_signature');
            $table->text('name_questions');
            $table->text('email_questions');
            $table->bigInteger('telephone_questions');
            $table->date('dob_questions');
            $table->text('snoring')->nullable();
            $table->text('tired')->nullable();
            $table->text('observed')->nullable();
            $table->text('pressure')->nullable();
            $table->text('body')->nullable();
            $table->text('age')->nullable();
            $table->text('neck')->nullable();
            $table->text('gender_questions')->nullable();
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
        Schema::dropIfExists('mhst_register_home_sleep_tests');
        
    }
}
