<?php

namespace App\Http\Controllers;

use App\v;
use App\Alumno;
use App\Subir_doc;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class ComentarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\v  $v
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $alumnos = Alumno::find($id);

        //$documentos = Subir_doc::orderBy('nombre_doc','ACS');
        $documentos = DB::table('ss_subir_docs')->select('nombre_doc', 'bimestre')->where('no_control', '=', $alumnos->id)->get();
    	return view('jefeotro.seguimientoalumno')->with('alumnos', $alumnos)->with('documentos', $documentos);
    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\v  $v
     * @return \Illuminate\Http\Response
     */
    public function edit(v $v)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\v  $v
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, v $v)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\v  $v
     * @return \Illuminate\Http\Response
     */
    public function destroy(v $v)
    {
        //
    }
}
