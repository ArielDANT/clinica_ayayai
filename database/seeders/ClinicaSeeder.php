<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use  DB;

class ClinicaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clinica')->insert([
            'cli_nombres'=>'Clinica Ayayai',
            'cli_ruc'=>'1790010937001',
            'cli_telefono'=>'123456789',
            'cli_direccion'=>'Guamani',
            'cli_correo'=>'info@clinicayayai.com'
        ]);
    }
}
