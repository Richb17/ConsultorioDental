<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConsultas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consultas', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id('id');
            $table->foreignId('paciente_id')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreignId('procedimiento_id')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->date('fechaProgramada');
            $table->boolean('asistencia');
            $table->double('costo',8,3);
            $table->softDeletes();
            $table->timestamps();
            
        });

        Schema::table('consultas', function (Blueprint $table) {
            $table->foreign('paciente_id')->references('id')->on('pacientes');
            $table->foreign('procedimiento_id')->references('id')->on('tratamientos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('consultas');
    }
}
