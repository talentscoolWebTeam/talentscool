<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Application finished</title>
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
</style>
</head>
<link href="{{ asset('/css/app.css') }}" rel="stylesheet">
<body>
<div class="error">
<p style="font-size:30px; position:relative; padding-left:0; color:white">The files you submitted have some problems. Please make sure that the files you submitted have valid extension names and each one is limited to 5MB.</p>
<input type="button" value="Back to application page" id="myButton" class="btn btn-danger"></input>
</div>
</body>
<script type="text/javascript">
    document.getElementById("myButton").onclick = function () {
        location.href = "http://talentscool.local/application";
    };
</script>
</html>