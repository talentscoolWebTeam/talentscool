@extends('landingApp')

@section('content')

	<div class="backgroundDiv">
	{!! HTML::image('/images/background.png', null, array('class' => 'backgroundImg')) !!}
	</div>
	<div class="headerWHOWEARE">
	 	<a href="#about">WHO WE ARE</a>
	</div>
	<div class="headerWHATWEDO">
		<a href="#service">WHAT WE DO</a>
	</div>
	<div class="container">
			{!! HTML::image('/images/TSVector.png', null, array('class'=>'logo', 'name'=>'logo')) !!}
			<!--  <a href={{ URL('apply') }}>{!! HTML::image('/images/apply.png', null, array('class'=>'apply')) !!}</a>  -->
	</div>
	<A name="about"></A>
	<div class="">
			<div class="col-md-12 landingDiv">
				<div class="col-md-12">
					<div class="col-md-8">
						<h1 class="landingPoint">WHO WE ARE</h1>
						<p class="landingBody">We know how it is to be an artist these days. With all of the competition
						out there, it's nice to have someone on your side. As a talent service
						company, <font class="landingPoint">Talentscool</font> finds opportunities, auditions, and whatever else
						an artist like you may need. Through the greate relationships we have
						with major record labels, we even connect aspiring talent with record
						companies. All in all, our mission is to jump start your career!</p>
						
					</div>
					<div class="col-md-4">
						
					</div>
					
				</div>
				<div class="col-md-12">
					<div class="col-md-4">
						
					</div>
					<div class="col-md-8 ">
						<p align="right" class="landingBody">
						Headquartered in Los Angeles, we introduce talented individuals to
						other artist looking to collaborate and also connect our clients with
						entertainment companies hungry for fresh talent. Los Angeles is an artist's
						land of opportunity, but there are only so many seats at the table. Let us
						help you find your spot, and together, we'll make your dream become a
						reality. <br>
						</p>
						<br>
						<br>
						<br>
					</div>
				</div>
				{!! HTML::image('/images/TSVector.png', null, array('class'=>'tailLogo')) !!}
			</div>
	</div>
	
	<div class="col-md-12">
		<br><br>&nbsp;<Br>
	</div>


	<A name="service"></A>
	<div class="col-md-12 landingDiv">
			<div class="col-md-12">
				<div class="col-md-8">
					<br><br>
					<h1 class="landingPoint">WHAT WE DO</h1>
					<p class="landingBody" style="font-size:25px;text-align:justice">
					<font class="landingPoint">Opportunities:</font><br>
					Help clients find jobs, endorsements, internships,<br>
					auditions, showcases, and performance venues.<br>
					<br>
					</p>
				</div>
				<div class="col-md-4">
					&nbsp;		
				</div>
			</div>
			<div class="col-md-12">
				<div class="col-md-6">
					&nbsp;		
				</div>
				<div class="col-md-6">
					<p align="right" class="landingBody" style="font-size:25px;" >
					<font class="landingPoint">Services:</font><br>
					Help clients find representation, talent development,
					brand management, a stylist, a lawyer, a publicist,
					a personal assistant, personal trainer and much more.
					</p>
					<Br><br><br><br>
					<Br><br><br><br>
				</div>
			</div>
			{!! HTML::image('/images/TSVector.png', null, array('class'=>'tailLogo')) !!}
	</div>

@stop

@section('tail')
	<script>
		$(document).ready(function()
		{
			var curHeight = $(window).height();
			var curWidth = $(window).width();
//			$('.landingDiv').css('height', curHeight);
			$('.logo').css('height', curHeight * .2);
			$('.logo').css('width', curWidth * .4);
			$('.tailLogo').css('height', curHeight * .1);
			$('.tailLogo').css('width', curWidth * .2);

		});
		$(window).resize(function()
		{
			var curWidth = $(window).width();
			$('.logo').css('left', curWidth * .5);
		});
	</script>
@stop
