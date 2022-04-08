@extends('templates.main')

@section('title',$alumno->nombres)

@section('content')
<div class="typo">
    <div class="container">
        <div class="wthree_head_section">
              <div class="col-sm-12">
                <div class="card">
                  <div class="card-body">
                  	<div class="text-center">
                  		<h2 class="card-title"><b>Servicio Social</b></h2>
                    </div>
                    <h3 class="profile-username text-center">{{$alumno->nombres}} {{$alumno->apellido_p}} {{$alumno->apellido_m}}</h3>
                    <p class="text-muted text-center">Datos personales</p>
                    <ul class="list-group list-group-unbordered mb-3">
                        <li class="list-group-item">
                            <b>Sexo: </b> <a class="float-right">{{$alumnos->sexo}}</a>
                        </li>
                        <li class="list-group-item">
                            <b>Teléfono: </b> <a class="float-right">{{$alumnos->telefono}}</a>
                        </li>
                        <li class="list-group-item">
                            <b>Domicilio: </b> <a class="float-right">{{$alumnos->domicilio}}</a>
                        </li>
                        <li class="list-group-item">
                            <b>Correo electronico institucional: </b> <a class="float-right">{{$alumnos->correo}}</a>
                        </li>
                    </ul>
                    <p class="text-muted text-center">Escolaridad</p>
                    <ul class="list-group list-group-unbordered mb-3">
                        <li class="list-group-item">
                            <b>Número de control: </b> <a class="float-right">{{$alumnos->id}}</a>
                        </li>
                        <li class="list-group-item">
                            <b>Carrera: </b> <a class="float-right">{{$alumnos->carrera}}</a>
                        </li>
                        <li class="list-group-item">
                            <b>Semestre: </b> <a class="float-right">{{$alumnos->semestre}}</a>
                        </li>
                        <li class="list-group-item">
                            <b>Periodo: </b> <a class="float-right">{{$alumnos->periodo}}</a>
                        </li>
                    </ul>
                    <a  href="{{route('perfil.editardatos', $alumno->id)}}" class="btn btn-primary btn-block"><b>Editar</b></a>
                  </div>
                </div>
              </div>
        </div>
    </div>
</div>

@endsection