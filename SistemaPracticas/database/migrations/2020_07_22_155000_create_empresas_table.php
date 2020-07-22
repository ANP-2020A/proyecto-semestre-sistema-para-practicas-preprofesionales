<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpresasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresas', function (Blueprint $table) {
            $table->bigIncrements('idEmpresa');
            $table->string('nombre');
            $table->integer('ruc');
            $table->string('tipo');
            $table->string('telefono'); //se envia el telf como string porque se requerira ingesar el prefijo segun ciudad o pais
            $table->string('correo');
            $table->string('direccion');
            $table->string('nombreResponsable');
            $table->string('telefonoResponsable');
            $table->string('correoResponsable');
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
        Schema::dropIfExists('empresas');
    }
}
