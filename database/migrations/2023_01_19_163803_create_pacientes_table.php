<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePacientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pacientes', function (Blueprint $table) {
            $table->id('pac_id');
            $table->string('pac_nombres');
            $table->string('pac_apellidos');
            $table->string('pac_cedula')->unique();
            $table->string('pac_direccion');
            $table->string('pac_celular')->unique();
            $table->string('pac_sexo');
            $table->string('pac_correo')->unique();
            $table->string('pac_repre');
            $table->integer('pac_estado')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pacientes');
    }
}
