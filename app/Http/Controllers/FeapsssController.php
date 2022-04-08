<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Feapss;
use App\User;
use Laracasts\Flash\Flash;
use Illuminate\Support\Facades\DB;

class FeapsssController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $useralumno  = User::find(\Auth::user()->id);
        $feapsss = DB::table('ss_feapsss')->where('no_control', '=', \Auth::user()->id)->get();

        return view('alumno.evaluaciones.feapss.index')->with('feapsss', $feapsss)->with('useralumno', $useralumno);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('alumno.evaluaciones.feapss.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $feapss = new Feapss;
        
        $feapss->no_control=\Auth::user()->id;
        $feapss->no_reporte=$request->no_reporte;
        $feapss->criterio_1=$request->criterio_1;
        $feapss->criterio_2=$request->criterio_2;
        $feapss->criterio_3=$request->criterio_3;
        $feapss->criterio_4=$request->criterio_4;
        $feapss->criterio_5=$request->criterio_5;
        $feapss->criterio_6=$request->criterio_6;
        $feapss->criterio_7=$request->criterio_7;
        $feapss->criterio_8=$request->criterio_8;
        
        $feapss->save();

        Flash::success("¡Se ha registrado el reporte de forma exitosa!");
        return redirect()->route('feapss.index');
    }
}
