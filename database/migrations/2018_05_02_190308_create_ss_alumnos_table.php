<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSsAlumnosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ss_alumnos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('no_control')->unsigned()->nullable();
            $table->foreign('no_control')->references('id')->on('users');
            $table->enum('sexo', ['Masculino','Femenino'])->nullable();
            $table->string('telefono')->nullable();
            $table->string('domicilio')->nullable();
            $table->enum('carrera', ['IGE','IND','ISC','LA','TSM','INFS','IGES'])->nullable();
            $table->string('periodo')->nullable();
            $table->enum('semestre',['6','7','8'])->nullable();
            $table->string('correo')->nullable();
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
        Schema::dropIfExists('ss_alumnos');
    }
}
