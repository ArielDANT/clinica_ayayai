<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class SalaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('salas')->insert([
           'cli_id'=>1, 
           'sal_nombre'=>'Psicologia',
           'sal_descripcion'=>'Ayudar emocional y mentalmente a las personas.',
           'sal_piso'=>'Planta baja',
           'sal_numsal'=>'1'
        
        ]);
    }
}
