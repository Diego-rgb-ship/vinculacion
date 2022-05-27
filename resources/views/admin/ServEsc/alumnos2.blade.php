@extends('admin.template.main')

@section('title') 
 Alumnos registrados
@endsection

@section('title1') 
 <a href="{{route('alumnos2')}}" style="color: #59152f;">Alumnos registrados: {{$alumnostotal}}</a>
@endsection

@section('title2')
<a href="{{route('alumnos2.alumnosmujeres')}}" style="color: #59152f;">Mujeres: {{$mujeres}}</a>
@endsection

@section('title3')
 <a href="{{route('alumnos2.alumnoshombres')}}" style="color: #59152f;">Hombres: {{$hombres}}</a>
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
						<th>Apellido paterno:</th>
						<th>Apellido paterno:</th>
						<th>Número de control:</th>
						<th>Genero:</th>
						<th>Semestre:</th>
						<th>Carrera: </th>
						<th>Correo electronico:</th>
						
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
							<td>{{$alumno->semestre}}</td>
							<td>{{$alumno->carrera}}</td>
							<td>{{$alumno->correo}}</td>
							
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