
@extends('backend.layout')

@section('content')
	
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="panel panel-default">
					<div class="panel-heading">
						Editar Usuario
					</div>
						<div class="panel-body">

							<button href="{{ route('users.update') }}" class="btn btn-sm btn-primary pull-right"></button>

							@include('backend.users.partials.from')
							
						</div>
				</div>
			</div>
		</div>
	</div>
@endsection