<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombres');
            $table->string('apellido_p');
            $table->string('apellido_m');
            $table->string('no_identificacion')->unique();
            $table->enum('rol', ['Alumno','Jefe', 'Otro','Administrador', 'Acceso'])->default('Administrador');
            $table->enum('carrera', ['IGE','IND','ISC','LA','TSM','INFS','IGES','otro'])->default('otro');
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
