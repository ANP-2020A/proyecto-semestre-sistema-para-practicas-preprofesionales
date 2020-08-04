<?php

use Illuminate\Database\Seeder;

class JobsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Job::truncate();
        $faker = \Faker\Factory::create();
        for($i = 0; $i < 50; $i++)
        {
            \App\Job::create([
                'intern_id'=>$faker->numberBetween(1,50),
                'start_date'=> $faker->dateTimeBetween('2000-01-01', '+30 years'),
                'finish_date'=> $faker->dateTimeBetween('2000-01-01', '+30 years'),
                'enterprise'=> $faker ->word,
                'charge'=> $faker->word,
                'responsibility'=> $faker->paragraph,
                'reason_why'=>$faker->sentence
            ]);
        }
    }
}
