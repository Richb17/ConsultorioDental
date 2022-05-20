<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLogPacientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('log_pacientes', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('idPaciente');
            $table->string('nombre0', 20)->nullable();
            $table->string('apellidoP0', 20)->nullable();
            $table->string('apellidoM0', 20)->nullable();
            $table->string('numTelefono0', 15)->nullable();
            $table->string('nombreN', 20);
            $table->string('apellidoPN', 20);
            $table->string('apellidoMN', 20);
            $table->string('numTelefonoN', 15)->nullable();
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
        Schema::dropIfExists('log_pacientes');
    }
}
