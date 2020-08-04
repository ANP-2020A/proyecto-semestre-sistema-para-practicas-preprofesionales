<?php

use Illuminate\Database\Seeder;

class InternsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Intern::truncate();
        $faker = \Faker\Factory::create();
        for($i = 0; $i < 50; $i++)
        {
            \App\Intern::create([
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
        }
    }
}
