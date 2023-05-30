<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
           'doc_id'=>1,
           'usu_usuario'=>'Admin',
           'usu_perfil'=>'SubAdmnistrador',
           'password'=>bcrypt('12345678'),
           'created_at'=>date('Y-m-d')
        ]);
    }
}
