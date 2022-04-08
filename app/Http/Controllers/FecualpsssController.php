<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Fecualpss;
use App\User;
use Laracasts\Flash\Flash;
use Illuminate\Support\Facades\DB;

class FecualpsssController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $useralumno  = User::find(\Auth::user()->id);
        $fecualpsss = DB::table('ss_fecualpsss')->where('no_control', '=', \Auth::user()->id)->get();

        return view('alumno.evaluaciones.fecualpss.index')->with('fecualpsss', $fecualpsss)->with('useralumno', $useralumno);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('alumno.evaluaciones.fecualpss.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $fecualpss = new Fecualpss;
        
        $fecualpss->no_control=\Auth::user()->id;
        $fecualpss->no_reporte=$request->no_reporte;
        $fecualpss->criterio_1=$request->criterio_1;
        $fecualpss->criterio_2=$request->criterio_2;
        $fecualpss->criterio_3=$request->criterio_3;
        $fecualpss->criterio_4=$request->criterio_4;
        $fecualpss->criterio_5=$request->criterio_5;
        $fecualpss->criterio_6=$request->criterio_6;
        $fecualpss->criterio_7=$request->criterio_7;
        
        $fecualpss->save();

        Flash::success("¡Se ha registrado el reporte de forma exitosa!");
        return redirect()->route('fecualpss.index');
    }
}
