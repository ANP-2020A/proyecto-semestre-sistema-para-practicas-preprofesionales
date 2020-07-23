<?php

use Illuminate\Database\Seeder;

class CapacitacionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Capacitacion::truncate();
        $faker = \Faker\Factory::create();
        for($i = 0; $i < 50; $i++)
        {
            \App\Capacitacion::create([
                'nombre'=> $faker ->sentence,
                'tipo'=> $faker->sentence,
                'institucion'=> $faker->sentence,
                'certificado'=>$faker->sentence,
                'fechaInicio'=> $faker->dateTimeBetween('2000-01-01', '+30 years'),
                'fechaFin'=> $faker->dateTimeBetween('2000-01-01', '+30 years')

                ])
            ;}
    }
}
