<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Talentscool</title>
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
	float: left;
    margin-top:2%;
	position:relative;
	margin-left:80%;
	width:200px;
	
}
</style>
</head>
<link href="{{ asset('/css/app.css') }}" rel="stylesheet">
<body>
<br>
<br>
<table class="tg" style="undefined;table-layout: fixed; width: 100%">
<colgroup>
<col style="width: 33%">
<col style="width: 25%">
<col style="width: 45%">
</colgroup>
<tr>
<th class="tg-2awo"></th>
<td class="tg-zlxb" style="text-align:center"><img src="/pic/TSVector.png"></td>
<th class="tg-2awo"></th>
</tr>
</table>
<br>
<br>
<br>
<center style="font-size:40px; position:relative; color:white;"><strong>Connecting Talent in Entertainment</strong></center>
<br>
<br>
<center style="font-size:25px; position:relative; color:white;"><strong>Music • Film • Fashion • Art • Dance</strong></center>
<br>
<br>
<center><input type="button" value="VIEW WORK" id="myButton" class="btn btn-danger"></input></center>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<table class="tg" style="undefined;table-layout: fixed; width: 10%;" align="center">
<colgroup>
<col style="width: 33%">
<col style="width: 33%">
<col style="width: 33%">
</colgroup>
<tr>
<td class="tg-2awo" style="align-content:center"><a href="http://www.twitter.com/talentscool" target="_blank"><img src="http://talentscool.com/images/social_media/twitter_logo.png" style="max-height: 6vh; max-width: 6vh; padding: 1vh;"></a></td>
<td class="tg-zlxb" style="text-align:center"><a href="http://www.facebook.com/talentscool" target="_blank"><img src="http://talentscool.com/images/social_media/facebook_logo.png" style="max-height: 6vh; max-width: 6vh; padding: 1vh"></a></td>
<td class="tg-2awo"><a href="http://www.instagram.com/talentscool" target="_blank"><img src="http://talentscool.com/images/social_media/instagram_logo.png" style="max-height: 6vh; max-width: 6vh; padding: 1vh"></a></td>
</tr>
</table>				
</body>
<script type="text/javascript">
    document.getElementById("myButton").onclick = function () {
        location.href = "/homepage";
    };
</script>
</html>