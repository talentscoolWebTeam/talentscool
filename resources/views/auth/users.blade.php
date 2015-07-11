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
	<h1>Users</h1>
	<table class="table table-bordered">
		<tr>
			<th style="text-align: center; vertical-align: middle">Name</th>
			<th style="text-align: center; vertical-align: middle">Email</th>
			<th style="text-align: center; vertical-align: middle">accessible</th>
		</tr>
		@foreach($users as $user)
		<tr class="tbody">
			<td style="text-align: center" name="name">{{ $user->name }}</td>
			<td style="text-align: center" name="email">{{ $user->email }}</td>
			<td style="text-align: center" class="home">
			@if($user->accessible == 1)
				{!! Form::open(['action'=>'AdminController@updateUser', 'style'=>'display:inline']) !!}
					<button type="button" class="btn btn-success enable"
						aria-label="Left Align">
						<span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
					</button>
				{!! Form::close() !!}
				{!! Form::open(['action'=>'AdminController@updateUser', 'style'=>'display:inline']) !!}
					<button type="button" class="btn btn-default disable"
						aria-label="Left Align">
						<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
					</button>
				{!! Form::close() !!}
			@else
				 {!! Form::open(['action'=>'AdminController@updateUser', 'style'=>'display:inline']) !!}
					<button type="button" class="btn btn-default enable"
						aria-label="Left Align">
						<span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
					</button>
				{!! Form::close() !!}
				{!! Form::open(['action'=>'AdminController@updateUser', 'style'=>'display:inline']) !!}
					<button type="button" class="btn btn-danger disable"
						aria-label="Left Align">
						<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
					</button> 
				{!! Form::close() !!}
			@endif
			</td>
		</tr>
		@endforeach


	</table>
</div>
@stop @section('tail')
<script>
$('button.enable').click(function(){

	//getting user email
	//alert($(this).parent().parent().prev().text());
	//getting toekn val
	//alert($( this ).parent().find( 'input[name=_token]' ).val());
	var form = $(this).parent();
	$.ajax({
		type: "POST",
		url: "/admin/users",
		data:{
			"_token": $( this ).parent().find( 'input[name=_token]' ).val(),
			"email": $(this).parent().parent().prev().text(),
			"status": 1
		},
		dataType: "text",
		success: function(responseData){
			var obj = JSON.parse(responseData);
			if(obj.result== 'success')
			{
				form.siblings("form").find("button").addClass("btn-default");
				form.siblings("form").find("button").removeClass("btn-danger");
				form.find("button").addClass("btn-success");
				form.find("button").removeClass("btn-default");
			}
		}
	});
	return false;
});
$('button.disable').click(function(){

	var form = $(this).parent();
	$.ajax({
		type: "POST",
		url: "/admin/users",
		data:{
			"_token": $( this ).parent().find( 'input[name=_token]' ).val(),
			"email": $(this).parent().parent().prev().text(),
			"status": 0
		},
		dataType: "text",
		success: function(responseData){
			var obj = JSON.parse(responseData);
			if(obj.result== 'success')
			{
				form.siblings("form").find("button").addClass("btn-default");
				form.siblings("form").find("button").removeClass("btn-success");
				form.find("button").addClass("btn-danger");
				form.find("button").removeClass("btn-default");
			}
		}
	});
	return false;
});
</script>

@stop







