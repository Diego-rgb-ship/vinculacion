<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Facualpss;
use App\User;
use Laracasts\Flash\Flash;
use Illuminate\Support\Facades\DB;

class FacualpsssController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $useralumno  = User::find(\Auth::user()->id);
        $facualpsss = DB::table('ss_facualpsss')->where('no_control', '=', \Auth::user()->id)->get();

        return view('alumno.evaluaciones.facualpss.index')->with('facualpsss', $facualpsss)->with('useralumno', $useralumno);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('alumno.evaluaciones.facualpss.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $facualpss = new Facualpss;
        
        $facualpss->no_control=\Auth::user()->id;
        $facualpss->no_reporte=$request->no_reporte;
        $facualpss->criterio_1=$request->criterio_1;
        $facualpss->criterio_2=$request->criterio_2;
        $facualpss->criterio_3=$request->criterio_3;
        $facualpss->criterio_4=$request->criterio_4;
        $facualpss->criterio_5=$request->criterio_5;
        $facualpss->criterio_6=$request->criterio_6;
        $facualpss->criterio_7=$request->criterio_7;
        
        $facualpss->save();

        Flash::success("¡Se ha registrado el reporte de forma exitosa!");
        return redirect()->route('facualpss.index');
    }
}
