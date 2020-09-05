<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBusinessesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('businesses', function (Blueprint $table) {
            $table->bigIncrements('id');
            /*$table->string('name');*/
            $table->string('ruc');
            $table->string('kind');
            $table->string('phone');
            $table->string('email');
            $table->string('address');
            /*PERSONA RESPONSABLE*/
            $table->string('person_name');
            $table->string('person_phone');
            $table->string('person_email');
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
        Schema::dropIfExists('businesses');
    }
/*Para tinker
 * $business = App\Business::create(['ruc'=>'123456','kind'=>'abcd','phone'=>'2611456','email'=>'pepe@pecas.com','address'=>'Quitumbe','person_name'=>'Pepe Pecas','person_phone'=>'0981030191','person_email'=>'pepito@gmail.com'])*/
}
