@extends('templates.main')

@section('title', 'Documentos')

@section('content')

<div class="testimonials">
     <div class="test_agile_info">
    <div class="container">
      <ul id="flexiselDemo1">    
        <li>
          <div class="wthree_testimonials_grid_main">
            <div class="wthree_testimonials_grid">
              <h4>¡Estudiante!</h4>
              <p>Recuerda que solo puedes enviar reportes bimestrales y no puedes modificar ni eliminar reportes, así que ten cuidado a la hora de mandar algún reporte</p>
            </div>
          </div>
        </li>
        <li>
          <div class="wthree_testimonials_grid_main">
            <div class="wthree_testimonials_grid">
              <h4>¡Recuerda!</h4>
              <p>Recuerda la fecha de inicialización del servicio social y la terminación del servicio social, lo encuentras en el ANEXO XVIII. SOLICITUD DE SERVICIO SOCIAL.</p>
            </div>
          
          </div>
        </li>
      </ul>
    </div>
  </div>
</div>


<div class="typo">
    <div class="container">
        <div class="wthree_head_section">
          <div class="col-sm-12">
            <div class="card">
              <div class="card-body">
              	<div class="text-center">
              		<h2 class="card-title"><b>Documentos enviados. </b></h2>
                </div>
                <h3 class="profile-username text-center">{{$useralumnos->nombres}} {{$useralumnos->apellido_p}} {{$useralumnos->apellido_m}}</h3>
                <ul class="list-group list-group-unbordered mb-3">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th scope="col">Nombre del documento:</th>
                          <th scope="col">Nombre de reporte:</th>
                          <th scope="col">Retroalimentación:</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($documentos as $documento)
                                <tr>
                                    <td><a href="{{route('descargar.archivos', $documento->nombre_doc)}}">{{$documento->nombre_doc}}</a></td>
                                    <td>{{$documento->bimestre}}</td>
                                </tr>
                        @endforeach
                      </tbody>
                    </table>
                    <div class="card-tools">
                          <h3 class="card-title">
                        <a href="{{ route('documentos.create')}}" class="btn btn-primary btn-block">Enviar nuevo documento</a></h3>
                    </div>
                </ul>
              </div>
            </div>
          </div>
        </div>
    </div>
</div>
@endsection