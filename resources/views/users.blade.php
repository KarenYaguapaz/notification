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

					</div>
					<div class="col-md-9">                   
						<form class="form-horizontal" method="POST" action="{{ route('register') }}">
							{{ csrf_field() }}

							<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
								<label for="name" class="col-md-4 control-label">Name</label>

								<div class="col-md-6">
									<input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

									@if ($errors->has('name'))
									<span class="help-block">
										<strong>{{ $errors->first('name') }}</strong>
									</span>
									@endif
								</div>
							</div>

							<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
								<label for="email" class="col-md-4 control-label">E-Mail Address</label>

								<div class="col-md-6">
									<input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

									@if ($errors->has('email'))
									<span class="help-block">
										<strong>{{ $errors->first('email') }}</strong>
									</span>
									@endif
								</div>
							</div>

							<div class="form-group{{ $errors->has('birth') ? ' has-error' : '' }}">
								<label for="birth" class="col-md-4 control-label">Birth</label>

								<div class="col-md-6">
									<input id="birth" type="text" class="form-control" name="birth" value="{{ old('birth') }}" required>

									@if ($errors->has('Birth'))
									<span class="help-block">
										<strong>{{ $errors->first('birth') }}</strong>
									</span>
									@endif
								</div>
							</div>

							<div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
								<label for="phone" class="col-md-4 control-label">Phone</label>

								<div class="col-md-6">
									<input id="phone" type="text" class="form-control" name="phone" value="{{ old('phone') }}" required>

									@if ($errors->has('Phone'))
									<span class="help-block">
										<strong>{{ $errors->first('phone') }}</strong>
									</span>
									@endif
								</div>
							</div>

							<div class="form-group{{ $errors->has('job title') ? ' has-error' : '' }}">
								<label for="job title" class="col-md-4 control-label">Job Title</label>

								<div class="col-md-6">
									<input id="job title" type="text" class="form-control" name="job title" value="{{ old('job title') }}" required>

									@if ($errors->has('Job Title'))
									<span class="help-block">
										<strong>{{ $errors->first('job title') }}</strong>
									</span>
									@endif
								</div>
							</div>

							<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
								<label for="password" class="col-md-4 control-label">Password</label>

								<div class="col-md-6">
									<input id="password" type="password" class="form-control" name="password" required>

									@if ($errors->has('password'))
									<span class="help-block">
										<strong>{{ $errors->first('password') }}</strong>
									</span>
									@endif
								</div>
							</div>

							<div class="form-group">
								<label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

								<div class="col-md-6">
									<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
								</div>
							</div>

							<div class="form-group">
								<div class="col-md-6 col-md-offset-4">
									<button type="submit" class="btn btn-primary">
										Editar Información
									</button>
								</div>
							</div>
						</form>
					</div> 
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
