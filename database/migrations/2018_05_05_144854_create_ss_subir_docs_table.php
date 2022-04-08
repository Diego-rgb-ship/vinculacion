<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSsSubirDocsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ss_subir_docs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('no_control')->unsigned();
            $table->foreign('no_control')->references('id')->on('ss_alumnos');
            $table->string('nombre_doc');
            $table->string('bimestre');
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
        Schema::dropIfExists('ss_subir_docs');
    }
}
