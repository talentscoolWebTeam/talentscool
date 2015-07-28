@extends('app')

@section('content')
<style type="text/css">
html{
background: url("/images/bodyBackground.png") no-repeat center center fixed; 
-webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  height:100%;
 }
 body{
 color:white;
 }

</style>
	<div class="container">
		@if(Session::has('Success'))
				<div class="alert alert-success">
					{{Session::get('Success') }}
				</div>
		@endif
		<div>
            <h1>Clients</h1>
		 		<br>
			<ul class="clientHeaders">
				<a href={{ action('ClientController@accepted')}} class="nodeclink"><li class="acceptedClientsButton"  style="float:left"> Accepted Client </li></a>
				<a href={{ action('ClientController@requested') }} class="nodeclink"><li class="requestedClientsButton"  style="float:left"> Requested Client </li></a>
			</ul>
			<br>
			<br>
			<br>	
		@yield('content1')
		</div>
	</div>
@stop
@section('tail')
	@yield('tail1')
	<script>
	$('#filter').change(function(){
		if($('#filter').val() == 'date')
			$('#filterText').attr('type','date');
		else
			$('#filterText').attr('type','text');
	});
	</script>
@stop
