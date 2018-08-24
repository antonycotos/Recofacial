
@extends('backend.layout')

@section('content')
	
<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="panel panel-default">
					<div class="panel-heading">
						Lista de Fotografias del Trabajador
						<a href="{{ route('biophoto.create') }}" class="btn btn-sm btn-primary pull-right">
							Crear
						</a>
					</div>
					<div class="panel-body">
						<table class="table table-striped table-hover">
							<thead>
								<tr>
									<th width="10px">ID</th>
									<th>Imagen</th>
									<th colspan="3">&nbsp;</th>
								</tr>
							</thead>
							<tbody>
								@foreach($biophotos as $biophoto)
								<tr>
									<td>{{ $biophoto->id }}</td>
									{{-- <td>{{ $biophoto->pais }}</td> --}}
									<td width="10px">
										<a href="{{ route('biophoto.show', $biophoto->id) }}" class="btn btn-sm btn-default">
											ver
										</a>
									</td>
									<td width="10px">
										<a href="{{ route('biophoto.edit', $biophoto->id) }}" class="btn btn-sm btn-default">
											editar
										</a>
									</td>
									<td width="10px">
										{!! Form::open(['route' => ['biophoto.destroy', $biophoto->id], 'method' => 'DELETE']) !!}
										<button class="btn btn-sm btn-danger">
											Eliminar
										</button>
										{!! Form::close() !!}
									</td>
								</tr>
								@endforeach
							</tbody>
						</table>
						{{ $biophotos->render() }}
					</div>
				</div>
			</div>
		</div>
	</div> 
@endsection