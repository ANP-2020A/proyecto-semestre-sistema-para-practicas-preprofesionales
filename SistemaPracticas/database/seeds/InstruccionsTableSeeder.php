<?php

use Illuminate\Database\Seeder;

class InstruccionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Instruccion::truncate();
        $faker = \Faker\Factory::create();
        for($i = 0; $i < 50; $i++)
        {
            \App\Instruccion::create([
                'pasante_id'=>$faker->numberBetween(1,50),
                'institucion'=> $faker->sentence,
                'especializacion'=> $faker->sentence,
                'tituloObtenido'=>$faker->sentence,
                'diploma'=>$faker->sentence
            ])
            ;}
    }
}
