@extends('admin.template.main')

@section('title', 'Editar acceso '. $accesos->no_identificacion)

@section('content')
{!! Form::open(['route'=>['accesos.update',$accesos], 'method'=>'PUT']) !!}
	<div class="form-group" style="text-align: left;">
		{!!Form::label('no_identificacion', 'Numero de identificación')!!}
		{!!Form::text('no_identificacion', $accesos->no_identificacion,['class'=>'form-control', 'placeholder'=>'Numero de identificación', 'required'])!!}

		{!!Form::label('password', 'Contraseña')!!}
		{!!Form::password('password',['class'=>'form-control', 'placeholder'=>'Contraseña', 'required'])!!}

		{!!Form::submit('Editar usuario',['class'=>'btn btn-primary'])!!}

{!! Form::close() !!}

@endsection()

@section('paginate')
          <a href="">Cancelar</a>   
@endsection
