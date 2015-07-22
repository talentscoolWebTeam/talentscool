<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>No account found</title>
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
<div class="no_account">
<p style="font-size:30px; position:relative; color:white; margin-top:15%; margin-left:10%; margin-right:15%;">Unfortunately, we cannot find out this email now. Before surfing the huge applicant's information, please create your account firstly.<br><input type="button" value="Register" id="myButton" class="btn btn-danger"></input></p>
</div>
</body>
<script type="text/javascript">
    document.getElementById("myButton").onclick = function () {
        location.href = "/auth/login";
    };
</script>
</html>