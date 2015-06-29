<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Talentscool</title>
    <link rel="shortcut icon" href="{{{asset("/images/favicon.jpeg")}}}">

	<link href="{{ asset('/css/app.css') }}" rel="stylesheet">

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
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>

			<div class="navbar navbar" id="bs-example-navbar-collapse-1">
                <a class="navbar-brand" href="#"><img style="max-width:100px" src="/images/TSVector.png"></a>
                </ul>
				<ul class="nav navbar-nav">
                    <li><a href="{{ url('/') }}" style="color:#d0313c"><strong>Home</strong></a></li>
				</ul>
				@if(Auth::user())
					@if(Auth::user()->isAdmin())
					<ul class="nav navbar-nav">
						<li class="dropdown">
							<a href={{ action('AdminController@invite') }} value="admin" class="dropdown-toggle" style="color:#d0313c" data-toggle="dropdown" role="button" aria-expanded="false"><b>Admin</b><span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="{{ action('AdminController@invite') }}" style="color:#d0313c">Invite Users</a></li>
								<li><a href="{{ action('AdminController@users') }}" style="color:#d0313c">Manage Users</a></li>
							</ul>
						</li>
					</ul>
					@endif
				@endif

				<ul class="nav navbar-nav navbar-right">
					@if (Auth::guest())
                    	<li><a href="{{ url('/auth/login') }}" style="color:#d0313c"><strong>Login</strong></a></li>
                    	<li><a href="{{ url('/auth/register') }}" style="color:#d0313c"><strong>Register</strong></a></li>
					@else
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="{{ url('/auth/logout') }}" style="color:#d0313c">Logout</a></li>
							</ul>
						</li>
					@endif
				</ul>
			</div>
		</div>
	@yield('content')
</body>
	<!-- Scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
    @yield('tail')
</html>