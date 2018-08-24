
@extends('backend.layout')

@section('content')
	
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="panel panel-default">
					<div class="panel-heading">
						Crear Trabajador
					</div>
						<div class="panel-body">
							{!! Form::open(['route' => 'people.store']) !!}

							@include('backend.people.partials.from')
							{!! Form::close() !!}
						</div>
				</div>
			</div>
		</div>
	</div>
@endsection