@extends('backend.layout')

@section('content')

	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="panel panel-default">
					<div class="panel-heading">
						Crear Nacionalidad
					</div>
						<div class="panel-body">
							<a href="{{ route('nationality.store') }}" class="btn btn-sm btn-primary pull-right"> <<< </a>

							@include('backend.nationality.partials.from')							
							
						</div>
				</div>
			</div>
		</div>
	</div> 

@endsection

