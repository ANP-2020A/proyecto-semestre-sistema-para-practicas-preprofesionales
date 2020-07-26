<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeys extends Migration
{

    public function up()
    {
        //Añade claves foraneas y establece relaciones entre las tablas
        Schema::table('habilidads', function (Blueprint $table){
            $table->unsignedBigInteger('pasante_id');
            $table->foreign('pasante_id')->references('id')->on('pasantes')->ondelete('restrict');
        });
        Schema::table('carreras', function (Blueprint $table){
            $table->unsignedBigInteger('pasante_id');
            $table->foreign('pasante_id')->references('id')->on('pasantes')->ondelete('restrict');
        });
        Schema::table('instruccions', function (Blueprint $table){
            $table->unsignedBigInteger('pasante_id');
            $table->foreign('pasante_id')->references('id')->on('pasantes')->ondelete('restrict');
        });
        Schema::table('trayectoria_laborals', function (Blueprint $table){
            $table->unsignedBigInteger('pasante_id');
            $table->foreign('pasante_id')->references('id')->on('pasantes')->ondelete('restrict');
        });
        Schema::table('capacitacions', function (Blueprint $table){
            $table->unsignedBigInteger('pasante_id');
            $table->foreign('pasante_id')->references('id')->on('pasantes')->ondelete('restrict');
        });

        Schema::table('ofertas', function (Blueprint $table){
            $table->unsignedBigInteger('empresa_id');
            $table->foreign('empresa_id')->references('id')->on('empresas')->ondelete('restrict');
        });

        Schema::table('estudiante_postulacions', function (Blueprint $table){
            $table->unsignedBigInteger('pasante_id');
            $table->unsignedBigInteger('oferta_id');
            $table->foreign('pasante_id')->references('id')->on('pasantes');
            $table->foreign('oferta_id')->references('id')->on('ofertas');

        });

    }

    public function down()
    {
        Schema::table('habilidads', function (Blueprint $table){
            $table->dropForeign(['pasante_id']);
        });
        Schema::table('carreras', function (Blueprint $table){
            $table->dropForeign(['pasante_id']);
        });
        Schema::table('instruccions', function (Blueprint $table){
            $table->dropForeign(['pasante_id']);
        });
        Schema::table('trayectoria_laborals', function (Blueprint $table){
            $table->dropForeign(['pasante_id']);
        });
        Schema::table('capacitacions', function (Blueprint $table){
            $table->dropForeign(['pasante_id']);
        });

        Schema::table('ofertas', function (Blueprint $table){
            $table->dropForeign(['empresa_id']);
        });

        Schema::table('estudiante_postulacions', function (Blueprint $table){
            $table->dropForeign(['pasante_id']);
            $table->dropForeign(['oferta_id']);
        });
    }
}
