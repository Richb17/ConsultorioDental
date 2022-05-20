<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLogPagosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('log_pagos', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('idPago');
            $table->bigInteger('consulta_id0')->nullable();
            $table->date('fechaPago0')->nullable();
            $table->double('xPagar0',8,3)->nullable();
            $table->boolean('pagoCompleto0')->nullable();
            $table->bigInteger('consulta_idN');
            $table->date('fechaPagoN');
            $table->double('xPagarN',8,3);
            $table->boolean('pagoCompletoN');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('log_pagos');
    }
}
