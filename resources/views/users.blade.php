@extends('layouts.app')

@section('content')
<div class="container">

	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Users</div>

				<div class="panel-body">
					<div class="col-md-3">
						<div class="container">
							
							<form enctype="multipart/form-data">
								<div class="form-group">
									<input id="file-1" type="file" class="file" multiple=true data-preview-file-type="any">
								</div>
							</form>
						</div>
						{{Form::label('user', 'Usuario')}} 
						{{Form::text('usuario')}}
						{{Form::submit('Enviar!')}}
					</div>
					<div class="col-md-9">  

					</div> 
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
