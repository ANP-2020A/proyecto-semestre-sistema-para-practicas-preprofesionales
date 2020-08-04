<?php

use Illuminate\Database\Seeder;

class OffersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Offer::truncate();
        $faker = \Faker\Factory::create();
        for($i=0; $i<50; $i++)
        {
            \App\Offer::create([
                'business_id'=>$faker->numberBetween(1,50),
                'name'=> $faker ->sentence,
                'description'=> $faker->paragraph,
                'address'=> $faker->address,
                'paid'=>$faker->boolean,
                'gain'=>$faker->randomNumber(),
                'shift'=>$faker ->sentence,
                'schedule'=>$faker->sentence,
                'city'=>$faker->sentence
            ]);
        }
    }
}
