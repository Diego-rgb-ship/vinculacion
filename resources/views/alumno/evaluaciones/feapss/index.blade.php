@extends('templates.main')

@section('title', 'Evaluación ANEXO XXV')

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
              		<h2 class="card-title"><b>ANEXO XXV. FORMATO DE EVALUACIÓN DE LAS ACTIVIDADES POR EL PRESTADOR DE SERVICIO SOCIAL. </b></h2>
                </div>
                <h3 class="profile-username text-center">{{$useralumno->nombres}} {{$useralumno->apellido_p}} {{$useralumno->apellido_m}}</h3>
                <ul class="list-group list-group-unbordered mb-3">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th class="col-4 col-sm-4">Bimestre</th>
                          @foreach($feapsss as $feapss)
                            <th class="col-3">{{$feapss->no_reporte}}</th>
                          @endforeach
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th class="col-4 text-justify">1. ¿Consideras importante la realización del Servicio Social?</th>
                            @foreach($feapsss as $feapss)
                              <td class="col-3">{{$feapss->criterio_1}}</td>
                            @endforeach
                        </tr>
                        <tr>
                          <th class="col-4 text-justify">2. ¿Consideras que las actividades que realizaste son pertinentes a los fines del Servicio Social?</th>
                            @foreach($feapsss as $feapss)
                              <td class="col-3">{{$feapss->criterio_2}}</td>
                            @endforeach
                        </tr>
                        <tr>
                          <th class="col-4 text-justify">3. ¿Consideras que las actividades que realizaste contribuyen a tu formación integral?</th>
                            @foreach($feapsss as $feapss)
                              <td class="col-3">{{$feapss->criterio_3}}</td>
                            @endforeach
                        </tr>
                        <tr>
                          <th class="col-4 text-justify">4. ¿Contribuiste en actividades de beneficio social comunitario?</th>
                            @foreach($feapsss as $feapss)
                              <td class="col-3">{{$feapss->criterio_4}}</td>
                            @endforeach
                        </tr>
                        <tr>
                          <th class="col-4 text-justify">5. ¿Contribuiste en actividades de protección al medio ambiente?</th>
                            @foreach($feapsss as $feapss)
                              <td class="col-3">{{$feapss->criterio_5}}</td>
                            @endforeach
                        </tr>
                        <tr>
                          <th class="col-4 text-justify">6. ¿Cómo consideras que las competencias que adquiriste en la escuela contribuyeron a atender asertivamente las actividades de servicio social?</th>
                            @foreach($feapsss as $feapss)
                              <td class="col-3">{{$feapss->criterio_6}}</td>
                            @endforeach
                        </tr>
                        <tr>
                          <th class="col-4 text-justify">7. ¿Consideras que sería factible continuar con este proyecto de Servicio Social a un proyecto de Residencias Profesionales, proyecto integrador, proyecto de investigación o desarrollo tecnológico?</th>
                            @foreach($feapsss as $feapss)
                              <td class="col-3">{{$feapss->criterio_7}}</td>
                            @endforeach
                        </tr>
                        <tr>
                          <th class="col-4 text-justify">8. ¿Recomendarías a otro estudiante realizar su Servicio Social en la dependencia donde lo realizaste?</th>
                            @foreach($feapsss as $feapss)
                              <td class="col-3">{{$feapss->criterio_7}}</td>
                            @endforeach
                        </tr>
                      </tbody>
                    </table>
                    <div class="card-tools">
                          <h3 class="card-title"><a href="{{ route('feapss.create')}}" class="btn btn-primary btn-block"><b>Agregar reporte</b></a></h3>
                          
                    </div>
                </ul>
              </div>
            </div>
          </div>
        </div>
    </div>
</div>

@endsection