<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Talentscool</title>
	
	<link rel="shortcut icon" href="{{{ asset('/images/favicon.jpeg') }}}">
	<link href="{{ asset('/css/app.css') }}" rel="stylesheet">
	<link href="{{ asset('/css/landing.css') }}" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>	<style>
	body{
	font-family: 'Open Sans', sans-serif;
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

<ul class="headerWrapper">
	<li class="image" id="img"><a href="{{action('WelcomeController@index')}}">{!! HTML::image('/images/TSVector.png', null, array('style'=>"width:100%")) !!}</a>
	<li class="content"><a href="#" onmouseover="mopen('m1')" onmouseout="mclosetime()" id="test"">Company</a>
		<div id="m1">
			<a href="{{action('WelcomeController@aboutus')}}" onmouseover="mcancelclosetime()" onmouseout="mclosetime()">About Us</a>
			<a href="{{action('WelcomeController@whatwedo')}}" onmouseover="mcancelclosetime()" onmouseout="mclosetime()">What We Do</a>
		</div>
	</li>
	<li class="content"><a href="#"  onmouseover="mopen('m2')" onmouseout="mclosetime()" >Company2</a>
		<div  id="m2">
			<a href="#" onmouseover="mcancelclosetime()" onmouseout="mclosetime()">test2</a>
			<a href="#" onmouseover="mcancelclosetime()" onmouseout="mclosetime()">test3</a>
		</div>
	</li>
	<li class="content" style="width:37%; border:none;" >
		&nbsp;
	</li>
</ul>
	@yield('content')

	<!-- Scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
	<script>
	var timeout = 500;
	var closetimer = 0;
	var curMenu = 0;
	function mopen(id)
	{
			mcancelclosetime();
			if(curMenu)
				curMenu.style.visibility="hidden";
			curMenu = document.getElementById(id);
			curMenu.style.visibility="visible";
			curMenu.style.display="none";
			$(curMenu).slideDown();
	}
	function mclose()
	{
			if(curMenu)
				$(curMenu).slideUp();
	}
	function mclosetime()
	{
		closetimer = window.setTimeout(mclose, timeout);
	}
	function mcancelclosetime()
	{
			if(closetimer)
			{
					window.clearTimeout(closetimer);
					closetimer = null;	
			}
	}
	
	</script>
	@yield('tail')
</body>
</html>
