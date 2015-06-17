<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Talentscool</title>
<link rel="shortcut icon" href="{{{ asset('/images/favicon.jpeg') }}}">
<link href="{{ asset('/css/app.css') }}" rel="stylesheet">
<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'><style>
body{
font-family: 'Open Sans', sans-serif;
background-color:black;
color:white;
}
</style>

<!-- Fonts -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
{!! HTML::image('/images/TSVector.png', null, array('class'=>'logo')) !!}
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
				@yield('content')
		</div>
	</div>
	<!-- Scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
	<script>
		@yield('tail')
		$('#successMessage').delay(2000).slideUp(300);
		$('#filter').change(function(){
			if($('#filter').val() == 'date')
			{
				$('#filterText').attr('type', 'date');
			}
			else
				$('#filterText').attr('type', 'text');
		});
	</script>
	</body>
	</html>
