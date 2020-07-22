<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInstruccionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('instruccions', function (Blueprint $table) {
            $table->bigIncrements('idInstruccion');
            $table->string('institucion');
            $table->string('especializacion');
            $table->string('tituloObtenido');
            $table->string('diploma');
            $table->timestamps();
            //la especializacion y el nivel deben ser claves foraneas
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('instruccions');
    }
}
