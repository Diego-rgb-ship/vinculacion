@extends('admin.template.main')

@section('title', 'Seguimiento de alumnos de ISC')

@section('content')

<div class="card-deck"> 
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
