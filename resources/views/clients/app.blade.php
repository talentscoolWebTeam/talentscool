@extends('app')

@section('content')
<style type="text/css">
body{background-image:url("/images/bodyBackground.png");
background-size:contain}
</style>
	<div class="container">
		<div id="successMessage">
			@if(Session::has('Success'))
				<div class="alert alert-success">{{Session::get('Success') }}</div>
			@endif
		</div>
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
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
	<script>
		@yield('tail1');
	</script>
<!-- 
{!! HTML::image('/images/TSVector.png', null, array('class'=>'logo')) !!}
	<div class="container">
		
				@yield('content')
		</div>
	</div>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
	<script>
//		@yield('tail')
//		$('#successMessage').delay(2000).slideUp(300);
//		$('#filter').change(function(){
//			if($('#filter').val() == 'date')
//			{
//				$('#filterText').attr('type', 'date');
//			}
//			else
//				$('#filterText').attr('type', 'text');
//		});
	</script>
	</body>

-->