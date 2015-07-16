@extends('app')
@section('content')
<style type="text/css">
body{background-image:url("/images/bodyBackground.png");
background-size:contain}
</style>

<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading" style="background:#d0313c;color:#FFF"><strong>Welcome to Register</strong></div>
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
					<form class="form-horizontal" role="form" method="POST" action="{{ url('/auth/register') }}">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">

						<div class="form-group">
							<label class="col-md-4" text-align="left">Name</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="name" value="{{ old('name') }}">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4" text-align="left">E-Mail Address</label>
							<div class="col-md-6">
								<input type="email" class="form-control" name="email" value="{{ old('email') }}">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4" text-algin="left">Password</label>
							<div class="col-md-6">
								<input type="password" class="form-control" name="password" id="1">
                                <span id='click1' style='display:-moz-inline-box;display:inline-block;width:250px;'><em>Show the password</em></span>
                                <span id='click2'><em>Hide the password</em></span>
                            
<!--
                            <script language="JavaScript">
                            function ps(){
                            if (this.forms.password.type="password")
                                box.innerHTML="<input type=\"html\" name=\"password\"    value="+this.forms.password.value+">";
                                click.innerHTML="<a href=\"javascript:txt()\">hide</a>"}
                            function txt(){
                                if (this.forms.password.type="text")
                                box.innerHTML="<input type=\"password\" name=\"password\" value="+this.forms.password.value+">";
                                click.innerHTML="<a href=\"javascript:ps()\">show</a>"}
                        </script>                 
-->
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4" text-algin="left">Confirm Password</label>
							<div class="col-md-6">
								<input type="password" class="form-control" name="password_confirmation" id="2">
                                <span id='click3' style='display:-moz-inline-box;display:inline-block;width:250px;'><em>Show the password</em></span>
                                <span id='click4'><em>Hide the password</em></span>
							</div>
						</div>
                        <div class="form-group">
                            <label class="col-md-4" text-algin="left">Passcode</label>
                            <div class="col-md-6">
                                <input type="password" class="form-control" name="passcode" id="3">
                                <span id='click5' style='display:-moz-inline-box;display:inline-block;width:250px;'><em>Show the passcode</em></span>
                                <span id='click6'><em>Hide the passcode</em></span>
                            </div>
                        </div>

                        <div class="col-xs-1">
                        <img src="/images/favicon.jpeg" style="width:100%;height:100%;">
                        </div>
						<div class="form-group">
							<div class="col-md-6 col-md-offset-3">
								<button type="submit" class="btn btn-danger form-control" onclick="getElements()">
									Register
								</button>
							</div>
                        </div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
@section('tail')
<script>
    $('#click1').click(function(){
        $('#1').attr("type","text");
    });
    $('#click2').click(function(){
        $('#1').attr("type","password");
    });
    $('#click3').click(function(){
        $('#2').attr("type","text");
    });
    $('#click4').click(function(){
        $('#2').attr("type","password");
    });
    $('#click5').click(function(){
        $('#3').attr("type","text");
    });
    $('#click6').click(function(){
        $('#3').attr("type","password");
    });
</script>
@stop
@stop