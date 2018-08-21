
@extends('backend::page')

@section('content')
	
<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="panel panel-default">
					<div class="panel-heading">
						Lista de Entrada y Salida de trabajadores
						<a href="{{ route('registries.create') }}" class="btn btn-sm btn-primary pull-right">
							Crear
						</a>
					</div>
					<div class="panel-body">
						<table class="table table-striped table-hover">
							<thead>
								<tr>
									<th width="10px">ID</th>
									<th>registros</th>
									<th colspan="3">&nbsp;</th>
								</tr>
							</thead>
							<tbody>
								@foreach($registries as $registry)
								<tr>
									<td>{{ $registry->id }}</td>
									{{--<td>{{ $registry->pais }}</td>--}}
									<td width="10px">
										<a href="{{ route('registries.show', $registry->id) }}" class="btn btn-sm btn-default">
											ver
										</a>
									</td>
									<td width="10px">
										<a href="{{ route('registries.edit', $registry->id) }}" class="btn btn-sm btn-default">
											editar
										</a>
									</td>
									<td width="10px">
										{!! Form::open(['route' => ['registries.destroy', $registry->id], 'method' => 'DELETE']) !!}
										<button class="btn btn-sm btn-danger">
											Eliminar
										</button>
										{!! Form::close() !!}
									</td>
								</tr>
								@endforeach
							</tbody>
						</table>
						{{ $registries->render() }}
					</div>
				</div>
			</div>
		</div>
	</div> 
@endsection