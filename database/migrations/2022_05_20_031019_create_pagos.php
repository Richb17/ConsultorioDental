<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pagos', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id('id');
            $table->foreignId('consulta_id')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->date('fechaPago');
            $table->double('xPagar',8,3);
            $table->boolean('pagoCompleto');
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('consulta_id')->references('id')->on('consultas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pagos');
    }
}
