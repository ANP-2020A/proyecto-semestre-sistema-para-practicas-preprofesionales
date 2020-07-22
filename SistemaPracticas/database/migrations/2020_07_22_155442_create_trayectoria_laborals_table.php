<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrayectoriaLaboralsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trayectoria_laborals', function (Blueprint $table) {
            $table->bigIncrements('idTrayectoriaLaboral');
            $table->date('fechaInicio');
            $table->date('fechaFin');
            $table->string('empresa');
            $table->string('cargo');
            $table->text('responsabilidades');
            $table->string('razonSalida');
            $table->date('fechaSalida');
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
        Schema::dropIfExists('trayectoria_laborals');
    }
}
