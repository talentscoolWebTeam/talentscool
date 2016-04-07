<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TalentsCool</title>
    <link rel="stylesheet" href="css/welcome-style.css" />
    <link href='https://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet' type='text/css'>

</head>

<body>
	<main class="main">
		<div class="navbar" >
			<div class="content">
				<h1 class="logo"><a href="/"><img src="images/TSVector.png"></a></h1>
				<nav>
					<ul>
						<li><a href="javascript:null(0)" id="welcome_tab">Welcome</a></li>
						<li><a href="javascript:null(0)" id="whatwedo_tab">What We Do</a></li>
					<li><a href="javascript:null(0)" id="services_tab">Services</a></li>
						<li><a href="javascript:null(0)" id="founder_tab">Founders</a></li>
						<li><a href="javascript:null(0" id="contactus_tab">Contact Us</a></li>
						<li><a href="/apply" class="scroll-link" style="border:solid">Apply Now!</a></li>
					</ul>
				</nav>
			</div>
		</div>


		<div class="parallax-window" id="window1" data-speed="0.3" data-type="background" data-ios-fix="true">
			<div class="content">
				<h2 id="mainheading">The Entertainment Connection</h2>
				<p id="subheading">Connecting you to talent, opportunities, and services.</p>
			</div>
		</div>

		<div class="plain-window" id="window2">
			<div class="content">
				<h2>What We Do</h2>
				<p>With the competitive landscape of the entertainment industry, your talents may go unheard- but that’s what we’re here for! We are a service that connects creative talents to opportunities & services. Through our global relationships, our clients varying from athletes to artists  can find the resources they need in order to bolster their talents. We serve as the mediator between you and our connections by recommending you to the appropriate service providers that best fulfill your needs. With our connections ranging from major/indie record labels, talent/casting agencies, production companies, corporate sponsors, venues/art galleries, and advisors from various professions, Talentscool provides you the advantage of convenience & peace of mind.</p>

			</div>
		</div>

		<div class="parallax-window" id="window3" data-speed="0.1" data-ios-fix="true">
			<div class="content">
				<h2 id="services_header">Services</h2>
				<ul>
				    <li class="opportunities">
				    <div class="box">
  						<div id="asabove">
  							<h3>Opportunities</h3><br>
  							<p> These connect you to platforms that help showcase your talents </p>
  							<img class="downarrow" src="images/down-arrow.png">
  						</div>
  						<div id="sobelow">
  							<p>Bookings, Endorsements, Auditions, Showcases, Appearances, Collaborations, Jobs, Internships</p>
  						</div>
					</div>
				        <div>
				    </li>   
				    
				    <li>
				        <div class="box">
  							<div id="asabove">
  								<h3>Representation</h3><br>
  								<p> Professionals and organizations that promote and handle other aspects of your career </p>
  								<img class="downarrow" src="images/down-arrow.png">
  							</div>
				        <div id="sobelow">
  							<p>Manager, Agent, Record Deal, Booking Agent, Publicist, Talent Agent, Brand Manager</p>
  						</div>    
				        </div>
				    </li>   
				    
				    <li>
				        <div class="box">
  							<div id="asabove">
  									<h3>Talent Development</h3><br>
				                   <p> Resources that help you further enhance your talents</p>
				                   <img class="downarrow" src="images/down-arrow.png">
				             </div>
				             <div id="sobelow">
				                   <p> Vocal Coach, Acting Coach, Instrument Teacher, Dance Instructor, Art Instructor, School Placement</p>
				             </div>
				        </div>
				    </li>   
				    
				    <li>
				        <div class="box">
  							<div id="asabove">
  								<h3>General Services</h3><br>
				               	<p>Professionals in different fields that are here to ensure your general needs are met</p>
				               	<img class="downarrow" src="images/down-arrow.png">
				            </div>
				            <div id="sobelow">
				                   <p>Musician, Vocalist, Dancer, Lawyer, Accountant, Investor, Personal Assistant, Web Designer, Engineer, Fitness Trainer, Camera Crew
				                </p>
				            </div>
				        </div>
				    </li>   
				    
				    <li>
				        <div class="box">
  							<div id="asabove">
  								<h3>Vanity and Luxury</h3><br>
				               	<p>Touch up your personal style with high class services </p>
				               	<img class="downarrow" src="images/down-arrow.png">
				             </div>
				            <div id="sobelow">
				                  <p> Clothing Stylist, Hair Stylist, Barber, Makeup Artist, Model, Photographer, Bodyguard, Limo Driver, Private Jet Rental, Studio Rental </p>
				            </div>
				        </div>
				    </li>  
				    
				</ul>
			</div>
		</div>

		<div class="plain-window" id="window4">
			<div class="content clearfix">
				<h2>Founders</h2>
				<h3>Michael B. Pratt</h3>
				<span>President and Founder</span>
				
				<div class="info-box clearfix">
				<p><img src="images/michael.jpg" title="Michael Pratt">Michael is an entrepreneur, multi-instrumentalist, songwriter for major labels/artists, and film score composer for feature films/television. The combination of his extensive entrepreneurial experience and love for the arts led him to launch Talentscool. He also has an extensive network within the entertainment industry that allows him to service his clientele globally. He is an honor roll student at the University of Southern California studying Entrepreneurship and Music.</p>
				</div>

				<div class="info-box clearfix">
				<h3>Steve Smith</h3>
				<span>Vice President and Co-Founder</span>
				
				<p><img src="images/steve.jpg" title="Steve Smith">Steve is a retired NFL Pro-Bowl wide receiver and Super Bowl champion. He set a franchise record for the New York Giants football organization for most receptions in a single season. He has a wide range of connections in the entertainment industry along with a hard-working attribute and a persistence to better the company. His accomplishments give him a strong desire to excel in anything he puts his mind to.</p>
				</div>
			</div>
		</div>

         {!! Form::open(['route' => 'contactus.store', 'method'=>'POST', 'name' => 'contactform'])!!}
        <div class="parallax-window" id="window5">
            <div class="content">
                <h2>Contact us</h2>
                    <p>
                        <label for='name'>Your Name:</label><br class="breakline">
                        {!! Form::text('name',null, ['class'=>'textfield']) !!}
                    </p>
                    <p>
                        <label for='email'>Email Address:</label><br class="breakline">
                        {!! Form::text('email',null, ['class'=>'textfield']) !!}
                    </p>
                    <p>
                        <label for='msge'>Message:</label><br>
                        {!! Form::textarea('msge',null) !!}
                    </p>
                    <input type="submit" value="Submit" class="submit-button"><br>
            </div>
        </div>
        {!! Form::close() !!}


		<footer>
			<div class="social-media-bar">
			<ul>
				<li><a target="_blank" href="https://twitter.com/talentscool"><img src="images/twitter_logo.png" title="Follow us on Twitter!" class="media-icon"></a></li>
				<li><a target="_blank" href="https://www.facebook.com/talentscool"><img src="images/facebook_logo.png" title="Follow us on Facebook!" class="media-icon"></a></li>
				<li><a target="_blank" href="https://www.instagram.com/talentscool/"><img src="images/instagram_logo.png" title="Follow us on Instagram!" class="media-icon"></a></li>
			</ul>
		</div>
			<p>Copyright © 2016. Talentscool, Inc. All rights reserved. </p>
		</footer>

	</main>

	

	<!-- Scripts included here -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/parallax.js/parallax.min.js"></script>
    <script src="js/welcome-script.js"></script>
    <script language="JavaScript" src="email-contact-form/scripts/gen_validatorv31.js" type="text/javascript"></script>

    //<script language="JavaScript">
	// Code for validating the form
	// Visit http://www.javascript-coder.com/html-form/javascript-form-validation.phtml
	// for details
	var frmvalidator  = new Validator("contactform");
	frmvalidator.addValidation("name","req","Please provide your name");
	frmvalidator.addValidation("email","req","Please provide your email");
	frmvalidator.addValidation("email","email","Please enter a valid email address");
	//</script>
	-->



</body>

