@extends('admin.template.main')

@section('title', 'Editar usuario '. $user->nombres)

@section('content')
{!! Form::open(['route'=>['users.update',$user], 'method'=>'PUT']) !!}
	<div class="form-group" style="text-align: left;">
		{!!Form::label('nombre', 'Nombre(s)')!!}
		{!!Form::text('nombres', $user->nombres,['class'=>'form-control', 'placeholder'=>'Nombre(s)', 'required'])!!}

		{!!Form::label('apellido_p', 'Apellido paterno')!!}
		{!!Form::text('apellido_p', $user->apellido_p,['class'=>'form-control', 'placeholder'=>'Apellido paterno', 'required'])!!}

		{!!Form::label('apellido_m', 'Apllido materno')!!}
		{!!Form::text('apellido_m', $user->apellido_m,['class'=>'form-control', 'placeholder'=>'Apellido materno', 'required'])!!}

		{!!Form::label('no_identificacion', 'Numero de identificación')!!}
		{!!Form::text('no_identificacion', $user->no_identificacion,['class'=>'form-control', 'placeholder'=>'Numero de identificación', 'required'])!!}

		{!!Form::label('password', 'Contraseña')!!}
		{!!Form::password('password',['class'=>'form-control', 'placeholder'=>'Contraseña', 'required'])!!}

		{!!Form::submit('Editar usuario',['class'=>'btn btn-primary'])!!}

{!! Form::close() !!}

@endsection()

@section('paginate')
          <a href="">Cancelar</a>   
@endsection
