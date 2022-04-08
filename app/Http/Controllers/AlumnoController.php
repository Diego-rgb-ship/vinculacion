<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PerfilRequest;
use App\Alumno;
use App\User;
use Laracasts\Flash\Flash;
use Illuminate\Validation\Rule;


class AlumnoController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function perfil()
    {
        
        $alumno  = User::find(\Auth::user()->id);
        $alumnos = Alumno::find(\Auth::user()->id);

        return view('alumno.perfil')->with('alumno', $alumno)->with('alumnos',$alumnos);
    }  


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function edit($id)
    {
        $useralumno= User::find($id);
        $alumno= Alumno::find($id);
        return view('alumno.editardatos')->with('useralumno', $useralumno)->with('alumno',$alumno);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PerfilRequest $request, $id)
    {
        
        $useralumno = User::find($id);

        $useralumno->nombres=$request->nombres;
        $useralumno->apellido_p=$request->apellido_p;
        $useralumno->apellido_m=$request->apellido_m;
        $useralumno->rol='Alumno';
        $useralumno->carrera='otro';
        $useralumno->save();

        $alumno = Alumno::find($id);
        $alumno->no_control=$request->no_control;
        $alumno->sexo=$request->sexo;
        $alumno->telefono=$request->telefono;
        $alumno->domicilio=$request->domicilio;
        $alumno->carrera=$request->carrera;
        $alumno->periodo=$request->periodo;
        $alumno->semestre=$request->semestre;
        $alumno->correo=$request->correo;
        $this->validate($request,[
            'correo' => [
                'required',
                Rule::unique('ss_alumnos')->ignore($alumno->id),
            ],
        ]);
        $alumno->save();


        Flash::warning('¡Se ha actualizado la información'. $useralumno->nombres. ' de forma correcta!');
        return redirect()->route('perfil');
    }

}
