<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Submit your application</title>
</head>
	<link href="{{ asset('/css/app.css') }}" rel="stylesheet">
	<link rel="shortcut icon" href="{{{asset("/images/favicon.jpeg")}}}">
    <link href="{{ asset('/css/select2.min.css') }}" rel="stylesheet">
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
	
	select{
		color:black;
	}
	option{
		background-color:green;
	}
	input{
		font-family:Cambria, "Hoefler Text", "Liberation Serif", Times, "Times New Roman", serif;
	}
	sup{
		color:red;
	}
	
	
	.secondPage{
		display:none;
	}
	.thirdPage{
	    display:none;
	}
	.fourPage{
		display:none;
	}
	.thanks{
		display:none;
	}
	.add_one{
		display:none;
	}
	.add_two{
		display:none;
	}
</style>

<body>


<!--
<form method="post" action="application" onSubmit="window.open('http://talentscool.local/application_2')"> -->
<div id="result">
</div>
<form method="POST" action="http://talentscool.local/application" accept-charset="UTF-8" enctype="multipart/form-data"><input name="_token" type="hidden" value="{{ csrf_token() }}">
<div class="firstPage">
<p class="col-xs-12" style="font-size:36px;">APPLICATION</p>
<p class="col-xs-12">personal information</p>
<b style="color:red;">*</b><b> required</b>
<br><br>
<div class="col-xs-12">
	<div class="col-xs-2">
	FIRST NAME<sup>*</sup>
    </div>
    <div class="col-xs-3">
	<input type="text" name="fname"  id="fname" class="page1 form-control"/>
	</div>
</div>

<br>
<br>

<div class="col-xs-12">
	<div class = "col-xs-2">
		LAST NAME<sup>*</sup>
    </div>
    <div class="col-xs-3">
    	<input type="text" name="lname"  id="lname" class="page1 form-control">
    </div>
</div>

<br>
<br>

<div class="col-xs-12">
     <div class="col-xs-2">
            NICKNAME(optional)
      </div>
      <div class="col-xs-3">
            <input type="text" name="nname"  id="nname" class="page1 form-control">
     </div>
</div>

<br>
<br>

<div class="col-xs-12">
           <div class="col-xs-2">
            UPLOAD PERSONAL PHOTO (optional)(max size is 5MB. jpg, gif, png ONLY)
           </div>
           <div class="col-xs-3">
           <input type="file" name="personal_photo" id="personal_photo" accept="image/*"></input>
           </div>
</div>

<br>
<br>
<br>

<div class="col-xs-12">
     <div class="col-xs-2">
     EMAIL<sup>*</sup>
     </div>
     <div class="col-xs-3">
     <input type="text" name="email"  id="email" class="page1 form-control">
     </div>
</div>

<br>
<br>
<br>

<div class="col-xs-12">
     <div class="col-xs-2">
     STATE<sup>*</sup>
     </div>
     <div class="col-xs-3">
     {!! Form::select('state', $states,null,  ['class' => 'form-control', 'id'=>'state']) !!}
     </div>
</div>

<br>
<br>

<div class="col-xs-12">
      <div class="col-xs-2">
      CITY<sup>*</sup>
      </div>
      <div class="col-xs-3">
      <input type="text" class="page1 form-control" name="city" id="city">
      </div>
</div>


<br>
<br>

<div class="col-xs-12">
      <div class="col-xs-2">
      ZIP CODE<sup>*</sup>
      </div>
      <div class="col-xs-3">
      <input type="text" name="zipcode"  id="zip" class="page1 form-control">
      </div>
</div>

<br>
<br>

<div class="col-xs-12">
        <div class="col-xs-2">
        GENDER<sup>*</sup>
        </div>
        <div class="col-xs-3">
        <select name="gender" class="form-control" id="gender">
        <option value=""></option>
  <option value="Male">Male</option>
  <option value="Female">Female</option>
  <option value="Do not want to identify">Do not want to identify</option>
</select>
        </div>
 </div>

<br>
<br>

<div class="col-xs-12">
      <div class="col-xs-2">
      PHONE#(optional)
      </div>
      <div class="col-xs-3">
      <input type="text" name="phoneNum"  class="page1 form-control">
      </div>
</div>

<br>
<br>

<div class="col-xs-12">
      <div class="col-xs-2">
      DATE OF BIRTH<sup>*</sup>
      </div>
      <div class="col-xs-3">
      <input type="date" name="dob" id="dob" class="page1 form-control">
      </div>
</div>

<br>
<br>
<input type="text" name="status" value="2" style="display:none;">
<div class="col-xs-12">
     <div class="col-xs-2">
     <input type="button" value="NEXT" id="firstNext" style="float:left" class="btn btn-danger"></input>
     </div>
     </div>
</div>





<div class="secondPage">
<p style="font-size:36px; position:relative; padding-left:0%;">APPLICATION</p>
<p style="font-size:24px; position:relative; padding:0;">talent</p>
<div class="col-xs-12">
     <div class="col-xs-3">
     TALENT CATEGORY<sup>*</sup>
     </div>
     <div class="col-xs-3">
 <select name="category1" id="category1" class="form-control">
  <option value=""></option>
  <option value="dance">Dance</option>
  <option value="fashion">Fashion</option>
  <option value="film">Film</option>
  <option value="fine_arts">Fine Arts</option>
  <option value="music">Music</option>
  <option value="sports">Sports</option>
  <option value="other">Other</option>
</select>
</div>
</div>

<br>
<br>

<div class="col-xs-12">
<div class="col-xs-3">
SPECIFIC TALENT<sup>*</sup>
</div>
<div class="col-xs-3">
<input type="text" name="specific_talent1" id="specific_talent1" class="form-control"></input>
</div>
</div>

<br>
<br>

<div class="col-xs-12">
<div class="col-xs-12">
(<b>Ex:</b>&nbsp<b>Dance:</b> salsa dance, ballet, hip hop&nbsp<b>Fashion:</b> model, photographer, make-up artist&nbsp<b>Film: </b>actor, director, producer&nbsp<b>Fine arts:</b> painter, graphic designer&nbsp<b>Music:</b>composer, pianist&nbsp<b>Sports:</b>basketball, baseball, football)
</div>
</div>


<br>
<br>




<div class="col-xs-12">
<div class="col-xs-3">
UPLOAD PORTFOLIO<br>(At least 1 file. At most 3 files)
</div>
</div>

<br>
<br>



<div class="col-xs-12">
<div class="col-xs-3">
PHOTO(max size is 5MB. jpg, png, gif ONLY)
</div>
<div class="col-xs-3">
<input type="file" name="tphoto1" id="tphoto1" accept="image/*">
</div>
</div>

<br>
<br>

<div class="col-xs-12">
<div class="col-xs-3">
AUDIO(link)
</div>
<div class="col-xs-3"><input type="text" name="audiolink1" id="audiolink1"  class="page2 form-control">
</div>
</div>

<br>
<br>

<div class="col-xs-12">
<div class="col-xs-3">
VIDEO(link)
</div>
<div class="col-xs-3"><input type="text" name="videolink1" id="videolink1"  class="page2 form-control">
</div>
</div>

<br>
<br>

<div class="col-xs-12">
<div class="col-xs-2">
<input type="button" id="add_one" value="Add another" class="btn btn-danger"></input>
</div>
</div>

<br>
<br>

<div class="col-xs-12">
<div class="col-xs-2">
<input type="button" id="secondPrevious" value="PREVIOUS"  class="btn btn-danger"></input>
</div>
<div class="col-xs-3">
<input type="button" value="NEXT" id="secondNext" class="btn btn-danger"></input>
</div>
</div>
</div>

<div class="add_one">
<p style="font-size:36px; position:relative; padding-left:0%;">APPLICATION</p>
<p style="font-size:24px; position:relative; padding:0;">talent</p>
<div class="col-xs-12">
<div class="col-xs-3">
TALENT CATEGORY<sup>*</sup>
</div>
<div class="col-xs-3"> 
<select name="category2" id="category2" class="form-control">
  <option value=""></option>
  <option value="dance">Dance</option>
  <option value="fashion">Fashion</option>
  <option value="film">Film</option>
  <option value="fine_arts">Fine Arts</option>
  <option value="music">Music</option>
  <option value="sports">Sports</option>
  <option value="other">Other</option>
</select>
</div>
</div>

<br>
<br>

<div class="col-xs-12">
<div class="col-xs-3">
SPECIFIC TALENT<sup>*</sup>
</div>
<div class="col-xs-3">
<input type="text" name="specific_talent2" id="specific_talent2" class="form-control" style="width:200px;"></input><br>
</div>
</div>

<br>
<br>

<div class="col-xs-12">
<div class="col-xs-12">
(<b>Ex:</b>&nbsp<b>Dance:</b> salsa dance, ballet, hip hop&nbsp<b>Fashion:</b> model, photographer, make-up artist&nbsp<b>Film: </b>actor, director, producer&nbsp<b>Fine arts:</b> painter, graphic designer&nbsp<b>Music:</b>composer, pianist&nbsp<b>Sports:</b>basketball, baseball, football)
</div>
</div>

<br>
<br>



<div class="col-xs-12">
<div class="col-xs-3">
UPLOAD PORTFOLIO<br>(At least 1 file. At most 3 files)
</div>
</div>

<br>
<br>


<div class="col-xs-12">
<div id="file1">
</div>
</div>

<br>
<br>

<div class="col-xs-12">
<div class="col-xs-3">
PHOTO(max size is 5MB. jpg, png, gif ONLY)
</div>
<div class="col-xs-3">
<input type="file" name="tphoto2" id="tphoto2" accept="image/*">
</div>
</div>

<br>
<br>

<div class="col-xs-12">
<div class="col-xs-3">
AUDIO(link)
</div>
<div class="col-xs-3"><input type="text" name="audiolink2" id="audiolink2"  class="page2 form-control" style="width:300px;">
</div>
 </div>
 
 <br>
<br>
 
 <div class="col-xs-12">
 <div class="col-xs-3">
VIDEO(link)
</div>
<div class="col-xs-3"><input type="text" name="videolink2" id="videolink2"  class="page2 form-control" style="width:300px;">
</div>
</div>

<br>
<br>

<div class="col-xs-12">
<div class="col-xs-2">
<input type="button" id="add_two" value="Add another" class="btn btn-danger"></input>
</div>
</div>

<br>
<br>

<div class="col-xs-12">
<div class="col-xs-2">
<input type="button" id="addonePrevious" value="PREVIOUS" class="btn btn-danger"></input>
</div>
<div class="col-xs-3">
<input type="button" value="NEXT" id="addoneNext" class="btn btn-danger"></input>
</div>
</div>
</div>

<div class="add_two">
<p style="font-size:36px; position:relative; padding-left:0%;">APPLICATION</p>
<p style="font-size:24px; position:relative; padding:0;">talent</p>

<div class="col-xs-12">
<div class="col-xs-3">
TALENT CATEGORY <sup>*</sup>
</div>
<div class="col-xs-3">
<select name="category3" id="category3" class="form-control">
  <option value=""></option>
  <option value="dance">Dance</option>
  <option value="fashion">Fashion</option>
  <option value="film">Film</option>
  <option value="fine_arts">Fine Arts</option>
  <option value="music">Music</option>
  <option value="sports">Sports</option>
  <option value="other">Other</option>
</select>
</div>
</div>

<br>
<br>

<div class="col-xs-12">
<div class="col-xs-3">
SPECIFIC TALENT<sup>*</sup>
</div>
<div class="col-xs-3">
<input type="text" name="specific_talent3" id="specific_talent3" class="form-control" style="width:200px;"></input>
</div>
</div>

<br>
<br>

<div class="col-xs-12">
<div class="col-xs-12">
(<b>Ex:</b>&nbsp<b>Dance:</b> salsa dance, ballet, hip hop&nbsp<b>Fashion:</b> model, photographer, make-up artist&nbsp<b>Film: </b>actor, director, producer&nbsp<b>Fine arts:</b> painter, graphic designer&nbsp<b>Music:</b>composer, pianist&nbsp<b>Sports:</b>basketball, baseball, football)
</div>
</div>

<br>
<br>


<div class="col-xs-12">
<div class="col-xs-3">
UPLOAD PORTFOLIO<br>(At least 1 file. At most 3 files)
</div>
</div>

<br>
<br>


<div class="col-xs-12">
<div id="file2">
</div>
</div>

<br>
<br>

<div class="col-xs-12">
<div class="col-xs-3">
PHOTO(max size is 5MB. jpg, png, gif ONLY)
</div>
<div class="col-xs-3">
 <input type="file" name="tphoto3" id="tphoto3" accept="image/*">
 </div>
 </div>
 
 <br>
<br>
 
 <div class="col-xs-12">
 <div class="col-xs-3">
AUDIO(link)
</div>
<div class="col-xs-3"><input type="text" name="audiolink3" id="audiolink3"  class="page2 form-control" style="width:300px;">
</div>
</div>

<br>
<br>

<div class="col-xs-12">
<div class="col-xs-3">
VIDEO(link)
</div>
<div class="col-xs-3"><input type="text" name="videolink3" id="videolink3"  class="page2 form-control" style="width:300px;">
</div>
</div>

<br>
<br>

<div class="col-xs-12">
<div class="col-xs-2">
<input type="button" id="addtwoPrevious" value="PREVIOUS" class="btn btn-danger"></input>
</div>
<div class="col-xs-3">
<input type="button" value="NEXT" id="addtwoNext" class="btn btn-danger"></input>
</div>
</div>
</div>





<div class="thirdPage">
<p style="font-size:36px; position:relative; padding-left:0%;">APPLICATION</p>
<p style="font-size:24px; position:relative; padding:0;">services desired</p>
<p style="font-size:24px; position:relative; padding:0;">PLEASE CHECK THE BOXES THAT APPLY</p>
<div class="col-xs-12">
<div class="col-xs-3">
OPPORTUNITIES<sup>*</sup><br>
<input type="checkbox" name="opportunity[]" value="booking">booking<br>
<input type="checkbox" name="opportunity[]" value="audition">audition<br>
<input type="checkbox" name="opportunity[]" value="tour">tour<br>
<input type="checkbox" name="opportunity[]" value="showcase">showcase<br>
<input type="checkbox" name="opportunity[]" value="internship">internship<br>
<input type="checkbox" name="opportunity[]" value="job">job<br>
<input type="checkbox" name="opportunity[]" value="endorsement">endorsement<br>
<input type="checkbox" name="opportunity[]" value="" id="oppo_other" onClick="addopp()">other<br>
<input type="text" name="opportunity[]" id="oppo" disabled class="form-control" style="width:200px;"></input><br>
</div>
</div>
<div class="col-xs-12">
<div class="col-xs-3">
REPREAENTATIONS<sup>*</sup><br>
<input type="checkbox" name="representation[]" value="talent agent">talent agent<br>
<input type="checkbox" name="representation[]" value="record label">record label<br>
<input type="checkbox" name="representation[]" value="agent manager">agent manager<br>
<input type="checkbox" name="representation[]" value="modeling agency">modeling agency<br>
<input type="checkbox" name="representation[]" value="" onClick="addrep()" id="rep_other">other<br>
<input type="text" name="representation[]" id="rep" disabled class="form-control" style="width:200px;"></input><br>
</div>
</div>
<div class="col-xs-12">
<div class="col-xs-3">
SERVICES<sup>*</sup><br>
<input type="checkbox" name="service[]" value="brand manager">brand manager<br>
<input type="checkbox" name="service[]" value="lawyer">lawyer<br>
<input type="checkbox" name="service[]" value="account">account<br>
<input type="checkbox" name="service[]" value="publicist">publicist<br>
<input type="checkbox" name="service[]" value="personal assistant">personal assistant<br>
<input type="checkbox" name="service[]" value="talent development">talent development<br>
<input type="checkbox" name="service[]" value="stylist">stylist<br>
<input type="checkbox" name="service[]" value="consulting">consulting<br>
<input type="checkbox" name="service[]" value="collaboration">collaboration<br>
<input type="checkbox" name="service[]" value="" onClick="addser()" id="ser_other">other<br>
<input type="text" name="service[]" id="ser" disabled class="form-control" style="width:200px;"></input><br>
</div>
</div>
<div class="col-xs-12">
<div class="col-xs-2">
<input type='button' value="PREVIOUS" id="thirdPrevious" class="btn btn-danger"></input>
</div>
<div class="col-xs-3">
<input type="button" id="thirdNext" value="NEXT" class="btn btn-danger"></input>
</div>
</div>
</div>





<div class="fourPage">
<p style="font-size:36px; position:relative; padding-left:0%;">APPLICATION</p>
<p style="font-size:24px; position:relative; padding:0;">OPTIONAL(STRONGLY RECOMMENDED)</p>

<div class="col-xs-12">
<div class="col-xs-2">
Describe yourself in three words
</div>
<div class="col-xs-3">
<input type="text" style="width:300px"  name="describeword1" class="page4 form-control">
</div>
<div class="col-xs-3">
<input type="text" style="width:300px"  name="describeword2" class="page4 form-control">
</div>
<div class="col-xs-3">
<input type="text"  style="width:300px"  name="describeword3" class="page4 form-control">
 </div>
 </div>
 
<br>
<br>
 
<div class="col-xs-12">
<div class="col-xs-2">
Intro video(link)
</div>
<div class="col-xs-3">
<input type="text" style="width:300px"  name="introVideo" id="introVideo" class="page4 form-control">
</div>
</div>

<br>
<br>


 <div class="col-xs-12">
 <div class="col-xs-2">
Current representation
</div> 
<div class="col-xs-3">
<input type="text"  style="width:300px"  name="current_representation" class="page4 form-control">
</div>
</div>

<br>
<br>

<div class="col-xs-12">
<div class="col-xs-2">
Accolades 
</div>
<div class="col-xs-3">
<input type="text"  style="width:300px"  name="accolades" class="page4 form-control">
</div>
</div>

<br>
<br>

<div class="col-xs-12">
<div class="col-xs-2">
Achievements 
</div>
<div class="col-xs-3">
<input type="text"  style="width:300px"  name="achievements" class="page4 form-control">
</div>
</div>

<br>
<br>

<div class="col-xs-12">
<div class="col-xs-2">
Experience 
</div>
<div class="col-xs-3">
<input type="text"  style="width:300px"  name="experiences" class="page4 form-control">
</div>
</div>

<br>
<br>

<div class="col-xs-12">
<div class="col-xs-2">
Related talent 
</div>
<div class="col-xs-3">
<input type="text"  style="width:300px"  name="relative_talent" class="page4 form-control">
</div>
</div>

<br>
<br>

<div class="col-xs-12">
<div class="col-xs-2">
Anything else 
</div>
<div class="col-xs-3">
<input type="text"  style="width:300px"  name="anything" class="page4 form-control">
</div>
</div>

<br>
<br>

<div class="col-xs-12">
<div class="col-xs-2">
<input type="button" value="PREVIOUS" id="lastPrevious" class="btn btn-danger"></input>
</div>
<div class="col-xs-3">
<input type="submit" value="SUBMIT" id="submit" formmethod="post" class="btn btn-danger"></input>
</div>
</div>
</div>
</form>

<div class="thanks">
<p style="font-size:30px; position:relative; padding-left:0;">Thanks for your interest. Your application has been submitted. If there is a match, we will contact you ASAP.<br>Thank you!</p>
</div>

</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script>
      function getextension(name){
		  if(name=="")return 1;
		var extension=["jpg", "png","JPG", "PNG","GIF", "gif"];
			var len=name.length;
			var i=len-1;
			for(i=len-1;i>=0;i--){
				if(name[i]=='.')break;
			}
			var extension=name.substr(i+1);  
			var array=["jpg", "png","JPG", "PNG","GIF", "gif"];
			return array.indexOf(extension);
	  }
	  
	$('#firstNext').click(function(){
			var message="";
			var picmessage="";
			var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
			if($('#fname').val()=='')message+="first name/";
			if($('#lname').val()=='')message+="last name/";
			if($('#email').val()=='')message+="email/";
			if($('#state').val()=='')message+="state/";
			if($('#city').val()=='')message+="city/";
			if($('#zip').val()=='')message+="zip code/";
			if($('#gender').val()=='')message+="gender/";
			if($('#dob').val()=='')message+="birthday/";
			if(message!=""){
			message=message.substring(0,message.length-1);
			message+=" are required. Please fill out.";
			alert(message);
			}
			else if(getextension($('#personal_photo').val())==-1){
				picmessage="The extension name of file is wrong!";
				alert(picmessage);
			} 
            else if(re.test($('#email').val())==false)alert("Please enter a valid email");
			else{
			$('.firstPage').hide();
			$('.secondPage').show();
			}
	});
	$('#secondPrevious').click(function(){
		   $('.secondPage').hide();
		   $('.firstPage').show();
		   one=0;
		   document.getElementById('audiolink1').value="";
		   document.getElementById('videolink1').value='';
		   document.getElementById('tphoto1').value='';
	}
	);
	
	$('#secondNext').click(function(){
		var num=0;
	    if($('#tphoto1').val()!='')num++;
		if($('#audiolink1').val()!='')num++;
		if($('#videolink1').val()!='')num++;
		var message="";
		var picmessage="";
	    if($('#category1').val()=='')message+="category/";
	    if($('#specific_talent1').val()=='')message+="specific_talent/";
		if(message!=""){
		    message=message.substring(0,message.length-1);
			message+=" are required. Please fill out.";
			alert(message);
		}
		else if(getextension($('#tphoto1').val())==-1){
				picmessage="The extension name of file is wrong!";
				alert(picmessage);
			}
		else if(num==0)alert("Please upload at least one file!");
		else{
			$('.secondPage').hide();
		    $('.thirdPage').show();
		}
	});
	$('#thirdPrevious').click(function(){
		$('.thirdPage').hide();
		$('.secondPage').show();
		document.getElementById('tphoto1').value='';
		document.getElementById('tphoto2').value='';
		document.getElementById('tphoto3').value='';
		document.getElementById('audiolink1').value='';
		document.getElementById('audiolink2').value='';
		document.getElementById('audiolink3').value='';
		document.getElementById('videolink1').value='';
		document.getElementById('videolink2').value='';
		document.getElementById('videolink3').value='';
	});
	$('#thirdNext').click(function(){
		var message="";
		if((document.getElementById('rep_other').checked&&document.getElementById('rep').value=="")||(document.getElementById('oppo_other').checked&&document.getElementById('oppo').value=="")||(document.getElementById('ser_other').checked&&document.getElementById('ser').value==""))message+="please fill the chosen other blank.\n"
	    if($("[name='representation[]']:checked").length==0)message+="representation/";
	    if($("[name='opportunity[]']:checked").length==0)message+="opportunity/";
		if($("[name='service[]']:checked").length==0)message+="service/";
		
		if(message!=""){
		    message=message.substring(0,message.length-1);
			message+=" are required. Please fill out.";
			alert(message);
		}
		else{
		$('.thirdPage').hide();
		$('.fourPage').show();
		}
	});
	$('#lastPrevious').click(function(){
		$('.fourPage').hide();
		$('.thirdPage').show();
	});
	
	$('#add_one').click(function(){
		var message="";
		var picmessage="";
	    if($('#category1').val()=='')message+="category/";
	    if($('#specific_talent1').val()=='')message+="specific talent/";
		if(message!=""){
		    message=message.substring(0,message.length-1);
			message+=" are required. Please fill out.";
			alert(message);
		}
		else if(getextension($('#tphoto1').val())==-1){
				picmessage="The extension name of file is wrong!";
				alert(picmessage);
			} 
		else{
		var num=0;
		if($('#tphoto1').val()!=''){
			document.getElementById('file1').innerHTML+="<img src='/pic/photo.png' width='40' height='40'><sub>"+
			document.getElementById('specific_talent1').value+"</sub>   ";
			num++;
		}
		if($('#audiolink1').val()!=''){
			document.getElementById('file1').innerHTML+="<img src='/pic/audio.png' width='40' height='40'><sub>"+
			document.getElementById('specific_talent1').value+"</sub>   ";
			num++;
		}
		if($('#videolink1').val()!=''){
			document.getElementById('file1').innerHTML+="<img src='/pic/video.jpg' width='40' height='40'><sub>"+
			document.getElementById('specific_talent1').value+"</sub>   ";
			num++;
		}
		if(num==0)alert("Pleast upload at least one file!");
		if(num>0&&message==""&&picmessage==""){
			$('.secondPage').hide();
		    $('.add_one').show();
		}
		}
	});
	
	$('#addonePrevious').click(function(){
		$('.add_one').hide();
		$('.secondPage').show();
		document.getElementById('file1').innerHTML='';
		document.getElementById('audiolink2').value='';
		document.getElementById('videolink2').value='';
		document.getElementById('tphoto2').value='';
	});
	
	$('#addoneNext').click(function(){
		var num=0;
		var message="";
		var picmessage="";
	    if($('#category2').val()=='')message+="category/";
	    if($('#specific_talent2').val()=='')message+="specific talent/";
		if(message!=""){
		    message=message.substring(0,message.length-1);
			message+=" are required. Please fill out.";
			alert(message);
		}
		else if(getextension($('#tphoto2').val())==-1){
				picmessage="The extension name of file is wrong!";
				alert(picmessage);
			}
		else{
		if($('#tphoto2').val()!='')num++;
		if($('#audiolink2').val()!='')num++;
		if($('#videolink2').val()!='')num++;
		if(num==0)alert("Please upload at least one file!");
		if(num>0&&message==""&&picmessage==""){
			$('.add_one').hide();
		    $('.thirdPage').show();
		}
		}
	})
	
	$('#add_two').click(function(){
		var message="";
		var picmessage="";
	    if($('#category2').val()=='')message+="category/";
	    if($('#specific_talent2').val()=='')message+="specific talent/";
		if(message!=""){
		    message=message.substring(0,message.length-1);
			message+=" are required. Please fill out.";
			alert(message);
		}
		else if(getextension($('#tphoto2').val())==-1){
				picmessage="The extension name of file is wrong!";
				alert(picmessage);
			}
		else{
		var num=0;
		document.getElementById('file2').innerHTML=document.getElementById('file1').innerHTML;
		if($('#tphoto2').val()!=''){
			document.getElementById('file2').innerHTML+="<img src='/pic/photo.png' width='40' height='40'><sub>"+
			document.getElementById('specific_talent2').value+"</sub>   ";
			num++;
		}
		if($('#audiolink2').val()!=''){
			document.getElementById('file2').innerHTML+="<img src='/pic/audio.png' width='40' height='40'><sub>"+
			document.getElementById('specific_talent2').value+"</sub>   ";
			num++;
		}
		if($('#videolink2').val()!=''){
			document.getElementById('file2').innerHTML+="<img src='/pic/video.jpg' width='40' height='40'><sub>"+
			document.getElementById('specific_talent2').value+"</sub>   ";
			num++;
		}
		if(num==0)alert("Please upload at least one file!");
		if(num>0&&message==""&&picmessage==""){
			$('.add_one').hide();
		    $('.add_two').show();
		}
		}
	});
	
	$('#addtwoPrevious').click(function(){
		$('.add_two').hide();
		$('.add_one').show();
		document.getElementById('file2').innerHTML='';
		document.getElementById('audiolink3').value='';
		document.getElementById('videolink3').value='';
		document.getElementById('tphoto3').value='';
	});
	
	$('#addtwoNext').click(function(){
		var num=0;
		var message="";
		var picmessage="";
	    if($('#category3').val()=='')message+="category/";
	    if($('#specific_talent3').val()=='')message+="specific talent/";
		if(message!=""){
		    message=message.substring(0,message.length-1);
			message+=" are required. Please fill out.";
			alert(message);
		}
		else if(getextension($('#tphoto3').val())==-1){
				picmessage="The extension name of file is wrong!";
				alert(picmessage);
			}
		else{
		if($('#tphoto3').val()!='')num++;
		if($('#audiolink3').val()!='')num++;
		if($('#videolink3').val()!='')num++;
		if(num==0)alert("Please upload at least one file!");
		if(num>0&&message==""&&picmessage==""){
			$('.add_two').hide();
		    $('.thirdPage').show();
		}
		}
	});
	






	var oppo=0;
	var rep=0;
	var ser=0;
	function addopp(){
	var val=document.getElementById('other');
	var ele=document.getElementById('oppo');
	oppo++;
	if(oppo%2==1) ele.disabled=false;
	else{
		ele.disabled=true;
		}
}

function addrep(){
	var val=document.getElementById('other');
	var ele=document.getElementById('rep');
	rep++;
	if(rep%2==1) ele.disabled=false;
	else{
		ele.disabled=true;
		}
}

function addser(){
	var val=document.getElementById('other');
	var ele=document.getElementById('ser');
	ser++;
	if(ser%2==1) ele.disabled=false;
	else{
		ele.disabled=true;
		}
}
/*function loadXML(url) 
	{		
		if (window.XMLHttpRequest)
		{
			xmlhttp=new XMLHttpRequest(); 
		}
		else 
		{
			xmlhttp=new ActiveXObject("Microsoft.XMLHTTP"); 
		}
		xmlhttp.open("GET",url,false);
		xmlhttp.send();
		xmlDoc=xmlhttp.responseXML;
		if(xmlDoc==null)
		{
			alert("cannot find this XML file");
			exit(0);
		}
		return xmlDoc;
}

function viewXML(URL)
{
	if(URL=="")
	{
		alert("Please choose valid state!"); 
		exit(0);
	};
	xmlDoc = loadXML(URL);
	generateHTML(xmlDoc);
}
function generateHTML(xmlDoc)
{
	root=xmlDoc.DocumentElement;
	cities=xmlDoc.getElementsByTagName("CityList");
	cityList=cities.item(0).childNodes;
	var i = 0;
	for(i = 0; i < cityList.length; i++)
	{
	document.getElementById('cityList').innerHTML+="<option value='"+cityList.item(i).firstChild.nodeValue+"'>"+cityList.item(i).firstChild.nodeValue+"</option>";
	}	
}*/
</script>

<script src="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/js/select2.min.js">
</script>
<script type="text/javascript">
  $('select').select2();
  $('#state').select2({
  });
  /*
 if($('#state').val()!=""){
	  var URL = "http://talentscool.local/cities/" + $('#state').val();
	  viewXML(URL);
 }
 $('#state').change(function(){
	  var URL = "http://talentscool.local/cities/" + $('#state').val();
	  document.getElementById('cityList').innerHTML="";
	  viewXML(URL);
  });*/
</script>

</html>