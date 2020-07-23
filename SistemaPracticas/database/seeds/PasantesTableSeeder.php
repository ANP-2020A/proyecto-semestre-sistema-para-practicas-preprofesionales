<?php

use Illuminate\Database\Seeder;

class PasantesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Pasante::truncate();
        $faker = \Faker\Factory::create();
        for($i = 0; $i < 50; $i++)
        {
            \App\Pasante::create([
                'cedula'=> $faker ->phoneNumber,
/*                'nombre'=> $faker->name,
                'apellido'=> $faker->lastName,*/
                'fechaNacimiento'=>$faker->dateTimeBetween('1990-01-01','2002-01-01'),
                'telefonoConv'=>$faker->phoneNumber,
                'telefonoCelu'=>$faker->phoneNumber,
                'telefonoEmergencia'=>$faker->phoneNumber,
                'correo'=>$faker->email,
                'direccion'=>$faker->address,
                'capacidadEspecial'=>$faker->boolean,
                'carnetConadis'=>$faker->sentence,
                'estadoCivil'=>$faker->sentence,
                'tipoSangre'=>$faker->sentence,
                'etnia'=>$faker->sentence,
                'carrera'=>$faker->sentence,
                'provincia'=>$faker->sentence,
                'canton'=>$faker->sentence,
                'parroquia'=>$faker->sentence
            ])
            ;}
    }
}
