@extends('landingApp')

@section('content')

	<div class="backgroundDiv">
	{!! HTML::image('/images/background.png', null, array('class' => 'backgroundImg', 'style'=>'float')) !!}
	</div>
	<div class="headerWHOWEARE">
	 	<a href="#about">WHO WE ARE</a>
	</div>
	<div class="headerWHATWEDO">
		<a href="#service">WHAT WE DO</a>
	</div>
	<div class="container">
			{!! HTML::image('/images/TSVector.png', null, array('class'=>'logo', 'name'=>'logo', 'style'=>'float')) !!}
			<!--  <a href={{ URL('apply') }}>{!! HTML::image('/images/apply.png', null, array('class'=>'apply')) !!}</a>  -->
	</div>
	
	<A name="about"></A>
	<div class="">
			<div class="col-md-12 landingDivWhoWeAre">
				<div class="col-md-12">
					<div class="col-md-9">
						<h1 class="landingPoint">WHO WE ARE</h1>
							<br>
							<p class="landingBody">
								 Headquartered in Los Angeles, Talentscool is a talent service that works with talents in music, film, fashion, visual arts, dance, and sports to find them opportunities and connect them to the various services they need for their careers. Being founded by both a musician and a pro-athlete, we know how hard it is to stand ou in the entertainment industry. With all of the competition, we aim to give our clients ease knowing someone is on their side. 
							</p>  	
							<br><br>
					</div>
					<div class="col-md-3">
					</div>
				</div>
				
				<div class="col-md-12"">
					<div class="col-md-3">&nbsp;</div>
					<div class="col-md-9">
						<p class="landingBody">
						Through our global relationships with major/indie record labels, talent agencies, casting agencies, production companies, venues, art galleries, corporate sponsors, and much more, we are able to provide the best possible service to our clients. In addition, we recommend our clients to well-established vendor services ranging from publicists to agents to investors to entertainment lawyers and everything in between. We cater to the needs of our clients in every way possible.
						</p>
						<br><br><br><br>
					</div>
				</div>
				{!! HTML::image('/images/TSVector.png', null, array('class'=>'tailLogo')) !!}
			</div>
	</div>
	
	<div class="col-md-12">
		<br><br>&nbsp;<Br><br><br><br><br>
	</div>


	<A name="service"></A>
	<div class="col-md-12 landingDivWhatWeDo">
			<div class="col-md-12">
				<div class="col-md-10">
					<h1 class="landingPoint">WHAT WE DO</h1>
					<br>
					<ul>
						<li class="listHeader">General</li>
						<ul>
							<li>Opportunities, Representation, Brading, Talent Development, Collaboration, Social Media Management.</li>
						</ul>
					</ul>
					
					<ul>
						<li class="listHeader">Opportunities</li>
						<ul>
							<li>Bookings, Endorsements, Auditions, Internships, Showcases, Appearances.</li>
						</ul>
					</ul>
					<ul>
						<li class="listHeader">Representation</li>
						<ul>
							<li>Manager/Agent, Talent Agency, Publicist, Booking Agent.</li>
						</ul>
					</ul>
					<ul>
						<li class="listHeader">Outside Services</li>
						<ul>
							<li>Musician, Vocalist, Dancer, Consultant, Lawyer, Accountant, Personal Assistant, Fitness Trainer, Video/Film Production, Event Planner, Graphic Designer, Audio Engineer.</li>
						</ul>
					</ul>
					<ul>
						<li class="listHeader">Talent Development</li>
						<ul>
							<li>Vocal Coach, Acting Coach, Athletic Trainer, Dance Instructor, Instrument Teacher.</li>
						</ul>
					</ul>
					<ul>
						<li class="listHeader">Vanity Services</li>
						<ul>
							<li>Clothing Stylist, Hair Stylist, Make-Up Artists, Clothing Designer, Photographer, Videographer, Model.</li>
						</ul>
					</ul>
					<ul>
						<li class="listHeader">Luxury Services</li>
						<ul>
							<li>Body Guard, Limo Drivers, Private Jet, Car Rental, Studio Rental.</li>
						</ul>
					</ul>
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
			$('.logo').css('height', curHeight * .2);
			$('.logo').css('width', curWidth * .4);
			$('.tailLogo').css('height', curHeight * .1);
			$('.tailLogo').css('width', curWidth * .2);

		});
		$(window).resize(function()
		{
			var curWidth = $(window).innerWidth();
			
			$('.logo').css('left', curWidth * .3);
		});
	</script>
@stop
