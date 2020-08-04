<?php

use Illuminate\Database\Seeder;

class BusinessesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Business::truncate();
        $faker = \Faker\Factory::create();
        for($i = 0; $i < 50; $i++)
        {
            \App\Business::create([
                'name'=> $faker->sentence,
                'ruc'=> $faker->phoneNumber,
                'kind'=> $faker ->sentence,
                'phone'=> $faker->phoneNumber,
                'email'=> $faker->companyEmail,
                'address'=>$faker->address,

                'person_name'=>$faker->sentence,
                'person_phone'=> $faker->phoneNumber,
                'person_email'=> $faker->email
            ]);
        }
    }
}
