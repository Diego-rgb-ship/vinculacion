<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', ['as' => 'welcome',function () {
    		return view('home');
}]);


//Rutas de acceso para crear alumno
Route::group(['middleware' => ['auth', 'acceso']], function(){
		//Route::resource('acceso','AccesoController');
	Route::get('acceso', [
		'uses' 	=> 'Auth\RegisterController@showRegistrationForm',
		'as'	=> 'createacces'
	]);
    Route::post('acceso', [
    	'uses'	=>	'Auth\RegisterController@register',
    	'as'	=>	'createacces'
    ]);
});

//Rutas para jefes u otros

Route::group(['prefix'=>'seguimiento', 'middleware' => ['auth','jefeotros']], function(){

	//Consultas para IGE
    Route::group(['middleware' => 'jefeotros'], function()
	{
		Route::get('/ige', [
    	'uses'	=>	'SeguimientoController@indexige',
    	'as'	=>	'seguimiento.indexige'
    	]);

    	Route::get('ige/mujeres', [
    	'uses'	=>	'SeguimientoController@indexigemujeres',
    	'as'	=>	'seguimiento.indexigemujeres'
    	]);

    	Route::get('ige/hombres', [
    	'uses'	=>	'SeguimientoController@indexigehombres',
    	'as'	=>	'seguimiento.indexigehombres'
    	]);

    	Route::get('ige/semestre/5', [
    	'uses'	=>	'SeguimientoController@indexigesemestre5',
    	'as'	=>	'seguimiento.indexiges5'
    	]);

    	Route::get('ige/semestre/5/mujeres', [
    	'uses'	=>	'SeguimientoController@indexigesemestre5mujeres',
    	'as'	=>	'seguimiento.indexiges5mujeres'
    	]);

    	Route::get('ige/semestre/5/hombres', [
    	'uses'	=>	'SeguimientoController@indexigesemestre5hombres',
    	'as'	=>	'seguimiento.indexiges5hombres'
    	]);

    	Route::get('ige/semestre/6', [
    	'uses'	=>	'SeguimientoController@indexigesemestre6',
    	'as'	=>	'seguimiento.indexiges6'
    	]);
 
    	Route::get('ige/semestre/6/mujeres', [
    	'uses'	=>	'SeguimientoController@indexigesemestre6mujeres',
    	'as'	=>	'seguimiento.indexiges6mujeres'
    	]);

    	Route::get('ige/semestre/6/hombres', [
    	'uses'	=>	'SeguimientoController@indexigesemestre6hombres',
    	'as'	=>	'seguimiento.indexiges6hombres'
    	]);

    	Route::get('ige/semestre/7', [
    	'uses'	=>	'SeguimientoController@indexigesemestre7',
    	'as'	=>	'seguimiento.indexiges7'
    	]);

    	Route::get('ige/semestre/7/mujeres', [
    	'uses'	=>	'SeguimientoController@indexigesemestre7mujeres',
    	'as'	=>	'seguimiento.indexiges7mujeres'
    	]);

    	Route::get('ige/semestre/7/hombres', [
    	'uses'	=>	'SeguimientoController@indexigesemestre7hombres',
    	'as'	=>	'seguimiento.indexiges7hombres'
    	]);

    	Route::get('ige/semestre/8', [
    	'uses'	=>	'SeguimientoController@indexigesemestre8',
    	'as'	=>	'seguimiento.indexiges8'
    	]);

    	Route::get('ige/semestre/8/mujeres', [
    	'uses'	=>	'SeguimientoController@indexigesemestre8mujeres',
    	'as'	=>	'seguimiento.indexiges8mujeres'
    	]);

    	Route::get('ige/semestre/8/hombres', [
    	'uses'	=>	'SeguimientoController@indexigesemestre8hombres',
    	'as'	=>	'seguimiento.indexiges8hombres'
    	]);

	});

	//Consultas para IND
    Route::group(['middleware' => 'jefeotros'], function()
	{
		Route::get('/ind', [
    	'uses'	=>	'SeguimientoController@indexind',
    	'as'	=>	'seguimiento.indexind'
    	]);

    	Route::get('ind/mujeres', [
    	'uses'	=>	'SeguimientoController@indexindmujeres',
    	'as'	=>	'seguimiento.indexindmujeres'
    	]);

    	Route::get('ind/hombres', [
    	'uses'	=>	'SeguimientoController@indexindhombres',
    	'as'	=>	'seguimiento.indexindhombres'
    	]);

    	Route::get('ind/semestre/5', [
    	'uses'	=>	'SeguimientoController@indexindsemestre5',
    	'as'	=>	'seguimiento.indexinds5'
    	]);

    	Route::get('ind/semestre/5/mujeres', [
    	'uses'	=>	'SeguimientoController@indexindsemestre5mujeres',
    	'as'	=>	'seguimiento.indexinds5mujeres'
    	]);

    	Route::get('ind/semestre/5/hombres', [
    	'uses'	=>	'SeguimientoController@indexindsemestre5hombres',
    	'as'	=>	'seguimiento.indexinds5hombres'
    	]);

    	Route::get('ind/semestre/6', [
    	'uses'	=>	'SeguimientoController@indexindsemestre6',
    	'as'	=>	'seguimiento.indexinds6'
    	]);

    	Route::get('ind/semestre/6/mujeres', [
    	'uses'	=>	'SeguimientoController@indexindsemestre6mujeres',
    	'as'	=>	'seguimiento.indexinds6mujeres'
    	]);

    	Route::get('ind/semestre/6/hombres', [
    	'uses'	=>	'SeguimientoController@indexindsemestre6hombres',
    	'as'	=>	'seguimiento.indexinds6hombres'
    	]);

    	Route::get('ind/semestre/7', [
    	'uses'	=>	'SeguimientoController@indexindsemestre7',
    	'as'	=>	'seguimiento.indexinds7'
    	]);

    	Route::get('ind/semestre/7/mujeres', [
    	'uses'	=>	'SeguimientoController@indexindsemestre7mujeres',
    	'as'	=>	'seguimiento.indexinds7mujeres'
    	]);

    	Route::get('ind/semestre/7/hombres', [
    	'uses'	=>	'SeguimientoController@indexindsemestre7hombres',
    	'as'	=>	'seguimiento.indexinds7hombres'
    	]);

    	Route::get('ind/semestre/8', [
    	'uses'	=>	'SeguimientoController@indexindsemestre8',
    	'as'	=>	'seguimiento.indexinds8'
    	]);

    	Route::get('ind/semestre/8/mujeres', [
    	'uses'	=>	'SeguimientoController@indexindsemestre8mujeres',
    	'as'	=>	'seguimiento.indexinds8mujeres'
    	]);

    	Route::get('ind/semestre/8/hombres', [
    	'uses'	=>	'SeguimientoController@indexindsemestre8hombres',
    	'as'	=>	'seguimiento.indexinds8hombres'
    	]);

	});

	//Consultas para ISC
    Route::group(['middleware' => 'jefeotros'], function()
	{
		Route::get('/isc', [
    	'uses'	=>	'SeguimientoController@indexisc',
    	'as'	=>	'seguimiento.indexisc'
    	]);

    	Route::get('isc/mujeres', [
    	'uses'	=>	'SeguimientoController@indexiscmujeres',
    	'as'	=>	'seguimiento.indexiscmujeres'
    	]);

    	Route::get('isc/hombres', [
    	'uses'	=>	'SeguimientoController@indexischombres',
    	'as'	=>	'seguimiento.indexischombres'
    	]);

    	Route::get('isc/semestre/5', [
    	'uses'	=>	'SeguimientoController@indexiscsemestre5',
    	'as'	=>	'seguimiento.indexiscs5'
    	]);

    	Route::get('isc/semestre/5/mujeres', [
    	'uses'	=>	'SeguimientoController@indexiscsemestre5mujeres',
    	'as'	=>	'seguimiento.indexiscs5mujeres'
    	]);

    	Route::get('isc/semestre/5/hombres', [
    	'uses'	=>	'SeguimientoController@indexiscsemestre5hombres',
    	'as'	=>	'seguimiento.indexiscs5hombres'
    	]);

    	Route::get('isc/semestre/6', [
    	'uses'	=>	'SeguimientoController@indexiscsemestre6',
    	'as'	=>	'seguimiento.indexiscs6'
    	]);

    	Route::get('isc/semestre/6/mujeres', [
    	'uses'	=>	'SeguimientoController@indexiscsemestre6mujeres',
    	'as'	=>	'seguimiento.indexiscs6mujeres'
    	]);

    	Route::get('isc/semestre/6/hombres', [
    	'uses'	=>	'SeguimientoController@indexiscsemestre6hombres',
    	'as'	=>	'seguimiento.indexiscs6hombres'
    	]);

    	Route::get('isc/semestre/7', [
    	'uses'	=>	'SeguimientoController@indexiscsemestre7',
    	'as'	=>	'seguimiento.indexiscs7'
    	]);

    	Route::get('isc/semestre/7/mujeres', [
    	'uses'	=>	'SeguimientoController@indexiscsemestre7mujeres',
    	'as'	=>	'seguimiento.indexiscs7mujeres'
    	]);

    	Route::get('isc/semestre/7/hombres', [
    	'uses'	=>	'SeguimientoController@indexiscsemestre7hombres',
    	'as'	=>	'seguimiento.indexiscs7hombres'
    	]);

    	Route::get('isc/semestre/8', [
    	'uses'	=>	'SeguimientoController@indexiscsemestre8',
    	'as'	=>	'seguimiento.indexiscs8'
    	]);

    	Route::get('isc/semestre/8/mujeres', [
    	'uses'	=>	'SeguimientoController@indexiscsemestre8mujeres',
    	'as'	=>	'seguimiento.indexiscs8mujeres'
    	]);

    	Route::get('isc/semestre/8/hombres', [
    	'uses'	=>	'SeguimientoController@indexiscsemestre8hombres',
    	'as'	=>	'seguimiento.indexiscs8hombres'
    	]);

	});

	//Consultas para LADMON
    Route::group(['middleware' => 'jefeotros'], function()
	{
		Route::get('/la', [
    	'uses'	=>	'SeguimientoController@indexla',
    	'as'	=>	'seguimiento.indexla'
    	]);

    	Route::get('la/mujeres', [
    	'uses'	=>	'SeguimientoController@indexlamujeres',
    	'as'	=>	'seguimiento.indexlamujeres'
    	]);

    	Route::get('la/hombres', [
    	'uses'	=>	'SeguimientoController@indexlahombres',
    	'as'	=>	'seguimiento.indexlahombres'
    	]);

    	Route::get('la/semestre/5', [
    	'uses'	=>	'SeguimientoController@indexlasemestre5',
    	'as'	=>	'seguimiento.indexlas5'
    	]);

    	Route::get('la/semestre/5/mujeres', [
    	'uses'	=>	'SeguimientoController@indexlasemestre5mujeres',
    	'as'	=>	'seguimiento.indexlas5mujeres'
    	]);

    	Route::get('la/semestre/5/hombres', [
    	'uses'	=>	'SeguimientoController@indexlasemestre5hombres',
    	'as'	=>	'seguimiento.indexlas5hombres'
    	]);

    	Route::get('la/semestre/6', [
    	'uses'	=>	'SeguimientoController@indexlasemestre6',
    	'as'	=>	'seguimiento.indexlas6'
    	]);

    	Route::get('la/semestre/6/mujeres', [
    	'uses'	=>	'SeguimientoController@indexlasemestre6mujeres',
    	'as'	=>	'seguimiento.indexlas6mujeres'
    	]);

    	Route::get('la/semestre/6/hombres', [
    	'uses'	=>	'SeguimientoController@indexlasemestre6hombres',
    	'as'	=>	'seguimiento.indexlas6hombres'
    	]);

    	Route::get('la/semestre/7', [
    	'uses'	=>	'SeguimientoController@indexlasemestre7',
    	'as'	=>	'seguimiento.indexlas7'
    	]);

    	Route::get('la/semestre/7/mujeres', [
    	'uses'	=>	'SeguimientoController@indexlasemestre7mujeres',
    	'as'	=>	'seguimiento.indexlas7mujeres'
    	]);

    	Route::get('la/semestre/7/hombres', [
    	'uses'	=>	'SeguimientoController@indexlasemestre7hombres',
    	'as'	=>	'seguimiento.indexlas7hombres'
    	]);

    	Route::get('la/semestre/8', [
    	'uses'	=>	'SeguimientoController@indexlasemestre8',
    	'as'	=>	'seguimiento.indexlas8'
    	]);

    	Route::get('la/semestre/8/mujeres', [
    	'uses'	=>	'SeguimientoController@indexlasemestre8mujeres',
    	'as'	=>	'seguimiento.indexlas8mujeres'
    	]);

    	Route::get('la/semestre/8/hombres', [
    	'uses'	=>	'SeguimientoController@indexlasemestre8hombres',
    	'as'	=>	'seguimiento.indexlas8hombres'
    	]);

	});

	//Consultas para TSM
    Route::group(['middleware' => 'jefeotros'], function()
	{
		Route::get('/tsm', [
    	'uses'	=>	'SeguimientoController@indextsm',
    	'as'	=>	'seguimiento.indextsm'
    	]);

    	Route::get('tsm/mujeres', [
    	'uses'	=>	'SeguimientoController@indextsmmujeres',
    	'as'	=>	'seguimiento.indextsmmujeres'
    	]);

    	Route::get('tsm/hombres', [
    	'uses'	=>	'SeguimientoController@indextsmhombres',
    	'as'	=>	'seguimiento.indextsmhombres'
    	]);

    	Route::get('tsm/semestre/5', [
    	'uses'	=>	'SeguimientoController@indextsmsemestre5',
    	'as'	=>	'seguimiento.indextsms5'
    	]);

    	Route::get('tsm/semestre/5/mujeres', [
    	'uses'	=>	'SeguimientoController@indextsmsemestre5mujeres',
    	'as'	=>	'seguimiento.indextsms5mujeres'
    	]);

    	Route::get('tsm/semestre/5/hombres', [
    	'uses'	=>	'SeguimientoController@indextsmsemestre5hombres',
    	'as'	=>	'seguimiento.indextsms5hombres'
    	]);

    	Route::get('tsm/semestre/6', [
    	'uses'	=>	'SeguimientoController@indextsmsemestre6',
    	'as'	=>	'seguimiento.indextsms6'
    	]);

    	Route::get('tsm/semestre/6/mujeres', [
    	'uses'	=>	'SeguimientoController@indextsmsemestre6mujeres',
    	'as'	=>	'seguimiento.indextsms6mujeres'
    	]);

    	Route::get('tsm/semestre/6/hombres', [
    	'uses'	=>	'SeguimientoController@indextsmsemestre6hombres',
    	'as'	=>	'seguimiento.indextsms6hombres'
    	]);

    	Route::get('tsm/semestre/7', [
    	'uses'	=>	'SeguimientoController@indextsmsemestre7',
    	'as'	=>	'seguimiento.indextsms7'
    	]);

    	Route::get('tsm/semestre/7/mujeres', [
    	'uses'	=>	'SeguimientoController@indextsmsemestre7mujeres',
    	'as'	=>	'seguimiento.indextsms7mujeres'
    	]);

    	Route::get('tsm/semestre/7/hombres', [
    	'uses'	=>	'SeguimientoController@indextsmsemestre7hombres',
    	'as'	=>	'seguimiento.indextsms7hombres'
    	]);

    	Route::get('tsm/semestre/8', [
    	'uses'	=>	'SeguimientoController@indextsmsemestre8',
    	'as'	=>	'seguimiento.indextsms8'
    	]);

    	Route::get('tsm/semestre/8/mujeres', [
    	'uses'	=>	'SeguimientoController@indextsmsemestre8mujeres',
    	'as'	=>	'seguimiento.indextsms8mujeres'
    	]);

    	Route::get('tsm/semestre/8/hombres', [
    	'uses'	=>	'SeguimientoController@indextsmsemestre8hombres',
    	'as'	=>	'seguimiento.indextsms8hombres'
    	]);

	});

	//Consultas para INFS
    Route::group(['middleware' => 'jefeotros'], function()
	{
		Route::get('/infs', [
    	'uses'	=>	'SeguimientoController@indexinfs',
    	'as'	=>	'seguimiento.indexinfs'
    	]);

    	Route::get('infs/mujeres', [
    	'uses'	=>	'SeguimientoController@indexinfsmujeres',
    	'as'	=>	'seguimiento.indexinfsmujeres'
    	]);

    	Route::get('infs/hombres', [
    	'uses'	=>	'SeguimientoController@indexinfshombres',
    	'as'	=>	'seguimiento.indexinfshombres'
    	]);

    	Route::get('infs/semestre/5', [
    	'uses'	=>	'SeguimientoController@indexinfssemestre5',
    	'as'	=>	'seguimiento.indexinfss5'
    	]);

    	Route::get('infs/semestre/5/mujeres', [
    	'uses'	=>	'SeguimientoController@indexinfssemestre5mujeres',
    	'as'	=>	'seguimiento.indexinfss5mujeres'
    	]);

    	Route::get('infs/semestre/5/hombres', [
    	'uses'	=>	'SeguimientoController@indexinfssemestre5hombres',
    	'as'	=>	'seguimiento.indexinfss5hombres'
    	]);

    	Route::get('infs/semestre/6', [
    	'uses'	=>	'SeguimientoController@indexinfssemestre6',
    	'as'	=>	'seguimiento.indexinfss6'
    	]);

    	Route::get('infs/semestre/6/mujeres', [
    	'uses'	=>	'SeguimientoController@indexinfssemestre6mujeres',
    	'as'	=>	'seguimiento.indexinfss6mujeres'
    	]);

    	Route::get('infs/semestre/6/hombres', [
    	'uses'	=>	'SeguimientoController@indexinfssemestre6hombres',
    	'as'	=>	'seguimiento.indexinfss6hombres'
    	]);

    	Route::get('infs/semestre/7', [
    	'uses'	=>	'SeguimientoController@indexinfssemestre7',
    	'as'	=>	'seguimiento.indexinfss7'
    	]);

    	Route::get('infs/semestre/7/mujeres', [
    	'uses'	=>	'SeguimientoController@indexinfssemestre7mujeres',
    	'as'	=>	'seguimiento.indexinfss7mujeres'
    	]);

    	Route::get('infs/semestre/7/hombres', [
    	'uses'	=>	'SeguimientoController@indexinfssemestre7hombres',
    	'as'	=>	'seguimiento.indexinfss7hombres'
    	]);

    	Route::get('infs/semestre/8', [
    	'uses'	=>	'SeguimientoController@indexinfssemestre8',
    	'as'	=>	'seguimiento.indexinfss8'
    	]);

    	Route::get('infs/semestre/8/mujeres', [
    	'uses'	=>	'SeguimientoController@indexinfssemestre8mujeres',
    	'as'	=>	'seguimiento.indexinfss8mujeres'
    	]);

    	Route::get('infs/semestre/8/hombres', [
    	'uses'	=>	'SeguimientoController@indexinfssemestre8hombres',
    	'as'	=>	'seguimiento.indexinfss8hombres'
    	]);

	});

	//Consultas para IGES
    Route::group(['middleware' => 'jefeotros'], function()
	{
		Route::get('/iges', [
    	'uses'	=>	'SeguimientoController@indexiges',
    	'as'	=>	'seguimiento.indexiges'
    	]);

    	Route::get('iges/mujeres', [
    	'uses'	=>	'SeguimientoController@indexigesmujeres',
    	'as'	=>	'seguimiento.indexigesmujeres'
    	]);

    	Route::get('iges/hombres', [
    	'uses'	=>	'SeguimientoController@indexigeshombres',
    	'as'	=>	'seguimiento.indexigeshombres'
    	]);

    	Route::get('iges/semestre/5', [
    	'uses'	=>	'SeguimientoController@indexigessemestre5',
    	'as'	=>	'seguimiento.indexigess5'
    	]);

    	Route::get('iges/semestre/5/mujeres', [
    	'uses'	=>	'SeguimientoController@indexigessemestre5mujeres',
    	'as'	=>	'seguimiento.indexigess5mujeres'
    	]);

    	Route::get('iges/semestre/5/hombres', [
    	'uses'	=>	'SeguimientoController@indexigessemestre5hombres',
    	'as'	=>	'seguimiento.indexigess5hombres'
    	]);

    	Route::get('iges/semestre/6', [
    	'uses'	=>	'SeguimientoController@indexigessemestre6',
    	'as'	=>	'seguimiento.indexigess6'
    	]);

    	Route::get('iges/semestre/6/mujeres', [
    	'uses'	=>	'SeguimientoController@indexigessemestre6mujeres',
    	'as'	=>	'seguimiento.indexigess6mujeres'
    	]);

    	Route::get('iges/semestre/6/hombres', [
    	'uses'	=>	'SeguimientoController@indexigessemestre6hombres',
    	'as'	=>	'seguimiento.indexigess6hombres'
    	]);

    	Route::get('iges/semestre/7', [
    	'uses'	=>	'SeguimientoController@indexigessemestre7',
    	'as'	=>	'seguimiento.indexigess7'
    	]);

    	Route::get('iges/semestre/7/mujeres', [
    	'uses'	=>	'SeguimientoController@indexigessemestre7mujeres',
    	'as'	=>	'seguimiento.indexigess7mujeres'
    	]);

    	Route::get('iges/semestre/7/hombres', [
    	'uses'	=>	'SeguimientoController@indexigessemestre7hombres',
    	'as'	=>	'seguimiento.indexigess7hombres'
    	]);

    	Route::get('iges/semestre/8', [
    	'uses'	=>	'SeguimientoController@indexigessemestre8',
    	'as'	=>	'seguimiento.indexigess8'
    	]);

    	Route::get('iges/semestre/8/mujeres', [
    	'uses'	=>	'SeguimientoController@indexigessemestre8mujeres',
    	'as'	=>	'seguimiento.indexigess8mujeres'
    	]);

    	Route::get('iges/semestre/8/hombres', [
    	'uses'	=>	'SeguimientoController@indexigessemestre8hombres',
    	'as'	=>	'seguimiento.indexigess8hombres'
    	]);

	});



    Route::get('alumno/{id}', [
    	'uses'	=>	'SeguimientoController@show',
    	'as'	=>	'seguimiento.alumno.perfil'
    ]);

});

//Rutas para administrador
Route::group(['prefix'=>'admin', 'middleware' => 'auth'], function(){

	Route::group(['middleware' => 'admin'], function()
	{
		Route::get('/', [
			'uses'	=>	'UsersController@estadisticas',
			'as' => 'admin.welcome'
		]);
		Route::get('/estadistica/evaluacione/facualpss', [
			'uses'	=>	'UsersController@estadisticasfacualpss',
			'as' => 'estadistica.facualpss'
		]);
		Route::get('/estadistica/evaluacione/fecualpss', [
			'uses'	=>	'UsersController@estadisticasfecualpss',
			'as' => 'estadistica.fecualpss'
		]);
		Route::get('/estadistica/evaluacione/feapsss', [
			'uses'	=>	'UsersController@estadisticasfeapsss',
			'as' => 'estadistica.feapsss'
		]);
		//Rutas para crear y administrar a los usuarios de tipo otro
		Route::resource('users','UsersController');

		Route::get('users/{id}/destroy',[
			'uses' => 'UsersController@destroy',
			'as' => 'admin.users.destroy'
		]);	
		//Rutas para crear y administrar los accesos
		Route::resource('accesos','AccesosController');

		Route::get('accesos/{id}/destroy',[
			'uses' => 'AccesosController@destroy',
			'as' => 'admin.accesos.destroy'
		]);	
		//Rutas para crear y administrar a los usuarios de tipo jefe de carrera 
		Route::resource('jefecarrera','JefeCarreraController');

		Route::get('jefecarrera/{id}/destroy',[
			'uses' => 'JefeCarreraController@destroy',
			'as' => 'admin.jefecarrera.destroy'
		]);

		Route::get('alumnos',[
		'uses' 	=> 'UsersController@alumnos',
		'as' 	=> 'alumnos'
		]);

		Route::get('alumnos/mujeres', [
    	'uses'	=>	'UsersController@alumnosmujeres',
    	'as'	=>	'alumnos.alumnosmujeres'
    	]);

    	Route::get('alumnos/hombres', [
    	'uses'	=>	'UsersController@alumnoshombres',
    	'as'	=>	'alumnos.alumnoshombres'
    	]);

	});
	Route::get('alumno/{id}', [
    	'uses'	=>	'SeguimientoController@show',
    	'as'	=>	'seguimiento.alumno.perfil'
    ]);

    Route::get('/download/{file}' , [
		'uses'	=> 'SubirdocController@downloadFile',
		'as'	=> 'descargar.archivo']);
});

//Rutas para los alumnos
Route::group(['prefix'=>'alumno', 'middleware' => ['auth', 'alumno']], function(){

	//Rutas para el perfil del alumno
	Route::get('/', ['as' => 'alumno.welcome',function () {
    	return redirect()->route('welcome');
	}]);
	Route::resource('perfil','AlumnoController');
	Route::get('perfil',[
		'uses' 	=> 'AlumnoController@perfil',
		'as' 	=> 'perfil'
	]);

	Route::get('perfil/{id}/edit',[
		'uses' 	=> 'AlumnoController@edit',
		'as' 	=> 'perfil.editardatos'
	]);

	//Rutas para realizar la solicitud del servicio social
	Route::resource('solicitud','ProgramaController');

	Route::resource('fecualpss','FecualpsssController');

	Route::resource('rbss','RbsssController');

	Route::resource('facualpss','FacualpsssController');

	Route::resource('feapss','FeapsssController');

	Route::resource('documentos','SubirdocController');

	Route::get('descargar/anexos' , [
		'uses'	=> 'SubirdocController@indexdowloadfiles',
		'as'	=> 'descargar.anexos']);

	Route::get('/download/{file}' , [
		'uses'	=> 'SubirdocController@downloadFile',
		'as'	=> 'descargar.archivos']);

	Route::get('/anexo/descargar/{file}' , [
		'uses'	=> 'SubirdocController@downloadFiles',
		'as'	=> 'descargar.anexo']);

});

//Rutas para iniciar sesion para los demas roles
Route::get('login', [
	'uses'	=> 'Auth\LoginController@showLoginForm',
	'as'	=> 'login'
]);

Route::post('login', [
	'uses'	=> 'Auth\LoginController@login',
	'as'	=> 'login'
]);

Route::get('logout', [
	'uses'	=> 'Auth\LoginController@logout',
	'as'	=> 'logout'
]);


Route::get('/home', 'HomeController@index')->name('home');
