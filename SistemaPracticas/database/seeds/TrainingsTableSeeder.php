<?php

use App\Training;
use Illuminate\Database\Seeder;

class TrainingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Training::truncate();
        $faker = \Faker\Factory::create();
        for($i = 0; $i < 50; $i++)
        {
            Training::create([
                'name'=> $faker ->sentence,
                'intern_id'=>$faker->numberBetween(1,50),
                'type'=> $faker->sentence,
                'institution'=> $faker->sentence,
                'certificate'=>$faker->sentence,
                'start_date'=> $faker->dateTimeBetween('2000-01-01', '+30 years'),
                'finish_date'=> $faker->dateTimeBetween('2000-01-01', '+30 years')
            ]);
        }
    }
}
