<?php

use App\Career;
use Illuminate\Database\Seeder;

class CareersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Career::truncate();
        $faker = \Faker\Factory::create();
        for($i = 0; $i < 50; $i++)
        {

            Career::create([
                'intern_id'=>$faker->numberBetween(1,50),
                'name'=> $faker ->word,
                'institution'=> $faker->sentence,
                'semester'=> $faker->randomNumber(1),
                'semester_num'=>$faker->randomNumber(2)
            ]);
        }
    }
}
