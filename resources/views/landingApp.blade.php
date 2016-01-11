<!doctype html>
<html lang="en"><head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, maximum-scale=1">
		<title>Talentscool</title>
		
		<link rel="shortcut icon" href="http://talentscool.com/images/favicon.jpeg">
		<link href="css/font-awesome.css" rel="stylesheet" type="text/css"> 
		<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
		<link href="css/style7.css" rel="stylesheet" type="text/css"> 
		<link href="css/animate.css" rel="stylesheet" type="text/css">
		
		
		<!-- <link rel="shortcut icon" href="{{{ asset('/images/favicon.jpeg') }}}">
			<link href="{{ asset('/css/app.css') }}" rel="stylesheet">
			<link href="{{ asset('/css/landing.css') }}" rel="stylesheet">
			<link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet">
			<link href="{{ asset('/css/style7.css') }}" rel="stylesheet">
			<link href="{{ asset('/css/font-awesome.css') }}" rel="stylesheet">
		<link href="{{ asset('/css/animate.css') }}" rel="stylesheet"> -->
		
		
		<!--[if lt IE 9]>
			<script src="js/respond-1.1.0.min.js"></script>
			<script src="js/html5shiv.js"></script>
			<script src="js/html5element.js"></script>
		<![endif]-->
		<style>
            .hidden{
                display:hidden;
              }
			
      </style>
	</head>
	<body>
<!--
		<script type="text/javascript">
            
                //网页正文高度
            var pageHeight;
            var locate=0;
            window.onload=function(){
                pageHeight=document.body.scrollHeight;
            }
            var timer;
            timer=setInterval("scrollDown()",40); 
            function scrollDown()
            {
                if(locate<pageHeight)
                {
                    locate++;
                    scroll(0,locate);
                }else{
                    clearInterval(timer);
                }
            }
//
        </script>
-->
		<!--Header_section-->
        <section class="hero" id="hero">
		<header id="header_wrapper">
			<div class="container">
				<div class="header_box">
					<div class="logo"><a href="#"><img src="images/TSVector.png" alt="logo"></a></div>
					<nav class="navbar navbar-inverse" role="navigation">
						<div class="navbar-header">
							<button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
						</div>
						<div id="main-nav" class="collapse navbar-collapse navStyle">
							<ul class="nav navbar-nav" id="mainNav">
								<li class="active"><a href="#hero_section" class="scroll-link">Home</a></li>
								<li><a href="#aboutUs" class="scroll-link">About Us</a></li>
								<li><a href="#service" class="scroll-link">Services</a></li>
                                <li><a href="#founders" class="scroll-link">Founders</a></li>
								<li><a href="#contact" class="scroll-link">Contact</a></li>
								<li><a href="/application" class="scroll-link" style="border:solid">Apply Now</a></li>
							</ul>
						</div>
					</nav>
				</div>
			</div>
		</header>
		<!--Header_section--> 
        
		<!--Hero_Section-->
		<section id="hero_section" class="top_cont_outer" data-section-name="Home">
			<div class="hero_wrapper">
				<div class="container">
					<div class="hero_section">
						<div class="row">
							<div class="col-lg-6 col-sm-4">
								<div class="top_left_cont zoomIn wow animated"> 
									<h2 align="left">The New Way to Connect in Entertainment</h2>
									<h2 align="left">Talentscool can help you find talent, opportunities, and services.</h2>
									<p style="font-size:20px" align="left">Music • Dance • Film • Fashion • Arts • Sports</p>
                                <!--<a href="/application" class="read_more2">Apply now!</a>-->
                                </div>
							</div>
                            <div class="bannerImg zoomIn wow animated" id="show" >
                                <img src="{{asset('/images/rotator/Fashion.png')}}">
                                <img src="{{asset('/images/rotator/HipHop.png')}}">
                                <img src="{{asset('/images/rotator/Music.png')}}">
                            </div>
							</div>
							</div>
						</div>
					</div>
		</section>
        </section>
		<!--Hero_Section--> 
		
		<!--Aboutus-->
		<!-- style="background-color: black;" -->
		<section id="aboutUs" data-section-name="About Us">
			<div class="inner_wrapper" align="center">
				<div class="container">
					<h2 id="auhead" style="font-size:48px">About Us</h2>
                    <table class="tg" style="undefined;table-layout: fixed; width: 100%">
							<colgroup>
							<col style="width: 10%">
							<col style="width: 95%">
                            <col style="width: 10%">
							</colgroup>
                     <tr>
                     <td><img src="images/Connect.jpg" style="max-height: 30vh; max-width: 30vh; padding: 1vh;"></td>
                     <td><div class="inner_section">
						<div class="row">
							<div class=" col-lg-4 col-md-4 col-sm-4 col-xs-12 pull-right"></div>
							<div class=" col-lg-8 col-md-8 col-sm-8 col-xs-12 pull-left">
								<div class=" delay-01s animated fadeInDown wow animated">
                               <p align="justify" style="font-size:25px">Talentscool is a talent service that connects creative talent to opportunities and service providers. Founded by a musician and a pro-athlete, we understand how hard it is to stand out in the entertainment industry. With so much competition, our clients are given peace of mind knowing they have someone on their side.</p> <br/>
									<p align="justify" style="font-size:25px">Through our global relationships with major/indie record labels, talent agencies, casting agencies, production companies, venues, art galleries, corporate sponsors, and much more, we are able to provide the best possible services to our clients. In addition, we recommend our clients to best service providers to fit their individual needs.</p><br>
                                    <p><center style="font-size:30px">The needs of our clients are our #1 priority</center></p>
								</div>
								<div class="work_bottom"> <!--<a href="/application" class="read_more2">Apply now!</a>--> </div>       
							</div>
							
						</div>
						
						
					</div></td>
                     <td><img src="images/Globe.jpg" style="max-height: 30vh; max-width: 30vh; padding: 1vh;"></td>
                     </tr>
					
                    </table>
				</div> 
			</div>
		</section>
		<!--Aboutus--> 
		
		
		<!--Service-->
		<section  id="service" data-section-name="Services">
			<div class="service_wrapper" >
				<div class="container">
					<h2>Services</h2>
					<div class="member wow bounceInUp animated animated" style="visibility: visible; animation-name: bounceInUp; -webkit-animation-name: bounceInUp;">
						<div class="tg-wrap"><table class="tg" style="undefined;table-layout: fixed; width: 100%">
							<colgroup>
							<col style="width: 33%">
							<col style="width: 33%">
							<col style="width: 33%">
							</colgroup>
							  <tr>
							    <th class="tg-2awo">Opportunities<br><img src="images/Opportunities.jpeg" style="max-height: 15vh; max-width: 20vh; padding:0vh;"></th>
							    <th class="tg-2awo">Representation<br><img src="images/Representation.jpg" style="max-height: 15vh; max-width: 20vh; padding:0vh;"></th>
							    <th class="tg-2awo">Talent Development<br><img src="images/Talent Development.jpg" style="max-height: 15vh; max-width: 20vh; padding:0vh;"></th>
							  </tr>
							  <tr>
							    <td class="tg-zlxb">Bookings, Endorsements, Auditions, Showcases, Appearances, Collaborations, Jobs, Internships</td>
							    <td class="tg-zlxb">Manager, Agent, Record Deal, Booking Agent, Publicist, Talent Agent, Brand Manager</td>
							    <td class="tg-zlxb">Vocal Coach, Acting Coach, Instrument Teacher, Dance Instructor, Art Instructor, School Placement </td>
							  </tr>
							  <tr>
							    <th class="tg-2awo">General Services<br><img src="images/General Services.png" style="max-height: 15vh; max-width: 20vh; padding:0vh;"></th>
							    <th class="tg-2awo">Vanity Services<br><img src="images/Vanity Services.png" style="max-height: 15vh; max-width: 20vh; padding:0vh;"></th>
							    <th class="tg-2awo">Luxury Services<br><img src="images/Luxury Service.jpg" style="max-height: 15vh; max-width: 20vh; padding:0vh;"></th>
							  </tr>
							  <tr>
							    <td class="tg-zlxb">Musician, Vocalist, Dancer, Lawyer, Accountant, Investor, Personal Assistant, Web Designer, Engineer, Fitness Trainer, Camera Crew</td>
							    <td class="tg-zlxb">Clothing Stylist, Hair Stylist, Barber, Makeup Artist, Model, Photographer, Videographer, Clothing Designer</td>
							    <td class="tg-zlxb">Bodyguard, Limo Driver, Private Jet Rental, Studio Rental, Helicopter Rental, Car Rental</td>
							  </tr>
							</table>
                            <p><center style="font-size:30px">In addition, we help find talent for talent buyers</center></p>
						</div>


		
						
					</div>
				</div>
			</div>
		</section>
		<!--Service-->
<!--        </div>-->
		
		
		
		
		<!--/Portfolio --> 
		
		<!--client_logos-->
		
		
		<!--/Team-->
		<!--Footer-->
        <footer class="footer_wrapper" id="founders" align="center">
			<div class="container">
				<section  id="founders" data-section-name="Founders">
			<div class="founders_wrapper" align="center">
				<div class="container">
					<h2 style="font-size:48px">Founders</h2>
					<div class="member wow bounceInUp animated animated" style="visibility: visible; animation-name: bounceInUp; -webkit-animation-name: bounceInUp;">
						<div class="tg-wrap"><table class="tg" style="undefined;table-layout: fixed; width: 100%">
							<colgroup>
							<col style="width: 50%">
							<col style="width: 50%">
							</colgroup>
							  <tr>
							    <th class="tg-2awo" style="font-size:30px">Michael B. Pratt<br>President and Founder<br><img src="/images/Mike.png" style="max-height: 20vh; max-width: 20vh; padding:0vh;"></th>
							    <th class="tg-2awo" style="font-size:30px">Steve Smith<br>Vice President and Co-Founder<br><img src="/images/Steve.jpg" style="max-height: 20vh; max-width: 20vh; padding:0vh;"></th>
							  </tr>
							  <tr>
							    <td style="font-size:18px; font-weight:bold; text-align:justify"><br>Michael is an entrepreneur, multi-instrumentalist, songwriter for major labels/artists, and film score composer for feature films/television. The combination of his extensive entrepreneurial experience and love for the arts led him to launch Talentscool. He also has an extensive network within the entertainment industry that allows him to service his clientele globally. He is an honor roll student at the University of Southern California studying Entrepreneurship and Music.</td>
							    <td style="font-size:18px; font-weight:bold; text-align:justify">Steve is a retired NFL Pro-Bowl wide receiver and Super Bowl champion. He set a franchise record for the New York Giants football organization for most receptions in a single season. He has a wide range of connections in the entertainment industry along with a hard-working attribute and a persistence to better the company. His accomplishments give him a strong desire to excel in anything he puts his mind to.</td>
							  </tr>
							</table>
							<div><br/><br/></div>
							<!--<a href="/application" class="read_more2">Apply now!</a>-->
						</div>
					</div>
				</div>
			</div>
		</section>
 
        
		<footer class="footer_wrapper" id="contact" align="center">
			<div class="container">
				<section class="page_section contact" id="contact" data-section-name="Contact">
					<div class="contact_section">
						<h2 style="font-size:48px;">Contact Us</h2>
					</div>
					<div class="row">
						
						<div class="col-lg-12 wow fadeInLeft delay-06s" style="margin-left: 40px;">
							<div class="form" align="center">
                            {!! Form::open() !!}
								<input class="input-text" type="text" name="receiver" value="Your Name *" onFocus="if(this.value==this.defaultValue)this.value='';" onBlur="if(this.value=='')this.value=this.defaultValue;" style="width:75%">
								<input class="input-text" type="text" name="email" value="Your E-mail *" onFocus="if(this.value==this.defaultValue)this.value='';" onBlur="if(this.value=='')this.value=this.defaultValue;" style="width:75%">
								<textarea class="input-text text-area" cols="0" rows="0" onFocus="if(this.value==this.defaultValue)this.value='';" onBlur="if(this.value=='')this.value=this.defaultValue;" name="message" id="message" style="width:75%">Your Message *</textarea>
								<input class="input-btn" type="button" value="send" id="sendmail" style="text-transform: uppercase;
    display: block;
    width: 20%;
    min-width: 120px;
    height: 49px;
    text-align: center;
    font-size: 16px;
    color: white;
    border-radius: 3px;
    font-family: 'Raleway', sans-serif;
    font-weight: 600;">
                             {!! Form::close() !!}
							</div>
						</div>
					</div>
                    </section>
                    
    
                    
     
        <br>
        <br>
        
        
                    
    <section  id="follow" data-section-name="Follow us">
			<div class="folow_wrapper" align="center">
				<div class="container">
					<h2 style="font-size:20px">Follow us!</h2>
                     <a href="http://www.twitter.com/talentscool" target="_blank">
						<img src="http://talentscool.com/images/social_media/twitter_logo.png" style="max-height: 6vh; max-width: 6vh; padding: 1vh;"></a>
						<a href="http://www.facebook.com/talentscool" target="_blank">
						<img src="http://talentscool.com/images/social_media/facebook_logo.png" style="max-height: 6vh; max-width: 6vh; padding: 1vh"></a>
						<a href="http://www.instagram.com/talentscool" target="_blank">
						<img src="http://talentscool.com/images/social_media/instagram_logo.png" style="max-height: 6vh; max-width: 6vh; padding: 1vh"></a>
						<br/>
                        <h2 style="font-size:16px">Copyright © 2016. Talentscool, Inc. All rights reserved. </h2>
                     </div>
               </div>
    </section>
                        
                        
				
			
		
		<!-- Scripts -->
		<script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/jquery-scrolltofixed.js"></script>
		<script type="text/javascript" src="js/jquery.nav.js"></script> 
		<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
		<script type="text/javascript" src="js/jquery.isotope.js"></script>
		<script type="text/javascript" src="js/wow.js"></script> 
		<script type="text/javascript" src="js/custom.js"></script>
        <script type="text/javascript" src="js/jquery.easing.min.js"></script>
        <script type="text/javascript" src="js/jquery.scrollify.min.js"></script>
            
        
        <script>
		$('#sendmail').click(function(){
			$token=$(this).parent().find('input[name=_token]').val();
			$receiver=$(this).parent().find('input[name=receiver]').val();
			$email=$(this).parent().find('input[name=email]').val();
			$message=document.getElementById('message').value;
			//alert($token);
			//alert($receiver);
			//alert($email);
			//alert($message);
	
			$.ajax(
			{
				type: "POST",
				url:"/",
				data: {
					"_token": $(this).parent().children().get(0).value,
					"receiver": $(this).parent().children().get(1).value,
			        "email": $(this).parent().children().get(2).value,
			        "message": $(this).parent().children().get(3).value
					},
			    dataType:"text",
				success: function(responseData){
				     var obj=JSON.parse(responseData);
					 if(obj.result == 'success')
					 	alert("Message sent!");
				}
			}
			);	

		});
		</script>
        <script>// Question:display属性变了以后连图片位置都变了？
                // fade in和fade out的speed无法改变？
        $(function(){
  var aImg = $('#show img');//抓取id=show下所有的图片
  var nTime = 0;//初始化轮播图片的开始图片为第一张
  function show(){
    $.each(aImg,function() {
      $(this).fadeOut('50000');//淡出，可选项
      $(this).addClass('hidden');//设置display为hidden
    });
    $(aImg[nTime]).removeClass('hidden');//拿掉display=hidden
    $(aImg[nTime]).fadeIn('50000');//淡入，可选项，如果删除的话fadeOut也要一并删除
    (nTime == 2)?nTime=0:nTime++;//controls based on the number of images?
  }
    show();//让它先进行一次播放，显示第一张图片
    $(document).ready(function() {
    setInterval(show,5000);//设置定时器,隔5000毫秒调用一次show函数
  });
});
        </script>
           
		
	</body>
</html>