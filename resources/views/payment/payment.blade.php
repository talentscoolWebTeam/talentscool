<!doctype html>
<html>
<head>
<link href="{{ asset('/css/app.css') }}" rel="stylesheet">
	<link rel="shortcut icon" href="{{{asset("/images/favicon.jpeg")}}}">
    <link href="{{ asset('/css/select2.min.css') }}" rel="stylesheet">
<title>Payment</title>
<style>
body{
	   background: url("http://www.talentscool.com/images/background.png") no-repeat center center fixed; 
       -webkit-background-size: cover;
       -moz-background-size: cover;
       -o-background-size: cover;
       background-size: cover;	
	   color:white;
	   font:Cambria, "Hoefler Text", "Liberation Serif", Times, "Times New Roman", serif;
	   font-size:20px;
	   padding-left:5%;
	}
	img {
	float: right top;
    margin-top:2%;
	position:relative;
	margin-left:80%;
	width:200px;
	
}
</style>
</head>
<link href="{{ asset('/css/app.css') }}" rel="stylesheet">
<body>
<img src="/pic/TSVector.png">
<div class="payment">
<p style="font-size:30px; position:relative; color:white; margin-top:15%; margin-left:10%; margin-right:15%;">In order to continue to be access to the huge amount of applicants' portfolio, please make a payment first.<br></p>
</div>
<div class="col-xs-12">
<div class="col-xs-4"></div>
<div class="col-xs-6">
{!! Form::open(['action'=>'PaymentController@pay']) !!}
<!--<form action="{{url('test')}}" method="POST">-->
  <script
    src="https://checkout.stripe.com/checkout.js" class="stripe-button"
    data-key="{{Config::get('stripe.stripe.public')}}"
    data-amount="2000"
    data-name="Talentscool"
    data-description="Access to database ($20.00)"
    data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
    data-zip-code="true"
    data-label="Access to database"
    data-allow-remember-me="false">
  </script>
{!! Form::close() !!}
</div>
</div>

</body>
</html>