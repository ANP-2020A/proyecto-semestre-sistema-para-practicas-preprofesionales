<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKey extends Migration
{

    public function up()
    {
        /*Añade claves foraneas y establece relaciones entre las tablas*/
        Schema::table('skills', function (Blueprint $table){
            $table->unsignedBigInteger('intern_id');
            $table->foreign('intern_id')->references('id')->on('interns')->ondelete('restrict');
        });
        Schema::table('careers', function (Blueprint $table){
            $table->unsignedBigInteger('intern_id');
            $table->foreign('intern_id')->references('id')->on('interns')->ondelete('restrict');
        });
        Schema::table('instructions', function (Blueprint $table){
            $table->unsignedBigInteger('intern_id');
            $table->foreign('intern_id')->references('id')->on('interns')->ondelete('restrict');
        });
        Schema::table('jobs', function (Blueprint $table){
            $table->unsignedBigInteger('intern_id');
            $table->foreign('intern_id')->references('id')->on('interns')->ondelete('restrict');
        });
        Schema::table('trainings', function (Blueprint $table){
            $table->unsignedBigInteger('intern_id');
            $table->foreign('intern_id')->references('id')->on('interns')->ondelete('restrict');
        });

        Schema::table('offers', function (Blueprint $table){
            $table->unsignedBigInteger('business_id');
            $table->foreign('business_id')->references('id')->on('businesses')->ondelete('restrict');
        });

        Schema::table('postulations', function (Blueprint $table){
            $table->unsignedBigInteger('intern_id');
            $table->unsignedBigInteger('offer_id');
            $table->foreign('intern_id')->references('id')->on('interns');
            $table->foreign('offer_id')->references('id')->on('offers');

        });

    }

    public function down()
    {
        Schema::table('skills', function (Blueprint $table){
            $table->dropForeign(['intern_id']);
        });
        Schema::table('careers', function (Blueprint $table){
            $table->dropForeign(['intern_id']);
        });
        Schema::table('instructions', function (Blueprint $table){
            $table->dropForeign(['intern_id']);
        });
        Schema::table('jobs', function (Blueprint $table){
            $table->dropForeign(['intern_id']);
        });
        Schema::table('trainings', function (Blueprint $table){
            $table->dropForeign(['intern_id']);
        });

        Schema::table('offers', function (Blueprint $table){
            $table->dropForeign(['business_id']);
        });

        Schema::table('postulations', function (Blueprint $table){
            $table->dropForeign(['intern_id']);
            $table->dropForeign(['offer_id']);
        });
    }
}
