<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClinicaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clinica', function (Blueprint $table) {
            $table->id('cli_id');
            $table->string('cli_nombres');
            $table->string('cli_ruc');
            $table->string('cli_telefono');
            $table->string('cli_direccion');
            $table->string('cli_correo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clinica');
    }
}
