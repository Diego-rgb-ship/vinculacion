<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Programa extends Model
{
    protected $table = "ss_programas";
    
    protected $fillable = ['id','dependencia_of','titular_dep','puesto_dep','nombre_programa', 	'modalidad','fecha_inicio','fecha_terminacion','programa_actividad','tip_pro',];

    public function alumno()
    {
        return $this->hasOne('App\Alumno', 'id');
    }
}
