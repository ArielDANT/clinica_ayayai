<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class PacienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pacientes')->insert([
            'pac_nombres'=>'Fabian Leonardo',
            'pac_apellidos'=>'Padilla',
            'pac_cedula'=>'12345667891',
            'pac_direccion'=>'Barrio Venceremos',
            'pac_celular'=>'123456789',
            'pac_sexo'=>'Masculino',
            'pac_correo'=>'fabianbraulioestrellas@gmail.com',
            'pac_repre'=>'David Padilla',
            
        ]);
    }
}
