@extends('admin.template.main')

@section('title', 'Crear acceso')

@section('content')
{!! Form::open(['route'=>'accesos.store', 'method'=>'POST']) !!}
<div class="col-md-24">	
	<div class="form-horizontal">
        <div class="card-header">
        </div>
			<div class="card-body">
				<div class="form-group">
					{!!Form::label('no_identificacion', 'Numero de identificación')!!}
					{!!Form::text('no_identificacion', null,['class'=>'form-control', 'placeholder'=>'Numero para el acceso', 'required'])!!}
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