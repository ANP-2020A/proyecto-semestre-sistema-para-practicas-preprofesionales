<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePasantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pasantes', function (Blueprint $table) {
            $table->bigIncrements('idPasante');
            $table->string('cedula');
            $table->string('nombre');
            $table->string('apellido');
            $table->date('fechaNacimiento');
            $table->string('telefonoConv');
            $table->string('telefonoCelu');
            $table->string('telefonoEmergencia');
            $table->string('correo');
            $table->string('direccion');
            $table->boolean('capacidadEspecial');
            $table->string('carnetConadis');
            //No coloco los campos de provincia, canton y parroquia proque deben ser claves foraneas
            //tambien el campo de estado civil, tipo de sangre, etnia y carrera
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
        Schema::dropIfExists('pasantes');
    }
}
