<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            ClinicaSeeder::class,  
            SalaSeeder::class,
            DoctorSeeder::class,
            UserSeeder::class,
            PacienteSeeder::class,

        ]);
    }
}
