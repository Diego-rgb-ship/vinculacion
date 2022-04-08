@extends('templates.main')

@section('title', 'Evaluación Anexo XXIII')

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
              		<h2 class="card-title"><b>ANEXO XXIII. FORMATO DE EVALUACIÓN CUALITATIVA DEL PRESTADOR DE SERVICIO SOCIAL. </b></h2>
                </div>
                <h3 class="profile-username text-center">{{$useralumno->nombres}} {{$useralumno->apellido_p}} {{$useralumno->apellido_m}}</h3>
                <ul class="list-group list-group-unbordered mb-3">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th class="col-4 col-sm-4">Bimestre</th>
                          @foreach($fecualpsss as $fecualpss)
                            <th class="col-3">{{$fecualpss->no_reporte}}</th>
                          @endforeach
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th class="col-4 text-justify">Cumple en tiempo y forma con las actividades encomendadas alcanzando los objetivos.</th>
                            @foreach($fecualpsss as $fecualpss)
                              <td class="col-3">{{$fecualpss->criterio_1}}</td>
                            @endforeach
                        </tr>
                        <tr>
                          <th class="col-4 text-justify">Trabaja en equipo y se adapta a nuevas situaciones.</th>
                            @foreach($fecualpsss as $fecualpss)
                              <td class="col-3">{{$fecualpss->criterio_2}}</td>
                            @endforeach
                        </tr>
                        <tr>
                          <th class="col-4 text-justify">Muestra liderazgo en las actividades encomendadas.</th>
                            @foreach($fecualpsss as $fecualpss)
                              <td class="col-3">{{$fecualpss->criterio_3}}</td>
                            @endforeach
                        </tr>
                        <tr>
                          <th class="col-4 text-justify">Organiza su tiempo y trabaja de manera proactiva.</th>
                            @foreach($fecualpsss as $fecualpss)
                              <td class="col-3">{{$fecualpss->criterio_4}}</td>
                            @endforeach
                        </tr>
                        <tr>
                          <th class="col-4 text-justify">Interpreta la realidad y se sensibiliza aportando soluciones a la problemática con la actividad complementaria.</th>
                            @foreach($fecualpsss as $fecualpss)
                              <td class="col-3">{{$fecualpss->criterio_5}}</td>
                            @endforeach
                        </tr>
                        <tr>
                          <th class="col-4 text-justify">Realiza sugerencias innovadoras para beneficio o mejora del programa en el que participa.</th>
                            @foreach($fecualpsss as $fecualpss)
                              <td class="col-3">{{$fecualpss->criterio_6}}</td>
                            @endforeach
                        </tr>
                        <tr>
                          <th class="col-4 text-justify">Tiene iniciativa para ayudar en las actividades encomendadas y muestra espíritu de servicio.</th>
                            @foreach($fecualpsss as $fecualpss)
                              <td class="col-3">{{$fecualpss->criterio_7}}</td>
                            @endforeach
                        </tr>
                      </tbody>
                    </table>
                    <div class="card-tools">
                          <h3 class="card-title">
                        <a href="{{ route('fecualpss.create')}}" class="btn btn-primary btn-block"><b>Agregar reporte</b></a></h3>
                    </div>
                </ul>
              </div>
            </div>
          </div>
        </div>
    </div>
</div>

@endsection