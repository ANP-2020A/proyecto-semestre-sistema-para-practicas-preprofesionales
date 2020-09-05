<?php

use App\Business;
use App\Intern;
use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        User::truncate();
        $faker = \Faker\Factory::create();
        $password = Hash::make('123123');

        User::create([
            'name' => 'Administrador',
            'email' => 'admin@prueba.com',
            'password' => $password,
            'userable_id'=>0,
            'userable_type'=>'',
            'role'=>'ROLE_ADMIN'
        ]);
        for ($i = 0; $i < 10; $i++) {

            $intern = Intern::create([
                'document'=> $faker ->phoneNumber,
                'birth_date'=>$faker->dateTimeBetween('1990-01-01','2002-01-01'),
                'telephone'=>$faker->phoneNumber,
                'cellphone'=>$faker->phoneNumber,
                'emergency_phone'=>$faker->phoneNumber,
                'address'=>$faker->address,
                'disability'=>$faker->boolean,
                'conadis_document'=>$faker->sentence,
                'marital_status'=>$faker->sentence,
                'blood_type'=>$faker->sentence,
                'ethnicity'=>$faker->sentence,
                'career'=>$faker->sentence,
                'province'=>$faker->sentence,
                'canton'=>$faker->sentence,
                'parish'=>$faker->sentence
            ]);

            $intern->user()->create([
                'name' => $faker->name,
                'email' => $faker->email,
                'password' => $password,
                'role' => 'ROLE_INTERN'
            ]);

        }
        for ($i = 0; $i < 10; $i++) {
            $business = Business::create([
                'ruc'=> $faker->phoneNumber,
                'kind'=> $faker ->sentence,
                'phone'=> $faker->phoneNumber,
                'email'=> $faker->companyEmail,
                'address'=>$faker->address,
                /*---------------------------------*/
                'person_name'=>$faker->sentence,
                'person_phone'=> $faker->phoneNumber,
                'person_email'=> $faker->email
            ]);

            $business->user()->create([
                'name' => $faker->name,
                'email' => $faker->email,
                'password' => $password,
                'role' => 'ROLE_BUSINESS'
            ]);
        }
    }

}
