<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        $this->call(UsersTableSeeder::class);
        $this->call(CapacitacionsTableSeeder::class);
        $this->call(CarrerasTableSeeder::class);
        $this->call(EmpresasTableSeeder::class);
        $this->call(EstudiantePostulacionTableSeeder::class);

        $this->call(HabilidadsTableSeeder::class);
        $this->call(InstruccionsTableSeeder::class);
        $this->call(OfertasTableSeeder::class);
        $this->call(PasantesTableSeeder::class);
        $this->call(TrayectoriaLaboralsTableSeeder::class);
        Schema::enableForeignKeyConstraints();

    }
}
