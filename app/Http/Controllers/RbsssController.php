<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Rbss;
use App\User;
use Laracasts\Flash\Flash;
use Illuminate\Support\Facades\DB;


class RbsssController extends Controller
{
    public function index()
    {
        $useralumno  = User::find(\Auth::user()->id);
        $rbsss = DB::table('ss_rbsss')->where('no_control', '=', \Auth::user()->id)->get();

        return view('alumno.evaluaciones.rbss.index')->with('rbsss', $rbsss)->with('useralumno', $useralumno);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('alumno.evaluaciones.rbss.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rbss = new Rbss;
        
        $rbss->no_control=\Auth::user()->id;
        $rbss->no_reporte=$request->no_reporte;
        $rbss->horas_total=$request->horas_total;
        $rbss->horas_acumuladas=$request->horas_acumuladas;
        
        $rbss->save();

        Flash::success("¡Se ha registrado el reporte de forma exitosa!");
        return redirect()->route('rbss.index');
    }
}
