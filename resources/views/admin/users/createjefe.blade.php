@extends('admin.template.main')

@section('title', 'Crear jefe de carrera')

@section('content')
{!! Form::open(['route'=>'jefecarrera.store', 'method'=>'POST']) !!}
<div class="col-md-24">	
	<div class="form-horizontal">
        <div class="card-header">
        </div>
			<div class="card-body">
				<div class="form-group">
					{!!Form::label('nombre', 'Nombre(s):')!!}
					{!!Form::text('nombres', null,['class'=>'form-control', 'placeholder'=>'Nombre(s)', 'required'])!!}
				</div>
				<div class="form-group">
					{!!Form::label('apellido_p', 'Primer apellido ')!!}
					{!!Form::text('apellido_p', null,['class'=>'form-control', 'placeholder'=>'Apellido paterno', 'required'])!!}
				</div>
				<div class="form-group">
					{!!Form::label('apellido_m', 'Segundo apellido')!!}
					{!!Form::text('apellido_m', null,['class'=>'form-control', 'placeholder'=>'Apellido materno', 'required'])!!}
				</div>
				<div class="form-group">
					{!!Form::label('no_identificacion', 'Número de identificación')!!}
					{!!Form::text('no_identificacion', null,['class'=>'form-control', 'placeholder'=>'Número de identificación', 'required'])!!}
				</div>
				<div class="form-group">
					{!!Form::label('carrera', 'Carrera')!!}
					{{Form::select('carrera', [''=>'','IGE'=>'IGE','IND'=>'IND','ISC'=>'ISC','LA'=>'LA','TSM'=>'TSM','INFS'=>'INF','IGES'=>'IGE-EaD'], null, ['class'=>'form-control'])}}
				</div>
				<div class="form-group">
					{!!Form::label('password', 'Contraseña')!!}
					{!!Form::password('password',['class'=>'form-control', 'placeholder'=>'Contraseña', 'required'])!!}
				</div>
				<div class="card-footer">
					{!!Form::submit('Crear usuario',['class'=>'btn btn-primary'])!!}
				</div>
			
		</div>
	</div>


@section('paginate')
          <a href="">Cancelar</a>   
@endsection

{!! Form::close() !!}


@endsection()


