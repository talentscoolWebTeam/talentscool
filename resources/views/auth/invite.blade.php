@extends('app')
@section('content')
<style type="text/css">
html{
background: url("/images/bodyBackground.png") no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  color:white;
  height:100%;
 }

</style>
<div class="container">
	<h1>Invite Users</h1>
	{!! Form::open(	) !!}
		@if(count($errors) > 0)
			<div class="col-xs-12">
			<ul class="alert alert-danger">
			@foreach($errors->all() as $error)
				<li>{{$error}}</li>
			@endforeach
			</ul>
			</div>
		@endif
		@if(Session::has('Success'))
			<div class="col-xs-12">
			<ul class="alert alert-success">
				<li>{{ Session::get('Success') }}</li>
			</ul>
			</div>
		@endif
		<div class="col-xs-12">
			<div class="col-xs-2">
				<b>Email:</b>
			</div>
			<div class="col-xs-5">
				<input type="text" name="email" class="form-control">
			</div>
			<div class="col-xs-1">
				{!! Form::Submit("Submit", ['class' => 'btn btn-primary']) !!}
			</div>
		</div>
		
	{!! Form::close() !!}
</div>
@stop
