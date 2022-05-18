@extends('admin.template.main')

@section('title', 'Seguimiento de alumnos de ISC')

@section('content')

<div class="card-deck"> 
  <div class="card">
    <div class="card-body">
      <h5 class="card-title font-weight-bold">{{$alumnos->user->nombres}} {{$alumnos->user->apellido_p}} {{$alumnos->user->apellido_m}}</h5>
      <ul class="list-group list-group-flush">
	    <li class="list-group-item"><a class="font-weight-bold">Número de control: </a><a class="text-right">{{$alumnos->no_control}}</a></li>
	    <li class="list-group-item text-justify"><a class="font-weight-bold text-justify">Genero: </a><a class="text-right">{{$alumnos->sexo}}</a></li>
	    <li class="list-group-item"><a class="font-weight-bold">Teléfono: </a>{{$alumnos->telefono}}</li>
	    <li class="list-group-item"><a class="font-weight-bold">Domicilio: </a>{{$alumnos->domicilio}}</li>
	    <li class="list-group-item"><a class="font-weight-bold">Periodo escolar: </a>{{$alumnos->periodo}}</li>
	    <li class="list-group-item"><a class="font-weight-bold">Carrera: </a>{{$alumnos->carrera}}</li>
	    <li class="list-group-item"><a class="font-weight-bold">Semestre: </a>{{$alumnos->semestre}}</li>
	    <li class="list-group-item"><a class="font-weight-bold">Correo electrónico: </a>{{$alumnos->correo}}</li>
	  </ul>
    </div>
  </div>
  <div class="card">
    <div class="card-body">
      <h5 class="card-title font-weight-bold">Anexo Solicitud</h5>
      <ul class="list-group list-group-flush">
	    <li class="list-group-item"><a class="font-weight-bold">Dependecia oficial: </a>{{$alumnos->programa['dependencia_of']}}</li>
	    <li class="list-group-item text-justify"><a class="font-weight-bold text-justify">Titular de la dependencia: </a><a class="text-right">{{$alumnos->programa['titular_dep']}}</a></li>
	    <li class="list-group-item"><a class="font-weight-bold">Puesto en la dependencia: </a>{{$alumnos->programa['puesto_dep']}}</li>
	    <li class="list-group-item"><a class="font-weight-bold">Nombre del programa: </a>{{$alumnos->programa['nombre_programa']}}</li>
	    <li class="list-group-item"><a class="font-weight-bold">Modalidad: </a>{{$alumnos->programa['modalidad']}}</li>
	    <li class="list-group-item"><a class="font-weight-bold">Fecha de inicio: </a>{{$alumnos->programa['fecha_inicio']}}</li>
	    <li class="list-group-item"><a class="font-weight-bold">Fecha de terminación: </a>{{$alumnos->programa['fecha_terminacion']}}</li>
	    <li class="list-group-item"><a class="font-weight-bold">Actividades: </a>{{$alumnos->programa['programa_actividad']}}</li>
	    <li class="list-group-item"><a class="font-weight-bold">Tipo de programa: </a>{{$alumnos->programa['tip_pro']}}</li>
	  </ul>
    </div>
  </div>
  <div class="card">
    <div class="card-body">
      <h5 class="card-title font-weight-bold">Documentos enviados</h5>
      <ul class="list-group list-group-flush">
        
        	@foreach($documentos as $documento)
            <tr>
              <li class="list-group-item"><a href="{{route('descargar.archivo', $documento->nombre_doc)}}" style="color: #1B396A"><i class="far fa-file-pdf"></i> {{$documento->nombre_doc}} {{$documento->bimestre}}</a>
                


              </li>
            </tr>
          @endforeach

      </ul>
  	</div>
  </div>
  <div class="card">
    <div class="card-body">
      <h5 class="card-title font-weight-bold">Agregar retroalimentación</h5>
      <ul class="list-group list-group-flush">
        
        	@foreach($documentos as $documento)
            <tr>
              {!!Form::text('nombres', $alumnos->nombres,['class'=>'form-control', 'placeholder'=>'Comentario', 'required'])!!}
		          
              {!!Form::submit('Agregar comentario',['class'=>'btn btn-primary btn-block'])!!}
                


              </li>
            </tr>
          @endforeach

      </ul>
  	</div>
  </div>
</div>

@endsection