<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Laracasts\Flash\Flash;

class AccesosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $accesos = User::orderBy('rol','ASC')->where('rol', 'Acceso')->paginate(5);
        
        return view('admin.accesos.index')->with('accesos',$accesos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.accesos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $acceso = new User;
        
        $acceso->id=$request->no_identificacion;
        $acceso->nombres='Acceso';
        $acceso->apellido_p='Acceso';
        $acceso->apellido_m='Acceso';
        $acceso->no_identificacion=$request->no_identificacion;
        $acceso->rol='Acceso';
        $acceso->password=bcrypt($request->password);
        
        $acceso->save();
        return redirect()->route('accesos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $acceso= User::find($id);

        return view('admin.accesos.edit')->with('accesos', $acceso);
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
        $user = User::find($id);
        $user->no_identificacion=$request->no_identificacion;
        $user->password=$request->password;
        $user->save();
        Flash::warning('¡El acceso se ha sido editado de forma correcta!');
        return redirect()->route('accesos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
