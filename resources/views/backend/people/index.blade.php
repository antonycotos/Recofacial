
@extends('backend.layout')

@section('content')
	
<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="panel panel-default">
					<div class="panel-heading">
						Lista de los trabajadores
						<a href="{{ route('people.create') }}" class="btn btn-sm btn-primary pull-right">
							Crear
						</a>
					</div>
					<div class="panel-body">
						<table class="table table-striped table-hover">
							<thead>
								<tr>
									<th width="10px">ID</th>
									<th>Nombres</th>
									<th colspan="3">&nbsp;</th>
								</tr>
							</thead>
							<tbody>
								@foreach($people as $people)
								<tr>
									<td>{{ $people->id }}</td>
									<td>{{ $people->pais }}</td>
									<td width="10px">
										<a href="{{ route('people.show', $people->id) }}" class="btn btn-sm btn-default">
											ver
										</a>
									</td>
									<td width="10px">
										<a href="{{ route('people.edit', $people->id) }}" class="btn btn-sm btn-default">
											editar
										</a>
									</td>
									<td width="10px">
										<button href="{{ route('people.destroy', $people->id) }}" class="btn btn-sm btn-danger">
											Eliminar
										</button>
									</td>
								</tr>
								@endforeach
							</tbody>
						</table>
						{{ $people->render() }}
					</div>
				</div>
			</div>
		</div>
	</div> 
@endsection