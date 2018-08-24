@extends('backend.layout')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="panel panel-default">
					<div class="panel-heading">
						Ver Tipos de Nacionalidades
					</div>
						<div class="panel-body">
							<p><strong>Tipo de Nacionalidades:</strong>		{{ $nationality->pais }}</p>
						</div>
				</div>
			</div>
		</div>
	</div>
@endsection 
