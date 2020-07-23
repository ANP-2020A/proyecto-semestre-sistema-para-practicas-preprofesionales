<?php

use Illuminate\Database\Seeder;

class TrayectoriaLaboralsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        \App\TrayectoriaLaboral::truncate();
        $faker = \Faker\Factory::create();
        for($i = 0; $i < 50; $i++)
        {
            \App\TrayectoriaLaboral::create([
                'fechaInicio'=> $faker->dateTimeBetween('2000-01-01', '+30 years'),
                'fechaFin'=> $faker->dateTimeBetween('2000-01-01', '+30 years'),
                'empresa'=> $faker ->sentence,
                'cargo'=> $faker->sentence,
                'responsabilidades'=> $faker->paragraph,
                'razonSalida'=>$faker->sentence
                
                ])
            ;}
    }
}
