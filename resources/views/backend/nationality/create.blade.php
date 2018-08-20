
@extends('backend::page')

@section('content')
	
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="panel panel-default">
					<div class="panel-heading">
						Crear Nacionalidad
					</div>
						<div class="panel-body">
							{!! Form::open(['route' => 'nationalities.store']) !!}

							@include('backend.nationalities.partials.from')
							{!! Form::close() !!}
						</div>
				</div>
			</div>
		</div>
	</div>
@endsection