@extends('backend.layout')

@section('content')

	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="panel panel-default">
					<div class="panel-heading">
						Lista de la Nacionalidad de los trabajadores
						<a href="{{ route('nationality.create') }}" class="btn btn-sm btn-primary pull-right">
							Crear
						</a>
					</div>
					<div class="panel-body">
						<table class="table table-striped table-hover">
							<thead>
								<tr>
									<th width="10px">ID</th>
									<th>Nacionalidad</th>
									<th>Ciudad</th>
									<th colspan="3">&nbsp;</th>
								</tr>
							</thead>
							<tbody>
								@foreach($nationalities as $nationality)
								<tr>
									<td>{{ $nationality->id }}</td>
									<td>{{ $nationality->pais }}</td>
									<td>{{ $nationality->ciudad }}</td>
									<td width="10px">
										<a href="{{ route('nationality.show', $nationality->id) }}" class="btn btn-sm btn-default">
											ver
										</a>
									</td>
									<td width="10px">
										<a href="{{ route('nationality.edit', $nationality->id) }}" class="btn btn-sm btn-default">
											editar
										</a>
									</td>
									<td width="10px">
										<button href="{{ route('nationality.destroy', $nationality->id) }}" class="btn btn-sm btn-danger">
											Eliminar
										</button>
										
									</td>
								</tr>
								@endforeach
							</tbody>
						</table>
						{{ $nationalities->render() }}
					</div>
				</div>
			</div>
		</div>
	</div> 
@endsection 