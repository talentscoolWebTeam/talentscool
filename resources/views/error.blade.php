<!DOCTYPE html>
<html lang="en">

<head>
	<title>
		TalentsCool | Error
	</title>

	<link rel="stylesheet" href="css/application-style.css" />
	<link href='https://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet' type='text/css'>

	<style>
		footer{
			position: absolute;
			bottom: 0;
			width: 100%;
		}
	</style>

</head>

<body>

<div class="header">
	<div>
		<h1><a href="/"><img src="images/TSVector.png"></a></h1>
	</div>
</div>

<div class="content">
	<h2>Sorry, an error occurred</h2>
	<p>There was a problem with your application. Make sure your files are within the size limit (5MB) and that all required fields are filled out properly</p><br>
	<input type="button" value="Back to application page" id="myButton" class="btn btn-danger"></input>
</div>


<footer>
	<div class="social-media-bar">
		<ul>
			<li><a target="_blank" href="https://twitter.com/talentscool"><img src="images/twitter_logo.png" title="Follow us on Twitter!" class="media-icon"></a></li>
			<li><a target="_blank" href="https://www.facebook.com/talentscool"><img src="images/facebook_logo.png" title="Follow us on Facebook!" class="media-icon"></a></li>
			<li><a target="_blank" href="https://www.instagram.com/talentscool/"><img src="images/instagram_logo.png" title="Follow us on Instagram!" class="media-icon"></a></li>
		</ul>
	</div>
	<p>Copyright &copy 2016. Talentscool, Inc. All rights reserved. </p>
</footer>

</body>

<script type="text/javascript">
	document.getElementById("myButton").onclick = function () {
		location.href = "/apply";
	};
</script>