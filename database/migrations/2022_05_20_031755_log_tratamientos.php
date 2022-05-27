<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class LogTratamientos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('log_tratamientos', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('idTratamientos');
            $table->string('procedimiento0', 50)->nullable();
            $table->double('costoSugerido0',8,3)->nullable();
            $table->string('procedimientoN', 50);
            $table->double('costoSugeridoN',8,3);
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
        //
    }
}
