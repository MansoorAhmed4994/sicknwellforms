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
            $table->text('number');
            $table->text('d_number')->nullable(true);
            $table->text('state');
            $table->text('hear_about_us');
            $table->text('shipping_address');
            $table->text('shipping_line')->nullable(true);
            $table->text('shipping_city');
            $table->text('shipping_state');
            $table->text('shipping_zip');
            $table->date('dob');
            $table->text('gender');
            $table->text('race')->nullable(true);
            $table->text('preferred_language')->nullable(true);
            $table->double('pay_via_credit_card')->nullable(true);
            $table->text('patient_name')->nullable(true);
            $table->text('patient_email')->nullable(true);
            $table->text('insurance_name')->nullable(true);
            $table->bigInteger('member_id_1')->nullable(true);
            $table->text('subcribers_name_1')->nullable(true);
            $table->text('secondary_insurance_name')->nullable(true);
            $table->bigInteger('member_id_2')->nullable(true);
            $table->text('subcribers_name_2')->nullable(true);
            $table->text('front_card')->nullable(true);
            $table->text('back_card')->nullable(true);
            $table->text('patient_physician')->nullable(true);
            $table->bigInteger('physician_tel')->nullable(true);
            $table->text('extension')->nullable(true);
            $table->text('phy_script')->nullable(true);
            $table->text('name_patient_terms');
            $table->date('dob_patient_terms');
            $table->text('is_patient_minor');
            $table->text('parent_guardian')->nullable(true);
            $table->text('email_patient_terms');
            $table->text('patient_telephone_terms');
            $table->text('term_condition');
            $table->date('todate');
            $table->text('signature');
            $table->text('full_name_patient_terms');
            $table->text('legal_signature');
            $table->text('name_questions');
            $table->text('email_questions');
            $table->text('telephone_questions');
            $table->date('dob_questions');
            $table->text('snoring')->nullable(true);
            $table->text('tired')->nullable(true);
            $table->text('observed')->nullable(true);
            $table->text('pressure')->nullable(true);
            $table->text('body')->nullable(true);
            $table->text('age')->nullable(true);
            $table->text('neck')->nullable(true);
            $table->text('gender_questions')->nullable(true);
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
