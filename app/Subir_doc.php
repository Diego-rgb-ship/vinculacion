<?php

namespace App;
use Carbon\Carbon;

use Illuminate\Database\Eloquent\Model;

class Subir_doc extends Model
{
    protected $table = "ss_subir_docs";
    
    protected $fillable = ['id','no_control','nombre_doc','bimestre',];

    public function alumno()
    { 
        return $this->belongsTo('App\Alumno','no_control');
    }

    public function setNombreDocAttribute($nombre_doc)
    {
    	$this->attributes['nombre_doc']=Carbon::now()->second.$nombre_doc->getClientOriginalName();
    	$name = Carbon::now()->second.$nombre_doc->getClientOriginalName();
    	\Storage::disk('local')->put($name, \File::get($nombre_doc));
    }
}
