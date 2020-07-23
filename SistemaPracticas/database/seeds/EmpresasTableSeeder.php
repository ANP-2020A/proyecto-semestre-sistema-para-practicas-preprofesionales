<?php

use Illuminate\Database\Seeder;

class EmpresasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Empresa::truncate();
        $faker = \Faker\Factory::create();
        for($i = 0; $i < 50; $i++)
        {
            \App\Empresa::create([
                'nombre'=> $faker->sentence,
                'ruc'=> $faker->randomNumber(),
                'tipo'=> $faker ->sentence,
                'telefono'=> $faker->phoneNumber,
                'correo'=> $faker->companyEmail,
                'direccion'=>$faker->address,
                'nombreResponsable'=>$faker->sentence,
                'telefonoResponsable'=> $faker->phoneNumber,
                'correoResponsable'=> $faker->email


            ])
            ;}
    }
}
