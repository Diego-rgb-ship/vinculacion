@extends('templates.main')

@section('title', 'Agregar reporte')

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
        	<div class="text-center">
				<h2 class="card-title"><b>ANEXO XXII. REPORTE BIMESTRAL DE SERVICIO SOCIAL. </b></h2>
			</div>

{!! Form::open(['route'=>['rbss.store'], 'method'=>'POST']) !!}
	<div class="form-group" style="text-align: left;">
		{!!Form::label('no_reporte', 'Numero de reporte: ')!!}
		{{Form::select('no_reporte', ['' => '', '1'=>'1','2'=>'2','3'=>'3','4'=>'4','5'=>'5','6'=>'6','7'=>'7','8'=>'8','9'=>'9','10'=>'10','11','12'=>'12','Final'=>'Final'], null, ['class'=>'form-control'])}}

		{!!Form::label('horas_total', 'Total de horas de este reporte: ')!!}
		{!!Form::text('horas_total', null,['class'=>'form-control', 'placeholder'=>'Total de horas de este reporte.', 'required'])!!}

		{!!Form::label('horas_acumuladas', 'Total de horas acumuladas: ')!!}
		{!!Form::text('horas_acumuladas', null,['class'=>'form-control', 'placeholder'=>'Total de horas acumuladas.', 'required'])!!}

	</div>

		{!!Form::submit('Agregar reporte',['class'=>'btn btn-primary btn-block'])!!}
		<a href="{{route('rbss.index')}}" class="btn btn-danger btn-block">Cancelar</a>

{!! Form::close() !!}

</div>
</div>
</div>
@endsection