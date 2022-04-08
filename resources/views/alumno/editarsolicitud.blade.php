@extends('templates.main')

@section('title', 'Editar solicitud de servicio social')

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

    <script src="https://cdn.jsdelivr.net/npm/gijgo@1.9.6/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://cdn.jsdelivr.net/npm/gijgo@1.9.6/css/gijgo.min.css" rel="stylesheet" type="text/css" />

<div class="typo">
    <div class="container">
        <div class="wthree_head_section">
        	<div class="text-center">
				<h2 class="card-title"><b>ANEXO XVII. SOLICITUD DE SERVICIO SOCIAL. </b></h2>
			</div>
{!! Form::open(['route'=>['solicitud.update',$programa], 'method'=>'PUT']) !!}
	<div class="form-group" style="text-align: left;">
		{!!Form::label('dependencia_of', 'Dependencia oficial: ')!!}
		{!!Form::text('dependencia_of', $programa->dependencia_of,['class'=>'form-control', 'placeholder'=>'Dependencia oficial', 'required'])!!}

		{!!Form::label('titular_dep', 'Titular de la dependencia: ')!!}
		{!!Form::text('titular_dep', $programa->titular_dep,['class'=>'form-control', 'placeholder'=>'Titular de la dependencia', 'required'])!!}

		{!!Form::label('puesto_dep', 'Puesto de la dependencia: ')!!}
		{!!Form::text('puesto_dep', $programa->puesto_dep,['class'=>'form-control', 'placeholder'=>'Puesto de la dependencia', 'required'])!!}

		{!!Form::label('nombre_programa', 'Nombre del programa: ')!!}
		{!!Form::text('nombre_programa', $programa->nombre_programa,['class'=>'form-control', 'placeholder'=>'Nombre del programa', 'required'])!!}

		{!!Form::label('modalidad', 'Modalidad: ')!!}
		{{Form::select('modalidad', ['' => '', 'Interno' => 'Interno', 'Externo' => 'Externo'], $programa->modalidad, ['class'=>'form-control'])}}

		{!!Form::label('fecha_inicio', 'Fecha de inicio: ')!!}
		{!!Form::text('fecha_inicio', $programa->fecha_inicio,['class'=>'form-control', 'id'=>'datepicker','placeholder'=>'Fecha de inicio', 'required'])!!}
		

		{!!Form::label('fecha_terminacion', 'Fecha de terminacion: ')!!}
		{!!Form::text('fecha_terminacion', $programa->fecha_terminacion,['class'=>'form-control','id'=>'datepicker2', 'placeholder'=>'Fecha de terminacion', 'required'])!!}

		{!!Form::label('programa_actividad', 'Programa de actividades: ')!!}
		{!!Form::text('programa_actividad', $programa->programa_actividad,['class'=>'form-control', 'placeholder'=>'Programa de actividades', 'required'])!!}

		{!!Form::label('tip_pro', 'Tipo de programa: ')!!}
		{{Form::select('tip_pro', ['' => '', 'EPA'=>'EPA','AC'=>'AC','DS'=>'DS','DC'=>'DC','ACULT'=>'ACUL','AALS'=>'AALS','AD'=>'AD','MA'=>'MA','Otro'=>'Otro'], $programa->tip_pro, ['class'=>'form-control'])}}
	</div>
		
		{!!Form::submit('Editar usuario',['class'=>'btn btn-primary btn-block'])!!}
		<a href="{{route('solicitud.index')}}" class="btn btn-danger btn-block">Cancelar</a>

    	<script>
        $('#datepicker').datepicker({
            uiLibrary: 'bootstrap'
       		 });
    	</script>

    	<script>
        $('#datepicker2').datepicker({
            uiLibrary: 'bootstrap'
       		 });
    	</script>
{!! Form::close() !!}
		</div>
	</div>
</div>

@endsection