<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSsRbsssTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ss_rbsss', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('no_control')->unsigned();
            $table->foreign('no_control')->references('id')->on('ss_alumnos');
            $table->enum('no_reporte',['1','2','3','4','5','6','7','8','9','10','11','12','Final']);
            $table->integer('horas_total');
            $table->integer('horas_acumuladas');
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
        Schema::dropIfExists('ss_rbsss');
    }
}
