<?php

use Illuminate\Database\Seeder;

class OfertasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Oferta::truncate();
        $faker = \Faker\Factory::create();
        for($i = 0; $i < 50; $i++)
        {
            \App\Oferta::create([
                'empresa_id'=>$faker->numberBetween(1,50),
                'nombre'=> $faker ->sentence,
                'descripcion'=> $faker->paragraph,
                'direccion'=> $faker->address,
                'remunerado'=>$faker->boolean,
                'salario'=>$faker->randomNumber(),
                'jornada'=>$faker ->sentence,
                'horario'=>$faker->sentence,
                'ciudad'=>$faker->sentence

            ])
            ;}
    }
}
