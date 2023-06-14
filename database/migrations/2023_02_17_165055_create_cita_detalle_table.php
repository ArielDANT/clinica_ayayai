<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCitaDetalleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()    
    {
        Schema::create('cita_detalle', function (Blueprint $table) {
            $table->id('cid_id');
            $table->foreignid('cit_id')->references('cit_id')->on('cita');
            $table->foreignid('pac_id')->references('pac_id')->on('pacientes');
            $table->string('cid_obs');
            $table->string('cid_mot');
            $table->string('cid_estado')->default('Nuevo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cita_detalle');
    }
}
