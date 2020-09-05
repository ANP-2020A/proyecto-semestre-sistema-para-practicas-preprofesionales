<?php

use Illuminate\Database\Seeder;

class SkillsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Skill::truncate();
        $faker = \Faker\Factory::create();
        for($i = 0; $i < 50; $i++)
        {
            \App\Skill::create([
                'intern_id'=>$faker->numberBetween(1,10),
                'name'=> $faker ->word,
                'description'=> $faker->text,
                'percent'=> $faker->randomNumber()
            ]);
        }
    }
}
