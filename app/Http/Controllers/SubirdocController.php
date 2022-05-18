<?php

namespace App\Http\Controllers;

use App\User;
use App\Subir_doc;
use Laracasts\Flash\Flash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;


class SubirdocController extends Controller
{
    public function index()
    {
    	$useralumnos	= User::find(\Auth::user()->id);
    	$documentos	= Subir_doc::orderBy('nombre_doc','ASC')->where('no_control','=', \Auth::user()->id)->paginate(5);

    	return view('documentos.index')->with('useralumnos',$useralumnos)->with('documentos',$documentos);
    }

    public function create()
    {
    	return view('documentos.create');
    }
 
    public function store(Request $request)
    {
    	$documentos=new Subir_doc;
    	
    	$documentos->no_control=\Auth::user()->id;
    	$documentos->nombre_doc=$request->nombre_doc;
    	$documentos->bimestre=$request->bimestre;
        
        $documentos->save();
        
        return redirect()->route('documentos.index');    	
    }

    public function downloadFile($file){
      $pathtoFile = public_path().'/uploads/'.$file;
      return response()->download($pathtoFile);
    }

    public function indexdowloadfiles()
    {
        return view('documentos.descargardocs');
    }

    public function downloadFiles($file){
      $pathtoFile = public_path().'/anexos/'.$file;
      return response()->download($pathtoFile);
    }

}
