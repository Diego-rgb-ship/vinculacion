<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Laracasts\Flash\Flash;

class JefeCarreraController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {   
        return redirect()->route('otros.index');
    }


    public function create()
    {
        return view('admin.users.createjefe');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $jefe = new User;
        
        $jefe->id=$request->no_identificacion;
        $jefe->nombres=$request->nombres;
        $jefe->apellido_p=$request->apellido_p;
        $jefe->apellido_m=$request->apellido_m;
        $jefe->no_identificacion=$request->no_identificacion;
        $jefe->rol='Jefe';
        $jefe->carrera=$request->carrera;

        $jefe->password=bcrypt($request->password);
        
        $jefe->save();

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
        $jefe= User::find($id);

        return view('admin.users.editotro')->with('user', $jefe);
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
        $jefe = User::find($id);
        $jefe->nombres=$request->nombres;
        $jefe->apellido_p=$request->apellido_p;
        $jefe->apellido_m=$request->apellido_m;
        $jefe->no_identificacion=$request->no_identificacion;
        $jefe->rol='Jefe';
        $jefe->carrera=$request->carrera;
        $jefe->password=$request->password;

        $jefe->save();
        Flash::warning('¡El usuario '. $jefe->nombres. ' ha sido editado de forma correcta!');
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
        $jefe = User::find($id);
        $jefe->delete();
        Flash::error('¡El jefe de carrera '. $jefe->nombres. ' ha sido eliminado de forma correcta!');
        return redirect()->route('users.index');
    }
}
