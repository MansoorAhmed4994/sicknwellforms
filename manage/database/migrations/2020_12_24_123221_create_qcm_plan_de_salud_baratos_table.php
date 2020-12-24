<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQcmPlanDeSaludBaratosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('qcm_plan_de_salud_baratos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('agree');
            $table->text('membership');
            $table->text('email');
            $table->text('first_name');
            $table->text('surname');
            $table->text('full_name');
            $table->text('telephone');
            $table->text('email_patient');
            $table->text('address');
            $table->text('city');
            $table->text('state');
            $table->text('zip');
            $table->date('dob');
            $table->text('full_name_membership');
            $table->text('telephone_membership');
            $table->text('email_membership');
            $table->text('relation_patient')->nullable(true);
            $table->date('todate');
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
        Schema::dropIfExists('qcm_plan_de_salud_baratos');
    }
}
