@extends('admin.template.main')

@section('title', 'Accesos')
@section('accion')
<a href="{{ url('/admin/accesos/create')}}" class="btn btn-outline-success">Registrar nuevo acceso</a>
@endsection

@section('content')

	<div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
				<h3 class="card-title">
				<a href="{{ url('/admin/accesos/create')}}" class="btn btn-outline-success" style="size: 1px; text-align: left;">Registrar un nuevo acceso</a></h3>


              </div>
		<div class="card-body table-responsive p-0">
              <table class="table table-hover">
               
				<thead>
					<tr>
						<th>Número de identificación</th>
					</tr>
				</thead>
                <tbody>
					@foreach($accesos as $acceso)
						<tr>
							<td>{{$acceso->no_identificacion}}</td>
							<td>
								<a href="{{route('accesos.edit', $acceso->id)}}" class="btn btn-warning">Editar</a>
								<a href="{{route('admin.accesos.destroy', $acceso->id)}}" onclick="return confirm('¿Seguro decea eliminarlo?')" class="btn btn-danger"><span class="glyphicon glyphicon-wrech" aria-hidden="true">Eliminar</span></a
							></td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>
</div>

@endsection

