<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Error</title>
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
<div class="error">
<p style="font-size:30px; position:relative; color:white; margin-top:15%; margin-left:10%; margin-right:15%;">The files you submitted have some problems. Please make sure that the photos you submitted have valid extension names (.gif,.png,.jpg only) and each one is limited to 5MB.<br><input type="button" value="Back to application page" id="myButton" class="btn btn-danger"></input></p>
</div>
</body>
<script type="text/javascript">
    document.getElementById("myButton").onclick = function () {
        location.href = "/application";
    };
</script>
</html>