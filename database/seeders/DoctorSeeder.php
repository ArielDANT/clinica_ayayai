<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class DoctorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('doctores')->insert([
            'doc_nombres'=>'Stiven Rodrigez',
            'doc_apellidos'=>'Llumitagsi Bronca',
            'doc_cedula'=>'123456789',
            'doc_direccion'=>'Turubamba',
            'doc_correo'=>'stiven1029@gmail.com',
            'doc_sexo'=>'Masculino',
            'doc_especialidad'=>'Cirugano general'
        ]);
        DB::table('doctores')->insert([
            'doc_nombres'=>'Luna Cristina',
            'doc_apellidos'=>'Muñoz Proaño',
            'doc_cedula'=>'123456787',
            'doc_direccion'=>'Guamani',
            'doc_correo'=>'lunildadelbaitei@gmail.com',
            'doc_sexo'=>'Femenino',
            'doc_especialidad'=>'Psicologa'
        ]);
    }
}
