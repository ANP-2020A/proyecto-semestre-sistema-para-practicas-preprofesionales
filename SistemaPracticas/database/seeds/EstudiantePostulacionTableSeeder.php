<?php

use Illuminate\Database\Seeder;

class EstudiantePostulacionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\EstudiantePostulacion::truncate();
        $faker = \Faker\Factory::create();
        for($i = 0; $i < 50; $i++)
        {
            \App\EstudiantePostulacion::create([
                'id_pasante'=>$faker->numberBetween(1,50),
                'id_oferta'=>$faker->numberBetween(1,50),
                'estado'=> $faker ->boolean,

            ])
            ;}
    }
}
