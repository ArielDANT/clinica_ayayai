<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoctoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctores', function (Blueprint $table) {
            $table->id('doc_id');
            $table->foreignid('sal_id')->references('sal_id')->on('salas');
            $table->string('doc_nombres');
            $table->string('doc_apellidos');
            $table->string('doc_cedula')->unique();
            $table->string('doc_direccion');
            $table->string('doc_correo')->unique();
            $table->string('doc_sexo');
            $table->time('doc_horaon');
            $table->time('doc_horaoff'); 
            $table->integer('doc_estado')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('doctores');
    }
}
