<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        $this->call(UsersTableSeeder::class);
        $this->call(InternsTableSeeder::class);
        $this->call(BusinessesTableSeeder::class);
        $this->call(OffersTableSeeder::class);
        $this->call(PostulationsTableSeeder::class);
        $this->call(CareersTableSeeder::class);
        $this->call(SkillsTableSeeder::class);
        $this->call(InstructionsTableSeeder::class);
        $this->call(JobsTableSeeder::class);
        $this->call(TrainingsTableSeeder::class);
        Schema::enableForeignKeyConstraints();

    }
}
