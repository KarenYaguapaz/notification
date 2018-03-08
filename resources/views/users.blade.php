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
								{{Form::submit('Enviar!')}}
							</form>
						</div>
						{{Form::date('name', \Carbon\Carbon::now())}}

					</div>
					<div class="col-md-9">  

					</div> 
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
