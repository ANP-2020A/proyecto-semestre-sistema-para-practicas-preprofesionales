<?php

use Illuminate\Database\Seeder;

class PostulationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Postulation::truncate();
        $faker = \Faker\Factory::create();
        for($i = 0; $i < 50; $i++)
        {
            \App\Postulation::create([
                'intern_id'=>$faker->numberBetween(1,50),
                'offer_id'=>$faker->numberBetween(1,50),
                'state'=> $faker ->boolean,
            ]);
        }
    }
}
