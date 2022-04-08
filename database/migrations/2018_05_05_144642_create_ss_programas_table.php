<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSsProgramasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ss_programas', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->foreign('id')->references('id')->on('ss_alumnos');
            $table->string('dependencia_of')->nullable();
            $table->string('titular_dep')->nullable();
            $table->string('puesto_dep')->nullable();
            $table->string('nombre_programa')->nullable();
            $table->enum('modalidad',['Interno','Externo'])->nullable();
            $table->date('fecha_inicio')->nullable();
            $table->date('fecha_terminacion')->nullable();
            $table->string('programa_actividad')->nullable();
            $table->enum('tip_pro',['EPA','AC','DS','DC','ACULT','AALS','AD','MA','Otro'])->nullable();
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
        Schema::dropIfExists('ss_programas');
    }
}
