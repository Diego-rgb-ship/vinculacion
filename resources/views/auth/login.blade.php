<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Servicio social ITSZO| Iniciar sesión</title>


  <link rel="stylesheet" href="{{asset('plugins/admin/css/bootstrap.min.css')}}">
  </head>
<body class="bg-light" style="padding: 30rem; padding-top: 10px; padding-bottom: 10px;">

      <div class="container" >
        <div class="row" style="color: #59152f;">
          <div class="col-sm text-center">
            <img src="{{asset('plugins/images/logo2022.jpg')}}" alt="ITSZO" style="height: 80px; ">
            <h1 class="mb-4" >Bienvenido</h1>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-body">
          <div class="col-md-12"> 
            <div class="form-horizontal">
              <div class="card-header text-center" style="color: #59152f;">
                <h4>Inicia sesión para continuar</h4>
              </div>
            <div class="card-body">
              {!! Form::open(['route' => 'login', 'method' => 'POST'])!!}
          		<div class="form-group has-feedback {{ $errors->has('no_identificacion') ? ' has-error' : '' }}">
          			{!! Form::text('no_identificacion', null, ['class'=>'form-control', 'placeholder' => 'Usuario', 'required']) !!}
          			<span class="fa fa-user form-control-feedback"></span>
                @if ($errors->has('no_identificacion'))
                  <small class="text-danger">
                    <strong>{{ $errors->first('no_identificacion') }}</strong>
                  </small>
                @endif
          		</div>
          		<div class="form-group has-feedback {{ $errors->has('password') ? ' has-error' : '' }}">
          			{!! Form::password('password', ['class'=>'form-control', 'placeholder' => 'Contraseña', 'required']) !!}
          			<span class="fa fa-lock form-control-feedback"></span>

                @if ($errors->has('password'))
                  <small class="text-danger">
                    <strong>{{ $errors->first('password') }}</strong>
                  </small>
                @endif
          		</div>
          		<div class="form-group">
          			{!! Form::submit('Acceder', ['class' => 'btn btn-block btn-flat', 'style'=>'background-color: #59152f; border-color: #15593C; lighting-color: #15593C; -webkit-text-fill-color: #FFF;']) !!}
                <a href="{{route('welcome')}}" class="btn btn-block" style="background-color: #6a6e74; border-color: #1B396A; lighting-color: #1B396A; -webkit-text-fill-color: #FFF;">Cancelar</a>
          		</div>
          	  {!! Form::close() !!}
            </div>
          </div>
        </div>
      </div>
    </div>


<!-- jQuery -->
<script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- iCheck -->
<script src="{{asset('plugins/iCheck/icheck.min.js')}}"></script>
</body>
</html>