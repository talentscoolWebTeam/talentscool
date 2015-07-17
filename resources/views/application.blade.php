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
	   font-size:17px;
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


<table>
<<<<<<< HEAD
<tr><td class="col-xs-12" style="font-size:36px;">APPLICATION</td><td style="float:right;position:relative;margin-right:20%;margin-top:2%;"><img src="/pic/TSVector.png" style="width:200px;"></td></tr>
=======
<tr><td class="col-xs-12" style="font-size:36px;">APPLICATION</td><td style="float:right;position:relative;margin-right:20%;margin-top:2%;"><img src="/images/TSVector.png" style="width:200px;"></td></tr>
>>>>>>> 58f0f6caf1a4fc027ed3555721565f4cbbf46597
</table>
{!! Form::open(['action'=>'ApplicationController@store','enctype' => 'multipart/form-data']) !!}
<div class="firstPage">
<p class="col-xs-12">Personal information</p>
<p class="col-xs-12"><b style="color:red;">*</b><b> required</b></p>
<br><br>
<div class="col-xs-12">
	<div class="col-xs-2">
	FIRST NAME<sup>*</sup>
    </div>
    <div class="col-xs-3">
	<input type="text" name="fname"  id="fname" class="page1 form-control"/>
	</div>
</div>

<div class="col-xs-12">&nbsp;</div>

<div class="col-xs-12">
	<div class = "col-xs-2">
		LAST NAME<sup>*</sup>
    </div>
    <div class="col-xs-3">
    	<input type="text" name="lname"  id="lname" class="page1 form-control">
    </div>
</div>

<div class="col-xs-12">&nbsp;</div>

<div class="col-xs-12">
     <div class="col-xs-2">
            NICKNAME&nbsp(optional)
      </div>
      <div class="col-xs-3">
            <input type="text" name="nname"  id="nname" class="page1 form-control">
     </div>
</div>

<div class="col-xs-12">&nbsp;</div>

<div class="col-xs-12">
           <div class="col-xs-2">
<<<<<<< HEAD
            UPLOAD PERSONAL PHOTO&nbsp(optional)&nbsp(max size is <b style="color:red;">5MB. jpg, gif, png ONLY</b>)
=======
            UPLOAD PERSONAL PHOTO&nbsp(optional)&nbsp(max size is 5MB. jpg, gif, png ONLY)
>>>>>>> 58f0f6caf1a4fc027ed3555721565f4cbbf46597
           </div>
           <div class="col-xs-3">
           <input type="file" name="personal_photo" id="personal_photo" accept="image/*"></input>
           </div>
</div>

<div class="col-xs-12">&nbsp;</div>

<div class="col-xs-12">
     <div class="col-xs-2">
     EMAIL<sup>*</sup>
     </div>
     <div class="col-xs-3">
     <input type="text" name="email"  id="email" class="page1 form-control">
     </div>
</div>

<div class="col-xs-12">&nbsp;</div>

<div class="col-xs-12">
     <div class="col-xs-2">
     STATE<sup>*</sup>
     </div>
     <div class="col-xs-3">
     {!! Form::select('state', $states,null,  ['class' => 'form-control', 'id'=>'state']) !!}
     </div>
</div>

<div class="col-xs-12">&nbsp;</div>

<div class="col-xs-12">
      <div class="col-xs-2">
      CITY<sup>*</sup>
      </div>
      <div class="col-xs-3">
      <input type="text" class="page1 form-control" name="city" id="city">
      </div>
</div>


<div class="col-xs-12">&nbsp;</div>
<div class="col-xs-12">
      <div class="col-xs-2">
      ZIP CODE<sup>*</sup>
      </div>
      <div class="col-xs-3">
      <input type="text" name="zipcode"  id="zip" class="page1 form-control">
      </div>
</div>

<div class="col-xs-12">&nbsp;</div>
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

<div class="col-xs-12">&nbsp;</div>

<div class="col-xs-12">
      <div class="col-xs-2">
      PHONE&nbspNO.&nbsp(optional)
      </div>
      <div class="col-xs-3">
      <input type="text" name="phoneNum"  class="page1 form-control">
      </div>
</div>

<div class="col-xs-12">&nbsp;</div>

<div class="col-xs-12">
      <div class="col-xs-2">
      DATE OF BIRTH<sup>*</sup>
      </div>
      <div class="col-xs-3">
      <input type="date" name="dob" id="dob" class="page1 form-control">
      </div>
</div>

<div class="col-xs-12">&nbsp;</div>
<input type="text" name="status" value="2" style="display:none;">
<div class="col-xs-12">
     <div class="col-xs-2">
     <input type="button" value="NEXT" id="firstNext" style="font-family:'Roboto', Helvetica, Arial, sans-serif" class="btn btn-danger"></input>
     </div>
     </div>
</div>





<div class="secondPage">
<p class="col-xs-12">Talent</p>
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
<div class="col-xs-12">&nbsp;</div>
<div class="col-xs-12">
<div class="col-xs-3">
SPECIFIC TALENT<sup>*</sup>
</div>
<div class="col-xs-3">
<input type="text" name="specific_talent1" id="specific_talent1" class="form-control"></input>
</div>
</div>

<div class="col-xs-12">&nbsp;</div>

<div class="col-xs-12">
<div class="col-xs-12">
(<b>Ex:</b>&nbsp<b>Dance:</b> salsa dance, ballet, hip hop&nbsp<b>Fashion:</b> model, photographer, make-up artist&nbsp<b>Film: </b>actor, director, producer&nbsp<b>Fine arts:</b> painter, graphic designer&nbsp<b>Music:&nbsp</b>composer, pianist&nbsp<b>Sports:&nbsp</b>basketball, baseball, football)
</div>
</div>


<div class="col-xs-12">&nbsp;</div>



<div class="col-xs-12">
<div class="col-xs-3">
<<<<<<< HEAD
UPLOAD PORTFOLIO<br>(At least one/at most three photos or links of the below)
=======
UPLOAD PORTFOLIO<br>(Choose at least one of the below)
>>>>>>> 58f0f6caf1a4fc027ed3555721565f4cbbf46597
</div>
</div>

<div class="col-xs-12">&nbsp;</div>


<<<<<<< HEAD
<div class="col-xs-12" id="file1">
<div id="img1">
</div>
<div id="audio1">
</div>
<div id="video1">
=======
<div class="col-xs-12">
<div class="col-xs-3">
PHOTO&nbsp(max size is 5MB. jpg, png, gif ONLY)
</div>
<div class="col-xs-3">
<input type="file" name="tphoto1" id="tphoto1" accept="image/*">
>>>>>>> 58f0f6caf1a4fc027ed3555721565f4cbbf46597
</div>
</div>

<div class="col-xs-12">&nbsp;</div>

<div class="col-xs-12">
<div class="col-xs-3">
<<<<<<< HEAD
PHOTO&nbsp(max size is <b style="color:red;">5MB. jpg, gif, png ONLY</b>)
</div>
<div class="col-xs-3">
<input type="file" name="tphoto1_1" id="tphoto1_1" accept="image/*">
</div>
<div class="col-xs-3">
<input type="file" name="tphoto1_2" id="tphoto1_2" accept="image/*">
</div>
<div class="col-xs-3">
<input type="file" name="tphoto1_3" id="tphoto1_3" accept="image/*">
=======
AUDIO&nbsp(link)
</div>
<div class="col-xs-3"><input type="text" name="audiolink1" id="audiolink1"  class="page2 form-control">
>>>>>>> 58f0f6caf1a4fc027ed3555721565f4cbbf46597
</div>
</div>

<div class="col-xs-12">&nbsp;</div>

<div class="col-xs-12">
<div class="col-xs-3">
<<<<<<< HEAD
AUDIO&nbsp(Please separate links by <b style="color:red;">;</b>)
</div>
<div class="col-xs-3"><input type="text" name="audiolink1" id="audiolink1"  class="page2 form-control">
=======
VIDEO&nbsp(link)
</div>
<div class="col-xs-3"><input type="text" name="videolink1" id="videolink1"  class="page2 form-control">
>>>>>>> 58f0f6caf1a4fc027ed3555721565f4cbbf46597
</div>
<div class="col-xs-3"><input type="button" name="preview_audio_1" id="preview_audio_1" class="btn btn-danger" style="font-family:'Roboto', Helvetica, Arial, sans-serif" value="preview">
</div>
</div>

<div class="col-xs-12">&nbsp;</div>

<<<<<<< HEAD
<div class="col-xs-12">
<div class="col-xs-3">
VIDEO&nbsp(Please separate links by <b style="color:red;">;</b>)
</div>
<div class="col-xs-3"><input type="text" name="videolink1" id="videolink1"  class="page2 form-control">
</div>
<div class="col-xs-3"><input type="button" name="preview_video_1" id="preview_video_1" class="btn btn-danger" style="font-family:'Roboto', Helvetica, Arial, sans-serif" value="preview">
</div>
</div>

=======
>>>>>>> 58f0f6caf1a4fc027ed3555721565f4cbbf46597
<div class="col-xs-12">&nbsp;</div>
<div class="col-xs-12">
<div class="col-xs-2">
<input type="button" id="add_one" value="Add another" class="btn btn-danger" style="font-family:'Roboto', Helvetica, Arial, sans-serif"></input>
</div>
</div>

<div class="col-xs-12">&nbsp;</div>

<div class="col-xs-12">
<div class="col-xs-2">
<input type="button" id="secondPrevious" value="PREVIOUS"  class="btn btn-danger" style="font-family:'Roboto', Helvetica, Arial, sans-serif"></input>
</div>
<div class="col-xs-3">
<input type="button" value="NEXT" id="secondNext" class="btn btn-danger" style="font-family:'Roboto', Helvetica, Arial, sans-serif"></input>
</div>
</div>
</div>

<div class="add_one">
<p class="col-xs-12">Talent</p>
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

<div class="col-xs-12">&nbsp;</div>

<div class="col-xs-12">
<div class="col-xs-3">
SPECIFIC TALENT<sup>*</sup>
</div>
<div class="col-xs-3">
<input type="text" name="specific_talent2" id="specific_talent2" class="form-control" style="width:200px;"></input><br>
</div>
</div>

<div class="col-xs-12">&nbsp;</div>

<div class="col-xs-12">
<div class="col-xs-12">
(<b>Ex:</b>&nbsp<b>Dance:</b> salsa dance, ballet, hip hop&nbsp<b>Fashion:</b> model, photographer, make-up artist&nbsp<b>Film: </b>actor, director, producer&nbsp<b>Fine arts:</b> painter, graphic designer&nbsp<b>Music:&nbsp</b>composer, pianist&nbsp<b>Sports:&nbsp</b>basketball, baseball, football)
</div>
</div>

<div class="col-xs-12">&nbsp;</div>


<div class="col-xs-12">
<div class="col-xs-3">
<<<<<<< HEAD
UPLOAD PORTFOLIO<br>(At least one/at most three photos or links of the below)
=======
UPLOAD PORTFOLIO<br>(Choose at least one of the below)
>>>>>>> 58f0f6caf1a4fc027ed3555721565f4cbbf46597
</div>
</div>

<div class="col-xs-12">&nbsp;</div>
<<<<<<< HEAD
=======

>>>>>>> 58f0f6caf1a4fc027ed3555721565f4cbbf46597


<div class="col-xs-12" id="file2">
<div id="img2">
</div>
<div id="audio2">
</div>
<div id="video2">
</div>
</div>

<div class="col-xs-12">&nbsp;</div>

<div class="col-xs-12">
<div class="col-xs-3">
<<<<<<< HEAD
PHOTO&nbsp(max size is <b style="color:red;">5MB. jpg, gif, png ONLY</b>)
</div>
<div class="col-xs-3">
<input type="file" name="tphoto2_1" id="tphoto2_1" accept="image/*">
</div>
<div class="col-xs-3">
<input type="file" name="tphoto2_2" id="tphoto2_2" accept="image/*">
</div>
<div class="col-xs-3">
<input type="file" name="tphoto2_3" id="tphoto2_3" accept="image/*">
=======
PHOTO&nbsp(max size is 5MB. jpg, png, gif ONLY)
</div>
<div class="col-xs-3">
<input type="file" name="tphoto2" id="tphoto2" accept="image/*">
>>>>>>> 58f0f6caf1a4fc027ed3555721565f4cbbf46597
</div>
</div>

<div class="col-xs-12">&nbsp;</div>

<div class="col-xs-12">
<div class="col-xs-3">
<<<<<<< HEAD
AUDIO&nbsp(Please separate links by <b style="color:red;">;</b>)
</div>
<div class="col-xs-3"><input type="text" name="audiolink2" id="audiolink2"  class="page2 form-control" style="width:300px;">
</div>
<div class="col-xs-3"><input type="button" name="preview_audio_2" id="preview_audio_2" class="btn btn-danger" style="font-family:'Roboto', Helvetica, Arial, sans-serif" value="preview">
=======
AUDIO&nbsp(link)
</div>
<div class="col-xs-3"><input type="text" name="audiolink2" id="audiolink2"  class="page2 form-control" style="width:300px;">
>>>>>>> 58f0f6caf1a4fc027ed3555721565f4cbbf46597
</div>
 </div>
 
<div class="col-xs-12">&nbsp;</div>
 
 <div class="col-xs-12">
 <div class="col-xs-3">
<<<<<<< HEAD
VIDEO&nbsp(Please separate links by <b style="color:red;">;</b>)
</div>
<div class="col-xs-3"><input type="text" name="videolink2" id="videolink2"  class="page2 form-control" style="width:300px;">
</div>
<div class="col-xs-3"><input type="button" name="preview_video_2" id="preview_video_2" class="btn btn-danger" style="font-family:'Roboto', Helvetica, Arial, sans-serif" value="preview">
=======
VIDEO&nbsp(link)
</div>
<div class="col-xs-3"><input type="text" name="videolink2" id="videolink2"  class="page2 form-control" style="width:300px;">
>>>>>>> 58f0f6caf1a4fc027ed3555721565f4cbbf46597
</div>
</div>

<div class="col-xs-12">&nbsp;</div>

<div class="col-xs-12">
<div class="col-xs-2">
<input type="button" id="add_two" value="Add another" class="btn btn-danger" style="font-family:'Roboto', Helvetica, Arial, sans-serif"></input>
</div>
</div>

<div class="col-xs-12">&nbsp;</div>

<div class="col-xs-12">
<div class="col-xs-2">
<input type="button" id="addonePrevious" value="PREVIOUS" class="btn btn-danger" style="font-family:'Roboto', Helvetica, Arial, sans-serif"></input>
</div>
<div class="col-xs-3">
<input type="button" value="NEXT" id="addoneNext" class="btn btn-danger" style="font-family:'Roboto', Helvetica, Arial, sans-serif"></input>
</div>
</div>
</div>

<div class="add_two">
<p class="col-xs-12">Talent</p>
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

<div class="col-xs-12">&nbsp;</div>

<div class="col-xs-12">
<div class="col-xs-3">
SPECIFIC TALENT<sup>*</sup>
</div>
<div class="col-xs-3">
<input type="text" name="specific_talent3" id="specific_talent3" class="form-control" style="width:200px;"></input>
</div>
</div>

<div class="col-xs-12">&nbsp;</div>
<div class="col-xs-12">
<div class="col-xs-12">
(<b>Ex:</b>&nbsp<b>Dance:</b> salsa dance, ballet, hip hop&nbsp<b>Fashion:</b> model, photographer, make-up artist&nbsp<b>Film: </b>actor, director, producer&nbsp<b>Fine arts:</b> painter, graphic designer&nbsp<b>Music:&nbsp</b>composer, pianist&nbsp<b>Sports:&nbsp</b>basketball, baseball, football)
</div>
</div>

<div class="col-xs-12">&nbsp;</div>


<div class="col-xs-12">
<div class="col-xs-3">
<<<<<<< HEAD
UPLOAD PORTFOLIO<br>(At least one/at most three photos or links of the below)
=======
UPLOAD PORTFOLIO<br>(Choose at least one of the below)
>>>>>>> 58f0f6caf1a4fc027ed3555721565f4cbbf46597
</div>
</div>

<div class="col-xs-12">&nbsp;</div>
<<<<<<< HEAD
=======

>>>>>>> 58f0f6caf1a4fc027ed3555721565f4cbbf46597


<div class="col-xs-12" id="file3">
<div id="img3">
</div>
<div id="audio3">
</div>
<div id="video3">
</div>
</div>

<div class="col-xs-12">&nbsp;</div>
<div class="col-xs-12">
<div class="col-xs-3">
<<<<<<< HEAD
PHOTO&nbsp(max size is <b style="color:red;">5MB. jpg, gif, png ONLY</b>)
</div>
<div class="col-xs-3">
<input type="file" name="tphoto3_1" id="tphoto3_1" accept="image/*">
</div>
<div class="col-xs-3">
<input type="file" name="tphoto3_2" id="tphoto3_2" accept="image/*">
</div>
<div class="col-xs-3">
<input type="file" name="tphoto3_3" id="tphoto3_3" accept="image/*">
</div>
=======
PHOTO&nbsp(max size is 5MB. jpg, png, gif ONLY)
</div>
<div class="col-xs-3">
 <input type="file" name="tphoto3" id="tphoto3" accept="image/*">
 </div>
>>>>>>> 58f0f6caf1a4fc027ed3555721565f4cbbf46597
 </div>
 
<div class="col-xs-12">&nbsp;</div>
 
 <div class="col-xs-12">
 <div class="col-xs-3">
<<<<<<< HEAD
AUDIO&nbsp(Please separate links by <b style="color:red;">;</b>)
</div>
<div class="col-xs-3"><input type="text" name="audiolink3" id="audiolink3"  class="page2 form-control" style="width:300px;">
</div>
<div class="col-xs-3"><input type="button" name="preview_audio_3" id="preview_audio_3" class="btn btn-danger" style="font-family:'Roboto', Helvetica, Arial, sans-serif" value="preview">
=======
AUDIO&nbsp(link)
</div>
<div class="col-xs-3"><input type="text" name="audiolink3" id="audiolink3"  class="page2 form-control" style="width:300px;">
>>>>>>> 58f0f6caf1a4fc027ed3555721565f4cbbf46597
</div>
</div>

<div class="col-xs-12">&nbsp;</div>

<div class="col-xs-12">
<div class="col-xs-3">
<<<<<<< HEAD
VIDEO&nbsp(Please separate links by <b style="color:red;">;</b>)
</div>
<div class="col-xs-3"><input type="text" name="videolink3" id="videolink3"  class="page2 form-control" style="width:300px;">
</div>
<div class="col-xs-3"><input type="button" name="preview_video_3" id="preview_video_3" class="btn btn-danger" style="font-family:'Roboto', Helvetica, Arial, sans-serif" value="preview">
=======
VIDEO&nbsp(link)
</div>
<div class="col-xs-3"><input type="text" name="videolink3" id="videolink3"  class="page2 form-control" style="width:300px;">
>>>>>>> 58f0f6caf1a4fc027ed3555721565f4cbbf46597
</div>
</div>

<div class="col-xs-12">&nbsp;</div>
<div class="col-xs-12">
<div class="col-xs-2">
<input type="button" id="addtwoPrevious" value="PREVIOUS" class="btn btn-danger" style="font-family:'Roboto', Helvetica, Arial, sans-serif"></input>
</div>
<div class="col-xs-3">
<input type="button" value="NEXT" id="addtwoNext" class="btn btn-danger" style="font-family:'Roboto', Helvetica, Arial, sans-serif"></input>
</div>
</div>
</div>





<div class="thirdPage">
<p class="col-xs-12">Services desired</p>
<p class="col-xs-12">Please check all boxes that apply</p>
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
REPRESENTATIONS<sup>*</sup><br>
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
<input type='button' value="PREVIOUS" id="thirdPrevious" class="btn btn-danger" style="font-family:'Roboto', Helvetica, Arial, sans-serif"></input>
</div>
<div class="col-xs-3">
<input type="button" id="thirdNext" value="NEXT" class="btn btn-danger" style="font-family:'Roboto', Helvetica, Arial, sans-serif"></input>
</div>
</div>
</div>





<div class="fourPage">
<p class="col-xs-12">Optional&nbsp(Strongly recommended)</p>
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
 
<div class="col-xs-12">&nbsp;</div> 
<div class="col-xs-12">
<div class="col-xs-2">
<<<<<<< HEAD
Intro video&nbsp(One link ONLY)
=======
Intro video&nbsp(link)
>>>>>>> 58f0f6caf1a4fc027ed3555721565f4cbbf46597
</div>
<div class="col-xs-3">
<input type="text" style="width:300px"  name="introVideo" id="introVideo" class="page4 form-control">
</div>
</div>

<div class="col-xs-12">&nbsp;</div>


 <div class="col-xs-12">
 <div class="col-xs-2">
Current representation
</div> 
<div class="col-xs-3">
<input type="text"  style="width:300px"  name="current_representation" class="page4 form-control">
</div>
</div>

<div class="col-xs-12">&nbsp;</div>

<div class="col-xs-12">
<div class="col-xs-2">
Accolades 
</div>
<div class="col-xs-3">
<input type="text"  style="width:300px"  name="accolades" class="page4 form-control">
</div>
</div>

<div class="col-xs-12">&nbsp;</div>

<div class="col-xs-12">
<div class="col-xs-2">
Achievements 
</div>
<div class="col-xs-3">
<input type="text"  style="width:300px"  name="achievements" class="page4 form-control">
</div>
</div>

<div class="col-xs-12">&nbsp;</div>

<div class="col-xs-12">
<div class="col-xs-2">
Experience 
</div>
<div class="col-xs-3">
<input type="text"  style="width:300px"  name="experiences" class="page4 form-control">
</div>
</div>

<div class="col-xs-12">&nbsp;</div>

<div class="col-xs-12">
<div class="col-xs-2">
Related talent 
</div>
<div class="col-xs-3">
<input type="text"  style="width:300px"  name="relative_talent" class="page4 form-control">
</div>
</div>

<div class="col-xs-12">&nbsp;</div>
<div class="col-xs-12">
<div class="col-xs-2">
Anything else 
</div>
<div class="col-xs-3">
<input type="text"  style="width:300px"  name="anything" class="page4 form-control">
</div>
</div>

<div class="col-xs-12">&nbsp;</div>

<div class="col-xs-12">
<div class="col-xs-2">
<input type="button" value="PREVIOUS" id="lastPrevious" class="btn btn-danger" style="font-family:'Roboto', Helvetica, Arial, sans-serif"></input>
</div>
<div class="col-xs-3">
<input type="submit" value="SUBMIT" id="submit" formmethod="post" class="btn btn-danger" style="font-family:'Roboto', Helvetica, Arial, sans-serif"></input>
</div>
</div>
</div>
{!! Form::close() !!}

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
		   document.getElementById('file1').innerHTML="<div id='img1'></div><div id='audio1'></div><div id='video1'></div>";
		   document.getElementById('audiolink1').value="";
		   document.getElementById('videolink1').value='';
		   document.getElementById('tphoto1_1').value='';
		   document.getElementById('tphoto1_2').value='';
		   document.getElementById('tphoto1_3').value='';
	}
	);
	
	$('#secondNext').click(function(){
		var num=0;
		var pic=0;
		var audio=0;
		var video=0;
	    if($('#tphoto1_1').val()!='')pic++;
		if($('#tphoto1_2').val()!='')pic++;
		if($('#tphoto1_3').val()!='')pic++;
		if($('#audiolink1').val()!='')audio=$('#audiolink1').val().split(";").length;
		if($('#videolink1').val()!='')video=$('#videolink1').val().split(";").length;
		num=pic+audio+video;
		var message="";
		var picmessage="";
	    if($('#category1').val()=='')message+="category/";
	    if($('#specific_talent1').val()=='')message+="specific_talent/";
		if(message!=""){
		    message=message.substring(0,message.length-1);
			message+=" are required. Please fill out.";
			alert(message);
		}
		else if(getextension($('#tphoto1_1').val())==-1||getextension($('#tphoto1_2').val())==-1||getextension($('#tphoto1_3').val())==-1){
				picmessage="The extension name of file is wrong!";
				alert(picmessage);
			}
		else if(num==0)alert("Please upload at least one file!");
		else if(num>3)alert("Please upload at most three files!");
		else{
			$('.secondPage').hide();
		    $('.thirdPage').show();
		}
	});
	$('#thirdPrevious').click(function(){
		$('.thirdPage').hide();
		$('.secondPage').show();
		document.getElementById('tphoto1_1').value='';
		document.getElementById('tphoto2_1').value='';
		document.getElementById('tphoto3_1').value='';
		document.getElementById('tphoto1_2').value='';
		document.getElementById('tphoto2_2').value='';
		document.getElementById('tphoto3_2').value='';
		document.getElementById('tphoto1_3').value='';
		document.getElementById('tphoto2_3').value='';
		document.getElementById('tphoto3_3').value='';
		document.getElementById('audiolink1').value='';
		document.getElementById('audiolink2').value='';
		document.getElementById('audiolink3').value='';
		document.getElementById('videolink1').value='';
		document.getElementById('videolink2').value='';
		document.getElementById('videolink3').value='';
		document.getElementById('file1').innerHTML="<div id='img1'></div><div id='audio1'></div><div id='video1'></div>";
		document.getElementById('file2').innerHTML="<div id='img2'></div><div id='audio2'></div><div id='video2'></div>";
		document.getElementById('file3').innerHTML="<div id='img3'></div><div id='audio3'></div><div id='video3'></div>";
	});
	$('#thirdNext').click(function(){
		var message="";
	    if($("[name='representation[]']:checked").length==0)message+="representation/";
	    if($("[name='opportunity[]']:checked").length==0)message+="opportunity/";
		if($("[name='service[]']:checked").length==0)message+="service/";
		
		if(message!=""){
		    message=message.substring(0,message.length-1);
			message+=" are required. Please fill out.";
			alert(message);
		}
		else if((document.getElementById('rep_other').checked&&document.getElementById('rep').value=="")||(document.getElementById('oppo_other').checked&&document.getElementById('oppo').value=="")||(document.getElementById('ser_other').checked&&document.getElementById('ser').value=="")){
			message="";
			message+="Please fill the chosen other blank.\n";
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
		else if(getextension($('#tphoto1_1').val())==-1||getextension($('#tphoto1_2').val())==-1||getextension($('#tphoto1_3').val())==-1){
				picmessage="The extension name of file is wrong!";
				alert(picmessage);
			} 
		else{
		var num=0;
<<<<<<< HEAD
		if($('#tphoto1_1').val()!=''){
			num++;
		}
		if($('#tphoto1_2').val()!=''){
			num++;
		}
		if($('#tphoto1_3').val()!=''){
			num++;
		}
		if($('#audiolink1').val()!=''){
			var url=$('#audiolink1').val().split(";");
			for(var i=0;i<url.length;i++){
=======
		document.getElementById('file1').innerHTML=document.getElementById('specific_talent1').value+" :<br>";
		if($('#tphoto1').val()!=''){
			document.getElementById('file1').innerHTML+="<img src='/pic/photo.png' width='40' height='40'><br>";
			num++;
		}
		if($('#audiolink1').val()!=''){
			document.getElementById('file1').innerHTML+="<a href='"+$('#audiolink1').val()+"' target='_blank' style='color:red;'>"+$('#audiolink1').val()+"</a><br>";
>>>>>>> 58f0f6caf1a4fc027ed3555721565f4cbbf46597
			num++;
			}
		}
		if($('#videolink1').val()!=''){
<<<<<<< HEAD
			var url=$('#videolink1').val().split(";");
			for(var i=0;i<url.length;i++){
=======
			document.getElementById('file1').innerHTML+="<a href='"+$('#videolink1').val()+"' target='_blank' style='color:red;'>"+$('#videolink1').val()+"</a><br>";
>>>>>>> 58f0f6caf1a4fc027ed3555721565f4cbbf46597
			num++;
			}
		}
		if(num==0)alert("Pleast upload at least one file!");
		if(num>3)alert("Please upload at most three files!");
		if(num<=3&&num>0&&message==""&&picmessage==""){
			$('.secondPage').hide();
		    $('.add_one').show();
		}
		}
	});
	
	$('#addonePrevious').click(function(){
		$('.add_one').hide();
		$('.secondPage').show();
		document.getElementById('file2').innerHTML="<div id='img2'></div><div id='audio2'></div><div id='video2'></div>";
		document.getElementById('audiolink2').value='';
		document.getElementById('videolink2').value='';
		document.getElementById('tphoto2_1').value='';
		document.getElementById('tphoto2_2').value='';
		document.getElementById('tphoto2_3').value='';
	});
	
	$('#addoneNext').click(function(){
		var num=0;
		var pic=0;
		var audio=0;
		var video=0;
		var message="";
		var picmessage="";
	    if($('#category2').val()=='')message+="category/";
	    if($('#specific_talent2').val()=='')message+="specific talent/";
		if(message!=""){
		    message=message.substring(0,message.length-1);
			message+=" are required. Please fill out.";
			alert(message);
		}
		else if(getextension($('#tphoto2_1').val())==-1||getextension($('#tphoto2_1').val())==-1||getextension($('#tphoto2_1').val())==-1){
				picmessage="The extension name of file is wrong!";
				alert(picmessage);
			}
		else{
		if($('#tphoto2_1').val()!='')pic++;
		if($('#tphoto2_2').val()!='')pic++;
		if($('#tphoto2_3').val()!='')pic++;
		if($('#audiolink2').val()!='')audio=$('#audiolink2').val().split(";").length;
		if($('#videolink2').val()!='')video=$('#videolink2').val().split(";").length;
		num=pic+audio+video;
		if(num==0)alert("Please upload at least one file!");
		if(num>3)alert("PLease upload at most three files!");
		if(num<=3&&num>0&&message==""&&picmessage==""){
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
		else if(getextension($('#tphoto2_1').val())==-1||getextension($('#tphoto2_2').val())==-1||getextension($('#tphoto2_3').val())==-1){
				picmessage="The extension name of file is wrong!";
				alert(picmessage);
			}
		else{
		var num=0;
<<<<<<< HEAD
		if($('#tphoto2_1').val()!=''){
			num++;
		}
		if($('#tphoto2_2').val()!=''){
			num++;
		}
		if($('#tphoto2_3').val()!=''){
			num++;
		}
		if($('#audiolink2').val()!=''){
			var url=$('#audiolink2').val().split(";");
			for(var i=0;i<url.length;i++){
=======
		document.getElementById('file2').innerHTML=document.getElementById('file1').innerHTML;
		document.getElementById('file2').innerHTML+=document.getElementById('specific_talent2').value+" :<br>";
		if($('#tphoto2').val()!=''){
			document.getElementById('file2').innerHTML+="<img src='/pic/photo.png' width='40' height='40'><br>";
			num++;
		}
		if($('#audiolink2').val()!=''){
			document.getElementById('file2').innerHTML+="<a href='"+$('#audiolink2').val()+"' target='_blank' style='color:red;'>"+$('#audiolink2').val()+"</a><br>";
>>>>>>> 58f0f6caf1a4fc027ed3555721565f4cbbf46597
			num++;
			}
		}
		if($('#videolink2').val()!=''){
<<<<<<< HEAD
			var url=$('#videolink2').val().split(";");
			for(var i=0;i<url.length;i++){
=======
			document.getElementById('file2').innerHTML+="<a href='"+$('#audiolink2').val()+"' target='_blank' style='color:red;'>"+$('#audiolink2').val()+"</a><br>";
>>>>>>> 58f0f6caf1a4fc027ed3555721565f4cbbf46597
			num++;
			}
		}
		if(num==0)alert("Please upload at least one file!");
		if(num>3)alert("Please upload at most three files!");
		if(num<=3&&num>0&&message==""&&picmessage==""){
			$('.add_one').hide();
		    $('.add_two').show();
		}
		}
	});
	
	$('#addtwoPrevious').click(function(){
		$('.add_two').hide();
		$('.add_one').show();
		document.getElementById('file3').innerHTML="<div id='img3'></div><div id='audio3'></div><div id='video3'></div>";
		document.getElementById('audiolink3').value='';
		document.getElementById('videolink3').value='';
		document.getElementById('tphoto3_1').value='';
		document.getElementById('tphoto3_2').value='';
		document.getElementById('tphoto3_3').value='';
	});
	
	$('#addtwoNext').click(function(){
		var num=0;
		var pic=0;
		var audio=0;
		var video=0;
		var message="";
		var picmessage="";
	    if($('#category3').val()=='')message+="category/";
	    if($('#specific_talent3').val()=='')message+="specific talent/";
		if(message!=""){
		    message=message.substring(0,message.length-1);
			message+=" are required. Please fill out.";
			alert(message);
		}
		else if(getextension($('#tphoto3_1').val())==-1||getextension($('#tphoto3_2').val())==-1||getextension($('#tphoto3_3').val())==-1){
				picmessage="The extension name of file is wrong!";
				alert(picmessage);
			}
		else{
		if($('#tphoto3_1').val()!='')pic++;
		if($('#tphoto3_2').val()!='')pic++;
		if($('#tphoto3_3').val()!='')pic++;
		if($('#audiolink3').val()!='')audio=$('#audiolink3').val().split(";").length;
		if($('#videolink3').val()!='')video=$('#videolink3').val().split(";").length;
		num=pic+audio+video;
		if(num==0)alert("Please upload at least one file!");
		if(num>3)alert("Please upload at most three files!");
		if(num<=3&&num>0&&message==""&&picmessage==""){
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

</script>

<script src="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/js/select2.min.js">
</script>
<script type="text/javascript">
  $('select').select2();
  $('#state').select2({
  });
<<<<<<< HEAD
  
  function readURL1(input)
  {   
	  if(input.files&&input.files[0]){
		  var reader = new FileReader();
		  reader.onload = function(e)
		  {
			  document.getElementById('img1').innerHTML += "<img src=" + e.target.result + " width='100px' height='100px'>&nbsp;";
		  }
		  reader.readAsDataURL(input.files[0]);
	  }
	  else document.getElementById('img1').innerHTML="";
  }
  $('#tphoto1_1').change(function(){
	  readURL1(this)
  });
   $('#tphoto1_2').change(function(){
	  readURL1(this)
  });
   $('#tphoto1_3').change(function(){
	  readURL1(this)
  });
  $('#preview_audio_1').click(function(){
	 var url=$('#audiolink1').val().split(";");
	 document.getElementById('audio1').innerHTML="";
	for(var i=0;i<url.length;i++){
				if(url[i].indexOf("http")>=0){
				document.getElementById('audio1').innerHTML+="<a href='"+url[i]+"' target='_blank' style='color:red;'>"+url[i]+"</a><br>";
			}
			else{
				document.getElementById('audio1').innerHTML+="<a href='"+"http://"+url[i]+"' target='_blank' style='color:red;'>"+url[i]+"</a><br>";
			}
			} 
  });
  $('#preview_video_1').click(function(){
	 var url=$('#videolink1').val().split(";");
	 document.getElementById('video1').innerHTML="";
	for(var i=0;i<url.length;i++){
				if(url[i].indexOf("http")>=0){
				document.getElementById('video1').innerHTML+="<a href='"+url[i]+"' target='_blank' style='color:red;'>"+url[i]+"</a><br>";
			}
			else{
				document.getElementById('video1').innerHTML+="<a href='"+"http://"+url[i]+"' target='_blank' style='color:red;'>"+url[i]+"</a><br>";
			}
			} 
  });
  
  function readURL2(input)
  {
	  if(input.files&&input.files[0]){
		  var reader = new FileReader();
		  reader.onload = function(e)
		  {
			  document.getElementById('img2').innerHTML += "<img src=" + e.target.result + " width='100px' height='100px'>&nbsp;";
		  }
		  reader.readAsDataURL(input.files[0]);
	  }
  }
  $('#tphoto2_1').change(function(){
	  readURL2(this)
  });
   $('#tphoto2_2').change(function(){
	  readURL2(this)
  });
   $('#tphoto2_3').change(function(){
	  readURL2(this)
  });
  $('#preview_audio_2').click(function(){
	 var url=$('#audiolink2').val().split(";");
	 document.getElementById('audio2').innerHTML+="<br>";
	for(var i=0;i<url.length;i++){
				if(url[i].indexOf("http")>=0){
				document.getElementById('audio2').innerHTML+="<a href='"+url[i]+"' target='_blank' style='color:red;'>"+url[i]+"</a><br>";
			}
			else{
				document.getElementById('audio2').innerHTML+="<a href='"+"http://"+url[i]+"' target='_blank' style='color:red;'>"+url[i]+"</a><br>";
			}
			} 
  });
  $('#preview_video_2').click(function(){
	 var url=$('#videolink2').val().split(";");
	 document.getElementById('video2').innerHTML+="<br>";
	for(var i=0;i<url.length;i++){
				if(url[i].indexOf("http")>=0){
				document.getElementById('video2').innerHTML+="<a href='"+url[i]+"' target='_blank' style='color:red;'>"+url[i]+"</a><br>";
			}
			else{
				document.getElementById('video2').innerHTML+="<a href='"+"http://"+url[i]+"' target='_blank' style='color:red;'>"+url[i]+"</a><br>";
			}
			} 
  });
   
  function readURL3(input)
  {
	  if(input.files&&input.files[0]){
		  var reader = new FileReader();
		  reader.onload = function(e)
		  {
			  document.getElementById('img3').innerHTML += "<img src=" + e.target.result + " width='100px' height='100px'>&nbsp;";
		  }
		  reader.readAsDataURL(input.files[0]);
	  }
  }
  $('#tphoto3_1').change(function(){
	  readURL3(this)
  });
   $('#tphoto3_2').change(function(){
	  readURL3(this)
  });
   $('#tphoto3_3').change(function(){
	  readURL3(this)
  });
  $('#preview_audio_3').click(function(){
	 var url=$('#audiolink3').val().split(";");
	 document.getElementById('audio3').innerHTML+="<br>";
	for(var i=0;i<url.length;i++){
				if(url[i].indexOf("http")>=0){
				document.getElementById('audio3').innerHTML+="<a href='"+url[i]+"' target='_blank' style='color:red;'>"+url[i]+"</a><br>";
			}
			else{
				document.getElementById('audio3').innerHTML+="<a href='"+"http://"+url[i]+"' target='_blank' style='color:red;'>"+url[i]+"</a><br>";
			}
			} 
  });
  $('#preview_video_3').click(function(){
	 var url=$('#videolink3').val().split(";");
	 document.getElementById('video3').innerHTML+="<br>";
	for(var i=0;i<url.length;i++){
				if(url[i].indexOf("http")>=0){
				document.getElementById('video3').innerHTML+="<a href='"+url[i]+"' target='_blank' style='color:red;'>"+url[i]+"</a><br>";
			}
			else{
				document.getElementById('video3').innerHTML+="<a href='"+"http://"+url[i]+"' target='_blank' style='color:red;'>"+url[i]+"</a><br>";
			}
			} 
  });
=======
>>>>>>> 58f0f6caf1a4fc027ed3555721565f4cbbf46597
</script>

</html>