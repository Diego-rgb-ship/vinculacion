<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feapss extends Model
{
    protected $table = "ss_feapsss";
    
    protected $fillable = ['id','no_control','no_reporte','criterio_1','criterio_2','criterio_3','criterio_4','criterio_5','criterio_6','criterio_7','criterio_8',];

    public function alumno()
    {
        return $this->belongsTo('App\Alumno');
    }
}
