@extends('templates.main')

@section('title', 'Editar datos personales')

@section('content')
<div class="typo">
    <div class="container">
        <div class="wthree_head_section">
        	<div class="text-center">
				<h2 class="card-title"><b>Perfil de {{$useralumno->nombres}}. </b></h2>
			</div>
			{!! Form::open(['route'=>['perfil.update',$useralumno, $alumno], 'method'=>'PUT']) !!}
				<div class="form-group" style="text-align: left;">
					<div class="form-group{{ $errors->has('nombres') ? ' has-error' : '' }}">
					{!!Form::label('nombre', 'Nombre(s): ')!!}
					{!!Form::text('nombres', $useralumno->nombres,['class'=>'form-control', 'placeholder'=>'Nombre(s)', 'required'])!!}
					@if ($errors->has('nombres'))
			        	<small class="text-danger">
				        	<strong>{{ $errors->first('nombres') }}</strong>
			            </small>
			        @endif
					</div>
					<div class="form-group{{ $errors->has('apellido_p') ? ' has-error' : '' }}">
					{!!Form::label('apellido_p', 'Primer apellido: ')!!}
					{!!Form::text('apellido_p', $useralumno->apellido_p,['class'=>'form-control', 'placeholder'=>'Primer apellido', 'required'])!!}
					@if ($errors->has('apellido_p'))
			        	<small class="text-danger">
				        	<strong>{{ $errors->first('apellido_p') }}</strong>
			            </small>
			        @endif
					</div>
					<div class="form-group{{ $errors->has('apellido_m') ? ' has-error' : '' }}">
					{!!Form::label('apellido_m', 'Segundo apellido: ')!!}
					{!!Form::text('apellido_m', $useralumno->apellido_m,['class'=>'form-control', 'placeholder'=>'Segundo apellido', 'required'])!!}
					@if ($errors->has('apellido_m'))
			        	<small class="text-danger">
				        	<strong>{{ $errors->first('apellido_m') }}</strong>
			            </small>
			        @endif
					</div>
					<div class="form-group{{ $errors->has('no_control') ? ' has-error' : '' }}">
					{!!Form::label('no_control', 'Número de control: ')!!}
					{!!Form::text('no_control', $useralumno->no_identificacion,['class'=>'form-control', 'placeholder'=>'Número de control', 'required'])!!}
					@if ($errors->has('no_control'))
			        	<small class="text-danger">
				        	<strong>{{ $errors->first('no_control') }}</strong>
			            </small>
			        @endif
					</div>
					<div class="form-group{{ $errors->has('sexo') ? ' has-error' : '' }}">
					{!!Form::label('sexo', 'Género: ')!!}
					{{Form::select('sexo', ['' => '', 'Masculino' => 'Masculino', 'Femenino' => 'Femenino'], $alumno->sexo, ['class'=>'form-control'])}}
					@if ($errors->has('sexo'))
			        	<small class="text-danger">
				        	<strong>{{ $errors->first('sexo') }}</strong>
			            </small>
			        @endif
					</div>
					<div class="form-group{{ $errors->has('telefono') ? ' has-error' : '' }}">
					{!!Form::label('telefono', 'Número de celular o de teléfono: ')!!}
					{!!Form::text('telefono', $alumno->telefono,['class'=>'form-control', 'placeholder'=>'Celular o telefono', 'required'])!!}
					@if ($errors->has('telefono'))
			        	<small class="text-danger">
				        	<strong>{{ $errors->first('telefono') }}</strong>
			            </small>
			        @endif
					</div>
					<div class="form-group{{ $errors->has('domicilio') ? ' has-error' : '' }}">
					{!!Form::label('domicilio', 'Domicilio: ')!!}
					{!!Form::text('domicilio', $alumno->domicilio,['class'=>'form-control', 'placeholder'=>'Domicilio', 'required'])!!}
					@if ($errors->has('domicilio'))
			        	<small class="text-danger">
				        	<strong>{{ $errors->first('domicilio') }}</strong>
			            </small>
			        @endif
					</div>
					<div class="form-group{{ $errors->has('carrera') ? ' has-error' : '' }}">
					{!!Form::label('carrera', 'Carrera: ')!!}
					{{Form::select('carrera', ['' => '', 'IGE'=>'IGE','IND'=>'IND','ISC'=>'ISC','LA'=>'LA','TSM'=>'TSM','INFS'=>'INF','IGES'=>'IGE'], $alumno->carrera, ['class'=>'form-control'])}}
					@if ($errors->has('carrera'))
			        	<small class="text-danger">
				        	<strong>{{ $errors->first('carrera') }}</strong>
			            </small>
			        @endif
					</div>
					<div class="form-group{{ $errors->has('periodo') ? ' has-error' : '' }}">
					{!!Form::label('periodo', 'Periodo escolar: ')!!}
					{!!Form::text('periodo', $alumno->periodo,['class'=>'form-control', 'placeholder'=>'Periodo escolar', 'required'])!!}
					@if ($errors->has('periodo'))
			        	<small class="text-danger">
				        	<strong>{{ $errors->first('periodo') }}</strong>
			            </small>
			        @endif
					<div class="form-group{{ $errors->has('semestre') ? ' has-error' : '' }}">
					{!!Form::label('semestre', 'Semestre: ')!!}
					{{Form::select('semestre', ['' => '', '5'=>'5','6'=>'6','7'=>'7','8'=>'8','9'=>'9'], $alumno->semestre, ['class'=>'form-control'])}}
					@if ($errors->has('semestre'))
			        	<small class="text-danger">
				        	<strong>{{ $errors->first('semestre') }}</strong>
			            </small>
			        @endif
			        <div class="form-group{{ $errors->has('correo') ? ' has-error' : '' }}">
					{!!Form::label('correo', 'Correo electronico institucional: ')!!}
					{!!Form::text('correo', $alumno->correo,['class'=>'form-control', 'placeholder'=>'example@example.com', 'required'])!!}
					@if ($errors->has('correo'))
			        	<small class="text-danger">
				        	<strong>{{ $errors->first('correo') }}</strong>
			            </small>
			        @endif

				</div>
				<div>
					{!!Form::submit('Editar usuario',['class'=>'btn btn-primary btn-block'])!!}
				</div>
					
			{!! Form::close() !!}
		</div>
	</div>
</div>
@endsection