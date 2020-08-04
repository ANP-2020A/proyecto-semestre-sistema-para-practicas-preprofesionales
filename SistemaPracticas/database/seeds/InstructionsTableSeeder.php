<?php

use Illuminate\Database\Seeder;

class InstructionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Instruction::truncate();
        $faker = \Faker\Factory::create();
        for($i = 0; $i < 50; $i++)
        {
            \App\Instruction::create([
                'intern_id'=>$faker->numberBetween(1,50),
                'institution'=> $faker->sentence,
                'specialization'=> $faker->sentence,
                'obtained_title'=>$faker->sentence,
                'diploma'=>$faker->sentence
            ])
            ;}
    }
}
