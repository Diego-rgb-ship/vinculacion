<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Programa;
use App\User;
use Laracasts\Flash\Flash;

class ProgramaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $useralumno = User::find(\Auth::user()->id);
        $solicitud = Programa::find(\Auth::user()->id);

        return view('alumno.solicitud')->with('solicitud', $solicitud)->with('useralumno', $useralumno);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $programa= Programa::find($id);
        return view('alumno.editarsolicitud')->with('programa', $programa);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $useralumno = User::find($id);
        $programa = Programa::find($id);
        $programa->dependencia_of=$request->dependencia_of;
        $programa->titular_dep=$request->titular_dep;
        $programa->puesto_dep=$request->puesto_dep;
        $programa->nombre_programa=$request->nombre_programa;
        $programa->modalidad=$request->modalidad;
        $programa->fecha_inicio=$request->fecha_inicio;
        $programa->fecha_terminacion=$request->fecha_terminacion;
        $programa->programa_actividad=$request->programa_actividad;
        $programa->tip_pro=$request->tip_pro;
        $programa->save();


        Flash::warning('¡Se ha actualizado la solicitud de servicio social para '. $useralumno->nombres. ' de forma correcta!');
        return redirect()->route('solicitud.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
