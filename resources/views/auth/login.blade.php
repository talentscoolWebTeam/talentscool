@extends('app')

@section('content')
<style type="text/css">
html{
background: url("/images/bodyBackground.png") no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  width:100%;
  height:100%;
 }

</style>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
                <div class="panel-heading" style="background:#d0313c;color:#FFF"><strong>Welcome to Login</strong></div>
				<div class="panel-body">
					@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whoops!</strong> There were some problems with your input.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif

					<form class="form-horizontal" role="form" method="POST" action="{{ url('/auth/login') }}">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">

						<div class="form-group">
							<label class="col-md-4" text-align="left">E-Mail Address</label>
							<div class="col-md-6">
								<input type="email" class="form-control" name="email" value="{{ old('email') }}">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4" text-align="left">Password</label>
							<div class="col-md-6">
								<input type="password" class="form-control" name="password">
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
									<label>
										<input type="checkbox" name="remember"> Remember Me
									</label>
								</div>
							</div>
						</div>

                        <div class="col-md-2">
                                    <img src="/images/favicon.jpeg" style="width:100%;height:100%;">
                        </div>
						<div class="form-group">
							<div class="col-md-6 col-md-offset-2">
								<button type="submit" class="btn btn-danger form-control">Login</button>

								<a class="btn btn-link" style="color:#337ab7" href="{{ url('/password/email') }}">Forgot Your Password?</a>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection