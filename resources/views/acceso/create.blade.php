<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="{{asset('plugins/admin/css/bootstrap.min.css')}}">


    <title>@yield('title', 'Crear alumno')</title>
</head>
<body class="bg-light" style="padding: 15rem; padding-top: 10px">

    <div class="content p-4">
        <div class="container">
          <div class="row" style="color: #59152f;">
            <div class="col-sm text-center">
              
    		  <img src="{{asset('plugins/images/logo2022.jpg')}}" alt="ITSZO" style="height: 80px; ">
    		  <h1 class="mb-4" >Crear cuenta de alumno</h1>
            </div>
          </div>
        </div>
        
        <div class="card mb-4" >
            <div class="card-body">
                {!! Form::open(['route'=>'createacces', 'method'=>'POST']) !!}
			<div class="col-md-12">	
			<div class="form-horizontal">
		        <div class="card-header">
		        </div>
					<div class="card-body">
						<div class="form-group {{ $errors->has('nombres') ? ' has-error' : '' }}">
							{!!Form::label('nombres', 'Nombre(s):')!!}
							{!!Form::text('nombres', null,['class'=>'form-control', 'placeholder'=>'Nombre(s)', 'required'])!!}
							@if ($errors->has('nombres'))
			                    <small class="text-danger">
				                    <strong>{{ $errors->first('nombres') }}</strong>
			                    </small>
			                @endif
						</div>
						<div class="form-group{{ $errors->has('apellido_p') ? ' has-error' : '' }}">
							{!!Form::label('apellido_p', 'Primer apellido')!!}
							{!!Form::text('apellido_p', null,['class'=>'form-control', 'placeholder'=>'Primer apellido', 'required'])!!}
							@if ($errors->has('apellido_p'))
			                    <small class="text-danger">
				                    <strong>{{ $errors->first('apellido_p') }}</strong>
			                    </small>
			                @endif
						</div>
						<div class="form-group{{ $errors->has('apellido_m') ? ' has-error' : '' }}">
							{!!Form::label('apellido_m', 'Segundo apellido')!!}
							{!!Form::text('apellido_m', null,['class'=>'form-control', 'placeholder'=>'Segundo apellido', 'required'])!!}
							@if ($errors->has('apellido_m'))
			                    <small class="text-danger">
				                    <strong>{{ $errors->first('apellido_m') }}</strong>
			                    </small>
			                @endif
						</div>
						<div class="form-group{{ $errors->has('no_identificacion_confirmation') ? ' has-error' : '' }}">
							{!!Form::label('no_identificacion_confirmation', 'Número de control')!!}
							{!!Form::text('no_identificacion_confirmation', null,['class'=>'form-control', 'placeholder'=>'Número de control', 'required'])!!}
							@if ($errors->has('no_identificacion_confirmation'))
			                    <small class="text-danger">
				                    <strong>{{ $errors->first('no_identificacion_confirmation') }}</strong>
			                    </small>
			                @endif
						</div>
						<div class="form-group{{ $errors->has('no_identificacion') ? ' has-error' : '' }}">
							{!!Form::label('no_identificacion', 'Confirmar número de control')!!}
							{!!Form::text('no_identificacion', null,['class'=>'form-control', 'placeholder'=>'Número de control', 'required'])!!}
							@if ($errors->has('no_identificacion'))
			                    <small class="text-danger">
				                    <strong>{{ $errors->first('no_identificacion') }}</strong>
			                    </small>
			                @endif
						</div>
						<div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
							{!!Form::label('password_confirmation', 'Contraseña')!!}
							{!!Form::password('password_confirmation',['class'=>'form-control', 'placeholder'=>'Contraseña', 'required'])!!}
							@if ($errors->has('password_confirmation'))
			                    <small class="text-danger">
				                    <strong>{{ $errors->first('password_confirmation') }}</strong>
			                    </small>
			                @endif
						</div>
						<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
							{!!Form::label('password', 'Confirmar contraseña')!!}
							{!!Form::password('password',['class'=>'form-control', 'placeholder'=>'Contraseña', 'required'])!!}
							@if ($errors->has('password'))
			                    <small class="text-danger">
				                    <strong>{{ $errors->first('password') }}</strong>
			                    </small>
			                @endif
						</div>
						<div class="card-footer">
							{!!Form::submit('Crear cuenta',['class'=>'btn btn-primary btn-block', 'style' => 'background-color: #59152f;'])!!}
							<a href="{{ route('logout')}}" type="button" class="btn btn-secondary btn-block">Cancelar</a>
						</div>
					</div>
			</div>
		    </div>
		    </div>
		</div>
	</div>

</body>
</html>
