<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salas', function (Blueprint $table) {
            $table->id('sal_id');
            $table->foreignid('cli_id')->references('cli_id')->on('clinica');
            $table->string('sal_nombre');
            $table->string('sal_descripcion');
            $table->string('sal_piso');
            $table->string('sal_numsal');
            $table->integer('sal_estado')->default(1);
        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('salas');
    }
}
