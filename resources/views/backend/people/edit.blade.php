
@extends('backend::page')

@section('content')
	
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="panel panel-default">
					<div class="panel-heading">
						Editar Trabajador
					</div>
						<div class="panel-body">
							{!! Form::model($people, ['route' => ['peoples.update', $people->id], 'method' => 'PUT']) !!}

							@include('backend.peoples.partials.from')
							{!! Form::close() !!}
						</div>
				</div>
			</div>
		</div>
	</div>
@endsection