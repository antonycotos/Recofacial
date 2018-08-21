
@extends('backend::page')

@section('content')
	
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="panel panel-default">
					<div class="panel-heading">
						Ver Tipos de Trabajadores
					</div>
						<div class="panel-body">
							<p><strong>Tipo de Trabajadores:</strong>		{{ $people->nombre }}</p>
						</div>
				</div>
			</div>
		</div>
	</div>
@endsection