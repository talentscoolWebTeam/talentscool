<!doctype html>
<html lang="en">
	<head>
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
								<li><a href="#contact" class="scroll-link">Contact</a></li>
								<li><a href="http://talentscool.com/application" class="scroll-link">Apply Now!</a></li>
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
							<div class="col-lg-6 col-sm-7">
								<div class="top_left_cont zoomIn wow animated"> 
									<h2>We are the new way to connect in Entertainment</h2>
									<p>Whether you are looking for talent or your next big break, we're here to help.</p>
									<p>Music. Dance. Film. Fashion. Arts. Sports. We know them all.</p>
								<a href="http://talentscool.com/application" class="read_more2">Apply now!</a> </div>
							</div>
                            <div class="bannerImg zoomIn wow animated" id="show">
                                <img src="{{asset('/images/rotator/Acting.png')}}">
                                <img src="{{asset('/images/rotator/Art.png')}}">
                                <img src="{{asset('/images/rotator/Fashion.png')}}">
                                <img src="{{asset('/images/rotator/HipHop.png')}}">
                                <img src="{{asset('/images/rotator/Makeup.png')}}">
                                <img src="{{asset('/images/rotator/Music.png')}}">
                                <img src="{{asset('/images/rotator/Sports.png')}}">
                            </div>
							<div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--Hero_Section--> 
		
		<!--Aboutus-->
		<!-- style="background-color: black;" -->
		<section id="aboutUs" data-section-name="About Us">
			<div class="inner_wrapper">
				<div class="container">
					<h2 id="auhead">About Us</h2>
					<div class="inner_section">
						<div class="row">
							<div class=" col-lg-4 col-md-4 col-sm-4 col-xs-12 pull-right"></div>
							<div class=" col-lg-8 col-md-8 col-sm-8 col-xs-12 pull-left">
								<div class=" delay-01s animated fadeInDown wow animated">
									
									<p align="justify">Headquartered in Los Angeles, Talentscool is a talent service that works with the music, film, fashion, visual arts, dance, and sports industries to help find talents new opportunities and connect them to the services they need. Having been founded by founded by both a musician and a pro-athlete, we know how hard it is to stand out in the entertainment industry. With so much competition, our clients will be given the ease at mind with someone on their side.</p> <br/>
									<p align="justify">Through our global relationships with major/indie record labels, talent agencies, casting agencies, production companies, venues, art galleries, corporate sponsors, and much more, we are able to provide the best possible services to our clients. In addition, we recommend our clients to well-established vendor services ranging from publicists to agents to investors to entertainment lawyers and everything in between. The needs of our clients are our #1 priority.</p>
								</div>
								<div class="work_bottom"> <a href="http://talentscool.com/application" class="contact_btn">Apply now!</a> </div>       
							</div>
							
						</div>
						
						
					</div>
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
						<div style="text-align: center; margin-left: auto; margin-right: auto;">We will help you find:</div>
						<div class="tg-wrap"><table class="tg" style="undefined;table-layout: fixed; width: 100%">
							<colgroup>
							<col style="width: 33%">
							<col style="width: 33%">
							<col style="width: 33%">
							</colgroup>
							  <tr>
							    <th class="tg-2awo">GENERAL</th>
							    <th class="tg-2awo">OPPORTUNITIES</th>
							    <th class="tg-2awo">REPRESENTATION</th>
							  </tr>
							  <tr>
							    <td class="tg-zlxb">Opportunities, Representation, Branding, Talent Development, Collaboration, Social Media Management</td>
							    <td class="tg-zlxb">Bookings, Endorsements, Auditions, Internships, Showcases, Appearances</td>
							    <td class="tg-zlxb">Manager/Agent, Talent Agency, Publicist, Booking Agent</td>
							  </tr>
							  <tr>
							    <th class="tg-2awo">OUTSIDE SERVICES</th>
							    <th class="tg-2awo">TALENT DEVELOPMENT</th>
							    <th class="tg-2awo">VANITY SERVICES</th>
							  </tr>
							  <tr>
							    <td class="tg-zlxb">Musician, Vocalist, Dancer, Lawyer, Accountant, Personal Assistant, Video/Film Production, Event Planner, Graphic Designer, Audio Engineer</td>
							    <td class="tg-zlxb">Vocal Coach, Acting Coach, Athletic Trainer, Dance Instructor, Instrument Teacher</td>
							    <td class="tg-zlxb">Clothing Stylist, Hair Stylist, Make-Up Artists, Clothing Designer, Photographer, Videographer, Model</td>
							  </tr>
							  <tr>
							    <th class="tg-zlxb"></th>
							    <th class="tg-2awo">LUXURY SERVICES</th>
							    <th class="tg-zlxb"></th>
							  </tr>
							  <tr>
							    <td class="tg-zlxb"></td>
							    <td class="tg-zlxb">Body Guard, Limo Drivers, Private Jet, Car Rental, Studio Rental</td>
							    <td class="tg-zlxb"></td>
							  </tr>
							</table>
						</div>


						<!-- <ul>
							<li class="listHeader">General</li>
							<ul>
								<li>Opportunities, Representation, Branding, Talent Development, Collaboration, Social Media Management</li>
							</ul>
						</ul>
						<ul>
							<li class="listHeader">Opportunities</li>
							<ul>
								<li>Bookings, Endorsements, Auditions, Internships, Showcases, Appearances</li>
							</ul>
						</ul>
						<ul>
							<li class="listHeader">Representation</li>
							<ul>
								<li>Manager/Agent, Talent Agency, Publicist, Booking Agent</li>
							</ul>
						</ul>
						<ul>
							<li class="listHeader">Outside Services</li>
							<ul>
								<li>Musician, Vocalist, Dancer, Consultant, Lawyer, Accountant, Personal Assistant, Fitness Trainer, Video/Film Production, Event Planner, Graphic Designer, Audio Engineer</li>
							</ul>
						</ul>
						<ul>
							<li class="listHeader">Talent Development</li>
							<ul>
								<li>Vocal Coach, Acting Coach, Athletic Trainer, Dance Instructor, Instrument Teacher</li>
							</ul>
						</ul>
						<ul>
							<li class="listHeader">Vanity Services</li>
							<ul>
								<li>Clothing Stylist, Hair Stylist, Make-Up Artists, Clothing Designer, Photographer, Videographer, Model</li>
							</ul>
						</ul>
						<ul>
							<li class="listHeader">Luxury Services</li>
							<ul>
								<li>Body Guard, Limo Drivers, Private Jet, Car Rental, Studio Rental</li>
							</ul>
						</ul> -->
						
						
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
		<footer class="footer_wrapper" id="contact">
			<div class="container">
				<section class="page_section contact" id="contact" data-section-name="Contact">
					<div class="contact_section">
						<h2 style="padding:0px">Contact Us</h2>
					</div>
					<div class="row">
						
						<div class="col-lg-12 wow fadeInLeft delay-06s">
							<div class="form">
                            {!! Form::open() !!}
								<input class="input-text" type="text" name="receiver" value="Your Name *" onFocus="if(this.value==this.defaultValue)this.value='';" onBlur="if(this.value=='')this.value=this.defaultValue;">
								<input class="input-text" type="text" name="email" value="Your E-mail *" onFocus="if(this.value==this.defaultValue)this.value='';" onBlur="if(this.value=='')this.value=this.defaultValue;">
								<textarea class="input-text text-area" cols="0" rows="0" onFocus="if(this.value==this.defaultValue)this.value='';" onBlur="if(this.value=='')this.value=this.defaultValue;" name="message" id="message">Your Message *</textarea>
								<input class="input-btn" type="button" value="send message" id="sendmail">
                             {!! Form::close() !!}
							</div>
						</div>
					</div>
				<div class="container">
					<div class="footer_bottom">
						<p style="font-family: 'Raleway', sans-serif;">Follow us!</p>
						<a href="http://www.twitter.com/talentscool" target="_blank">
						<img src="http://talentscool.com/images/social_media/twitter_logo.png" style="max-height: 6vh; max-width: 6vh; padding: 1vh;"></a>
						<a href="http://www.facebook.com/talentscool" target="_blank">
						<img src="http://talentscool.com/images/social_media/facebook_logo.png" style="max-height: 6vh; max-width: 6vh; padding: 1vh"></a>
						<a href="http://www.instagram.com/talentscool" target="_blank">
						<img src="http://talentscool.com/images/social_media/instagram_logo.png" style="max-height: 6vh; max-width: 6vh; padding: 1vh"></a>
						<br/>
						<p style="font-family: 'Raleway', sans-serif;">Copyright &copy; 2015 Talentscool, Inc.</p>
						<!-- <img src="http://talentscool.com/images/logoT.png" style="vertical-align:middle; max-height: 50%; max-width: 50%;">  -->
					</div>
				</div>				
			</section>
			

		</footer>
		
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
    (nTime == 6)?nTime=0:nTime++;//三目运算符，如果轮播完毕则跳转回第一张
  }
    show();//让它先进行一次播放，显示第一张图片
    $(document).ready(function() {
    setInterval(show,5000);//设置定时器,隔5000毫秒调用一次show函数
  });
});
        </script>
            
        <script>
            $(function(){
            if (/Android|BlackBerry|iPhone|iPad|iPod|webOS/i.test(navigator.userAgent) === false) {

                $.scrollify({ 
                section : "section", 
                sectionName : "section-name", 
                easing: "easeOutExpo", 
                scrollSpeed: 1500, 
                offset : 0, 
                scrollbars: true, 
                before:function() {}, 
                after:function() {} 
                });     
            }}); 
        
        </script>
		
	</body>
</html>