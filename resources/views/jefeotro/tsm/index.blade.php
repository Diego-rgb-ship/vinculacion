@extends('admin.template.main')

@section('title')
Alumnos de TSM
@endsection

@section('title1')
<a href="{{route('seguimiento.indextsm')}}" style="color: #59152f;">Alumnos de TSM: {{$alumnostotal}}</a>
@endsection

@section('title2')
<a href="{{route('seguimiento.indextsmmujeres')}}" style="color: #59152f;">Mujeres: {{$mujeres}}</a>
@endsection

@section('title3')
 <a href="{{route('seguimiento.indextsmhombres')}}" style="color: #59152f;">Hombres: {{$hombres}}</a>
@endsection

@section('content')
	<div class="row">
          <div class="col-12">
            <div class="card">
		<div class="card-body table-responsive p-0">
              <table class="table table-hover">
               
				<thead style="color: #716F70;">
					<tr>
						<th>Nombre(s):</th>
						<th>Primer apellido:</th>
						<th>Segundo apellido:</th>
						<th>Número de control:</th>
						<th>Genero:</th>
						<th>Periodo:</th>
						<th>Correo:</th>
						<th>Seguimiento:</th>
					</tr>
				</thead>
                <tbody>
					@foreach($alumnos as $alumno)
						<tr>
							<td>{{$alumno->user->nombres}}</td>
							<td>{{$alumno->user->apellido_p}}</td>
							<td>{{$alumno->user->apellido_m}}</td>
							<td>{{$alumno->no_control}}</td>
							<td>{{$alumno->sexo}}</td>
							<td>{{$alumno->periodo}}</td>
							<td>{{$alumno->correo}}</td>
							<td><a href="{{route('seguimiento.alumno.perfil', $alumno->no_control)}}" style="color: #59152f;">Ver perfil completo</a></td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
	{{ $alumnos->links()}}
</div>

</div>
          	    
@endsection