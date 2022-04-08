<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Alumno;
use App\Subir_doc;
use Illuminate\Support\Facades\DB;

class SeguimientoController extends Controller
{
	public function show($id)
    {
    	$alumnos = Alumno::find($id);

        //$documentos = Subir_doc::orderBy('nombre_doc','ACS');
        $documentos = DB::table('ss_subir_docs')->select('nombre_doc', 'bimestre')->where('no_control', '=', $alumnos->id)->get();
    	return view('jefeotro.seguimientoalumno')->with('alumnos', $alumnos)->with('documentos', $documentos);
    }

    //funciones para ige 
    public function indexige()
    {   
    	$mujeres = DB::table('ss_alumnos')
    			->where('carrera', 'IGE')
                ->whereNotNull('no_control')
                ->where('sexo', 'Femenino')
                ->count('sexo');

        $hombres = DB::table('ss_alumnos')
        		->where('carrera', 'IGE')
                ->whereNotNull('no_control')
                ->where('sexo', 'Masculino')
                ->count('sexo');
        $alumnostotal = DB::table('ss_alumnos')
                ->whereNotNull('no_control')
                ->where('carrera', 'IGE')
                ->count('sexo');

    	$alumnos = Alumno::orderBy('id', 'ASC')->where('carrera', 'IGE')->whereNotNull('no_control')->paginate(10);
        return view('jefeotro.ige.index')->with('alumnos',$alumnos)->with('mujeres',$mujeres)->with('hombres',$hombres)->with('alumnostotal',$alumnostotal);
    }

    public function indexigemujeres()
    {   
    	$mujeres = DB::table('ss_alumnos')
    			->where('carrera', 'IGE')
                ->whereNotNull('no_control')
                ->where('sexo', 'Femenino')
                ->count('sexo');

        $hombres = DB::table('ss_alumnos')
        		->where('carrera', 'IGE')
                ->whereNotNull('no_control')
                ->where('sexo', 'Masculino')
                ->count('sexo');
        $alumnostotal = DB::table('ss_alumnos')
                ->whereNotNull('no_control')
                ->where('carrera', 'IGE')
                ->count('sexo');
		
    	$alumnos = Alumno::orderBy('id', 'ASC')->where('carrera', 'IGE')->whereNotNull('no_control')->where('sexo', 'Femenino')->paginate(10);

        return view('jefeotro.ige.index')->with('alumnos',$alumnos)->with('mujeres',$mujeres)->with('hombres',$hombres)->with('alumnostotal',$alumnostotal);
    }

    public function indexigehombres()
    {   
    	$mujeres = DB::table('ss_alumnos')
    			->where('carrera', 'IGE')
                ->whereNotNull('no_control')
                ->where('sexo', 'Femenino')
                ->count('sexo');

        $hombres = DB::table('ss_alumnos')
        		->where('carrera', 'IGE')
                ->whereNotNull('no_control')
                ->where('sexo', 'Masculino')
                ->count('sexo');

        $alumnostotal = DB::table('ss_alumnos')
                ->whereNotNull('no_control')
                ->where('carrera', 'IGE')
                ->count('sexo');
		
    	$alumnos = Alumno::orderBy('id', 'ASC')->where('carrera', 'IGE')->whereNotNull('no_control')->where('sexo', 'Masculino')->paginate(10);

        return view('jefeotro.ige.index')->with('alumnos',$alumnos)->with('mujeres',$mujeres)->with('hombres',$hombres)->with('alumnostotal',$alumnostotal);
    }

    public function indexigesemestre5()
    {   
    	$mujeres = DB::table('ss_alumnos')
    			->where('carrera', 'IGE')
                ->whereNotNull('no_control')
    			->where('semestre', '5')
                ->where('sexo', 'Femenino')
                ->count('sexo');

        $hombres = DB::table('ss_alumnos')
    			->where('semestre', '5')
                ->whereNotNull('no_control')
    			->where('carrera', 'IGE')
                ->where('sexo', 'Masculino')
                ->count('sexo');

        $alumnostotal = DB::table('ss_alumnos')
                ->whereNotNull('no_control')
                ->where('carrera', 'IGE')
                ->where('semestre', '5')
                ->count('sexo');
		
    	$alumnos = Alumno::orderBy('id', 'ASC')->where('carrera', 'IGE')->whereNotNull('no_control')->where('semestre', '5')->paginate(10);

        return view('jefeotro.ige.semestre5')->with('alumnos',$alumnos)->with('mujeres',$mujeres)->with('hombres',$hombres)->with('alumnostotal',$alumnostotal);
    }

    public function indexigesemestre5mujeres()
    {   
    	$mujeres = DB::table('ss_alumnos')
    			->where('semestre', '5')
    			->where('carrera', 'IGE')
                ->whereNotNull('no_control')
                ->where('sexo', 'Femenino')
                ->count('sexo');

        $hombres = DB::table('ss_alumnos')
    			->where('semestre', '5')
                ->whereNotNull('no_control')
    			->where('carrera', 'IGE')
                ->where('sexo', 'Masculino')
                ->count('sexo');

        $alumnostotal = DB::table('ss_alumnos')
                ->whereNotNull('no_control')
                ->where('carrera', 'IGE')
                ->where('semestre', '5')
                ->count('sexo');
		
    	$alumnos = Alumno::orderBy('id', 'ASC')->where('carrera', 'IGE')->whereNotNull('no_control')->where('semestre', '5')->where('sexo', 'Femenino')->paginate(10);

        return view('jefeotro.ige.semestre5')->with('alumnos',$alumnos)->with('mujeres',$mujeres)->with('hombres',$hombres)->with('alumnostotal',$alumnostotal);
    }

    public function indexigesemestre5hombres()
    {   
    	$mujeres = DB::table('ss_alumnos')
    			->where('semestre', '5')
    			->where('carrera', 'IGE')
                ->whereNotNull('no_control')
                ->where('sexo', 'Femenino')
                ->count('sexo');

        $hombres = DB::table('ss_alumnos')
    			->where('semestre', '5')
                ->whereNotNull('no_control')
    			->where('carrera', 'IGE')
                ->where('sexo', 'Masculino')
                ->count('sexo');
		$alumnostotal = DB::table('ss_alumnos')
                ->whereNotNull('no_control')
                ->where('carrera', 'IGE')
                ->where('semestre', '5')
                ->count('sexo');

    	$alumnos = Alumno::orderBy('id', 'ASC')->where('carrera', 'IGE')->whereNotNull('no_control')->where('semestre', '5')->where('sexo', 'Masculino')->paginate(10);

        return view('jefeotro.ige.semestre5')->with('alumnos',$alumnos)->with('mujeres',$mujeres)->with('hombres',$hombres)->with('alumnostotal',$alumnostotal);
    }

    public function indexigesemestre6()
    {   
    	$mujeres = DB::table('ss_alumnos')
    			->where('semestre', '6')
                ->whereNotNull('no_control')
    			->where('carrera', 'IGE')
                ->where('sexo', 'Femenino')
                ->count('sexo');

        $hombres = DB::table('ss_alumnos')
    			->where('semestre', '6')
                ->whereNotNull('no_control')
    			->where('carrera', 'IGE')
                ->where('sexo', 'Masculino')
                ->count('sexo');

        $alumnostotal = DB::table('ss_alumnos')
                ->whereNotNull('no_control')
                ->where('semestre', '6')
                ->where('carrera', 'IGE')
                ->count('sexo');
		
    	$alumnos = Alumno::orderBy('id', 'ASC')->where('carrera', 'IGE')->whereNotNull('no_control')->where('semestre', '6')->paginate(10);

        return view('jefeotro.ige.semestre6')->with('alumnos',$alumnos)->with('mujeres',$mujeres)->with('hombres',$hombres)->with('alumnostotal',$alumnostotal);
    }

    public function indexigesemestre6mujeres()
    {   
    	$mujeres = DB::table('ss_alumnos')
    			->where('semestre', '6')
                ->whereNotNull('no_control')
    			->where('carrera', 'IGE')
                ->where('sexo', 'Femenino')
                ->count('sexo');

        $hombres = DB::table('ss_alumnos')
    			->where('semestre', '6')
                ->whereNotNull('no_control')
    			->where('carrera', 'IGE')
                ->where('sexo', 'Masculino')
                ->count('sexo');

        $alumnostotal = DB::table('ss_alumnos')
                ->whereNotNull('no_control')
                ->where('semestre', '6')
                ->where('carrera', 'IGE')
                ->count('sexo');
		
    	$alumnos = Alumno::orderBy('id', 'ASC')->where('carrera', 'IGE')->whereNotNull('no_control')->where('semestre', '6')->where('sexo', 'Femenino')->paginate(10);

        return view('jefeotro.ige.semestre6')->with('alumnos',$alumnos)->with('mujeres',$mujeres)->with('hombres',$hombres)->with('alumnostotal',$alumnostotal);
    }

    public function indexigesemestre6hombres()
    {   
    	$mujeres = DB::table('ss_alumnos')
    			->where('semestre', '6')
                ->whereNotNull('no_control')
    			->where('carrera', 'IGE')
                ->where('sexo', 'Femenino')
                ->count('sexo');

        $hombres = DB::table('ss_alumnos')
    			->where('semestre', '6')
                ->whereNotNull('no_control')
    			->where('carrera', 'IGE')
                ->where('sexo', 'Masculino')
                ->count('sexo');
		$alumnostotal = DB::table('ss_alumnos')
                ->whereNotNull('no_control')
                ->where('carrera', 'IGE')
                ->where('semestre', '6')
                ->count('sexo');
                
    	$alumnos = Alumno::orderBy('id', 'ASC')->where('carrera', 'IGE')->whereNotNull('no_control')->where('semestre', '6')->where('sexo', 'Masculino')->paginate(10);

        return view('jefeotro.ige.semestre6')->with('alumnos',$alumnos)->with('mujeres',$mujeres)->with('hombres',$hombres)->with('alumnostotal',$alumnostotal);
    }

    public function indexigesemestre7()
    {   
    	$mujeres = DB::table('ss_alumnos')
    			->where('semestre', '7')
                ->whereNotNull('no_control')
    			->where('carrera', 'IGE')
                ->where('sexo', 'Femenino')
                ->count('sexo');

        $hombres = DB::table('ss_alumnos')
    			->where('semestre', '7')
                ->whereNotNull('no_control')
    			->where('carrera', 'IGE')
                ->where('sexo', 'Masculino')
                ->count('sexo');

        $alumnostotal = DB::table('ss_alumnos')
                ->whereNotNull('no_control')
                ->where('carrera', 'IGE')
                ->where('semestre', '7')
                ->count('sexo');
		
    	$alumnos = Alumno::orderBy('id', 'ASC')->where('carrera', 'IGE')->whereNotNull('no_control')->where('semestre', '7')->paginate(10);

        return view('jefeotro.ige.semestre7')->with('alumnos',$alumnos)->with('mujeres',$mujeres)->with('hombres',$hombres)->with('alumnostotal',$alumnostotal);
    }

    public function indexigesemestre7mujeres()
    {   
    	$mujeres = DB::table('ss_alumnos')
    			->where('semestre', '7')
    			->where('carrera', 'IGE')
                ->whereNotNull('no_control')
                ->where('sexo', 'Femenino')
                ->count('sexo');

        $hombres = DB::table('ss_alumnos')
    			->where('semestre', '7')
                ->whereNotNull('no_control')
    			->where('carrera', 'IGE')
                ->where('sexo', 'Masculino')
                ->count('sexo');

        $alumnostotal = DB::table('ss_alumnos')
                ->whereNotNull('no_control')
                ->where('carrera', 'IGE')
                ->where('semestre', '7')
                ->count('sexo');
		
    	$alumnos = Alumno::orderBy('id', 'ASC')->where('carrera', 'IGE')->whereNotNull('no_control')->where('semestre', '7')->where('sexo', 'Femenino')->paginate(10);

        return view('jefeotro.ige.semestre7')->with('alumnos',$alumnos)->with('mujeres',$mujeres)->with('hombres',$hombres)->with('alumnostotal',$alumnostotal);
    }

    public function indexigesemestre7hombres()
    {   
    	$mujeres = DB::table('ss_alumnos')
    			->where('semestre', '7')
                ->whereNotNull('no_control')
    			->where('carrera', 'IGE')
                ->where('sexo', 'Femenino')
                ->count('sexo');

        $hombres = DB::table('ss_alumnos')
    			->where('semestre', '7')
                ->whereNotNull('no_control')
    			->where('carrera', 'IGE')
                ->where('sexo', 'Masculino')
                ->count('sexo');
		$alumnostotal = DB::table('ss_alumnos')
                ->whereNotNull('no_control')
                ->where('carrera', 'IGE')
                ->where('semestre', '7')
                ->count('sexo');
                
    	$alumnos = Alumno::orderBy('id', 'ASC')->where('carrera', 'IGE')->whereNotNull('no_control')->where('semestre', '7')->where('sexo', 'Masculino')->paginate(10);

        return view('jefeotro.ige.semestre7')->with('alumnos',$alumnos)->with('mujeres',$mujeres)->with('hombres',$hombres)->with('alumnostotal',$alumnostotal);
    }

    public function indexigesemestre8()
    {   
    	$mujeres = DB::table('ss_alumnos')
    			->where('semestre', '8')
                ->whereNotNull('no_control')
    			->where('carrera', 'IGE')
                ->where('sexo', 'Femenino')
                ->count('sexo');

        $hombres = DB::table('ss_alumnos')
    			->where('semestre', '8')
                ->whereNotNull('no_control')
    			->where('carrera', 'IGE')
                ->where('sexo', 'Masculino')
                ->count('sexo');

        $alumnostotal = DB::table('ss_alumnos')
                ->whereNotNull('no_control')
                ->where('carrera', 'IGE')
                ->where('semestre', '8')
                ->count('sexo');
		
    	$alumnos = Alumno::orderBy('id', 'ASC')->where('carrera', 'IGE')
        ->whereNotNull('no_control')->where('semestre', '8')->paginate(10);

        return view('jefeotro.ige.semestre8')->with('alumnos',$alumnos)->with('mujeres',$mujeres)->with('hombres',$hombres)->with('alumnostotal',$alumnostotal);
    }

    public function indexigesemestre8mujeres()
    {   
    	$mujeres = DB::table('ss_alumnos')
    			->where('semestre', '8')
                ->whereNotNull('no_control')
    			->where('carrera', 'IGE')
                ->where('sexo', 'Femenino')
                ->count('sexo');

        $hombres = DB::table('ss_alumnos')
    			->where('semestre', '8')
                ->whereNotNull('no_control')
    			->where('carrera', 'IGE')
                ->where('sexo', 'Masculino')
                ->count('sexo');

        $alumnostotal = DB::table('ss_alumnos')
                ->whereNotNull('no_control')
                ->where('carrera', 'IGE')
                ->where('semestre', '8')
                ->count('sexo');
		
    	$alumnos = Alumno::orderBy('id', 'ASC')->whereNotNull('no_control')->where('carrera', 'IGE')->where('semestre', '8')->where('sexo', 'Femenino')->paginate(10);

        return view('jefeotro.ige.semestre8')->with('alumnos',$alumnos)->with('mujeres',$mujeres)->with('hombres',$hombres)->with('alumnostotal',$alumnostotal);
    }

    public function indexigesemestre8hombres()
    {   
    	$mujeres = DB::table('ss_alumnos')
    			->where('semestre', '8')
                ->whereNotNull('no_control')
    			->where('carrera', 'IGE')
                ->where('sexo', 'Femenino')
                ->count('sexo');

        $hombres = DB::table('ss_alumnos')
    			->where('semestre', '8')
                ->whereNotNull('no_control')
    			->where('carrera', 'IGE')
                ->where('sexo', 'Masculino')
                ->count('sexo');
		$alumnostotal = DB::table('ss_alumnos')
                ->whereNotNull('no_control')
                ->where('carrera', 'IGE')
                ->where('semestre', '8')
                ->count('sexo');
                
    	$alumnos = Alumno::orderBy('id', 'ASC')->whereNotNull('no_control')->where('carrera', 'IGE')->where('semestre', '8')->where('sexo', 'Masculino')->paginate(10);

        return view('jefeotro.ige.semestre8')->with('alumnos',$alumnos)->with('mujeres',$mujeres)->with('hombres',$hombres)->with('alumnostotal',$alumnostotal);
    }

    //funciones para ind 
    public function indexind()
    {   
    	$mujeres = DB::table('ss_alumnos')
    			->where('carrera', 'IND')
                ->whereNotNull('no_control')
                ->where('sexo', 'Femenino')
                ->count('sexo');

        $hombres = DB::table('ss_alumnos')
        		->where('carrera', 'IND')
                ->whereNotNull('no_control')
                ->where('sexo', 'Masculino')
                ->count('sexo');
        $alumnostotal = DB::table('ss_alumnos')
                ->whereNotNull('no_control')
                ->where('carrera', 'IND')
                ->count('sexo');

    	$alumnos = Alumno::orderBy('id', 'ASC')->whereNotNull('no_control')->where('carrera', 'IND')->paginate(10);
        return view('jefeotro.ind.index')->with('alumnos',$alumnos)->with('mujeres',$mujeres)->with('hombres',$hombres)->with('alumnostotal',$alumnostotal);
    }

    public function indexindmujeres()
    {   
    	$mujeres = DB::table('ss_alumnos')
    			->where('carrera', 'IND')
                ->whereNotNull('no_control')
                ->where('sexo', 'Femenino')
                ->count('sexo');

        $hombres = DB::table('ss_alumnos')
        		->where('carrera', 'IND')
                ->whereNotNull('no_control')
                ->where('sexo', 'Masculino')
                ->count('sexo');
        $alumnostotal = DB::table('ss_alumnos')
                ->whereNotNull('no_control')
                ->where('carrera', 'IND')
                ->count('sexo');
		
    	$alumnos = Alumno::orderBy('id', 'ASC')->whereNotNull('no_control')->where('carrera', 'IND')->where('sexo', 'Femenino')->paginate(10);

        return view('jefeotro.ind.index')->with('alumnos',$alumnos)->with('mujeres',$mujeres)->with('hombres',$hombres)->with('alumnostotal',$alumnostotal);
    }

    public function indexindhombres()
    {   
    	$mujeres = DB::table('ss_alumnos')
    			->where('carrera', 'IND')
                ->whereNotNull('no_control')
                ->where('sexo', 'Femenino')
                ->count('sexo');

        $hombres = DB::table('ss_alumnos')
        		->where('carrera', 'IND')
                ->whereNotNull('no_control')
                ->where('sexo', 'Masculino')
                ->count('sexo');

        $alumnostotal = DB::table('ss_alumnos')
                ->whereNotNull('no_control')
                ->where('carrera', 'IND')
                ->count('sexo');
		
    	$alumnos = Alumno::orderBy('id', 'ASC')->whereNotNull('no_control')->where('carrera', 'IND')->where('sexo', 'Masculino')->paginate(10);

        return view('jefeotro.ind.index')->with('alumnos',$alumnos)->with('mujeres',$mujeres)->with('hombres',$hombres)->with('alumnostotal',$alumnostotal);
    }

    public function indexindsemestre5()
    {   
    	$mujeres = DB::table('ss_alumnos')
    			->where('carrera', 'IND')
    			->where('semestre', '5')
                ->whereNotNull('no_control')
                ->where('sexo', 'Femenino')
                ->count('sexo');

        $hombres = DB::table('ss_alumnos')
    			->where('semestre', '5')
                ->whereNotNull('no_control')
    			->where('carrera', 'IND')
                ->where('sexo', 'Masculino')
                ->count('sexo');

        $alumnostotal = DB::table('ss_alumnos')
                ->whereNotNull('no_control')
                ->where('carrera', 'IND')
                ->where('semestre', '5')
                ->count('sexo');
		
    	$alumnos = Alumno::orderBy('id', 'ASC')->whereNotNull('no_control')->where('carrera', 'IND')->where('semestre', '5')->paginate(10);

        return view('jefeotro.ind.semestre5')->with('alumnos',$alumnos)->with('mujeres',$mujeres)->with('hombres',$hombres)->with('alumnostotal',$alumnostotal);
    }

    public function indexindsemestre5mujeres()
    {   
    	$mujeres = DB::table('ss_alumnos')
    			->where('semestre', '5')
    			->where('carrera', 'IND')
                ->whereNotNull('no_control')
                ->where('sexo', 'Femenino')
                ->count('sexo');

        $hombres = DB::table('ss_alumnos')
    			->where('semestre', '5')
    			->where('carrera', 'IND')
                ->whereNotNull('no_control')
                ->where('sexo', 'Masculino')
                ->count('sexo');

        $alumnostotal = DB::table('ss_alumnos')
                ->whereNotNull('no_control')
                ->where('carrera', 'IND')
                ->where('semestre', '5')
                ->count('sexo');
		
    	$alumnos = Alumno::orderBy('id', 'ASC')->where('carrera', 'IND')->whereNotNull('no_control')->where('semestre', '5')->where('sexo', 'Femenino')->paginate(10);

        return view('jefeotro.ind.semestre5')->with('alumnos',$alumnos)->with('mujeres',$mujeres)->with('hombres',$hombres)->with('alumnostotal',$alumnostotal);
    }

    public function indexindsemestre5hombres()
    {   
    	$mujeres = DB::table('ss_alumnos')
    			->where('semestre', '5')
                ->whereNotNull('no_control')
    			->where('carrera', 'IND')
                ->where('sexo', 'Femenino')
                ->count('sexo');

        $hombres = DB::table('ss_alumnos')
    			->where('semestre', '5')
                ->whereNotNull('no_control')
    			->where('carrera', 'IND')
                ->where('sexo', 'Masculino')
                ->count('sexo');
		$alumnostotal = DB::table('ss_alumnos')
                ->whereNotNull('no_control')
                ->where('carrera', 'IND')
                ->where('semestre', '5')
                ->count('sexo');

    	$alumnos = Alumno::orderBy('id', 'ASC')->where('carrera', 'IND')->whereNotNull('no_control')->where('semestre', '5')->where('sexo', 'Masculino')->paginate(10);

        return view('jefeotro.ind.semestre5')->with('alumnos',$alumnos)->with('mujeres',$mujeres)->with('hombres',$hombres)->with('alumnostotal',$alumnostotal);
    }

    public function indexindsemestre6()
    {   
    	$mujeres = DB::table('ss_alumnos')
    			->where('semestre', '6')
                ->whereNotNull('no_control')
    			->where('carrera', 'IND')
                ->where('sexo', 'Femenino')
                ->count('sexo');

        $hombres = DB::table('ss_alumnos')
    			->where('semestre', '6')
                ->whereNotNull('no_control')
    			->where('carrera', 'IND')
                ->where('sexo', 'Masculino')
                ->count('sexo');

        $alumnostotal = DB::table('ss_alumnos')
                ->whereNotNull('no_control')
                ->where('semestre', '6')
                ->where('carrera', 'IND')
                ->count('sexo');
		
    	$alumnos = Alumno::orderBy('id', 'ASC')->where('carrera', 'IND')->whereNotNull('no_control')->where('semestre', '6')->paginate(10);

        return view('jefeotro.ind.semestre6')->with('alumnos',$alumnos)->with('mujeres',$mujeres)->with('hombres',$hombres)->with('alumnostotal',$alumnostotal);
    }

    public function indexindsemestre6mujeres()
    {   
    	$mujeres = DB::table('ss_alumnos')
    			->where('semestre', '6')
    			->where('carrera', 'IND')
                ->whereNotNull('no_control')
                ->where('sexo', 'Femenino')
                ->count('sexo');

        $hombres = DB::table('ss_alumnos')
    			->where('semestre', '6')
                ->whereNotNull('no_control')
    			->where('carrera', 'IND')
                ->where('sexo', 'Masculino')
                ->count('sexo');

        $alumnostotal = DB::table('ss_alumnos')
                ->whereNotNull('no_control')
                ->where('semestre', '6')
                ->where('carrera', 'IND')
                ->count('sexo');
		
    	$alumnos = Alumno::orderBy('id', 'ASC')->whereNotNull('no_control')->where('carrera', 'IND')->where('semestre', '6')->where('sexo', 'Femenino')->paginate(10);

        return view('jefeotro.ind.semestre6')->with('alumnos',$alumnos)->with('mujeres',$mujeres)->with('hombres',$hombres)->with('alumnostotal',$alumnostotal);
    }

    public function indexindsemestre6hombres()
    {   
    	$mujeres = DB::table('ss_alumnos')
    			->where('semestre', '6')
                ->whereNotNull('no_control')
    			->where('carrera', 'IND')
                ->where('sexo', 'Femenino')
                ->count('sexo');

        $hombres = DB::table('ss_alumnos')
    			->where('semestre', '6')
                ->whereNotNull('no_control')
    			->where('carrera', 'IND')
                ->where('sexo', 'Masculino')
                ->count('sexo');
		$alumnostotal = DB::table('ss_alumnos')
                ->whereNotNull('no_control')
                ->where('carrera', 'IND')
                ->where('semestre', '6')
                ->count('sexo');
                
    	$alumnos = Alumno::orderBy('id', 'ASC')->whereNotNull('no_control')->where('carrera', 'IND')->where('semestre', '6')->where('sexo', 'Masculino')->paginate(10);

        return view('jefeotro.ind.semestre6')->with('alumnos',$alumnos)->with('mujeres',$mujeres)->with('hombres',$hombres)->with('alumnostotal',$alumnostotal);
    }

    public function indexindsemestre7()
    {   
    	$mujeres = DB::table('ss_alumnos')
    			->where('semestre', '7')
                ->whereNotNull('no_control')
    			->where('carrera', 'IND')
                ->where('sexo', 'Femenino')
                ->count('sexo');

        $hombres = DB::table('ss_alumnos')
    			->where('semestre', '7')
                ->whereNotNull('no_control')
    			->where('carrera', 'IND')
                ->where('sexo', 'Masculino')
                ->count('sexo');

        $alumnostotal = DB::table('ss_alumnos')
                ->whereNotNull('no_control')
                ->where('carrera', 'IND')
                ->where('semestre', '7')
                ->count('sexo');
		
    	$alumnos = Alumno::orderBy('id', 'ASC')->where('carrera', 'IND')->whereNotNull('no_control')->where('semestre', '7')->paginate(10);

        return view('jefeotro.ind.semestre7')->with('alumnos',$alumnos)->with('mujeres',$mujeres)->with('hombres',$hombres)->with('alumnostotal',$alumnostotal);
    }

    public function indexindsemestre7mujeres()
    {   
    	$mujeres = DB::table('ss_alumnos')
    			->where('semestre', '7')
                ->whereNotNull('no_control')
    			->where('carrera', 'IND')
                ->where('sexo', 'Femenino')
                ->count('sexo');

        $hombres = DB::table('ss_alumnos')
    			->where('semestre', '7')
                ->whereNotNull('no_control')
    			->where('carrera', 'IND')
                ->where('sexo', 'Masculino')
                ->count('sexo');

        $alumnostotal = DB::table('ss_alumnos')
                ->whereNotNull('no_control')
                ->where('carrera', 'IND')
                ->where('semestre', '7')
                ->count('sexo');
		
    	$alumnos = Alumno::orderBy('id', 'ASC')->whereNotNull('no_control')->where('carrera', 'IND')->where('semestre', '7')->where('sexo', 'Femenino')->paginate(10);

        return view('jefeotro.ind.semestre7')->with('alumnos',$alumnos)->with('mujeres',$mujeres)->with('hombres',$hombres)->with('alumnostotal',$alumnostotal);
    }

    public function indexindsemestre7hombres()
    {   
    	$mujeres = DB::table('ss_alumnos')
    			->where('semestre', '7')
                ->whereNotNull('no_control')
    			->where('carrera', 'IND')
                ->where('sexo', 'Femenino')
                ->count('sexo');

        $hombres = DB::table('ss_alumnos')
    			->where('semestre', '7')
    			->where('carrera', 'IND')
                ->where('sexo', 'Masculino')
                ->count('sexo');
		$alumnostotal = DB::table('ss_alumnos')
                ->whereNotNull('no_control')
                ->where('carrera', 'IND')
                ->where('semestre', '7')
                ->count('sexo');
                
    	$alumnos = Alumno::orderBy('id', 'ASC')->whereNotNull('no_control')->where('carrera', 'IND')->where('semestre', '7')->where('sexo', 'Masculino')->paginate(10);

        return view('jefeotro.ind.semestre7')->with('alumnos',$alumnos)->with('mujeres',$mujeres)->with('hombres',$hombres)->with('alumnostotal',$alumnostotal);
    }

    public function indexindsemestre8()
    {   
    	$mujeres = DB::table('ss_alumnos')
    			->where('semestre', '8')
                ->whereNotNull('no_control')
    			->where('carrera', 'IND')
                ->where('sexo', 'Femenino')
                ->count('sexo');

        $hombres = DB::table('ss_alumnos')
    			->where('semestre', '8')
                ->whereNotNull('no_control')
    			->where('carrera', 'IND')
                ->where('sexo', 'Masculino')
                ->count('sexo');

        $alumnostotal = DB::table('ss_alumnos')
                ->whereNotNull('no_control')
                ->where('carrera', 'IND')
                ->where('semestre', '8')
                ->count('sexo');
		
    	$alumnos = Alumno::orderBy('id', 'ASC')->whereNotNull('no_control')->where('carrera', 'IND')->where('semestre', '8')->paginate(10);

        return view('jefeotro.ind.semestre8')->with('alumnos',$alumnos)->with('mujeres',$mujeres)->with('hombres',$hombres)->with('alumnostotal',$alumnostotal);
    }

    public function indexindsemestre8mujeres()
    {   
    	$mujeres = DB::table('ss_alumnos')
    			->where('semestre', '8')
                ->whereNotNull('no_control')
    			->where('carrera', 'IND')
                ->where('sexo', 'Femenino')
                ->count('sexo');

        $hombres = DB::table('ss_alumnos')
    			->where('semestre', '8')
                ->whereNotNull('no_control')
    			->where('carrera', 'IND')
                ->where('sexo', 'Masculino')
                ->count('sexo');

        $alumnostotal = DB::table('ss_alumnos')
                ->whereNotNull('no_control')
                ->where('carrera', 'IND')
                ->where('semestre', '8')
                ->count('sexo');
		
    	$alumnos = Alumno::orderBy('id', 'ASC')->whereNotNull('no_control')->where('carrera', 'IND')->where('semestre', '8')->where('sexo', 'Femenino')->paginate(10);

        return view('jefeotro.ind.semestre8')->with('alumnos',$alumnos)->with('mujeres',$mujeres)->with('hombres',$hombres)->with('alumnostotal',$alumnostotal);
    }

    public function indexindsemestre8hombres()
    {   
    	$mujeres = DB::table('ss_alumnos')
    			->where('semestre', '8')
                ->whereNotNull('no_control')
    			->where('carrera', 'IND')
                ->where('sexo', 'Femenino')
                ->count('sexo');

        $hombres = DB::table('ss_alumnos')
    			->where('semestre', '8')
                ->whereNotNull('no_control')
    			->where('carrera', 'IND')
                ->where('sexo', 'Masculino')
                ->count('sexo');
		$alumnostotal = DB::table('ss_alumnos')
                ->whereNotNull('no_control')
                ->where('carrera', 'IND')
                ->where('semestre', '8')
                ->count('sexo');
                
    	$alumnos = Alumno::orderBy('id', 'ASC')->whereNotNull('no_control')->where('carrera', 'IND')->where('semestre', '8')->where('sexo', 'Masculino')->paginate(10);

        return view('jefeotro.ind.semestre8')->with('alumnos',$alumnos)->with('mujeres',$mujeres)->with('hombres',$hombres)->with('alumnostotal',$alumnostotal);
    }

    //funciones para isc
    public function indexisc()
    {   
    	$mujeres = DB::table('ss_alumnos')
    			->where('carrera', 'ISC')
                ->whereNotNull('no_control')
                ->where('sexo', 'Femenino')
                ->count('sexo');

        $hombres = DB::table('ss_alumnos')
        		->where('carrera', 'ISC')
                ->whereNotNull('no_control')
                ->where('sexo', 'Masculino')
                ->count('sexo');
        $alumnostotal = DB::table('ss_alumnos')
                ->whereNotNull('no_control')
                ->where('carrera', 'ISC')
                ->count('sexo');

    	$alumnos = Alumno::orderBy('id', 'ASC')->whereNotNull('no_control')->where('carrera', 'ISC')->paginate(10);
        return view('jefeotro.isc.index')->with('alumnos',$alumnos)->with('mujeres',$mujeres)->with('hombres',$hombres)->with('alumnostotal',$alumnostotal);
    }

    public function indexiscmujeres()
    {   
    	$mujeres = DB::table('ss_alumnos')
    			->where('carrera', 'ISC')
                ->whereNotNull('no_control')
                ->where('sexo', 'Femenino')
                ->count('sexo');

        $hombres = DB::table('ss_alumnos')
        		->where('carrera', 'ISC')
                ->whereNotNull('no_control')
                ->where('sexo', 'Masculino')
                ->count('sexo');
        $alumnostotal = DB::table('ss_alumnos')
                ->whereNotNull('no_control')
                ->where('carrera', 'ISC')
                ->count('sexo');
		
    	$alumnos = Alumno::orderBy('id', 'ASC')->whereNotNull('no_control')->where('carrera', 'ISC')->where('sexo', 'Femenino')->paginate(10);

        return view('jefeotro.isc.index')->with('alumnos',$alumnos)->with('mujeres',$mujeres)->with('hombres',$hombres)->with('alumnostotal',$alumnostotal);
    }

    public function indexischombres()
    {   
    	$mujeres = DB::table('ss_alumnos')
    			->where('carrera', 'ISC')
                ->whereNotNull('no_control')
                ->where('sexo', 'Femenino')
                ->count('sexo');

        $hombres = DB::table('ss_alumnos')
        		->where('carrera', 'ISC')
                ->whereNotNull('no_control')
                ->where('sexo', 'Masculino')
                ->count('sexo');

        $alumnostotal = DB::table('ss_alumnos')
                ->whereNotNull('no_control')
                ->where('carrera', 'ISC')
                ->count('sexo');
		
    	$alumnos = Alumno::orderBy('id', 'ASC')->whereNotNull('no_control')->where('carrera', 'ISC')->where('sexo', 'Masculino')->paginate(10);

        return view('jefeotro.isc.index')->with('alumnos',$alumnos)->with('mujeres',$mujeres)->with('hombres',$hombres)->with('alumnostotal',$alumnostotal);
    }

    public function indexiscsemestre5()
    {   
    	$mujeres = DB::table('ss_alumnos')
    			->where('semestre', '5')
                ->whereNotNull('no_control')
    			->where('carrera', 'ISC')
                ->where('sexo', 'Femenino')
                ->count('sexo');

        $hombres = DB::table('ss_alumnos')
    			->where('semestre', '5')
                ->whereNotNull('no_control')
    			->where('carrera', 'ISC')
                ->where('sexo', 'Masculino')
                ->count('sexo');

        $alumnostotal = DB::table('ss_alumnos')
                ->whereNotNull('no_control')
                ->where('carrera', 'ISC')
                ->where('semestre', '5')
                ->count('sexo');
		
    	$alumnos = Alumno::orderBy('id', 'ASC')->whereNotNull('no_control')->where('carrera', 'ISC')->where('semestre', '5')->paginate(10);

        return view('jefeotro.isc.semestre5')->with('alumnos',$alumnos)->with('mujeres',$mujeres)->with('hombres',$hombres)->with('alumnostotal',$alumnostotal);
    }

    public function indexiscsemestre5mujeres()
    {   
    	$mujeres = DB::table('ss_alumnos')
    			->where('semestre', '5')
                ->whereNotNull('no_control')
                ->where('sexo', 'Femenino')
                ->count('sexo');

        $hombres = DB::table('ss_alumnos')
    			->where('semestre', '5')
                ->whereNotNull('no_control')
                ->where('sexo', 'Masculino')
                ->count('sexo');

        $alumnostotal = DB::table('ss_alumnos')
                ->whereNotNull('no_control')
                ->where('semestre', '5')
                ->count('sexo');
		
    	$alumnos = Alumno::orderBy('id', 'ASC')->whereNotNull('no_control')->where('carrera', 'ISC')->where('semestre', '5')->where('sexo', 'Femenino')->paginate(10);

        return view('jefeotro.isc.semestre5')->with('alumnos',$alumnos)->with('mujeres',$mujeres)->with('hombres',$hombres)->with('alumnostotal',$alumnostotal);
    }

    public function indexiscsemestre5hombres()
    {   
    	$mujeres = DB::table('ss_alumnos')
    			->where('semestre', '5')
                ->whereNotNull('no_control')
    			->where('carrera', 'ISC')
                ->where('sexo', 'Femenino')
                ->count('sexo');

        $hombres = DB::table('ss_alumnos')
    			->where('semestre', '5')
                ->whereNotNull('no_control')
    			->where('carrera', 'ISC')
                ->where('sexo', 'Masculino')
                ->count('sexo');
		$alumnostotal = DB::table('ss_alumnos')
                ->whereNotNull('no_control')
                ->where('carrera', 'ISC')
                ->where('semestre', '5')
                ->count('sexo');

    	$alumnos = Alumno::orderBy('id', 'ASC')->whereNotNull('no_control')->where('carrera', 'ISC')->where('semestre', '5')->where('sexo', 'Masculino')->paginate(10);

        return view('jefeotro.isc.semestre5')->with('alumnos',$alumnos)->with('mujeres',$mujeres)->with('hombres',$hombres)->with('alumnostotal',$alumnostotal);
    }

    public function indexiscsemestre6()
    {   
    	$mujeres = DB::table('ss_alumnos')
    			->where('semestre', '6')
                ->whereNotNull('no_control')
    			->where('carrera', 'ISC')
                ->where('sexo', 'Femenino')
                ->count('sexo');

        $hombres = DB::table('ss_alumnos')
    			->where('semestre', '6')
                ->whereNotNull('no_control')
    			->where('carrera', 'ISC')
                ->where('sexo', 'Masculino')
                ->count('sexo');

        $alumnostotal = DB::table('ss_alumnos')
                ->whereNotNull('no_control')
                ->where('carrera', 'ISC')
                ->where('semestre', '6')
                ->count('sexo');
		
    	$alumnos = Alumno::orderBy('id', 'ASC')->whereNotNull('no_control')->where('carrera', 'ISC')->where('semestre', '6')->paginate(10);

        return view('jefeotro.isc.semestre6')->with('alumnos',$alumnos)->with('mujeres',$mujeres)->with('hombres',$hombres)->with('alumnostotal',$alumnostotal);
    }

    public function indexiscsemestre6mujeres()
    {   
    	$mujeres = DB::table('ss_alumnos')
    			->where('semestre', '6')
                ->whereNotNull('no_control')
    			->where('carrera', 'ISC')
                ->where('sexo', 'Femenino')
                ->count('sexo');

        $hombres = DB::table('ss_alumnos')
    			->where('semestre', '6')
                ->whereNotNull('no_control')
    			->where('carrera', 'ISC')
                ->where('sexo', 'Masculino')
                ->count('sexo');

        $alumnostotal = DB::table('ss_alumnos')
                ->whereNotNull('no_control')
                ->whereNotNull('no_control')
                ->where('carrera', 'ISC')
                ->where('semestre', '6')
                ->count('sexo');
		
    	$alumnos = Alumno::orderBy('id', 'ASC')->whereNotNull('no_control')->where('carrera', 'ISC')->where('semestre', '6')->where('sexo', 'Femenino')->paginate(10);

        return view('jefeotro.isc.semestre6')->with('alumnos',$alumnos)->with('mujeres',$mujeres)->with('hombres',$hombres)->with('alumnostotal',$alumnostotal);
    }

    public function indexiscsemestre6hombres()
    {   
    	$mujeres = DB::table('ss_alumnos')
    			->where('semestre', '6')
                ->whereNotNull('no_control')
    			->where('carrera', 'ISC')
                ->where('sexo', 'Femenino')
                ->count('sexo');

        $hombres = DB::table('ss_alumnos')
    			->where('semestre', '6')
                ->whereNotNull('no_control')
    			->where('carrera', 'ISC')
                ->where('sexo', 'Masculino')
                ->count('sexo');
		$alumnostotal = DB::table('ss_alumnos')
                ->whereNotNull('no_control')
                ->where('carrera', 'ISC')
                ->where('semestre', '6')
                ->count('sexo');
                
    	$alumnos = Alumno::orderBy('id', 'ASC')->whereNotNull('no_control')->where('carrera', 'ISC')->where('semestre', '6')->where('sexo', 'Masculino')->paginate(10);

        return view('jefeotro.isc.semestre6')->with('alumnos',$alumnos)->with('mujeres',$mujeres)->with('hombres',$hombres)->with('alumnostotal',$alumnostotal);
    }

    public function indexiscsemestre7()
    {   
    	$mujeres = DB::table('ss_alumnos')
    			->where('semestre', '7')
                ->whereNotNull('no_control')
    			->where('carrera', 'ISC')
                ->where('sexo', 'Femenino')
                ->count('sexo');

        $hombres = DB::table('ss_alumnos')
    			->where('semestre', '7')
                ->whereNotNull('no_control')
    			->where('carrera', 'ISC')
                ->where('sexo', 'Masculino')
                ->count('sexo');

        $alumnostotal = DB::table('ss_alumnos')
                ->whereNotNull('no_control')
                ->whereNotNull('no_control')
                ->where('carrera', 'ISC')
                ->where('semestre', '7')
                ->count('sexo');
		
    	$alumnos = Alumno::orderBy('id', 'ASC')->whereNotNull('no_control')->where('carrera', 'ISC')->where('semestre', '7')->paginate(10);

        return view('jefeotro.isc.semestre7')->with('alumnos',$alumnos)->with('mujeres',$mujeres)->with('hombres',$hombres)->with('alumnostotal',$alumnostotal);
    }

    public function indexiscsemestre7mujeres()
    {   
    	$mujeres = DB::table('ss_alumnos')
    			->where('semestre', '7')
                ->whereNotNull('no_control')
    			->where('carrera', 'ISC')
                ->where('sexo', 'Femenino')
                ->count('sexo');

        $hombres = DB::table('ss_alumnos')
    			->where('semestre', '7')
                ->whereNotNull('no_control')
    			->where('carrera', 'ISC')
                ->where('sexo', 'Masculino')
                ->count('sexo');

        $alumnostotal = DB::table('ss_alumnos')
                ->whereNotNull('no_control')
                ->where('carrera', 'ISC')
                ->where('semestre', '7')
                ->count('sexo');
		
    	$alumnos = Alumno::orderBy('id', 'ASC')->whereNotNull('no_control')->where('carrera', 'ISC')->where('semestre', '7')->where('sexo', 'Femenino')->paginate(10);

        return view('jefeotro.isc.semestre7')->with('alumnos',$alumnos)->with('mujeres',$mujeres)->with('hombres',$hombres)->with('alumnostotal',$alumnostotal);
    }

    public function indexiscsemestre7hombres()
    {   
    	$mujeres = DB::table('ss_alumnos')
    			->where('semestre', '7')
                ->whereNotNull('no_control')
    			->where('carrera', 'ISC')
                ->where('sexo', 'Femenino')
                ->count('sexo');

        $hombres = DB::table('ss_alumnos')
    			->where('semestre', '7')
                ->whereNotNull('no_control')
    			->where('carrera', 'ISC')
                ->where('sexo', 'Masculino')
                ->count('sexo');
		$alumnostotal = DB::table('ss_alumnos')
                ->whereNotNull('no_control')
                ->where('carrera', 'ISC')
                ->where('semestre', '7')
                ->count('sexo');
                
    	$alumnos = Alumno::orderBy('id', 'ASC')->whereNotNull('no_control')->where('carrera', 'ISC')->where('semestre', '7')->where('sexo', 'Masculino')->paginate(10);

        return view('jefeotro.isc.semestre7')->with('alumnos',$alumnos)->with('mujeres',$mujeres)->with('hombres',$hombres)->with('alumnostotal',$alumnostotal);
    }

    public function indexiscsemestre8()
    {   
    	$mujeres = DB::table('ss_alumnos')
    			->where('semestre', '8')
    			->where('carrera', 'ISC')
                ->whereNotNull('no_control')
                ->where('sexo', 'Femenino')
                ->count('sexo');

        $hombres = DB::table('ss_alumnos')
    			->where('semestre', '8')
                ->whereNotNull('no_control')
    			->where('carrera', 'ISC')
                ->where('sexo', 'Masculino')
                ->count('sexo');

        $alumnostotal = DB::table('ss_alumnos')
                ->whereNotNull('no_control')
                ->where('carrera', 'ISC')
                ->where('semestre', '8')
                ->count('sexo');
		
    	$alumnos = Alumno::orderBy('id', 'ASC')->whereNotNull('no_control')->where('carrera', 'ISC')->where('semestre', '8')->paginate(10);

        return view('jefeotro.isc.semestre8')->with('alumnos',$alumnos)->with('mujeres',$mujeres)->with('hombres',$hombres)->with('alumnostotal',$alumnostotal);
    }

    public function indexiscsemestre8mujeres()
    {   
    	$mujeres = DB::table('ss_alumnos')
    			->where('semestre', '8')
                ->whereNotNull('no_control')
    			->where('carrera', 'ISC')
                ->where('sexo', 'Femenino')
                ->count('sexo');

        $hombres = DB::table('ss_alumnos')
    			->where('semestre', '8')
                ->whereNotNull('no_control')
    			->where('carrera', 'ISC')
                ->where('sexo', 'Masculino')
                ->count('sexo');

        $alumnostotal = DB::table('ss_alumnos')
                ->whereNotNull('no_control')
                ->whereNotNull('no_control')
                ->where('carrera', 'ISC')
                ->where('semestre', '8')
                ->count('sexo');
		
    	$alumnos = Alumno::orderBy('id', 'ASC')->whereNotNull('no_control')->where('carrera', 'ISC')->where('semestre', '8')->where('sexo', 'Femenino')->paginate(10);

        return view('jefeotro.isc.semestre8')->with('alumnos',$alumnos)->with('mujeres',$mujeres)->with('hombres',$hombres)->with('alumnostotal',$alumnostotal);
    }

    public function indexiscsemestre8hombres()
    {   
    	$mujeres = DB::table('ss_alumnos')
    			->where('semestre', '8')
                ->whereNotNull('no_control')
    			->where('carrera', 'ISC')
                ->where('sexo', 'Femenino')
                ->count('sexo');

        $hombres = DB::table('ss_alumnos')
    			->where('semestre', '8')
                ->whereNotNull('no_control')
    			->where('carrera', 'ISC')
                ->where('sexo', 'Masculino')
                ->count('sexo');
		$alumnostotal = DB::table('ss_alumnos')
                ->whereNotNull('no_control')
                ->where('carrera', 'ISC')
                ->where('semestre', '8')
                ->count('sexo');
                
    	$alumnos = Alumno::orderBy('id', 'ASC')->whereNotNull('no_control')->where('carrera', 'ISC')->where('semestre', '8')->where('sexo', 'Masculino')->paginate(10);

        return view('jefeotro.isc.semestre8')->with('alumnos',$alumnos)->with('mujeres',$mujeres)->with('hombres',$hombres)->with('alumnostotal',$alumnostotal);
    }

    //funciones para la 
    public function indexla()
    {   
    	$mujeres = DB::table('ss_alumnos')
    			->where('carrera', 'LA')
                ->whereNotNull('no_control')
                ->where('sexo', 'Femenino')
                ->count('sexo');

        $hombres = DB::table('ss_alumnos')
        		->where('carrera', 'LA')
                ->whereNotNull('no_control')
                ->where('sexo', 'Masculino')
                ->count('sexo');
        $alumnostotal = DB::table('ss_alumnos')
                ->whereNotNull('no_control')
                ->where('carrera', 'LA')
                ->count('sexo');

    	$alumnos = Alumno::orderBy('id', 'ASC')->whereNotNull('no_control')->where('carrera', 'LA')->paginate(10);
        return view('jefeotro.la.index')->with('alumnos',$alumnos)->with('mujeres',$mujeres)->with('hombres',$hombres)->with('alumnostotal',$alumnostotal);
    }

    public function indexlamujeres()
    {   
    	$mujeres = DB::table('ss_alumnos')
    			->where('carrera', 'LA')
                ->whereNotNull('no_control')
                ->where('sexo', 'Femenino')
                ->count('sexo');

        $hombres = DB::table('ss_alumnos')
        		->where('carrera', 'LA')
                ->whereNotNull('no_control')
                ->where('sexo', 'Masculino')
                ->count('sexo');
        $alumnostotal = DB::table('ss_alumnos')
                ->whereNotNull('no_control')
                ->where('carrera', 'LA')
                ->count('sexo');
		
    	$alumnos = Alumno::orderBy('id', 'ASC')->whereNotNull('no_control')->where('carrera', 'LA')->where('sexo', 'Femenino')->paginate(10);

        return view('jefeotro.la.index')->with('alumnos',$alumnos)->with('mujeres',$mujeres)->with('hombres',$hombres)->with('alumnostotal',$alumnostotal);
    }

    public function indexlahombres()
    {   
    	$mujeres = DB::table('ss_alumnos')
    			->where('carrera', 'LA')
                ->whereNotNull('no_control')
                ->where('sexo', 'Femenino')
                ->count('sexo');

        $hombres = DB::table('ss_alumnos')
        		->where('carrera', 'LA')
                ->whereNotNull('no_control')
                ->where('sexo', 'Masculino')
                ->count('sexo');

        $alumnostotal = DB::table('ss_alumnos')
                ->whereNotNull('no_control')
                ->where('carrera', 'LA')
                ->count('sexo');
		
    	$alumnos = Alumno::orderBy('id', 'ASC')->whereNotNull('no_control')->where('carrera', 'LA')->where('sexo', 'Masculino')->paginate(10);

        return view('jefeotro.la.index')->with('alumnos',$alumnos)->with('mujeres',$mujeres)->with('hombres',$hombres)->with('alumnostotal',$alumnostotal);
    }

    public function indexlasemestre5()
    {   
    	$mujeres = DB::table('ss_alumnos')
    			->where('carrera', 'LA')
                ->whereNotNull('no_control')
    			->where('semestre', '5')
                ->where('sexo', 'Femenino')
                ->count('sexo');

        $hombres = DB::table('ss_alumnos')
    			->where('semestre', '5')
                ->whereNotNull('no_control')
    			->where('carrera', 'LA')
                ->where('sexo', 'Masculino')
                ->count('sexo');

        $alumnostotal = DB::table('ss_alumnos')
                ->whereNotNull('no_control')
                ->where('carrera', 'LA')
                ->where('semestre', '5')
                ->count('sexo');
		
    	$alumnos = Alumno::orderBy('id', 'ASC')->whereNotNull('no_control')->where('carrera', 'LA')->where('semestre', '5')->paginate(10);

        return view('jefeotro.la.semestre5')->with('alumnos',$alumnos)->with('mujeres',$mujeres)->with('hombres',$hombres)->with('alumnostotal',$alumnostotal);
    }

    public function indexlasemestre5mujeres()
    {   
    	$mujeres = DB::table('ss_alumnos')
    			->where('semestre', '5')
                ->whereNotNull('no_control')
    			->where('carrera', 'LA')
                ->where('sexo', 'Femenino')
                ->count('sexo');

        $hombres = DB::table('ss_alumnos')
    			->where('semestre', '5')
                ->whereNotNull('no_control')
    			->where('carrera', 'LA')
                ->where('sexo', 'Masculino')
                ->count('sexo');

        $alumnostotal = DB::table('ss_alumnos')
                ->whereNotNull('no_control')
                ->where('carrera', 'LA')
                ->where('semestre', '5')
                ->count('sexo');
		
    	$alumnos = Alumno::orderBy('id', 'ASC')->whereNotNull('no_control')->where('carrera', 'LA')->where('semestre', '5')->where('sexo', 'Femenino')->paginate(10);

        return view('jefeotro.la.semestre5')->with('alumnos',$alumnos)->with('mujeres',$mujeres)->with('hombres',$hombres)->with('alumnostotal',$alumnostotal);
    }

    public function indexlasemestre5hombres()
    {   
    	$mujeres = DB::table('ss_alumnos')
    			->where('semestre', '5')
                ->whereNotNull('no_control')
    			->where('carrera', 'LA')
                ->where('sexo', 'Femenino')
                ->count('sexo');

        $hombres = DB::table('ss_alumnos')
    			->where('semestre', '5')
                ->whereNotNull('no_control')
    			->where('carrera', 'LA')
                ->where('sexo', 'Masculino')
                ->count('sexo');
		$alumnostotal = DB::table('ss_alumnos')
                ->whereNotNull('no_control')
                ->where('carrera', 'LA')
                ->where('semestre', '5')
                ->count('sexo');

    	$alumnos = Alumno::orderBy('id', 'ASC')->whereNotNull('no_control')->where('carrera', 'LA')->where('semestre', '5')->where('sexo', 'Masculino')->paginate(10);

        return view('jefeotro.la.semestre5')->with('alumnos',$alumnos)->with('mujeres',$mujeres)->with('hombres',$hombres)->with('alumnostotal',$alumnostotal);
    }

    public function indexlasemestre6()
    {   
    	$mujeres = DB::table('ss_alumnos')
    			->where('semestre', '6')
                ->whereNotNull('no_control')
    			->where('carrera', 'LA')
                ->where('sexo', 'Femenino')
                ->count('sexo');

        $hombres = DB::table('ss_alumnos')
    			->where('semestre', '6')
                ->whereNotNull('no_control')
    			->where('carrera', 'LA')
                ->where('sexo', 'Masculino')
                ->count('sexo');

        $alumnostotal = DB::table('ss_alumnos')
                ->whereNotNull('no_control')
                ->where('semestre', '6')
                ->where('carrera', 'LA')
                ->count('sexo');
		
    	$alumnos = Alumno::orderBy('id', 'ASC')->whereNotNull('no_control')->where('carrera', 'LA')->where('semestre', '6')->paginate(10);

        return view('jefeotro.la.semestre6')->with('alumnos',$alumnos)->with('mujeres',$mujeres)->with('hombres',$hombres)->with('alumnostotal',$alumnostotal);
    }

    public function indexlasemestre6mujeres()
    {   
    	$mujeres = DB::table('ss_alumnos')
    			->where('semestre', '6')
                ->whereNotNull('no_control')
    			->where('carrera', 'LA')
                ->where('sexo', 'Femenino')
                ->count('sexo');

        $hombres = DB::table('ss_alumnos')
    			->where('semestre', '6')
                ->whereNotNull('no_control')
    			->where('carrera', 'LA')
                ->where('sexo', 'Masculino')
                ->count('sexo');

        $alumnostotal = DB::table('ss_alumnos')
                ->whereNotNull('no_control')
                ->where('semestre', '6')
                ->where('carrera', 'LA')
                ->count('sexo');
		
    	$alumnos = Alumno::orderBy('id', 'ASC')->whereNotNull('no_control')->where('carrera', 'LA')->where('semestre', '6')->where('sexo', 'Femenino')->paginate(10);

        return view('jefeotro.la.semestre6')->with('alumnos',$alumnos)->with('mujeres',$mujeres)->with('hombres',$hombres)->with('alumnostotal',$alumnostotal);
    }

    public function indexlasemestre6hombres()
    {   
    	$mujeres = DB::table('ss_alumnos')
    			->where('semestre', '6')
                ->whereNotNull('no_control')
    			->where('carrera', 'LA')
                ->where('sexo', 'Femenino')
                ->count('sexo');

        $hombres = DB::table('ss_alumnos')
    			->where('semestre', '6')
                ->whereNotNull('no_control')
    			->where('carrera', 'LA')
                ->where('sexo', 'Masculino')
                ->count('sexo');
		$alumnostotal = DB::table('ss_alumnos')
                ->whereNotNull('no_control')
                ->where('carrera', 'LA')
                ->where('semestre', '6')
                ->count('sexo');
                
    	$alumnos = Alumno::orderBy('id', 'ASC')->whereNotNull('no_control')->where('carrera', 'LA')->where('semestre', '6')->where('sexo', 'Masculino')->paginate(10);

        return view('jefeotro.la.semestre6')->with('alumnos',$alumnos)->with('mujeres',$mujeres)->with('hombres',$hombres)->with('alumnostotal',$alumnostotal);
    }

    public function indexlasemestre7()
    {   
    	$mujeres = DB::table('ss_alumnos')
    			->where('semestre', '7')
                ->whereNotNull('no_control')
    			->where('carrera', 'LA')
                ->where('sexo', 'Femenino')
                ->count('sexo');

        $hombres = DB::table('ss_alumnos')
    			->where('semestre', '7')
                ->whereNotNull('no_control')
    			->where('carrera', 'LA')
                ->where('sexo', 'Masculino')
                ->count('sexo');

        $alumnostotal = DB::table('ss_alumnos')
                ->whereNotNull('no_control')
                ->where('carrera', 'LA')
                ->where('semestre', '7')
                ->count('sexo');
		
    	$alumnos = Alumno::orderBy('id', 'ASC')->whereNotNull('no_control')->where('carrera', 'LA')->where('semestre', '7')->paginate(10);

        return view('jefeotro.la.semestre7')->with('alumnos',$alumnos)->with('mujeres',$mujeres)->with('hombres',$hombres)->with('alumnostotal',$alumnostotal);
    }

    public function indexlasemestre7mujeres()
    {   
    	$mujeres = DB::table('ss_alumnos')
    			->where('semestre', '7')
                ->whereNotNull('no_control')
    			->where('carrera', 'LA')
                ->where('sexo', 'Femenino')
                ->count('sexo');

        $hombres = DB::table('ss_alumnos')
    			->where('semestre', '7')
                ->whereNotNull('no_control')
    			->where('carrera', 'LA')
                ->where('sexo', 'Masculino')
                ->count('sexo');

        $alumnostotal = DB::table('ss_alumnos')
                ->whereNotNull('no_control')
                ->where('carrera', 'LA')
                ->where('semestre', '7')
                ->count('sexo');
		
    	$alumnos = Alumno::orderBy('id', 'ASC')->whereNotNull('no_control')->where('carrera', 'LA')->where('semestre', '7')->where('sexo', 'Femenino')->paginate(10);

        return view('jefeotro.la.semestre7')->with('alumnos',$alumnos)->with('mujeres',$mujeres)->with('hombres',$hombres)->with('alumnostotal',$alumnostotal);
    }

    public function indexlasemestre7hombres()
    {   
    	$mujeres = DB::table('ss_alumnos')
    			->where('semestre', '7')
                ->whereNotNull('no_control')
    			->where('carrera', 'LA')
                ->where('sexo', 'Femenino')
                ->count('sexo');

        $hombres = DB::table('ss_alumnos')
    			->where('semestre', '7')
                ->whereNotNull('no_control')
    			->where('carrera', 'LA')
                ->where('sexo', 'Masculino')
                ->count('sexo');
		$alumnostotal = DB::table('ss_alumnos')
                ->whereNotNull('no_control')
                ->where('carrera', 'LA')
                ->where('semestre', '7')
                ->count('sexo');
                
    	$alumnos = Alumno::orderBy('id', 'ASC')->whereNotNull('no_control')->where('carrera', 'LA')->where('semestre', '7')->where('sexo', 'Masculino')->paginate(10);

        return view('jefeotro.la.semestre7')->with('alumnos',$alumnos)->with('mujeres',$mujeres)->with('hombres',$hombres)->with('alumnostotal',$alumnostotal);
    }

    public function indexlasemestre8()
    {   
    	$mujeres = DB::table('ss_alumnos')
    			->where('semestre', '8')
                ->whereNotNull('no_control')
    			->where('carrera', 'LA')
                ->where('sexo', 'Femenino')
                ->count('sexo');

        $hombres = DB::table('ss_alumnos')
    			->where('semestre', '8')
                ->whereNotNull('no_control')
    			->where('carrera', 'LA')
                ->where('sexo', 'Masculino')
                ->count('sexo');

        $alumnostotal = DB::table('ss_alumnos')
                ->whereNotNull('no_control')
                ->where('carrera', 'LA')
                ->where('semestre', '8')
                ->count('sexo');
		
    	$alumnos = Alumno::orderBy('id', 'ASC')->whereNotNull('no_control')->where('carrera', 'LA')->where('semestre', '8')->paginate(10);

        return view('jefeotro.la.semestre8')->with('alumnos',$alumnos)->with('mujeres',$mujeres)->with('hombres',$hombres)->with('alumnostotal',$alumnostotal);
    }

    public function indexlasemestre8mujeres()
    {   
    	$mujeres = DB::table('ss_alumnos')
    			->where('semestre', '8')
                ->whereNotNull('no_control')
    			->where('carrera', 'LA')
                ->where('sexo', 'Femenino')
                ->count('sexo');

        $hombres = DB::table('ss_alumnos')
    			->where('semestre', '8')
                ->whereNotNull('no_control')
    			->where('carrera', 'LA')
                ->where('sexo', 'Masculino')
                ->count('sexo');

        $alumnostotal = DB::table('ss_alumnos')
                ->whereNotNull('no_control')
                ->where('carrera', 'LA')
                ->where('semestre', '8')
                ->count('sexo');
		
    	$alumnos = Alumno::orderBy('id', 'ASC')->whereNotNull('no_control')->where('carrera', 'LA')->where('semestre', '8')->where('sexo', 'Femenino')->paginate(10);

        return view('jefeotro.la.semestre8')->with('alumnos',$alumnos)->with('mujeres',$mujeres)->with('hombres',$hombres)->with('alumnostotal',$alumnostotal);
    }

    public function indexlasemestre8hombres()
    {   
    	$mujeres = DB::table('ss_alumnos')
    			->where('semestre', '8')
                ->whereNotNull('no_control')
    			->where('carrera', 'LA')
                ->where('sexo', 'Femenino')
                ->count('sexo');

        $hombres = DB::table('ss_alumnos')
    			->where('semestre', '8')
                ->whereNotNull('no_control')
    			->where('carrera', 'LA')
                ->where('sexo', 'Masculino')
                ->count('sexo');
		$alumnostotal = DB::table('ss_alumnos')
                ->whereNotNull('no_control')
                ->where('carrera', 'LA')
                ->where('semestre', '8')
                ->count('sexo');
                
    	$alumnos = Alumno::orderBy('id', 'ASC')->whereNotNull('no_control')->where('carrera', 'LA')->where('semestre', '8')->where('sexo', 'Masculino')->paginate(10);

        return view('jefeotro.la.semestre8')->with('alumnos',$alumnos)->with('mujeres',$mujeres)->with('hombres',$hombres)->with('alumnostotal',$alumnostotal);
    }

    //funciones para TSM
    public function indextsm()
    {   
    	$mujeres = DB::table('ss_alumnos')
    			->where('carrera', 'TSM')
                ->whereNotNull('no_control')
                ->where('sexo', 'Femenino')
                ->count('sexo');

        $hombres = DB::table('ss_alumnos')
        		->where('carrera', 'TSM')
                ->whereNotNull('no_control')
                ->where('sexo', 'Masculino')
                ->count('sexo');
        $alumnostotal = DB::table('ss_alumnos')
                ->whereNotNull('no_control')
                ->where('carrera', 'TSM')
                ->count('sexo');

    	$alumnos = Alumno::orderBy('id', 'ASC')->whereNotNull('no_control')->where('carrera', 'TSM')->paginate(10);
        return view('jefeotro.tsm.index')->with('alumnos',$alumnos)->with('mujeres',$mujeres)->with('hombres',$hombres)->with('alumnostotal',$alumnostotal);
    }

    public function indextsmmujeres()
    {   
    	$mujeres = DB::table('ss_alumnos')
    			->where('carrera', 'TSM')
                ->whereNotNull('no_control')
                ->where('sexo', 'Femenino')
                ->count('sexo');

        $hombres = DB::table('ss_alumnos')
        		->where('carrera', 'TSM')
                ->whereNotNull('no_control')
                ->where('sexo', 'Masculino')
                ->count('sexo');
        $alumnostotal = DB::table('ss_alumnos')
                ->whereNotNull('no_control')
                ->where('carrera', 'TSM')
                ->count('sexo');
		
    	$alumnos = Alumno::orderBy('id', 'ASC')->whereNotNull('no_control')->where('carrera', 'TSM')->where('sexo', 'Femenino')->paginate(10);

        return view('jefeotro.tsm.index')->with('alumnos',$alumnos)->with('mujeres',$mujeres)->with('hombres',$hombres)->with('alumnostotal',$alumnostotal);
    }

    public function indextsmhombres()
    {   
    	$mujeres = DB::table('ss_alumnos')
    			->where('carrera', 'TSM')
                ->whereNotNull('no_control')
                ->where('sexo', 'Femenino')
                ->count('sexo');

        $hombres = DB::table('ss_alumnos')
        		->where('carrera', 'TSM')
                ->whereNotNull('no_control')
                ->where('sexo', 'Masculino')
                ->count('sexo');

        $alumnostotal = DB::table('ss_alumnos')
                ->whereNotNull('no_control')
                ->where('carrera', 'TSM')
                ->count('sexo');
		
    	$alumnos = Alumno::orderBy('id', 'ASC')->whereNotNull('no_control')->where('carrera', 'TSM')->where('sexo', 'Masculino')->paginate(10);

        return view('jefeotro.tsm.index')->with('alumnos',$alumnos)->with('mujeres',$mujeres)->with('hombres',$hombres)->with('alumnostotal',$alumnostotal);
    }

    public function indextsmsemestre5()
    {   
    	$mujeres = DB::table('ss_alumnos')
    			->where('carrera', 'TSM')
                ->whereNotNull('no_control')
    			->where('semestre', '5')
                ->where('sexo', 'Femenino')
                ->count('sexo');

        $hombres = DB::table('ss_alumnos')
    			->where('semestre', '5')
                ->whereNotNull('no_control')
    			->where('carrera', 'TSM')
                ->where('sexo', 'Masculino')
                ->count('sexo');

        $alumnostotal = DB::table('ss_alumnos')
                ->whereNotNull('no_control')
                ->where('carrera', 'TSM')
                ->where('semestre', '5')
                ->count('sexo');
		
    	$alumnos = Alumno::orderBy('id', 'ASC')->whereNotNull('no_control')->where('carrera', 'TSM')->where('semestre', '5')->paginate(10);

        return view('jefeotro.tsm.semestre5')->with('alumnos',$alumnos)->with('mujeres',$mujeres)->with('hombres',$hombres)->with('alumnostotal',$alumnostotal);
    }

    public function indextsmsemestre5mujeres()
    {   
    	$mujeres = DB::table('ss_alumnos')
    			->where('semestre', '5')
                ->whereNotNull('no_control')
    			->where('carrera', 'TSM')
                ->where('sexo', 'Femenino')
                ->count('sexo');

        $hombres = DB::table('ss_alumnos')
    			->where('semestre', '5')
                ->whereNotNull('no_control')
    			->where('carrera', 'TSM')
                ->where('sexo', 'Masculino')
                ->count('sexo');

        $alumnostotal = DB::table('ss_alumnos')
                ->whereNotNull('no_control')
                ->where('carrera', 'TSM')
                ->where('semestre', '5')
                ->count('sexo');
		
    	$alumnos = Alumno::orderBy('id', 'ASC')->whereNotNull('no_control')->where('carrera', 'TSM')->where('semestre', '5')->where('sexo', 'Femenino')->paginate(10);

        return view('jefeotro.tsm.semestre5')->with('alumnos',$alumnos)->with('mujeres',$mujeres)->with('hombres',$hombres)->with('alumnostotal',$alumnostotal);
    }

    public function indextsmsemestre5hombres()
    {   
    	$mujeres = DB::table('ss_alumnos')
    			->where('semestre', '5')
                ->whereNotNull('no_control')
    			->where('carrera', 'TSM')
                ->where('sexo', 'Femenino')
                ->count('sexo');

        $hombres = DB::table('ss_alumnos')
    			->where('semestre', '5')
                ->whereNotNull('no_control')
    			->where('carrera', 'TSM')
                ->where('sexo', 'Masculino')
                ->count('sexo');
		$alumnostotal = DB::table('ss_alumnos')
                ->whereNotNull('no_control')
                ->where('carrera', 'TSM')
                ->where('semestre', '5')
                ->count('sexo');

    	$alumnos = Alumno::orderBy('id', 'ASC')->whereNotNull('no_control')->where('carrera', 'TSM')->where('semestre', '5')->where('sexo', 'Masculino')->paginate(10);

        return view('jefeotro.tsm.semestre5')->with('alumnos',$alumnos)->with('mujeres',$mujeres)->with('hombres',$hombres)->with('alumnostotal',$alumnostotal);
    }

    public function indextsmsemestre6()
    {   
    	$mujeres = DB::table('ss_alumnos')
    			->where('semestre', '6')
                ->whereNotNull('no_control')
    			->where('carrera', 'TSM')
                ->where('sexo', 'Femenino')
                ->count('sexo');

        $hombres = DB::table('ss_alumnos')
    			->where('semestre', '6')
                ->whereNotNull('no_control')
    			->where('carrera', 'TSM')
                ->where('sexo', 'Masculino')
                ->count('sexo');

        $alumnostotal = DB::table('ss_alumnos')
                ->whereNotNull('no_control')
                ->where('semestre', '6')
                ->where('carrera', 'TSM')
                ->count('sexo');
		
    	$alumnos = Alumno::orderBy('id', 'ASC')->whereNotNull('no_control')->where('carrera', 'TSM')->where('semestre', '6')->paginate(10);

        return view('jefeotro.tsm.semestre6')->with('alumnos',$alumnos)->with('mujeres',$mujeres)->with('hombres',$hombres)->with('alumnostotal',$alumnostotal);
    }

    public function indextsmsemestre6mujeres()
    {   
    	$mujeres = DB::table('ss_alumnos')
    			->where('semestre', '6')
                ->whereNotNull('no_control')
    			->where('carrera', 'TSM')
                ->where('sexo', 'Femenino')
                ->count('sexo');

        $hombres = DB::table('ss_alumnos')
    			->where('semestre', '6')
                ->whereNotNull('no_control')
    			->where('carrera', 'TSM')
                ->where('sexo', 'Masculino')
                ->count('sexo');

        $alumnostotal = DB::table('ss_alumnos')
                ->whereNotNull('no_control')
                ->where('semestre', '6')
                ->where('carrera', 'TSM')
                ->count('sexo');
		
    	$alumnos = Alumno::orderBy('id', 'ASC')->whereNotNull('no_control')->where('carrera', 'TSM')->where('semestre', '6')->where('sexo', 'Femenino')->paginate(10);

        return view('jefeotro.tsm.semestre6')->with('alumnos',$alumnos)->with('mujeres',$mujeres)->with('hombres',$hombres)->with('alumnostotal',$alumnostotal);
    }

    public function indextsmsemestre6hombres()
    {   
    	$mujeres = DB::table('ss_alumnos')
    			->where('semestre', '6')
                ->whereNotNull('no_control')
    			->where('carrera', 'TSM')
                ->where('sexo', 'Femenino')
                ->count('sexo');

        $hombres = DB::table('ss_alumnos')
    			->where('semestre', '6')
                ->whereNotNull('no_control')
    			->where('carrera', 'TSM')
                ->where('sexo', 'Masculino')
                ->count('sexo');
		$alumnostotal = DB::table('ss_alumnos')
                ->whereNotNull('no_control')
                ->where('carrera', 'TMS')
                ->where('semestre', '6')
                ->count('sexo');
                
    	$alumnos = Alumno::orderBy('id', 'ASC')->whereNotNull('no_control')->where('carrera', 'TSM')->where('semestre', '6')->where('sexo', 'Masculino')->paginate(10);

        return view('jefeotro.tsm.semestre6')->with('alumnos',$alumnos)->with('mujeres',$mujeres)->with('hombres',$hombres)->with('alumnostotal',$alumnostotal);
    }

    public function indextsmsemestre7()
    {   
    	$mujeres = DB::table('ss_alumnos')
    			->where('semestre', '7')
    			->where('carrera', 'TSM')
                ->whereNotNull('no_control')
                ->where('sexo', 'Femenino')
                ->count('sexo');

        $hombres = DB::table('ss_alumnos')
    			->where('semestre', '7')
                ->whereNotNull('no_control')
    			->where('carrera', 'TSM')
                ->where('sexo', 'Masculino')
                ->count('sexo');

        $alumnostotal = DB::table('ss_alumnos')
                ->whereNotNull('no_control')
                ->where('carrera', 'TSM')
                ->where('semestre', '7')
                ->count('sexo');
		
    	$alumnos = Alumno::orderBy('id', 'ASC')->whereNotNull('no_control')->where('carrera', 'TSM')->where('semestre', '7')->paginate(10);

        return view('jefeotro.tsm.semestre7')->with('alumnos',$alumnos)->with('mujeres',$mujeres)->with('hombres',$hombres)->with('alumnostotal',$alumnostotal);
    }

    public function indextsmsemestre7mujeres()
    {   
    	$mujeres = DB::table('ss_alumnos')
    			->where('semestre', '7')
                ->whereNotNull('no_control')
    			->where('carrera', 'TSM')
                ->where('sexo', 'Femenino')
                ->count('sexo');

        $hombres = DB::table('ss_alumnos')
    			->where('semestre', '7')
                ->whereNotNull('no_control')
    			->where('carrera', 'TSM')
                ->where('sexo', 'Masculino')
                ->count('sexo');

        $alumnostotal = DB::table('ss_alumnos')
                ->whereNotNull('no_control')
                ->where('carrera', 'TSM')
                ->where('semestre', '7')
                ->count('sexo');
		
    	$alumnos = Alumno::orderBy('id', 'ASC')->whereNotNull('no_control')->where('carrera', 'TSM')->where('semestre', '7')->where('sexo', 'Femenino')->paginate(10);

        return view('jefeotro.tsm.semestre7')->with('alumnos',$alumnos)->with('mujeres',$mujeres)->with('hombres',$hombres)->with('alumnostotal',$alumnostotal);
    }

    public function indextsmsemestre7hombres()
    {   
    	$mujeres = DB::table('ss_alumnos')
    			->where('semestre', '7')
                ->whereNotNull('no_control')
    			->where('carrera', 'TSM')
                ->where('sexo', 'Femenino')
                ->count('sexo');

        $hombres = DB::table('ss_alumnos')
    			->where('semestre', '7')
                ->whereNotNull('no_control')
    			->where('carrera', 'TSM')
                ->where('sexo', 'Masculino')
                ->count('sexo');
		$alumnostotal = DB::table('ss_alumnos')
                ->whereNotNull('no_control')
                ->where('carrera', 'TSM')
                ->where('semestre', '7')
                ->count('sexo');
                
    	$alumnos = Alumno::orderBy('id', 'ASC')->where('carrera', 'TSM')->where('semestre', '7')->where('sexo', 'Masculino')->paginate(10);

        return view('jefeotro.tsm.semestre7')->whereNotNull('no_control')->with('alumnos',$alumnos)->with('mujeres',$mujeres)->with('hombres',$hombres)->with('alumnostotal',$alumnostotal);
    }

    public function indextsmsemestre8()
    {   
    	$mujeres = DB::table('ss_alumnos')
    			->where('semestre', '8')
                ->whereNotNull('no_control')
    			->where('carrera', 'TSM')
                ->where('sexo', 'Femenino')
                ->count('sexo');

        $hombres = DB::table('ss_alumnos')
    			->where('semestre', '8')
                ->whereNotNull('no_control')
    			->where('carrera', 'TSM')
                ->where('sexo', 'Masculino')
                ->count('sexo');

        $alumnostotal = DB::table('ss_alumnos')
                ->whereNotNull('no_control')
                ->where('carrera', 'TSM')
                ->where('semestre', '8')
                ->count('sexo');
		
    	$alumnos = Alumno::orderBy('id', 'ASC')->whereNotNull('no_control')->where('carrera', 'TSM')->where('semestre', '8')->paginate(10);

        return view('jefeotro.tsm.semestre8')->with('alumnos',$alumnos)->with('mujeres',$mujeres)->with('hombres',$hombres)->with('alumnostotal',$alumnostotal);
    }

    public function indextsmsemestre8mujeres()
    {   
    	$mujeres = DB::table('ss_alumnos')
    			->where('semestre', '8')
                ->whereNotNull('no_control')
    			->where('carrera', 'TSM')
                ->where('sexo', 'Femenino')
                ->count('sexo');

        $hombres = DB::table('ss_alumnos')
    			->where('semestre', '8')
                ->whereNotNull('no_control')
    			->where('carrera', 'TSM')
                ->where('sexo', 'Masculino')
                ->count('sexo');

        $alumnostotal = DB::table('ss_alumnos')
                ->whereNotNull('no_control')
                ->where('carrera', 'TSM')
                ->where('semestre', '8')
                ->count('sexo');
		
    	$alumnos = Alumno::orderBy('id', 'ASC')->whereNotNull('no_control')->where('carrera', 'TSM')->where('semestre', '8')->where('sexo', 'Femenino')->paginate(10);

        return view('jefeotro.tsm.semestre8')->with('alumnos',$alumnos)->with('mujeres',$mujeres)->with('hombres',$hombres)->with('alumnostotal',$alumnostotal);
    }

    public function indextsmsemestre8hombres()
    {   
    	$mujeres = DB::table('ss_alumnos')
    			->where('semestre', '8')
                ->whereNotNull('no_control')
    			->where('carrera', 'TSM')
                ->where('sexo', 'Femenino')
                ->count('sexo');

        $hombres = DB::table('ss_alumnos')
    			->where('semestre', '8')
                ->whereNotNull('no_control')
    			->where('carrera', 'TSM')
                ->where('sexo', 'Masculino')
                ->count('sexo');
		$alumnostotal = DB::table('ss_alumnos')
                ->whereNotNull('no_control')
                ->where('carrera', 'TSM')
                ->where('semestre', '8')
                ->count('sexo');
                
    	$alumnos = Alumno::orderBy('id', 'ASC')->whereNotNull('no_control')->where('carrera', 'TSM')->where('semestre', '8')->where('sexo', 'Masculino')->paginate(10);

        return view('jefeotro.tsm.semestre8')->with('alumnos',$alumnos)->with('mujeres',$mujeres)->with('hombres',$hombres)->with('alumnostotal',$alumnostotal);
    }

    //funciones para INFS
    public function indexinfs()
    {   
    	$mujeres = DB::table('ss_alumnos')
    			->where('carrera', 'INFS')
                ->whereNotNull('no_control')
                ->where('sexo', 'Femenino')
                ->count('sexo');

        $hombres = DB::table('ss_alumnos')
        		->where('carrera', 'INFS')
                ->whereNotNull('no_control')
                ->where('sexo', 'Masculino')
                ->count('sexo');
        $alumnostotal = DB::table('ss_alumnos')
                ->whereNotNull('no_control')
                ->where('carrera', 'INFS')
                ->count('sexo');

    	$alumnos = Alumno::orderBy('id', 'ASC')->whereNotNull('no_control')->where('carrera', 'INFS')->paginate(10);
        return view('jefeotro.infs.index')->with('alumnos',$alumnos)->with('mujeres',$mujeres)->with('hombres',$hombres)->with('alumnostotal',$alumnostotal);
    }

    public function indexinfsmujeres()
    {   
    	$mujeres = DB::table('ss_alumnos')
    			->where('carrera', 'INFS')
                ->whereNotNull('no_control')
                ->where('sexo', 'Femenino')
                ->count('sexo');

        $hombres = DB::table('ss_alumnos')
        		->where('carrera', 'INFS')
                ->whereNotNull('no_control')
                ->where('sexo', 'Masculino')
                ->count('sexo');
        $alumnostotal = DB::table('ss_alumnos')
                ->whereNotNull('no_control')
                ->where('carrera', 'INFS')
                ->count('sexo');
		
    	$alumnos = Alumno::orderBy('id', 'ASC')->whereNotNull('no_control')->where('carrera', 'INFS')->where('sexo', 'Femenino')->paginate(10);

        return view('jefeotro.infs.index')->with('alumnos',$alumnos)->with('mujeres',$mujeres)->with('hombres',$hombres)->with('alumnostotal',$alumnostotal);
    }

    public function indexinfshombres()
    {   
    	$mujeres = DB::table('ss_alumnos')
    			->where('carrera', 'INFS')
                ->whereNotNull('no_control')
                ->where('sexo', 'Femenino')
                ->count('sexo');

        $hombres = DB::table('ss_alumnos')
        		->where('carrera', 'INFS')
                ->whereNotNull('no_control')
                ->where('sexo', 'Masculino')
                ->count('sexo');

        $alumnostotal = DB::table('ss_alumnos')
                ->whereNotNull('no_control')
                ->where('carrera', 'INFS')
                ->count('sexo');
		
    	$alumnos = Alumno::orderBy('id', 'ASC')->whereNotNull('no_control')->where('carrera', 'INFS')->where('sexo', 'Masculino')->paginate(10);

        return view('jefeotro.infs.index')->with('alumnos',$alumnos)->with('mujeres',$mujeres)->with('hombres',$hombres)->with('alumnostotal',$alumnostotal);
    }

    public function indexinfssemestre5()
    {   
    	$mujeres = DB::table('ss_alumnos')
    			->where('carrera', 'INFS')
                ->whereNotNull('no_control')
    			->where('semestre', '5')
                ->where('sexo', 'Femenino')
                ->count('sexo');

        $hombres = DB::table('ss_alumnos')
    			->where('semestre', '5')
                ->whereNotNull('no_control')
    			->where('carrera', 'INFS')
                ->where('sexo', 'Masculino')
                ->count('sexo');

        $alumnostotal = DB::table('ss_alumnos')
                ->whereNotNull('no_control')
                ->where('carrera', 'INFS')
                ->where('semestre', '5')
                ->count('sexo');
		
    	$alumnos = Alumno::orderBy('id', 'ASC')->whereNotNull('no_control')->where('carrera', 'INFS')->where('semestre', '5')->paginate(10);

        return view('jefeotro.infs.semestre5')->with('alumnos',$alumnos)->with('mujeres',$mujeres)->with('hombres',$hombres)->with('alumnostotal',$alumnostotal);
    }

    public function indexinfssemestre5mujeres()
    {   
    	$mujeres = DB::table('ss_alumnos')
    			->where('semestre', '5')
                ->whereNotNull('no_control')
    			->where('carrera', 'INFS')
                ->where('sexo', 'Femenino')
                ->count('sexo');

        $hombres = DB::table('ss_alumnos')
    			->where('semestre', '5')
                ->whereNotNull('no_control')
    			->where('carrera', 'INFS')
                ->where('sexo', 'Masculino')
                ->count('sexo');

        $alumnostotal = DB::table('ss_alumnos')
                ->whereNotNull('no_control')
                ->where('carrera', 'INFS')
                ->where('semestre', '5')
                ->count('sexo');
		
    	$alumnos = Alumno::orderBy('id', 'ASC')->whereNotNull('no_control')->where('carrera', 'INFS')->where('semestre', '5')->where('sexo', 'Femenino')->paginate(10);

        return view('jefeotro.infs.semestre5')->with('alumnos',$alumnos)->with('mujeres',$mujeres)->with('hombres',$hombres)->with('alumnostotal',$alumnostotal);
    }

    public function indexinfssemestre5hombres()
    {   
    	$mujeres = DB::table('ss_alumnos')
    			->where('semestre', '5')
    			->where('carrera', 'INFS')
                ->whereNotNull('no_control')
                ->where('sexo', 'Femenino')
                ->count('sexo');

        $hombres = DB::table('ss_alumnos')
    			->where('semestre', '5')
    			->where('carrera', 'INFS')
                ->whereNotNull('no_control')
                ->where('sexo', 'Masculino')
                ->count('sexo');
		$alumnostotal = DB::table('ss_alumnos')
                ->whereNotNull('no_control')
                ->where('carrera', 'INFS')
                ->where('semestre', '5')
                ->count('sexo');

    	$alumnos = Alumno::orderBy('id', 'ASC')->whereNotNull('no_control')->where('carrera', 'INFS')->where('semestre', '5')->where('sexo', 'Masculino')->paginate(10);

        return view('jefeotro.infs.semestre5')->with('alumnos',$alumnos)->with('mujeres',$mujeres)->with('hombres',$hombres)->with('alumnostotal',$alumnostotal);
    }

    public function indexinfssemestre6()
    {   
    	$mujeres = DB::table('ss_alumnos')
    			->where('semestre', '6')
                ->whereNotNull('no_control')
    			->where('carrera', 'INFS')
                ->where('sexo', 'Femenino')
                ->count('sexo');

        $hombres = DB::table('ss_alumnos')
    			->where('semestre', '6')
                ->whereNotNull('no_control')
    			->where('carrera', 'INFS')
                ->where('sexo', 'Masculino')
                ->count('sexo');

        $alumnostotal = DB::table('ss_alumnos')
                ->whereNotNull('no_control')
                ->where('semestre', '6')
                ->where('carrera', 'INFS')
                ->count('sexo');
		
    	$alumnos = Alumno::orderBy('id', 'ASC')->whereNotNull('no_control')->where('carrera', 'INFS')->where('semestre', '6')->paginate(10);

        return view('jefeotro.infs.semestre6')->with('alumnos',$alumnos)->with('mujeres',$mujeres)->with('hombres',$hombres)->with('alumnostotal',$alumnostotal);
    }

    public function indexinfssemestre6mujeres()
    {   
    	$mujeres = DB::table('ss_alumnos')
    			->where('semestre', '6')
                ->whereNotNull('no_control')
    			->where('carrera', 'INFS')
                ->where('sexo', 'Femenino')
                ->count('sexo');

        $hombres = DB::table('ss_alumnos')
    			->where('semestre', '6')
                ->whereNotNull('no_control')
    			->where('carrera', 'INFS')
                ->where('sexo', 'Masculino')
                ->count('sexo');

        $alumnostotal = DB::table('ss_alumnos')
                ->whereNotNull('no_control')
                ->where('semestre', '6')
                ->where('carrera', 'INFS')
                ->count('sexo');
		
    	$alumnos = Alumno::orderBy('id', 'ASC')->whereNotNull('no_control')->where('carrera', 'INFS')->where('semestre', '6')->where('sexo', 'Femenino')->paginate(10);

        return view('jefeotro.infs.semestre6')->with('alumnos',$alumnos)->with('mujeres',$mujeres)->with('hombres',$hombres)->with('alumnostotal',$alumnostotal);
    }

    public function indexinfssemestre6hombres()
    {   
    	$mujeres = DB::table('ss_alumnos')
    			->where('semestre', '6')
                ->whereNotNull('no_control')
    			->where('carrera', 'INFS')
                ->where('sexo', 'Femenino')
                ->count('sexo');

        $hombres = DB::table('ss_alumnos')
    			->where('semestre', '6')
                ->whereNotNull('no_control')
    			->where('carrera', 'INFS')
                ->where('sexo', 'Masculino')
                ->count('sexo');
		$alumnostotal = DB::table('ss_alumnos')
                ->whereNotNull('no_control')
                ->where('carrera', 'INFS')
                ->where('semestre', '6')
                ->count('sexo');
                
    	$alumnos = Alumno::orderBy('id', 'ASC')->whereNotNull('no_control')->where('carrera', 'INFS')->where('semestre', '6')->where('sexo', 'Masculino')->paginate(10);

        return view('jefeotro.infs.semestre6')->with('alumnos',$alumnos)->with('mujeres',$mujeres)->with('hombres',$hombres)->with('alumnostotal',$alumnostotal);
    }

    public function indexinfssemestre7()
    {   
    	$mujeres = DB::table('ss_alumnos')
    			->where('semestre', '7')
                ->whereNotNull('no_control')
    			->where('carrera', 'INFS')
                ->where('sexo', 'Femenino')
                ->count('sexo');

        $hombres = DB::table('ss_alumnos')
    			->where('semestre', '7')
                ->whereNotNull('no_control')
    			->where('carrera', 'INFS')
                ->where('sexo', 'Masculino')
                ->count('sexo');

        $alumnostotal = DB::table('ss_alumnos')
                ->whereNotNull('no_control')
                ->where('carrera', 'INFS')
                ->where('semestre', '7')
                ->count('sexo');
		
    	$alumnos = Alumno::orderBy('id', 'ASC')->whereNotNull('no_control')->where('carrera', 'INFS')->where('semestre', '7')->paginate(10);

        return view('jefeotro.infs.semestre7')->with('alumnos',$alumnos)->with('mujeres',$mujeres)->with('hombres',$hombres)->with('alumnostotal',$alumnostotal);
    }

    public function indexinfssemestre7mujeres()
    {   
    	$mujeres = DB::table('ss_alumnos')
    			->where('semestre', '7')
                ->whereNotNull('no_control')
    			->where('carrera', 'INFS')
                ->where('sexo', 'Femenino')
                ->count('sexo');

        $hombres = DB::table('ss_alumnos')
    			->where('semestre', '7')
                ->whereNotNull('no_control')
    			->where('carrera', 'INFS')
                ->where('sexo', 'Masculino')
                ->count('sexo');

        $alumnostotal = DB::table('ss_alumnos')
                ->whereNotNull('no_control')
                ->where('carrera', 'INFS')
                ->where('semestre', '7')
                ->count('sexo');
		
    	$alumnos = Alumno::orderBy('id', 'ASC')->whereNotNull('no_control')->where('carrera', 'INFS')->where('semestre', '7')->where('sexo', 'Femenino')->paginate(10);

        return view('jefeotro.infs.semestre7')->with('alumnos',$alumnos)->with('mujeres',$mujeres)->with('hombres',$hombres)->with('alumnostotal',$alumnostotal);
    }

    public function indexifssemestre7hombres()
    {   
    	$mujeres = DB::table('ss_alumnos')
    			->where('semestre', '7')
                ->whereNotNull('no_control')
    			->where('carrera', 'INFS')
                ->where('sexo', 'Femenino')
                ->count('sexo');

        $hombres = DB::table('ss_alumnos')
    			->where('semestre', '7')
                ->whereNotNull('no_control')
    			->where('carrera', 'INFS')
                ->where('sexo', 'Masculino')
                ->count('sexo');
		$alumnostotal = DB::table('ss_alumnos')
                ->whereNotNull('no_control')
                ->where('carrera', 'INFS')
                ->where('semestre', '7')
                ->count('sexo');
                
    	$alumnos = Alumno::orderBy('id', 'ASC')->whereNotNull('no_control')->where('carrera', 'INFS')->where('semestre', '7')->where('sexo', 'Masculino')->paginate(10);

        return view('jefeotro.infs.semestre7')->with('alumnos',$alumnos)->with('mujeres',$mujeres)->with('hombres',$hombres)->with('alumnostotal',$alumnostotal);
    }

    public function indexinfssemestre8()
    {   
    	$mujeres = DB::table('ss_alumnos')
    			->where('semestre', '8')
                ->whereNotNull('no_control')
    			->where('carrera', 'INFS')
                ->where('sexo', 'Femenino')
                ->count('sexo');

        $hombres = DB::table('ss_alumnos')
    			->where('semestre', '8')
                ->whereNotNull('no_control')
    			->where('carrera', 'INFS')
                ->where('sexo', 'Masculino')
                ->count('sexo');

        $alumnostotal = DB::table('ss_alumnos')
                ->whereNotNull('no_control')
                ->where('carrera', 'INFS')
                ->where('semestre', '8')
                ->count('sexo');
		
    	$alumnos = Alumno::orderBy('id', 'ASC')->whereNotNull('no_control')->where('carrera', 'INFS')->where('semestre', '8')->paginate(10);

        return view('jefeotro.infs.semestre8')->with('alumnos',$alumnos)->with('mujeres',$mujeres)->with('hombres',$hombres)->with('alumnostotal',$alumnostotal);
    }

    public function indexinfssemestre8mujeres()
    {   
    	$mujeres = DB::table('ss_alumnos')
    			->where('semestre', '8')
                ->whereNotNull('no_control')
    			->where('carrera', 'INFS')
                ->where('sexo', 'Femenino')
                ->count('sexo');

        $hombres = DB::table('ss_alumnos')
    			->where('semestre', '8')
                ->whereNotNull('no_control')
    			->where('carrera', 'INFS')
                ->where('sexo', 'Masculino')
                ->count('sexo');

        $alumnostotal = DB::table('ss_alumnos')
                ->whereNotNull('no_control')
                ->where('carrera', 'INFS')
                ->where('semestre', '8')
                ->count('sexo');
		
    	$alumnos = Alumno::orderBy('id', 'ASC')->whereNotNull('no_control')->where('carrera', 'INFS')->where('semestre', '8')->where('sexo', 'Femenino')->paginate(10);

        return view('jefeotro.infs.semestre8')->with('alumnos',$alumnos)->with('mujeres',$mujeres)->with('hombres',$hombres)->with('alumnostotal',$alumnostotal);
    }

    public function indexinfssemestre8hombres()
    {   
    	$mujeres = DB::table('ss_alumnos')
    			->where('semestre', '8')
                ->whereNotNull('no_control')
    			->where('carrera', 'INFS')
                ->where('sexo', 'Femenino')
                ->count('sexo');

        $hombres = DB::table('ss_alumnos')
    			->where('semestre', '8')
                ->whereNotNull('no_control')
    			->where('carrera', 'INFS')
                ->where('sexo', 'Masculino')
                ->count('sexo');
		$alumnostotal = DB::table('ss_alumnos')
                ->whereNotNull('no_control')
                ->where('carrera', 'INFS')
                ->where('semestre', '8')
                ->count('sexo');
                
    	$alumnos = Alumno::orderBy('id', 'ASC')->whereNotNull('no_control')->where('carrera', 'INFS')->where('semestre', '8')->where('sexo', 'Masculino')->paginate(10);

        return view('jefeotro.infs.semestre8')->with('alumnos',$alumnos)->with('mujeres',$mujeres)->with('hombres',$hombres)->with('alumnostotal',$alumnostotal);
    }

    //funciones para iges 
    public function indexiges()
    {   
    	$mujeres = DB::table('ss_alumnos')
    			->where('carrera', 'IGES')
                ->whereNotNull('no_control')
                ->where('sexo', 'Femenino')
                ->count('sexo');

        $hombres = DB::table('ss_alumnos')
        		->where('carrera', 'IGES')
                ->whereNotNull('no_control')
                ->where('sexo', 'Masculino')
                ->count('sexo');
        $alumnostotal = DB::table('ss_alumnos')
                ->whereNotNull('no_control')
                ->where('carrera', 'IGES')
                ->count('sexo');

    	$alumnos = Alumno::orderBy('id', 'ASC')->whereNotNull('no_control')->where('carrera', 'IGES')->paginate(10);
        return view('jefeotro.iges.index')->with('alumnos',$alumnos)->with('mujeres',$mujeres)->with('hombres',$hombres)->with('alumnostotal',$alumnostotal);
    }

    public function indexigesmujeres()
    {   
    	$mujeres = DB::table('ss_alumnos')
    			->where('carrera', 'IGES')
                ->whereNotNull('no_control')
                ->where('sexo', 'Femenino')
                ->count('sexo');

        $hombres = DB::table('ss_alumnos')
        		->where('carrera', 'IGES')
                ->whereNotNull('no_control')
                ->where('sexo', 'Masculino')
                ->count('sexo');
        $alumnostotal = DB::table('ss_alumnos')
                ->whereNotNull('no_control')
                ->where('carrera', 'IGES')
                ->count('sexo');
		
    	$alumnos = Alumno::orderBy('id', 'ASC')->whereNotNull('no_control')->where('carrera', 'IGES')->where('sexo', 'Femenino')->paginate(10);

        return view('jefeotro.iges.index')->with('alumnos',$alumnos)->with('mujeres',$mujeres)->with('hombres',$hombres)->with('alumnostotal',$alumnostotal);
    }

    public function indexigeshombres()
    {   
    	$mujeres = DB::table('ss_alumnos')
    			->where('carrera', 'IGES')
                ->whereNotNull('no_control')
                ->where('sexo', 'Femenino')
                ->count('sexo');

        $hombres = DB::table('ss_alumnos')
        		->where('carrera', 'IGES')
                ->whereNotNull('no_control')
                ->where('sexo', 'Masculino')
                ->count('sexo');

        $alumnostotal = DB::table('ss_alumnos')
                ->whereNotNull('no_control')
                ->where('carrera', 'IGES')
                ->count('sexo');
		
    	$alumnos = Alumno::orderBy('id', 'ASC')->whereNotNull('no_control')->where('carrera', 'IGES')->where('sexo', 'Masculino')->paginate(10);

        return view('jefeotro.iges.index')->with('alumnos',$alumnos)->with('mujeres',$mujeres)->with('hombres',$hombres)->with('alumnostotal',$alumnostotal);
    }

    public function indexigessemestre5()
    {   
    	$mujeres = DB::table('ss_alumnos')
    			->where('carrera', 'IGES')
                ->whereNotNull('no_control')
    			->where('semestre', '5')
                ->where('sexo', 'Femenino')
                ->count('sexo');

        $hombres = DB::table('ss_alumnos')
    			->where('semestre', '5')
                ->whereNotNull('no_control')
    			->where('carrera', 'IGES')
                ->where('sexo', 'Masculino')
                ->count('sexo');

        $alumnostotal = DB::table('ss_alumnos')
                ->whereNotNull('no_control')
                ->where('carrera', 'IGES')
                ->where('semestre', '5')
                ->count('sexo');
		
    	$alumnos = Alumno::orderBy('id', 'ASC')->whereNotNull('no_control')->where('carrera', 'IGES')->where('semestre', '5')->paginate(10);

        return view('jefeotro.iges.semestre5')->with('alumnos',$alumnos)->with('mujeres',$mujeres)->with('hombres',$hombres)->with('alumnostotal',$alumnostotal);
    }

    public function indexigessemestre5mujeres()
    {   
    	$mujeres = DB::table('ss_alumnos')
    			->where('semestre', '5')
                ->whereNotNull('no_control')
    			->where('carrera', 'IGES')
                ->where('sexo', 'Femenino')
                ->count('sexo');

        $hombres = DB::table('ss_alumnos')
    			->where('semestre', '5')
                ->whereNotNull('no_control')
    			->where('carrera', 'IGES')
                ->where('sexo', 'Masculino')
                ->count('sexo');

        $alumnostotal = DB::table('ss_alumnos')
                ->whereNotNull('no_control')
                ->where('carrera', 'IGES')
                ->where('semestre', '5')
                ->count('sexo');
		
    	$alumnos = Alumno::orderBy('id', 'ASC')->whereNotNull('no_control')->where('carrera', 'IGES')->where('semestre', '5')->where('sexo', 'Femenino')->paginate(10);

        return view('jefeotro.iges.semestre5')->with('alumnos',$alumnos)->with('mujeres',$mujeres)->with('hombres',$hombres)->with('alumnostotal',$alumnostotal);
    }

    public function indexigessemestre5hombres()
    {   
    	$mujeres = DB::table('ss_alumnos')
    			->where('semestre', '5')
                ->whereNotNull('no_control')
    			->where('carrera', 'IGES')
                ->where('sexo', 'Femenino')
                ->count('sexo');

        $hombres = DB::table('ss_alumnos')
    			->where('semestre', '5')
                ->whereNotNull('no_control')
    			->where('carrera', 'IGES')
                ->where('sexo', 'Masculino')
                ->count('sexo');
		$alumnostotal = DB::table('ss_alumnos')
                ->whereNotNull('no_control')
                ->where('carrera', 'IGES')
                ->where('semestre', '5')
                ->count('sexo');

    	$alumnos = Alumno::orderBy('id', 'ASC')->whereNotNull('no_control')->where('carrera', 'IGES')->where('semestre', '5')->where('sexo', 'Masculino')->paginate(10);

        return view('jefeotro.iges.semestre5')->with('alumnos',$alumnos)->with('mujeres',$mujeres)->with('hombres',$hombres)->with('alumnostotal',$alumnostotal);
    }

    public function indexigessemestre6()
    {   
    	$mujeres = DB::table('ss_alumnos')
    			->where('semestre', '6')
                ->whereNotNull('no_control')
    			->where('carrera', 'IGES')
                ->where('sexo', 'Femenino')
                ->count('sexo');

        $hombres = DB::table('ss_alumnos')
    			->where('semestre', '6')
                ->whereNotNull('no_control')
    			->where('carrera', 'IGES')
                ->where('sexo', 'Masculino')
                ->count('sexo');

        $alumnostotal = DB::table('ss_alumnos')
                ->whereNotNull('no_control')
                ->where('semestre', '6')
                ->where('carrera', 'IGES')
                ->count('sexo');
		
    	$alumnos = Alumno::orderBy('id', 'ASC')->whereNotNull('no_control')->where('carrera', 'IGES')->where('semestre', '6')->paginate(10);

        return view('jefeotro.iges.semestre6')->with('alumnos',$alumnos)->with('mujeres',$mujeres)->with('hombres',$hombres)->with('alumnostotal',$alumnostotal);
    }

    public function indexigessemestre6mujeres()
    {   
    	$mujeres = DB::table('ss_alumnos')
    			->where('semestre', '6')
                ->whereNotNull('no_control')
    			->where('carrera', 'IGES')
                ->where('sexo', 'Femenino')
                ->count('sexo');

        $hombres = DB::table('ss_alumnos')
    			->where('semestre', '6')
                ->whereNotNull('no_control')
    			->where('carrera', 'IGES')
                ->where('sexo', 'Masculino')
                ->count('sexo');

        $alumnostotal = DB::table('ss_alumnos')
                ->whereNotNull('no_control')
                ->where('semestre', '6')
                ->where('carrera', 'IGES')
                ->count('sexo');
		
    	$alumnos = Alumno::orderBy('id', 'ASC')->whereNotNull('no_control')->where('carrera', 'IGES')->where('semestre', '6')->where('sexo', 'Femenino')->paginate(10);

        return view('jefeotro.iges.semestre6')->with('alumnos',$alumnos)->with('mujeres',$mujeres)->with('hombres',$hombres)->with('alumnostotal',$alumnostotal);
    }

    public function indexigessemestre6hombres()
    {   
    	$mujeres = DB::table('ss_alumnos')
    			->where('semestre', '6')
                ->whereNotNull('no_control')
    			->where('carrera', 'IGES')
                ->where('sexo', 'Femenino')
                ->count('sexo');

        $hombres = DB::table('ss_alumnos')
    			->where('semestre', '6')
                ->whereNotNull('no_control')
    			->where('carrera', 'IGES')
                ->where('sexo', 'Masculino')
                ->count('sexo');
		$alumnostotal = DB::table('ss_alumnos')
                ->whereNotNull('no_control')
                ->where('carrera', 'IGES')
                ->where('semestre', '6')
                ->count('sexo');
                
    	$alumnos = Alumno::orderBy('id', 'ASC')->whereNotNull('no_control')->where('carrera', 'IGES')->where('semestre', '6')->where('sexo', 'Masculino')->paginate(10);

        return view('jefeotro.iges.semestre6')->with('alumnos',$alumnos)->with('mujeres',$mujeres)->with('hombres',$hombres)->with('alumnostotal',$alumnostotal);
    }

    public function indexigessemestre7()
    {   
    	$mujeres = DB::table('ss_alumnos')
    			->where('semestre', '7')
                ->whereNotNull('no_control')
    			->where('carrera', 'IGES')
                ->where('sexo', 'Femenino')
                ->count('sexo');

        $hombres = DB::table('ss_alumnos')
    			->where('semestre', '7')
                ->whereNotNull('no_control')
    			->where('carrera', 'IGES')
                ->where('sexo', 'Masculino')
                ->count('sexo');

        $alumnostotal = DB::table('ss_alumnos')
                ->whereNotNull('no_control')
                ->where('carrera', 'IGES')
                ->where('semestre', '7')
                ->count('sexo');
		
    	$alumnos = Alumno::orderBy('id', 'ASC')->whereNotNull('no_control')->where('carrera', 'IGES')->where('semestre', '7')->paginate(10);

        return view('jefeotro.iges.semestre7')->with('alumnos',$alumnos)->with('mujeres',$mujeres)->with('hombres',$hombres)->with('alumnostotal',$alumnostotal);
    }

    public function indexigessemestre7mujeres()
    {   
    	$mujeres = DB::table('ss_alumnos')
    			->where('semestre', '7')
                ->whereNotNull('no_control')
    			->where('carrera', 'IGES')
                ->where('sexo', 'Femenino')
                ->count('sexo');

        $hombres = DB::table('ss_alumnos')
    			->where('semestre', '7')
                ->whereNotNull('no_control')
    			->where('carrera', 'IGES')
                ->where('sexo', 'Masculino')
                ->count('sexo');

        $alumnostotal = DB::table('ss_alumnos')
                ->whereNotNull('no_control')
                ->where('carrera', 'IGES')
                ->where('semestre', '7')
                ->count('sexo');
		
    	$alumnos = Alumno::orderBy('id', 'ASC')->whereNotNull('no_control')->where('carrera', 'IGES')->where('semestre', '7')->where('sexo', 'Femenino')->paginate(10);

        return view('jefeotro.iges.semestre7')->with('alumnos',$alumnos)->with('mujeres',$mujeres)->with('hombres',$hombres)->with('alumnostotal',$alumnostotal);
    }

    public function indexigessemestre7hombres()
    {   
    	$mujeres = DB::table('ss_alumnos')
    			->where('semestre', '7')
                ->whereNotNull('no_control')
    			->where('carrera', 'IGES')
                ->where('sexo', 'Femenino')
                ->count('sexo');

        $hombres = DB::table('ss_alumnos')
    			->where('semestre', '7')
                ->whereNotNull('no_control')
    			->where('carrera', 'IGES')
                ->where('sexo', 'Masculino')
                ->count('sexo');
		$alumnostotal = DB::table('ss_alumnos')
                ->whereNotNull('no_control')
                ->where('carrera', 'IGES')
                ->where('semestre', '7')
                ->count('sexo');
                
    	$alumnos = Alumno::orderBy('id', 'ASC')->whereNotNull('no_control')->where('carrera', 'IGES')->where('semestre', '7')->where('sexo', 'Masculino')->paginate(10);

        return view('jefeotro.iges.semestre7')->with('alumnos',$alumnos)->with('mujeres',$mujeres)->with('hombres',$hombres)->with('alumnostotal',$alumnostotal);
    }

    public function indexigessemestre8()
    {   
    	$mujeres = DB::table('ss_alumnos')
    			->where('semestre', '8')
                ->whereNotNull('no_control')
    			->where('carrera', 'IGES')
                ->where('sexo', 'Femenino')
                ->count('sexo');

        $hombres = DB::table('ss_alumnos')
    			->where('semestre', '8')
                ->whereNotNull('no_control')
    			->where('carrera', 'IGES')
                ->where('sexo', 'Masculino')
                ->count('sexo');

        $alumnostotal = DB::table('ss_alumnos')
                ->whereNotNull('no_control')
                ->where('carrera', 'IGES')
                ->where('semestre', '8')
                ->count('sexo');
		
    	$alumnos = Alumno::orderBy('id', 'ASC')->whereNotNull('no_control')->where('carrera', 'IGES')->where('semestre', '8')->paginate(10);

        return view('jefeotro.iges.semestre8')->with('alumnos',$alumnos)->with('mujeres',$mujeres)->with('hombres',$hombres)->with('alumnostotal',$alumnostotal);
    }

    public function indexigessemestre8mujeres()
    {   
    	$mujeres = DB::table('ss_alumnos')
    			->where('semestre', '8')
                ->whereNotNull('no_control')
    			->where('carrera', 'IGES')
                ->where('sexo', 'Femenino')
                ->count('sexo');

        $hombres = DB::table('ss_alumnos')
    			->where('semestre', '8')
                ->whereNotNull('no_control')
    			->where('carrera', 'IGES')
                ->where('sexo', 'Masculino')
                ->count('sexo');

        $alumnostotal = DB::table('ss_alumnos')
                ->whereNotNull('no_control')
                ->where('carrera', 'IGES')
                ->where('semestre', '8')
                ->count('sexo');
		
    	$alumnos = Alumno::orderBy('id', 'ASC')->whereNotNull('no_control')->where('carrera', 'IGES')->where('semestre', '8')->where('sexo', 'Femenino')->paginate(10);

        return view('jefeotro.iges.semestre8')->with('alumnos',$alumnos)->with('mujeres',$mujeres)->with('hombres',$hombres)->with('alumnostotal',$alumnostotal);
    }

    public function indexigessemestre8hombres()
    {   
    	$mujeres = DB::table('ss_alumnos')
    			->where('semestre', '8')
                ->whereNotNull('no_control')
    			->where('carrera', 'IGES')
                ->where('sexo', 'Femenino')
                ->count('sexo');

        $hombres = DB::table('ss_alumnos')
    			->where('semestre', '8')
                ->whereNotNull('no_control')
    			->where('carrera', 'IGES')
                ->where('sexo', 'Masculino')
                ->count('sexo');
		$alumnostotal = DB::table('ss_alumnos')
                ->whereNotNull('no_control')
                ->where('carrera', 'IGES')
                ->where('semestre', '8')
                ->count('sexo');
                
    	$alumnos = Alumno::orderBy('id', 'ASC')->whereNotNull('no_control')->where('carrera', 'IGES')->where('semestre', '8')->where('sexo', 'Masculino')->paginate(10);

        return view('jefeotro.iges.semestre8')->with('alumnos',$alumnos)->with('mujeres',$mujeres)->with('hombres',$hombres)->with('alumnostotal',$alumnostotal);
    }

    
}
