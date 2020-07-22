<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOfertasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ofertas', function (Blueprint $table) {
            $table->bigIncrements('idOferta');
            $table->string('nombre');
            $table->string('descripcion');
            $table->string('direccion');
            $table->boolean('remunerado');
            $table->double('salario');
            //no coloco los campos de jornada y horario porque creo que deben ser claves
            //foraneas de otra tabla al igual que el campo de ciudad
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
        Schema::dropIfExists('ofertas');
    }
}
