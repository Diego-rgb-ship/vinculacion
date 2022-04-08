<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSsFeapsssTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ss_feapsss', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('no_control')->unsigned();
            $table->foreign('no_control')->references('id')->on('ss_alumnos');
            $table->enum('no_reporte',['1','2','3','4','5','6','7','8','9','10','11','12','Final']);
            $table->enum('criterio_1',['1','2','3','4','5']);
            $table->enum('criterio_2',['1','2','3','4','5']);
            $table->enum('criterio_3',['1','2','3','4','5']);
            $table->enum('criterio_4',['1','2','3','4','5']);
            $table->enum('criterio_5',['1','2','3','4','5']);
            $table->enum('criterio_6',['1','2','3','4','5']);
            $table->enum('criterio_7',['1','2','3','4','5']);
            $table->enum('criterio_8',['1','2','3','4','5']);
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
        Schema::dropIfExists('ss_feapsss');
    }
}
