<?php

use Illuminate\Database\Seeder;

class HabilidadsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Habilidad::truncate();
        $faker = \Faker\Factory::create();
        for($i = 0; $i < 50; $i++)
        {
            \App\Habilidad::create([
                'id_pasante'=>$faker->numberBetween(1,50),
                'nombre'=> $faker ->sentence,
                'descripcion'=> $faker->text,
                'porcentajeDominio'=> $faker->randomNumber()
            ])
            ;}
    }
}