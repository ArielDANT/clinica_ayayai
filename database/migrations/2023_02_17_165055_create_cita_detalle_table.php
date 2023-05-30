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
            $table->foreignid('sal_id')->references('sal_id')->on('salas');
            $table->string('cid_obs');
            $table->float('cid_vu');
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
