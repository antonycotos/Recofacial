@extends('backend.layout')

@section('content')
	
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="panel panel-default">
					<div class="panel-heading">
						Ver Fotografias del Trabajador
					</div>
						<div class="panel-body">
							<p><strong>Fotografias del Trabajador:</strong>		{{ $biophoto->id }}</p>
						</div>
				</div>
			</div>
		</div>
	</div>
@endsection