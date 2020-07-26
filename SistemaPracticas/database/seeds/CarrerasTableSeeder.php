<?php

use Illuminate\Database\Seeder;

class CarrerasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Carrera::truncate();
        $faker = \Faker\Factory::create();
        for($i = 0; $i < 50; $i++)
        {
            \App\Carrera::create([
                'id_pasante'=>$faker->numberBetween(1,50),
                'nombre'=> $faker ->sentence,
                'institucion'=> $faker->sentence,
                'semestre'=> $faker->randomNumber(1),
                'numSemestres'=>$faker->randomNumber(2)
               ])
            ;}
    }
}