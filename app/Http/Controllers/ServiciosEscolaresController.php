<?php

namespace App\Http\Controllers;

use App\User;
use App\Alumno;
use Laracasts\Flash\Flash;
use Illuminate\Http\Request;
use App\Subir_doc;
use Illuminate\Support\Facades\DB;

class ServiciosEscolaresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return redirect()->route('otros.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('admin.users.crearserEscolares');
    }

    public function alumnos2()
    {
        $mujeres = DB::table('ss_alumnos')
                ->where('sexo', 'Femenino')
                ->count('sexo');


        $hombres = DB::table('ss_alumnos')
                ->where('sexo', 'Masculino')
                ->count('sexo');

        $alumnostotal = DB::table('ss_alumnos')
                ->whereNotNull('no_control')
                ->count('sexo');

        $alumnos = Alumno::orderBy('id', 'ASC')->whereNotNull('no_control')->paginate(10);

        return view('admin.ServEsc.alumnos2')->with('alumnos',$alumnos)->with('mujeres',$mujeres)->with('hombres',$hombres)->with('alumnostotal',$alumnostotal);
    }

    public function alumnosmujeres()
    {   
        $mujeres = DB::table('ss_alumnos')
                ->where('sexo', 'Femenino')
                ->count('sexo');

        $hombres = DB::table('ss_alumnos')
                ->where('sexo', 'Masculino')
                ->count('sexo');

        $alumnostotal = DB::table('ss_alumnos')
                ->whereNotNull('no_control')
                ->count('sexo');
        
        $alumnos = Alumno::orderBy('id', 'ASC')->whereNotNull('no_control')->where('sexo', 'Femenino')->paginate(10);

        return view('admin.ServEsc.alumnos2')->with('alumnos',$alumnos)->with('mujeres',$mujeres)->with('hombres',$hombres)->with('alumnostotal',$alumnostotal);
    }

    public function alumnoshombres()
    {   
        $mujeres = DB::table('ss_alumnos')
                ->where('sexo', 'Femenino')
                ->count('sexo');

        $hombres = DB::table('ss_alumnos')
                ->where('sexo', 'Masculino')
                ->count('sexo');

        $alumnostotal = DB::table('ss_alumnos')
                ->whereNotNull('no_control')
                ->count('sexo');
        
        $alumnos = Alumno::orderBy('id', 'ASC')->whereNotNull('no_control')->where('sexo', 'Masculino')->paginate(10);

        return view('admin.ServEsc.alumnos2')->with('alumnos',$alumnos)->with('mujeres',$mujeres)->with('hombres',$hombres)->with('alumnostotal',$alumnostotal);
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
            return view('admin.ServEsc.ige.index')->with('alumnos',$alumnos)->with('mujeres',$mujeres)->with('hombres',$hombres)->with('alumnostotal',$alumnostotal);
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
    
            return view('admin.ServEsc.ige.semestre5')->with('alumnos',$alumnos)->with('mujeres',$mujeres)->with('hombres',$hombres)->with('alumnostotal',$alumnostotal);
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
    
            return view('admin.ServEsc.ige.semestre6')->with('alumnos',$alumnos)->with('mujeres',$mujeres)->with('hombres',$hombres)->with('alumnostotal',$alumnostotal);
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
    
            return view('admin.ServEsc.ige.semestre7')->with('alumnos',$alumnos)->with('mujeres',$mujeres)->with('hombres',$hombres)->with('alumnostotal',$alumnostotal);
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
    
            return view('admin.ServEsc.ige.semestre8')->with('alumnos',$alumnos)->with('mujeres',$mujeres)->with('hombres',$hombres)->with('alumnostotal',$alumnostotal);
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
        return view('admin.ServEsc.ind.index')->with('alumnos',$alumnos)->with('mujeres',$mujeres)->with('hombres',$hombres)->with('alumnostotal',$alumnostotal);
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
       return view('admin.ServEsc.isc.index')->with('alumnos',$alumnos)->with('mujeres',$mujeres)->with('hombres',$hombres)->with('alumnostotal',$alumnostotal);
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

        return view('admin.ServEsc.isc.semestre7')->with('alumnos',$alumnos)->with('mujeres',$mujeres)->with('hombres',$hombres)->with('alumnostotal',$alumnostotal);
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

        return view('admin.ServEsc.isc.semestre7')->with('alumnos',$alumnos)->with('mujeres',$mujeres)->with('hombres',$hombres)->with('alumnostotal',$alumnostotal);
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

        return view('admin.ServEsc.isc.semestre8')->with('alumnos',$alumnos)->with('mujeres',$mujeres)->with('hombres',$hombres)->with('alumnostotal',$alumnostotal);
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

        return view('admin.ServEsc.isc.semestre8')->with('alumnos',$alumnos)->with('mujeres',$mujeres)->with('hombres',$hombres)->with('alumnostotal',$alumnostotal);
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

        return view('admin.ServEsc.isc.semestre8')->with('alumnos',$alumnos)->with('mujeres',$mujeres)->with('hombres',$hombres)->with('alumnostotal',$alumnostotal);
    }

    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $serescolares= new User;
        
        $serescolares->id=$request->no_identificacion;
        $serescolares->nombres=$request->nombres;
        $serescolares->apellido_p=$request->apellido_p;
        $serescolares->apellido_m=$request->apellido_m;
        $serescolares->no_identificacion=$request->no_identificacion;
        $serescolares->rol='SerEscolares';
        $serescolares->password=bcrypt($request->password);
        $serescolares->save();

        Flash::success("¡Se ha registrado el usuario de forma exitosa!");
        return redirect()->route('users.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $serescolares= User::find($id);

        return view('admin.users.editotro')->with('user', $serescolares);
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
        $serescolares= User::find($id);
        $serescolares->nombres=$request->nombres;
        $serescolares->apellido_p=$request->apellido_p;
        $serescolares->apellido_m=$request->apellido_m;
        $serescolares->no_identificacion=$request->no_identificacion;
        $serescolares->rol='SerEscolares';
        $serescolares->password=$request->password;

        $serescolares->save();
        Flash::warning('¡El usuario '. $serescolares->nombres. ' ha sido editado de forma correcta!');
        return redirect()->route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $serescolares = User::find($id);
        $serescolares->delete();
        Flash::error('¡Usuario de Ser. Escolares '. $serescolares->nombres. ' ha sido eliminado de forma correcta!');
        return redirect()->route('users.index');
    }
}