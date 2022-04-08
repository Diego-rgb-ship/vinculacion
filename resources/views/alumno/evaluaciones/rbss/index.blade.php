@extends('templates.main')

@section('title', 'Reporte bimestra Anexo XXII')

@section('content')
<div class="testimonials">
     <div class="test_agile_info">
    <div class="container">
      <ul id="flexiselDemo1">     
        <li>
          <div class="wthree_testimonials_grid_main">
            <div class="wthree_testimonials_grid">
              <h4>¡Estudiante!</h4>
              <p>Recuerda que solo puedes agregar reportes bimestrales y no puedes modificar ni eliminar reportes, así que ten cuidado a la hora de mandar algún reporte..</p>
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
              		<h2 class="card-title"><b>ANEXO XXII. REPORTE BIMESTRAL DE SERVICIO SOCIAL. </b></h2>
                </div>
                <h3 class="profile-username text-center">{{$useralumno->nombres}} {{$useralumno->apellido_p}} {{$useralumno->apellido_m}}</h3>
                <ul class="list-group list-group-unbordered mb-3">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th scope="col">Número de reporte:</th>
                          <th scope="col">Horas total de este reporte.</th>
                          <th scope="col">Total de horas acumuladas.</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($rbsss as $rbss)
                                <tr>
                                    <td>{{$rbss->no_reporte}}</td>
                                    <td>{{$rbss->horas_total}}</td>
                                    <td>{{$rbss->horas_acumuladas}}</td>
                                </tr>
                        @endforeach
                      </tbody>
                    </table>
                    <div class="card-tools">
                          <h3 class="card-title">
                        <a  href="{{route('rbss.create')}}" class="btn btn-primary btn-block"><b>Agregar reporte</b></a></h3>
                    </div>
                </ul>
              </div>
            </div>
          </div>
        </div>
    </div>
</div>

@endsection