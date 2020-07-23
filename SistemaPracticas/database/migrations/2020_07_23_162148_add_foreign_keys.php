<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeys extends Migration
{

    public function up()
    {
        Schema::table('habilidads', function (Blueprint $table){
            $table->unsignedBigInteger('id_pasante');
            $table->foreign('id_pasante')->references('id')->on('pasantes');
        });
        Schema::table('carreras', function (Blueprint $table){
            $table->unsignedBigInteger('id_pasante');
            $table->foreign('id_pasante')->references('id')->on('pasantes');
        });
        Schema::table('instruccions', function (Blueprint $table){
            $table->unsignedBigInteger('id_pasante');
            $table->foreign('id_pasante')->references('id')->on('pasantes');
        });
        Schema::table('trayectoria_laborals', function (Blueprint $table){
            $table->unsignedBigInteger('id_pasante');
            $table->foreign('id_pasante')->references('id')->on('pasantes');
        });
        Schema::table('capacitacions', function (Blueprint $table){
            $table->unsignedBigInteger('id_pasante');
            $table->foreign('id_pasante')->references('id')->on('pasantes');
        });

        Schema::table('ofertas', function (Blueprint $table){
            $table->unsignedBigInteger('id_empresa');
            $table->foreign('id_empresa')->references('id')->on('empresas');
        });

        Schema::table('estudiante_postulacions', function (Blueprint $table){
            $table->unsignedBigInteger('id_pasante');
            $table->unsignedBigInteger('id_oferta');
            $table->foreign('id_pasante')->references('id')->on('pasantes');
            $table->foreign('id_oferta')->references('id')->on('ofertas');

        });

    }

    public function down()
    {
        Schema::table('habilidads', function (Blueprint $table){
            $table->dropForeign(['id_pasante']);
        });
        Schema::table('carreras', function (Blueprint $table){
            $table->dropForeign(['id_pasante']);
        });
        Schema::table('instruccions', function (Blueprint $table){
            $table->dropForeign(['id_pasante']);
        });
        Schema::table('trayectoria_laborals', function (Blueprint $table){
            $table->dropForeign(['id_pasante']);
        });
        Schema::table('capacitacions', function (Blueprint $table){
            $table->dropForeign(['id_pasante']);
        });

        Schema::table('ofertas', function (Blueprint $table){
            $table->dropForeign(['id_empresa']);
        });

        Schema::table('estudiante_postulacions', function (Blueprint $table){
            $table->dropForeign(['id_pasante']);
            $table->dropForeign(['id_oferta']);
        });
    }
}
