<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Alumno;
use Laracasts\Flash\Flash;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function estadisticas()
    {
        $alumnosh = DB::table('ss_alumnos')
                ->where('sexo', 'Masculino')
                ->count('sexo');
        $alumnosm = DB::table('ss_alumnos')
                ->where('sexo', 'Femenino')
                ->count('sexo');
        $alumnoshige = DB::table('ss_alumnos')
                ->where('sexo', 'Masculino')
                ->where('carrera', 'IGE')
                ->count('sexo');
        $alumnosmige = DB::table('ss_alumnos')
                ->where('sexo', 'Femenino')
                ->where('carrera', 'IGE')
                ->count('sexo');
        $alumnoshind = DB::table('ss_alumnos')
                ->where('sexo', 'Masculino')
                ->where('carrera', 'IND')
                ->count('sexo');
        $alumnosmind = DB::table('ss_alumnos')
                ->where('sexo', 'Femenino')
                ->where('carrera', 'IND')
                ->count('sexo');
        $alumnoshisc = DB::table('ss_alumnos')
                ->where('sexo', 'Masculino')
                ->where('carrera', 'ISC')
                ->count('sexo');
        $alumnosmisc = DB::table('ss_alumnos')
                ->where('sexo', 'Femenino')
                ->where('carrera', 'ISC')
                ->count('sexo');
        $alumnoshla = DB::table('ss_alumnos')
                ->where('sexo', 'Masculino')
                ->where('carrera', 'LA')
                ->count('sexo');
        $alumnosmla = DB::table('ss_alumnos')
                ->where('sexo', 'Femenino')
                ->where('carrera', 'LA')
                ->count('sexo');
        $alumnoshtsm = DB::table('ss_alumnos')
                ->where('sexo', 'Masculino')
                ->where('carrera', 'TSM')
                ->count('sexo');
        $alumnosmtsm = DB::table('ss_alumnos')
                ->where('sexo', 'Femenino')
                ->where('carrera', 'TSM')
                ->count('sexo');
        $alumnoshinfs = DB::table('ss_alumnos')
                ->where('sexo', 'Masculino')
                ->where('carrera', 'INFS')
                ->count('sexo');
        $alumnosminfs = DB::table('ss_alumnos')
                ->where('sexo', 'Femenino')
                ->where('carrera', 'INFS')
                ->count('sexo');
        $alumnoshiges = DB::table('ss_alumnos')
                ->where('sexo', 'Masculino')
                ->where('carrera', 'IGES')
                ->count('sexo');
        $alumnosmiges = DB::table('ss_alumnos')
                ->where('sexo', 'Femenino')
                ->where('carrera', 'IGES')
                ->count('sexo');

        return view('admin.estadisticas.mainestadisticas')->with('alumnosh', $alumnosh)->with('alumnosm', $alumnosm)->with('alumnoshige', $alumnoshige)->with('alumnosmige', $alumnosmige)->with('alumnoshind', $alumnoshind)->with('alumnosmind', $alumnosmind)->with('alumnoshisc', $alumnoshisc)->with('alumnosmisc', $alumnosmisc)->with('alumnoshla', $alumnoshla)->with('alumnosmla', $alumnosmla)->with('alumnoshtsm', $alumnoshtsm)->with('alumnosmtsm', $alumnosmtsm)->with('alumnoshinfs', $alumnoshinfs)->with('alumnosminfs', $alumnosminfs)->with('alumnoshiges', $alumnoshiges)->with('alumnosmiges', $alumnosmiges);
    }

    public function estadisticasfacualpss()
    {
        $criterio1_5 = DB::table('ss_facualpsss')
                ->where('criterio_1', '5')
                ->count('criterio_1');
        $criterio1_4 = DB::table('ss_facualpsss')
                ->where('criterio_1', '4')
                ->count('criterio_1');
        $criterio1_3 = DB::table('ss_facualpsss')
                ->where('criterio_1', '3')
                ->count('criterio_1');
        $criterio1_2 = DB::table('ss_facualpsss')
                ->where('criterio_1', '2')
                ->count('criterio_1');
        $criterio1_1 = DB::table('ss_facualpsss')
                ->where('criterio_1', '1')
                ->count('criterio_1');

        $criterio2_5 = DB::table('ss_facualpsss')
                ->where('criterio_2', '5')
                ->count('criterio_2');
        $criterio2_4 = DB::table('ss_facualpsss')
                ->where('criterio_2', '4')
                ->count('criterio_2');
        $criterio2_3 = DB::table('ss_facualpsss')
                ->where('criterio_2', '3')
                ->count('criterio_2');
        $criterio2_2 = DB::table('ss_facualpsss')
                ->where('criterio_2', '2')
                ->count('criterio_2');
        $criterio2_1 = DB::table('ss_facualpsss')
                ->where('criterio_2', '1')
                ->count('criterio_2');

        $criterio3_5 = DB::table('ss_facualpsss')
                ->where('criterio_3', '5')
                ->count('criterio_3');
        $criterio3_4 = DB::table('ss_facualpsss')
                ->where('criterio_3', '4')
                ->count('criterio_3');
        $criterio3_3 = DB::table('ss_facualpsss')
                ->where('criterio_3', '3')
                ->count('criterio_3');
        $criterio3_2 = DB::table('ss_facualpsss')
                ->where('criterio_3', '2')
                ->count('criterio_3');
        $criterio3_1 = DB::table('ss_facualpsss')
                ->where('criterio_3', '1')
                ->count('criterio_3');

        $criterio4_5 = DB::table('ss_facualpsss')
                ->where('criterio_4', '5')
                ->count('criterio_4');
        $criterio4_4 = DB::table('ss_facualpsss')
                ->where('criterio_4', '4')
                ->count('criterio_4');
        $criterio4_3 = DB::table('ss_facualpsss')
                ->where('criterio_4', '3')
                ->count('criterio_4');
        $criterio4_2 = DB::table('ss_facualpsss')
                ->where('criterio_4', '2')
                ->count('criterio_4');
        $criterio4_1 = DB::table('ss_facualpsss')
                ->where('criterio_4', '1')
                ->count('criterio_4');

        $criterio5_5 = DB::table('ss_facualpsss')
                ->where('criterio_5', '5')
                ->count('criterio_5');
        $criterio5_4 = DB::table('ss_facualpsss')
                ->where('criterio_5', '4')
                ->count('criterio_5');
        $criterio5_3 = DB::table('ss_facualpsss')
                ->where('criterio_5', '3')
                ->count('criterio_5');
        $criterio5_2 = DB::table('ss_facualpsss')
                ->where('criterio_5', '2')
                ->count('criterio_5');
        $criterio5_1 = DB::table('ss_facualpsss')
                ->where('criterio_5', '1')
                ->count('criterio_5');

        $criterio6_5 = DB::table('ss_facualpsss')
                ->where('criterio_6', '5')
                ->count('criterio_6');
        $criterio6_4 = DB::table('ss_facualpsss')
                ->where('criterio_6', '4')
                ->count('criterio_6');
        $criterio6_3 = DB::table('ss_facualpsss')
                ->where('criterio_6', '3')
                ->count('criterio_6');
        $criterio6_2 = DB::table('ss_facualpsss')
                ->where('criterio_6', '2')
                ->count('criterio_6');
        $criterio6_1 = DB::table('ss_facualpsss')
                ->where('criterio_6', '1')
                ->count('criterio_6');

        $criterio7_5 = DB::table('ss_facualpsss')
                ->where('criterio_7', '5')
                ->count('criterio_7');
        $criterio7_4 = DB::table('ss_facualpsss')
                ->where('criterio_7', '4')
                ->count('criterio_7');
        $criterio7_3 = DB::table('ss_facualpsss')
                ->where('criterio_7', '3')
                ->count('criterio_7');
        $criterio7_2 = DB::table('ss_facualpsss')
                ->where('criterio_7', '2')
                ->count('criterio_7');
        $criterio7_1 = DB::table('ss_facualpsss')
                ->where('criterio_7', '1')
                ->count('criterio_7');

        return view('admin.estadisticas.facualpss')->with('criterio1_5', $criterio1_5)->with('criterio1_4', $criterio1_4)->with('criterio1_3', $criterio1_3)->with('criterio1_2', $criterio1_2)->with('criterio1_1', $criterio1_1)->with('criterio2_5', $criterio2_5)->with('criterio2_4', $criterio2_4)->with('criterio2_3', $criterio2_3)->with('criterio2_2', $criterio2_2)->with('criterio2_1', $criterio2_1)->with('criterio3_5', $criterio3_5)->with('criterio3_4', $criterio3_4)->with('criterio3_3', $criterio3_3)->with('criterio3_2', $criterio3_2)->with('criterio3_1', $criterio3_1)->with('criterio4_5', $criterio4_5)->with('criterio4_4', $criterio4_4)->with('criterio4_3', $criterio4_3)->with('criterio4_2', $criterio4_2)->with('criterio4_1', $criterio4_1)->with('criterio5_5', $criterio5_5)->with('criterio5_4', $criterio5_4)->with('criterio5_3', $criterio5_3)->with('criterio5_2', $criterio5_2)->with('criterio5_1', $criterio5_1)->with('criterio6_5', $criterio6_5)->with('criterio6_4', $criterio6_4)->with('criterio6_3', $criterio6_3)->with('criterio6_2', $criterio6_2)->with('criterio6_1', $criterio6_1)->with('criterio7_5', $criterio7_5)->with('criterio7_4', $criterio7_4)->with('criterio7_3', $criterio7_3)->with('criterio7_2', $criterio7_2)->with('criterio7_1', $criterio7_1);
    }

    public function estadisticasfecualpss()
    {
        $criterio1_5 = DB::table('ss_fecualpsss')
                ->where('criterio_1', '5')
                ->count('criterio_1');
        $criterio1_4 = DB::table('ss_fecualpsss')
                ->where('criterio_1', '4')
                ->count('criterio_1');
        $criterio1_3 = DB::table('ss_fecualpsss')
                ->where('criterio_1', '3')
                ->count('criterio_1');
        $criterio1_2 = DB::table('ss_fecualpsss')
                ->where('criterio_1', '2')
                ->count('criterio_1');
        $criterio1_1 = DB::table('ss_fecualpsss')
                ->where('criterio_1', '1')
                ->count('criterio_1');

        $criterio2_5 = DB::table('ss_fecualpsss')
                ->where('criterio_2', '5')
                ->count('criterio_2');
        $criterio2_4 = DB::table('ss_fecualpsss')
                ->where('criterio_2', '4')
                ->count('criterio_2');
        $criterio2_3 = DB::table('ss_fecualpsss')
                ->where('criterio_2', '3')
                ->count('criterio_2');
        $criterio2_2 = DB::table('ss_fecualpsss')
                ->where('criterio_2', '2')
                ->count('criterio_2');
        $criterio2_1 = DB::table('ss_fecualpsss')
                ->where('criterio_2', '1')
                ->count('criterio_2');

        $criterio3_5 = DB::table('ss_fecualpsss')
                ->where('criterio_3', '5')
                ->count('criterio_3');
        $criterio3_4 = DB::table('ss_fecualpsss')
                ->where('criterio_3', '4')
                ->count('criterio_3');
        $criterio3_3 = DB::table('ss_fecualpsss')
                ->where('criterio_3', '3')
                ->count('criterio_3');
        $criterio3_2 = DB::table('ss_fecualpsss')
                ->where('criterio_3', '2')
                ->count('criterio_3');
        $criterio3_1 = DB::table('ss_fecualpsss')
                ->where('criterio_3', '1')
                ->count('criterio_3');

        $criterio4_5 = DB::table('ss_fecualpsss')
                ->where('criterio_4', '5')
                ->count('criterio_4');
        $criterio4_4 = DB::table('ss_fecualpsss')
                ->where('criterio_4', '4')
                ->count('criterio_4');
        $criterio4_3 = DB::table('ss_fecualpsss')
                ->where('criterio_4', '3')
                ->count('criterio_4');
        $criterio4_2 = DB::table('ss_fecualpsss')
                ->where('criterio_4', '2')
                ->count('criterio_4');
        $criterio4_1 = DB::table('ss_fecualpsss')
                ->where('criterio_4', '1')
                ->count('criterio_4');

        $criterio5_5 = DB::table('ss_fecualpsss')
                ->where('criterio_5', '5')
                ->count('criterio_5');
        $criterio5_4 = DB::table('ss_fecualpsss')
                ->where('criterio_5', '4')
                ->count('criterio_5');
        $criterio5_3 = DB::table('ss_fecualpsss')
                ->where('criterio_5', '3')
                ->count('criterio_5');
        $criterio5_2 = DB::table('ss_fecualpsss')
                ->where('criterio_5', '2')
                ->count('criterio_5');
        $criterio5_1 = DB::table('ss_fecualpsss')
                ->where('criterio_5', '1')
                ->count('criterio_5');

        $criterio6_5 = DB::table('ss_fecualpsss')
                ->where('criterio_6', '5')
                ->count('criterio_6');
        $criterio6_4 = DB::table('ss_fecualpsss')
                ->where('criterio_6', '4')
                ->count('criterio_6');
        $criterio6_3 = DB::table('ss_fecualpsss')
                ->where('criterio_6', '3')
                ->count('criterio_6');
        $criterio6_2 = DB::table('ss_fecualpsss')
                ->where('criterio_6', '2')
                ->count('criterio_6');
        $criterio6_1 = DB::table('ss_fecualpsss')
                ->where('criterio_6', '1')
                ->count('criterio_6');

        $criterio7_5 = DB::table('ss_fecualpsss')
                ->where('criterio_7', '5')
                ->count('criterio_7');
        $criterio7_4 = DB::table('ss_fecualpsss')
                ->where('criterio_7', '4')
                ->count('criterio_7');
        $criterio7_3 = DB::table('ss_fecualpsss')
                ->where('criterio_7', '3')
                ->count('criterio_7');
        $criterio7_2 = DB::table('ss_fecualpsss')
                ->where('criterio_7', '2')
                ->count('criterio_7');
        $criterio7_1 = DB::table('ss_fecualpsss')
                ->where('criterio_7', '1')
                ->count('criterio_7');

        return view('admin.estadisticas.fecualpss')->with('criterio1_5', $criterio1_5)->with('criterio1_4', $criterio1_4)->with('criterio1_3', $criterio1_3)->with('criterio1_2', $criterio1_2)->with('criterio1_1', $criterio1_1)->with('criterio2_5', $criterio2_5)->with('criterio2_4', $criterio2_4)->with('criterio2_3', $criterio2_3)->with('criterio2_2', $criterio2_2)->with('criterio2_1', $criterio2_1)->with('criterio3_5', $criterio3_5)->with('criterio3_4', $criterio3_4)->with('criterio3_3', $criterio3_3)->with('criterio3_2', $criterio3_2)->with('criterio3_1', $criterio3_1)->with('criterio4_5', $criterio4_5)->with('criterio4_4', $criterio4_4)->with('criterio4_3', $criterio4_3)->with('criterio4_2', $criterio4_2)->with('criterio4_1', $criterio4_1)->with('criterio5_5', $criterio5_5)->with('criterio5_4', $criterio5_4)->with('criterio5_3', $criterio5_3)->with('criterio5_2', $criterio5_2)->with('criterio5_1', $criterio5_1)->with('criterio6_5', $criterio6_5)->with('criterio6_4', $criterio6_4)->with('criterio6_3', $criterio6_3)->with('criterio6_2', $criterio6_2)->with('criterio6_1', $criterio6_1)->with('criterio7_5', $criterio7_5)->with('criterio7_4', $criterio7_4)->with('criterio7_3', $criterio7_3)->with('criterio7_2', $criterio7_2)->with('criterio7_1', $criterio7_1);
    }

    public function estadisticasfeapsss()
    {
        $criterio1_5 = DB::table('ss_feapsss')
                ->where('criterio_1', '5')
                ->count('criterio_1');
        $criterio1_4 = DB::table('ss_feapsss')
                ->where('criterio_1', '4')
                ->count('criterio_1');
        $criterio1_3 = DB::table('ss_feapsss')
                ->where('criterio_1', '3')
                ->count('criterio_1');
        $criterio1_2 = DB::table('ss_feapsss')
                ->where('criterio_1', '2')
                ->count('criterio_1');
        $criterio1_1 = DB::table('ss_feapsss')
                ->where('criterio_1', '1')
                ->count('criterio_1');

        $criterio2_5 = DB::table('ss_feapsss')
                ->where('criterio_2', '5')
                ->count('criterio_2');
        $criterio2_4 = DB::table('ss_feapsss')
                ->where('criterio_2', '4')
                ->count('criterio_2');
        $criterio2_3 = DB::table('ss_feapsss')
                ->where('criterio_2', '3')
                ->count('criterio_2');
        $criterio2_2 = DB::table('ss_feapsss')
                ->where('criterio_2', '2')
                ->count('criterio_2');
        $criterio2_1 = DB::table('ss_feapsss')
                ->where('criterio_2', '1')
                ->count('criterio_2');

        $criterio3_5 = DB::table('ss_feapsss')
                ->where('criterio_3', '5')
                ->count('criterio_3');
        $criterio3_4 = DB::table('ss_feapsss')
                ->where('criterio_3', '4')
                ->count('criterio_3');
        $criterio3_3 = DB::table('ss_feapsss')
                ->where('criterio_3', '3')
                ->count('criterio_3');
        $criterio3_2 = DB::table('ss_feapsss')
                ->where('criterio_3', '2')
                ->count('criterio_3');
        $criterio3_1 = DB::table('ss_feapsss')
                ->where('criterio_3', '1')
                ->count('criterio_3');

        $criterio4_5 = DB::table('ss_feapsss')
                ->where('criterio_4', '5')
                ->count('criterio_4');
        $criterio4_4 = DB::table('ss_feapsss')
                ->where('criterio_4', '4')
                ->count('criterio_4');
        $criterio4_3 = DB::table('ss_feapsss')
                ->where('criterio_4', '3')
                ->count('criterio_4');
        $criterio4_2 = DB::table('ss_feapsss')
                ->where('criterio_4', '2')
                ->count('criterio_4');
        $criterio4_1 = DB::table('ss_feapsss')
                ->where('criterio_4', '1')
                ->count('criterio_4');

        $criterio5_5 = DB::table('ss_feapsss')
                ->where('criterio_5', '5')
                ->count('criterio_5');
        $criterio5_4 = DB::table('ss_feapsss')
                ->where('criterio_5', '4')
                ->count('criterio_5');
        $criterio5_3 = DB::table('ss_feapsss')
                ->where('criterio_5', '3')
                ->count('criterio_5');
        $criterio5_2 = DB::table('ss_feapsss')
                ->where('criterio_5', '2')
                ->count('criterio_5');
        $criterio5_1 = DB::table('ss_feapsss')
                ->where('criterio_5', '1')
                ->count('criterio_5');

        $criterio6_5 = DB::table('ss_feapsss')
                ->where('criterio_6', '5')
                ->count('criterio_6');
        $criterio6_4 = DB::table('ss_feapsss')
                ->where('criterio_6', '4')
                ->count('criterio_6');
        $criterio6_3 = DB::table('ss_feapsss')
                ->where('criterio_6', '3')
                ->count('criterio_6');
        $criterio6_2 = DB::table('ss_feapsss')
                ->where('criterio_6', '2')
                ->count('criterio_6');
        $criterio6_1 = DB::table('ss_feapsss')
                ->where('criterio_6', '1')
                ->count('criterio_6');

        $criterio7_5 = DB::table('ss_feapsss')
                ->where('criterio_7', '5')
                ->count('criterio_7');
        $criterio7_4 = DB::table('ss_feapsss')
                ->where('criterio_7', '4')
                ->count('criterio_7');
        $criterio7_3 = DB::table('ss_feapsss')
                ->where('criterio_7', '3')
                ->count('criterio_7');
        $criterio7_2 = DB::table('ss_feapsss')
                ->where('criterio_7', '2')
                ->count('criterio_7');
        $criterio7_1 = DB::table('ss_feapsss')
                ->where('criterio_7', '1')
                ->count('criterio_7');

        $criterio8_5 = DB::table('ss_feapsss')
                ->where('criterio_8', '5')
                ->count('criterio_8');
        $criterio8_4 = DB::table('ss_feapsss')
                ->where('criterio_8', '4')
                ->count('criterio_8');
        $criterio8_3 = DB::table('ss_feapsss')
                ->where('criterio_8', '3')
                ->count('criterio_8');
        $criterio8_2 = DB::table('ss_feapsss')
                ->where('criterio_8', '2')
                ->count('criterio_8');
        $criterio8_1 = DB::table('ss_feapsss')
                ->where('criterio_8', '1')
                ->count('criterio_8');

        return view('admin.estadisticas.feapsss')->with('criterio1_5', $criterio1_5)->with('criterio1_4', $criterio1_4)->with('criterio1_3', $criterio1_3)->with('criterio1_2', $criterio1_2)->with('criterio1_1', $criterio1_1)->with('criterio2_5', $criterio2_5)->with('criterio2_4', $criterio2_4)->with('criterio2_3', $criterio2_3)->with('criterio2_2', $criterio2_2)->with('criterio2_1', $criterio2_1)->with('criterio3_5', $criterio3_5)->with('criterio3_4', $criterio3_4)->with('criterio3_3', $criterio3_3)->with('criterio3_2', $criterio3_2)->with('criterio3_1', $criterio3_1)->with('criterio4_5', $criterio4_5)->with('criterio4_4', $criterio4_4)->with('criterio4_3', $criterio4_3)->with('criterio4_2', $criterio4_2)->with('criterio4_1', $criterio4_1)->with('criterio5_5', $criterio5_5)->with('criterio5_4', $criterio5_4)->with('criterio5_3', $criterio5_3)->with('criterio5_2', $criterio5_2)->with('criterio5_1', $criterio5_1)->with('criterio6_5', $criterio6_5)->with('criterio6_4', $criterio6_4)->with('criterio6_3', $criterio6_3)->with('criterio6_2', $criterio6_2)->with('criterio6_1', $criterio6_1)->with('criterio7_5', $criterio7_5)->with('criterio7_4', $criterio7_4)->with('criterio7_3', $criterio7_3)->with('criterio7_2', $criterio7_2)->with('criterio7_1', $criterio7_1)->with('criterio8_5', $criterio8_5)->with('criterio8_4', $criterio8_4)->with('criterio8_3', $criterio8_3)->with('criterio8_2', $criterio8_2)->with('criterio8_1', $criterio8_1);
    }

    public function index()
    {
        
        $users = User::orderBy('rol','ASC')->where('rol', 'Jefe')->orWhere('rol','Otro')->orWhere('rol','SerEscolares')->paginate(10);
        
        return view('admin.index')->with('users',$users);
    } 

    public function alumnos()
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

        return view('admin.users.alumnos')->with('alumnos',$alumnos)->with('mujeres',$mujeres)->with('hombres',$hombres)->with('alumnostotal',$alumnostotal);
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

        return view('admin.users.alumnos')->with('alumnos',$alumnos)->with('mujeres',$mujeres)->with('hombres',$hombres)->with('alumnostotal',$alumnostotal);
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

        return view('admin.users.alumnos')->with('alumnos',$alumnos)->with('mujeres',$mujeres)->with('hombres',$hombres)->with('alumnostotal',$alumnostotal);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.users.createotro');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $otro = new User;
        
        $otro->id=$request->no_identificacion;
        $otro->nombres=$request->nombres;
        $otro->apellido_p=$request->apellido_p;
        $otro->apellido_m=$request->apellido_m;
        $otro->no_identificacion=$request->no_identificacion;
        $otro->rol='Otro';
        $otro->carrera='otro';

        $otro->password=bcrypt($request->password);
        
        $otro->save();

        Flash::success("¡Se ha registrado el usuario de forma exitosa!");
        return redirect()->route('users.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $otro= User::find($id);

        return view('admin.users.editotro')->with('user', $otro);
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
        $otro = User::find($id);
        $otro->nombres=$request->nombres;
        $otro->apellido_p=$request->apellido_p;
        $otro->apellido_m=$request->apellido_m;
        $otro->no_identificacion=$request->no_identificacion;
        $otro->rol='Otro';
        $otro->carrera='otro';
        $otro->password=bcrypt($request->password);
        $otro->save();
        Flash::warning('¡El usuario '. $otro->nombres. ' ha sido editado de forma correcta!');
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
        $otro = User::find($id);
        $otro->delete();
        Flash::error('¡El usuario '. $otro->nombres. ' ha sido eliminado de forma correcta!');
        return redirect()->route('users.index');
    }
}
