<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLogConsultasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('log_consultas', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('idConsulta');
            $table->bigInteger('paciente_id0')->nullable();
            $table->bigInteger('procedimiento_id0')->nullable();
            $table->date('fechaProgramada0')->nullable();
            $table->time('start0')->nullable();
            $table->time('end0')->nullable();
            $table->boolean('asistencia0')->nullable();
            $table->date('fechaPago0')->nullable();
            $table->boolean('pagoCompleto0')->nullable();
            $table->bigInteger('paciente_idN');
            $table->bigInteger('procedimiento_idN');
            $table->date('fechaProgramadaN');
            $table->time('startN');
            $table->time('endN');
            $table->boolean('asistenciaN');
            $table->date('fechaPagoN')->nullable();
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
        Schema::dropIfExists('log_consultas');
    }
}
