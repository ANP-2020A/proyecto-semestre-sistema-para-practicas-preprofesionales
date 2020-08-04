<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInternsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('interns', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('document');
            $table->date('birth_date');
            $table->string('telephone');
            $table->string('cellphone');
            $table->string('emergency_phone');
            $table->string('address');
            $table->boolean('disability');
            $table->string('conadis_document');
            $table->string('marital_status');
            $table->string('blood_type');
            $table->string('ethnicity');
            $table->string('career');
            $table->string('province');
            $table->string('canton');
            $table->string('parish');/*PARROQUIA*/
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('interns');
    }
}
