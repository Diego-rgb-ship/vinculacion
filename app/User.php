<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table = "users";

    protected $fillable = [
        'id','nombres','apellido_p','apellido_m','no_identificacion','rol','carrera', 'password'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    //Relaciones con otras tablas
        //Relacion condescargar documentos
    public function Des_docs()
    {
        return $this->belongsTo('App\Des_doc');
    }
        //Relacion con alumnos
    public function alumno()
    {
        return $this->hasOne('App\Alumno','no_control', 'id');
    }

    //Identificar roles de usuarios
    public function admin()
    {
        return $this->rol ==='Administrador';
    }
    public function alumnos()
    {
        return $this->rol ==='Alumno';
    }

    public function acceso()
    {
        return $this->rol ==='Acceso';
    }

    public function jefe_otros()
    {
        if($this->rol ==='Jefe'){
            return $this->rol ==='Jefe';
        }
        if($this->rol ==='Otro'){
            return $this->rol ==='Otro';
        }

    }

    public function adminjefes()
    {
        if($this->rol ==='Administrador'){
            return $this->rol ==='Administrador';
        }
    }

    public function jefeige()
    {
        return $this->carrera ==='IGE';
    }

    public function jefeind()
    {
        return $this->carrera ==='IND';
    }

    public function jefeisc()
    {
        return $this->carrera ==='ISC';
    }

    public function jefela()
    {
        return $this->carrera ==='LA';
    }

    public function jefetsm()
    {
        return $this->carrera ==='TSM';
    }

    public function jefeinfs()
    {
        return $this->carrera ==='INFS';
    }

    public function jefeiges()
    {
        return $this->carrera ==='IGES';
    }

}
