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
				<h2 class="card-title"><b>ANEXO XXV. FORMATO DE EVALUACIÓN DE LAS ACTIVIDADES POR EL PRESTADOR DE SERVICIO SOCIAL. </b></h2>
			</div>

{!! Form::open(['route'=>['feapss.store'], 'method'=>'POST']) !!}
	<div class="form-group" style="text-align: left;">
		{!!Form::label('no_reporte', 'Bimestre: ')!!}
		{{Form::select('no_reporte', ['' => '', '1'=>'1','2'=>'2','3'=>'3','4'=>'4','5'=>'5','6'=>'6','7'=>'7','8'=>'8','9'=>'9','10'=>'10','11','12'=>'12','Final'=>'Final'], null, ['class'=>'form-control'])}}

		{!!Form::label('criterio_1', '1. ¿Consideras importante la realización del Servicio Social? ')!!}
		{{Form::select('criterio_1', ['' => '', '1' => 'Insuficiente', '2' => 'Suficiente', '3'=>'Bueno', '4'=>'Notable', '5'=>'Excelente'], null, ['class'=>'form-control'])}}

		{!!Form::label('criterio_2', '2. ¿Consideras que las actividades que realizaste son pertinentes a los fines del Servicio Social? ')!!}
		{{Form::select('criterio_2', ['' => '', '1' => 'Insuficiente', '2' => 'Suficiente', '3'=>'Bueno', '4'=>'Notable', '5'=>'Excelente'], null, ['class'=>'form-control'])}}

		{!!Form::label('criterio_3', '3. ¿Consideras que las actividades que realizaste contribuyen a tu formación integral? ')!!}
		{{Form::select('criterio_3', ['' => '', '1' => 'Insuficiente', '2' => 'Suficiente', '3'=>'Bueno', '4'=>'Notable', '5'=>'Excelente'], null, ['class'=>'form-control'])}}

		{!!Form::label('criterio_4', '4. ¿Contribuiste en actividades de beneficio social comunitario? ')!!}
		{{Form::select('criterio_4', ['' => '', '1' => 'Insuficiente', '2' => 'Suficiente', '3'=>'Bueno', '4'=>'Notable', '5'=>'Excelente'], null, ['class'=>'form-control'])}}

		{!!Form::label('criterio_5', '5. ¿Contribuiste en actividades de protección al medio ambiente?  ')!!}
		{{Form::select('criterio_5', ['' => '', '1' => 'Insuficiente', '2' => 'Suficiente', '3'=>'Bueno', '4'=>'Notable', '5'=>'Excelente'], null, ['class'=>'form-control'])}}

		{!!Form::label('criterio_6', '6. ¿Cómo consideras que las competencias que adquiriste en la escuela contribuyeron a atender asertivamente las actividades de servicio social? ')!!}
		{{Form::select('criterio_6', ['' => '', '1' => 'Insuficiente', '2' => 'Suficiente', '3'=>'Bueno', '4'=>'Notable', '5'=>'Excelente'], null, ['class'=>'form-control'])}}

		{!!Form::label('criterio_7', '7. ¿Consideras que sería factible continuar con este proyecto de Servicio Social a un proyecto de Residencias Profesionales, proyecto integrador, proyecto de investigación o desarrollo tecnológico?  ')!!}
		{{Form::select('criterio_7', ['' => '', '1' => 'Insuficiente', '2' => 'Suficiente', '3'=>'Bueno', '4'=>'Notable', '5'=>'Excelente'], null, ['class'=>'form-control'])}}

		{!!Form::label('criterio_8', '8. ¿Recomendarías a otro estudiante realizar su Servicio Social en la dependencia donde lo realizaste?')!!}
		{{Form::select('criterio_8', ['' => '', '1' => 'Insuficiente', '2' => 'Suficiente', '3'=>'Bueno', '4'=>'Notable', '5'=>'Excelente'], null, ['class'=>'form-control'])}}
	</div>

		{!!Form::submit('Agregar reporte',['class'=>'btn btn-primary btn-block'])!!}
		<a href="{{route('feapss.index')}}" class="btn btn-danger btn-block">Cancelar</a>

{!! Form::close() !!}
</div>
</div>
</div>
@endsection