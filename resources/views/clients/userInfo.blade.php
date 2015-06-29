<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Talentscool</title>
<link rel="shortcut icon" href="{{{ asset('/images/favicon.jpeg') }}}">
<link href="{{ asset('/css/app.css') }}" rel="stylesheet">
<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<link ref="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/css/select2.min.css" rel="stylesheet" />
<link href="{{ asset('/css/select2.min.css') }}" rel="stylesheet">	
	
<style>
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
<div class="container">
	<div style="margin-top:100px"> &nbsp;</div>
	<div class="col-xs-12"">
		<h1><span class="glyphicon glyphicon-user" style="word-spacing:-25px">   Client&nbsp;Information</span>@yield('content')</h1>
	</div>
	<hr>
	<div class="personalInfo">
		<h2 style="margin-left:20px">Personal Information</h2>
		<div class="col-xs-12">
			<div class="col-xs-12">
				<div class="col-xs-1">
					<b>Name:</b>
				</div>
				<div class="col-xs-6 col-xs-offset-1">
					{{ $client->fname . "   " . $client->lname }}
				</div>
			</div>
		</div>
		<div class="col-xs-12">
			<div class="col-xs-12">
				<div class="col-xs-1">
					<b>Email:</b>
				</div>
				<div class="col-xs-6 col-xs-offset-1">
					{{ $client->email }}
				</div>
			</div>
		</div>
		<div class="col-xs-12">
			<div class="col-xs-12">
				<div class="col-xs-2">
					<b>Date of Birth:</b>
				</div>
				<div class="col-xs-4">
					{{ $client->dob->year . "-" . $client->dob->month . "-" . $client->dob->day }}
				</div>
				<div class="col-xs-1">
					<b>Age:</b>
				</div>
				<div class="col-xs-3">
					{{ $client->dob->age }}
				</div>
			</div>
		</div>
		<div class="col-xs-12">
			<div class="col-xs-12">
				<div class="col-xs-1">
					<b>City:</b>
				</div>
				<div class="col-xs-4 col-xs-offset-1">
					{{ $client->city }}
				</div>
				<div class="col-xs-1">
					<b>State:</b>
				</div>
				<div class="col-xs-3">
					{{ $client->state }}
				</div>
			</div>
		</div>
		<div class="col-xs-12">
			<div class="col-xs-12">
				<div class="col-xs-1">
					<b>Zip code:</b>
				</div>
				<div class="col-xs-4 col-xs-offset-1">
					{{ $client->zipcode }}
				</div>
				<div class="col-xs-1">
					<b>Gender:</b>
				</div>
				<div class="col-xs-5">
					{{ $client->gender }} 
				</div>
			</div>
		</div>
		<div class="col-xs-12">
			<div class="col-xs-12">
				<div class="col-xs-2">
					<b>Phone number:</b>
				</div>
				<div class="col-xs-3">
					{{ $client->phone_number }}
				</div>
			</div>
		</div>
	</div>
	<hr>
	<div class="talentInfo">
		<h2 style="margin-left:20px">Talent Information</h2>
		@if(!is_null($client->talents))
		<div class="talentInfo col-xs-12">
			<?php $visited=0; ?>
			@foreach($client->talents as $talent)
				@if($visited > 0)
					<hr>
				@endif
				<?php $visited++?>
				
				<div class="col-xs-12">
					<div class="col-xs-2">
						<b>Category:</b>
					</div>
					<div class="col-xs-10">
						{{ $talent->category }}
					</div>
				</div>
				<div class="col-xs-12">
					<div class="col-xs-2">
						<b>Specific Talent:</b>
					</div>
					<div class="col-xs-10">
						{{ $talent->specific_talent }}
					</div>
				</div>
				
				<div class="subBodyDiv">
				<!--  parsing photo -->
				<?php $photos = explode(';', $talent->portfolios->photo);
				$videos = explode(';', $talent->portfolios->video);
				$audios = explode(';', $talent->portfolios->audio);?>
				@if(sizeof($photos) > 0 && !empty($photos[0]))
					<h3>Photo</h3>
					@foreach($photos as $photo)
						<img src={{$photo}} width="300px" height="200px">
					@endforeach
				@endif
				<!-- parse video -->
				@if(sizeof($videos) > 0 && !empty($videos[0]))
					<h3>Video</h3>
					@foreach($videos as $video)
						<iframe src={{$video}} width="300px" height="200px" allowFullScreen> </iframe>
					@endforeach
				@endif
				
				@if(sizeof($audios) > 0 && !empty($audios[0]))
					<h3>Audio</h3>
					@foreach($audios as $audio)
						<img src={{$audio}} width="300px" height="200px">
					@endforeach
				@endif
				
				</div>
			@endforeach
		</div>
		@endif
	</div>
	<hr>
	<div class="serviceInfo">
		<h2 style="margin-left:20px">Service Information</h2>
		<div class="subBodyDiv">
			<div class="col-xs-12">
				<div class="col-xs-6">
					@if(!is_null($client->service))
						@if(!empty($client->service->representation))
							{!! Form::checkbox('representation', 'representation', true, ['disabled' => 'disabled']) !!}
						@else
							{!! Form::checkbox('representation', 'representation', false, ['disabled' => 'disabled']) !!}
						@endif
					@else
						{!! Form::checkbox('representation', 'representation', false, ['disabled' => 'disabled']) !!}
					@endif
					<b>Representation</b>
				</div>
				
			</div>
			<div class="col-xs-12">
				<div class="col-xs-10 subBodyDiv">
					@if(!is_null($client->service))
						{{ $client->service->representation}}
					@endif
				</div>
			</div>
			<div class="col-xs-12">
				<div class="col-xs-6">
					@if(!is_null($client->service))
						@if(!empty($client->service->opportunity))
							{!! Form::checkbox('opportunity', 'opportunity', true, ['disabled' => 'disabled']) !!}
						@else
							{!! Form::checkbox('opportunity', 'opportunity', false, ['disabled' => 'disabled']) !!}
						@endif
					@else
						{!! Form::checkbox('opportunity', 'opportunity', false, ['disabled' => 'disabled']) !!}
					@endif
					<b>Opportunity</b>
				</div>
				
			</div>
			<div class="col-xs-12">
				<div class="col-xs-10 subBodyDiv">
					@if(!is_null($client->service))
						{{ $client->service->opportunity}}
					@endif
				</div>
			</div>
			<div class="col-xs-12">
				<div class="col-xs-6">
					@if(!is_null($client->service))
						@if(!empty($client->service->service))
							{!! Form::checkbox('service', 'service', true, ['disabled' => 'disabled']) !!}
						@else
							{!! Form::checkbox('service', 'service', false, ['disabled' => 'disabled']) !!}
						@endif
					@else
						{!! Form::checkbox('service', 'service', false, ['disabled' => 'disabled']) !!}
					@endif
					<b>Service</b>
				</div>
				
			</div>
			<div class="col-xs-12">
				<div class="col-xs-10 subBodyDiv">
					@if(!is_null($client->service))
						{{ $client->service->service}}
					@endif
				</div>
			</div>
		</div>
	</div>
	<hr>
	<div class="optionalInfo">
		<h2 style="margin-left:20px">Optional Information</h2>
		<div class="subBodyDiv option">
			<div class="col-xs-12">
				<div class="col-xs-4">
					<b>Describe yourself in 3 words:</b>
				</div>
				<div class="col-xs-8">
					@if(!is_null($client->option))
						@if(!empty($client->option->describeword1))
							{{$client->option->describeword1}}
						@endif
						@if(!empty($client->option->describeword2))
							{{", " . $client->option->describeword2}}
						@endif
						@if(!empty($client->option->describeword3))
							{{", " . $client->option->describeword3}}
						@endif
					@endif
				</div>
			</div>
			<div class="col-xs-12">
				<div class="col-xs-4">
					<b>Intro Video</b>
				</div>
				<div class="col-xs-8">
					@if(!is_null($client->option))
						@if(!empty($client->option->intro_video))
							<iframe width="200px" height="200px" src={{{$client->option->intro_video}}} AllowFullScreen></iframe>
						@endif
					@endif
				</div>
			</div>
			<div class="col-xs-12">
				<div class="col-xs-4">
					<b>Current representation</b>
				</div>
				<div class="col-xs-8">
						@if(!is_null($client->option))
							{{$client->option->current_representation}}
						@endif
				</div>
			</div>
			<div class="col-xs-12">
				<div class="col-xs-4">
					<b>Accolades</b>
				</div>
				<div class="col-xs-8">
						@if(!is_null($client->option))
							{{ $client->option->accolades }}
						@endif
				</div>
			</div>
			<div class="col-xs-12">
				<div class="col-xs-4">
					<b>Achievement</b>
				</div>
				<div class="col-xs-8">
						@if(!is_null($client->option))
							{{ $client->option->achivements }}
						@endif
				</div>
			</div>
			<div class="col-xs-12">
				<div class="col-xs-4">
					<b>Experiences</b>
				</div>
				<div class="col-xs-8">
						@if(!is_null($client->option))
							{{ $client->option->experiences }}
						@endif
				</div>
			</div>
			<div class="col-xs-12">
				<div class="col-xs-4">
					<b>Relative talent</b>
				</div>
				<div class="col-xs-8">
						@if(!is_null($client->option))
							{{ $client->option->relative_talent }}
						@endif
				</div>
			</div>
			<div class="col-xs-12">
				<div class="col-xs-4">
					<b>Anything</b>
				</div>
				<div class="col-xs-8">
						@if(!is_null($client->option))
							{{ $client->option->anything }}
						@endif
				</div>
			</div>
		</div>
	</div>

	<hr>
	<div class="tagInfo">
		@yield('tags')
	</div>
</div>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/js/select2.min.js"></script>
	<script>
	$('#tag_list').select2(
			{
				placeholder: 'Choose tags'
			}
	);
	
	</script>
	@yield('tail')
</body>