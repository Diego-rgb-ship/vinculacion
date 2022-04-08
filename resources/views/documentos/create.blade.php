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
              <p>El nombre del documento sera: Númerodecontrol_AnexoNúmero_Bimestre.pdf, .jpg o .png, ejemplo; 13030118_AnexoXXII_2.pdf De lo contrario no se tomara encuenta</p>
            </div>
          
          </div>
        </li>    
        <li>
          <div class="wthree_testimonials_grid_main">
            <div class="wthree_testimonials_grid">
              <h4>¡Estudiante!</h4>
              <p>Recuerda que solo puedes enviar reportes bimestrales y no puedes modificar ni eliminar reportes, así que ten cuidado a la hora de mandar algún reporte
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
	<h2 class="card-title"><b>Enviar docuemento. </b></h2>
</div>

{!! Form::open(['route'=>['documentos.store'], 'method'=>'POST','files' => 'true']) !!}
	<div class="form-group" style="text-align: left;">
		{!!Form::label('bimestre', 'Bimestre de reporte: ')!!}
		{{Form::select('bimestre', ['' => '', '1'=>'1','2'=>'2','3'=>'3','4'=>'4','5'=>'5','6'=>'6','7'=>'7','8'=>'8','9'=>'9','10'=>'10','11','12'=>'12','Final'=>'Final'], null, ['class'=>'form-control'])}}

		{!!Form::label('nombre_doc', 'Documento: ')!!}

		{!!Form::file('nombre_doc')!!}

	</div>

		{!!Form::submit('Enviar docuemento',['class'=>'btn btn-primary btn-block'])!!}
		<a href="{{route('documentos.index')}}" class="btn btn-danger btn-block">Cancelar</a>

{!! Form::close() !!}
@endsection