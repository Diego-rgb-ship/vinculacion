@extends('templates.main')

@section('title', 'Enviar documento')

@section('content')

<div class="testimonials">
     <div class="test_agile_info">
    <div class="container">
      <ul id="flexiselDemo1"> 
      <li>
          <div class="wthree_testimonials_grid_main">
            <div class="wthree_testimonials_grid">
              <h4>Formato del documento a enviar.</h4>
              <p>El nombre del documento sera: Númerodecontrol_AnexoNúmero_Bimestre.pdf ejemplo; 13030118_AnexoXXII_2.pdf De lo contrario no se tomara encuenta</p>
            </div>
          
          </div>
        </li>    
        <li>
          <div class="wthree_testimonials_grid_main">
            <div class="wthree_testimonials_grid">
              <h4>¡Estudiante!</h4>
              <p>Recuerda que no puedes modificar ni eliminar reportes, así que ten cuidado a la hora de mandar
              </p>
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

<div class="text-center">
	<h2 class="card-title"><b>Enviar documento. </b></h2>
</div>

{!! Form::open(['route'=>['documentos.store'], 'method'=>'POST','files' => 'true']) !!}
	<div class="form-group" style="text-align: left;">
		{!!Form::label('bimestre', 'Elegir anexo : ')!!}
		{{Form::select('bimestre', ['' => '', 'Kardex'=>'Kardex', 'Anexo XVIII Solicitud de servicio social'=>'Anexo XVIII Solicitud de servicio social','Anexo XX Carta de compromiso de servicio social'=>'Anexo XX Carta de compromiso de servicio social','Anexo XXII Reporte bimestral de servicio social'=>'Anexo XXII Reporte bimestral de servicio social','Anexo XXIII Formato de evaluacion cualitativa del prestador del servicio social'=>'Anexo XXIII Formato de evaluacion cualitativa del prestador del servicio social','Anexo XXIV Formato de autoevaluacion cualitativa del prestador del servicio social'=>'Anexo XXIV Formato de autoevaluacion cualitativa del prestador del servicio social','Anexo XXV Formato de evaluación de las actividades por el prestador de servicio social'=>'Anexo XXV Formato de evaluación de las actividades por el prestador de servicio social','Carta de terminación'=>'Carta de terminación'], null, ['class'=>'form-control'])}}

		{!!Form::label('nombre_doc', 'Documento: ')!!}

		{!!Form::file('nombre_doc')!!}

	</div>

		{!!Form::submit('Enviar docuemento',['class'=>'btn btn-primary btn-block'])!!}
		<a href="{{route('documentos.index')}}" class="btn btn-danger btn-block">Cancelar</a>

{!! Form::close() !!}
@endsection