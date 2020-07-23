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
            $table->integer('cedula');
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
            $table->string('estadoCivil');
            $table->string('tipoSangre');
            $table->string('etnia');
            $table->string('carrera');
            $table->string('provincia');
            $table->string('canton');
            $table->string('parroquia');
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
