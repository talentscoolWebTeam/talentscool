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
	   background: url("images/applicationBackground.png") no-repeat center center fixed; 
       -webkit-background-size: cover;
       -moz-background-size: cover;
       -o-background-size: cover;
       background-size: cover;
	   color:white;
	   font-family: 'Raleway', sans-serif;
	   font-size:16px;
	   padding-left:5%;
	}
	
	select{
		color:black;
	}
	option{
		background-color:green;
	}
	input{
		font-family: 'Open Sans', sans-serif;
	}
	sup{
		color:red;
	}
	
	.checkbox-grid li {
    	display: inline-block;
   	 	float: left;
   	 	width: 50%;
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
	.reviewPage{
		display:none;
	}
</style>

<body>


<table>
<tr><td class="col-xs-12" style="font-size:36px; text-align:center">APPLICATION</td><td align="left" style="float:right;position:relative;margin-right:20%;margin-top:2%;"><a href="http://talentscool.com"><img src="/pic/TSVector.png" style="width:200px;"></td></tr>
</table>
{!! Form::open(['action'=>'ApplicationController@store','enctype' => 'multipart/form-data','id'=>'myform']) !!}
<div class="firstPage">
<p class="col-xs-12"><big>Personal information</big></p>
<div class="col-xs-12">
  <div class="col-xs-8">
    <p>Please fill out your personal information below.</p>
  </div>
</div>

<br><br>
<div class="col-xs-12">
	<div class="col-xs-2">
	FIRST NAME<sup>*</sup>
    </div>
    <div class="col-xs-3">
	<input type="text" style="height:25px" name="fname"  id="fname" class="page1 form-control"/>
	</div>
</div>

<div class="col-xs-12">&nbsp;</div>

<div class="col-xs-12">
	<div class = "col-xs-2">
		LAST NAME<sup>*</sup>
    </div>
    <div class="col-xs-3">
    	<input type="text" style="height:25px" name="lname"  id="lname" class="page1 form-control">
    </div>
</div>

<div class="col-xs-12">&nbsp;</div>

<div class="col-xs-12">
     <div class="col-xs-2">
            NICKNAME&nbsp
      </div>
      <div class="col-xs-3">
            <input type="text" style="height:25px" name="nname"  id="nname" class="page1 form-control">
     </div>
</div>

<div class="col-xs-12">&nbsp;</div>

<div class="col-xs-12">
           <div class="col-xs-2">
            PROFILE PHOTO<sup>*</sup>
            <br/>
            <span style="font-size:12px">(5MB max, jpg/gif/png only)</span>
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
     <input type="text" style="height:25px" name="email"  id="email" class="page1 form-control">
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
      <input type="text" style="height:25px" class="page1 form-control" name="city" id="city">
      </div>
</div>


<div class="col-xs-12">&nbsp;</div>
<div class="col-xs-12">
      <div class="col-xs-2">
      ZIP CODE<sup>*</sup>
      </div>
      <div class="col-xs-3">
      <input type="text" style="height:25px" name="zipcode"  id="zip" class="page1 form-control">
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
      PHONE NUMBER
      </div>
      <div class="col-xs-3">
      <input type="text" style="height:25px" name="phoneNum" id="phone" class="page1 form-control">
      </div>
</div>

<div class="col-xs-12">&nbsp;</div>

<div class="col-xs-12">
      <div class="col-xs-2">
      DATE OF BIRTH<sup>*</sup>
      </div>
      <div class="col-xs-3">
      <input type="date"style="height:25px" name="dob" id="dob" class="page1 form-control">
      </div>
</div>

<div class="col-xs-12">&nbsp;</div>
<div class="col-xs-12">
      <div class="col-xs-2">
      SELF-INTRODUCTION<sup>*</sup>
      </div>
      <div class="col-xs-3">
      <input type="text"style="height:25px" name="self" id="self" class="page1 form-control">
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




<!-- Start class secondPage -->
<div class="secondPage">
  <p class="col-xs-12"><big>Talent</big></p>
  <div class="col-xs-12">
    <div class="col-xs-8">
      <p>Let us know more about your talents!</p>
    </div>
  </div>
  <p class="col-xs-12"><b style="color:red;">*</b><b> required</b></p>
  <div class="col-xs-12">
    <div class="col-xs-12">
      Choose a talent category, and then specify the exact skill in that category.
      <br/>
      For example, in if you choose <b>Dance</b>, a specific talent would be Salsa, <b>Fashion</b>: Make-up artist, <b>Film</b>: Producer, <b>Fine Arts</b>: Graphic Designer, <b>Music</b>: Composer, <b>Sports</b>: Baseball
    </div>
  </div>
<div class="col-xs-12">
  <br/>
</div>
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
    <big>Portfolio</big>
    <br/>
    <div class="col-xs-12">
      Upload at least one and at most three photos or links of the following
    </div>
  </div>

  <div class="col-xs-12" id="file1">
  <div id="img1" class="col-xs-12">
  <div class="col-xs-3">
  </div>
  <div id="img1_1" class="col-xs-3">
  </div>
  <div id="img1_2" class="col-xs-3">
  </div>
  <div id="img1_3" class="col-xs-3">
  </div>
  </div>
  <div id="audio1">
  </div>
  <div id="video1">
  </div>
  </div>

  <div class="col-xs-12">&nbsp;</div>

  <div class="col-xs-12">
  <div class="col-xs-3">
  PHOTO <span style="font-size:12px">(5MB max, jpg/gif/png only)</span>
  </div>
  <div class="col-xs-3">
  <input type="file" name="tphoto1_1" id="tphoto1_1" accept="image/*">
  </div>
  <div class="col-xs-3">
  <input type="file" name="tphoto1_2" id="tphoto1_2" accept="image/*">
  </div>
  <div class="col-xs-3">
  <input type="file" name="tphoto1_3" id="tphoto1_3" accept="image/*">
  </div>
  </div>

  <div class="col-xs-12">&nbsp;</div>

  <div class="col-xs-12">
  <div class="col-xs-3">
  AUDIO <span style="font-size:12px;">(Separate links with a <b style="color:red;">;</b>)</span>
  </div>
  <div class="col-xs-3"><input type="text" name="audiolink1" id="audiolink1"  class="page2 form-control">
  </div>
  <div class="col-xs-3"><input type="button" name="preview_audio_1" id="preview_audio_1" class="btn btn-danger" style="font-family:'Roboto', Helvetica, Arial, sans-serif" value="preview">
  </div>
  </div>

  <div class="col-xs-12">&nbsp;</div>

  <div class="col-xs-12">
  <div class="col-xs-3">
  VIDEO <span style="font-size:12px;">(Separate links with a <b style="color:red;">;</b>)</span>
  </div>
  <div class="col-xs-3"><input type="text" name="videolink1" id="videolink1"  class="page2 form-control">
  </div>
  <div class="col-xs-3"><input type="button" name="preview_video_1" id="preview_video_1" class="btn btn-danger" style="font-family:'Roboto', Helvetica, Arial, sans-serif" value="preview">
  </div>
  </div>

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
<!-- End class second_page -->

<div class="add_one">
  <p class="col-xs-12"><big>Talent</big></p>
  <p class="col-xs-12">Let us know more about your talents!</p>
  <p class="col-xs-12"><b style="color:red;">*</b><b> required</b></p>
  <div class="col-xs-12">
    <div class="col-xs-12">
      Choose a talent category, and then specify the exact skill in that category.
      <br/>
      For example, in if you choose <b>Dance</b>, a specific talent would be Salsa, <b>Fashion</b>: Make-up artist, <b>Film</b>: Producer, <b>Fine Arts</b>: Graphic Designer, <b>Music</b>: Composer, <b>Sports</b>: Baseball
    </div>
  </div>
<div class="col-xs-12">
  <br/>
</div>
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

<div class="col-xs-12">
    <big>Portfolio</big>
    <br/>
    <div class="col-xs-12">
      Upload at least one and at most three photos or links of the following
    </div>
  </div>


<div class="col-xs-12" id="file2">
<div id="img2">
<div class="col-xs-3">
</div>
<div id="img2_1" class="col-xs-3">
</div>
<div id="img2_2" class="col-xs-3">
</div>
<div id="img2_3" class="col-xs-3">
</div>
</div>
<div id="audio2">
</div>
<div id="video2">
</div>
</div>

<div class="col-xs-12">&nbsp;</div>

<div class="col-xs-12">
<div class="col-xs-3">
PHOTO <span style="font-size:12px">(5MB max, jpg/gif/png only)</span>
</div>
<div class="col-xs-3">
<input type="file" name="tphoto2_1" id="tphoto2_1" accept="image/*">
</div>
<div class="col-xs-3">
<input type="file" name="tphoto2_2" id="tphoto2_2" accept="image/*">
</div>
<div class="col-xs-3">
<input type="file" name="tphoto2_3" id="tphoto2_3" accept="image/*">
</div>
</div>

<div class="col-xs-12">&nbsp;</div>

<div class="col-xs-12">
<div class="col-xs-3">
AUDIO <span style="font-size:12px;">(Separate links with a <b style="color:red;">;</b>)</span>
</div>
<div class="col-xs-3"><input type="text" name="audiolink2" id="audiolink2"  class="page2 form-control" style="width:300px;">
</div>
<div class="col-xs-3"><input type="button" name="preview_audio_2" id="preview_audio_2" class="btn btn-danger" style="font-family:'Roboto', Helvetica, Arial, sans-serif" value="preview">
</div>
 </div>
 
<div class="col-xs-12">&nbsp;</div>
 
 <div class="col-xs-12">
 <div class="col-xs-3">
VIDEO <span style="font-size:12px;">(Separate links with a <b style="color:red;">;</b>)</span>
</div>
<div class="col-xs-3"><input type="text" name="videolink2" id="videolink2"  class="page2 form-control" style="width:300px;">
</div>
<div class="col-xs-3"><input type="button" name="preview_video_2" id="preview_video_2" class="btn btn-danger" style="font-family:'Roboto', Helvetica, Arial, sans-serif" value="preview">
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
<!-- end class add_one -->

<div class="add_two">
  <p class="col-xs-12"><big>Talent</big></p>
  <p class="col-xs-12">Let us know more about your talents!</p>
  <p class="col-xs-12"><b style="color:red;">*</b><b> required</b></p>
  <div class="col-xs-12">
    <div class="col-xs-12">
      Choose a talent category, and then specify the exact skill in that category.
      <br/>
      For example, in if you choose <b>Dance</b>, a specific talent would be Salsa, <b>Fashion</b>: Make-up artist, <b>Film</b>: Producer, <b>Fine Arts</b>: Graphic Designer, <b>Music</b>: Composer, <b>Sports</b>: Baseball
    </div>
  </div>
<div class="col-xs-12">
  <br/>
</div>
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

<div class="col-xs-12">
    <big>Portfolio</big>
    <br/>
    <div class="col-xs-12">
      Upload at least one and at most three photos or links of the following
    </div>
  </div>


<div class="col-xs-12" id="file3">
<div id="img3">
<div class="col-xs-3">
</div>
<div id="img3_1" class="col-xs-3">
</div>
<div id="img3_2" class="col-xs-3">
</div>
<div id="img3_3" class="col-xs-3">
</div>
</div>
<div id="audio3">
</div>
<div id="video3">
</div>
</div>

<div class="col-xs-12">&nbsp;</div>
<div class="col-xs-12">
<div class="col-xs-3">
PHOTO <span style="font-size:12px">(5MB max, jpg/gif/png only)</span>
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
 </div>
 
<div class="col-xs-12">&nbsp;</div>
 
 <div class="col-xs-12">
 <div class="col-xs-3">
AUDIO <span style="font-size:12px;">(Separate links with a <b style="color:red;">;</b>)</span>
</div>
<div class="col-xs-3"><input type="text" name="audiolink3" id="audiolink3"  class="page2 form-control" style="width:300px;">
</div>
<div class="col-xs-3"><input type="button" name="preview_audio_3" id="preview_audio_3" class="btn btn-danger" style="font-family:'Roboto', Helvetica, Arial, sans-serif" value="preview">
</div>
</div>

<div class="col-xs-12">&nbsp;</div>

<div class="col-xs-12">
<div class="col-xs-3">
VIDEO <span style="font-size:12px;">(Separate links with a <b style="color:red;">;</b>)</span>
</div>
<div class="col-xs-3"><input type="text" name="videolink3" id="videolink3"  class="page2 form-control" style="width:300px;">
</div>
<div class="col-xs-3"><input type="button" name="preview_video_3" id="preview_video_3" class="btn btn-danger" style="font-family:'Roboto', Helvetica, Arial, sans-serif" value="preview">
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
<p class="col-xs-12"><big>Services desired</big></p>
<p class="col-xs-12">Please check all boxes that apply</p>
<br><br>
<div class="col-xs-12">
<div class="col-xs-5">
<big>OPPORTUNITIES</big><sup>*</sup><br>
<ul class="checkbox-grid">
<li><input type="checkbox" name="opportunity[]" value="booking">booking<br>
<li><input type="checkbox" name="opportunity[]" value="audition">audition<br>
<li><input type="checkbox" name="opportunity[]" value="tour">tour<br>
<li><input type="checkbox" name="opportunity[]" value="showcase">showcase<br>
<li><input type="checkbox" name="opportunity[]" value="internship">internship<br>
<li><input type="checkbox" name="opportunity[]" value="job">job<br>
<li><input type="checkbox" name="opportunity[]" value="endorsement">endorsement<br>
<li><input type="checkbox" name="opportunity[]" value="none">none<br>
<li><input type="checkbox" name="opportunity[]" value="" id="oppo_other" onClick="addopp()">other<br>
<input type="text" name="opportunity[]" id="oppo" disabled class="form-control" style="width:200px;"></input><br>
</ul>
</div>
</div>
<div class="col-xs-12">
<div class="col-xs-5">
<br><br>
<big>REPRESENTATION</big><sup>*</sup><br>
<ul class="checkbox-grid">
<li><input type="checkbox" name="representation[]" value="talent agent">talent agent<br>
<li><input type="checkbox" name="representation[]" value="record label">record label<br>
<li><input type="checkbox" name="representation[]" value="agent manager">agent manager<br>
<li><input type="checkbox" name="representation[]" value="modeling agency">modeling agency<br>
<li><input type="checkbox" name="representation[]" value="none">none<br>
<li><input type="checkbox" name="representation[]" value="" onClick="addrep()" id="rep_other">other<br>
<input type="text" name="representation[]" id="rep" disabled class="form-control" style="width:200px;"></input><br>
</ul>
</div>
</div>
<div class="col-xs-12">
<div class="col-xs-5">
<br><br>
<big>SERVICES</big><sup>*</sup><br>
<ul class="checkbox-grid">
<li><input type="checkbox" name="service[]" value="brand manager">brand manager<br>
<li><input type="checkbox" name="service[]" value="lawyer">lawyer<br>
<li><input type="checkbox" name="service[]" value="account">account<br>
<li><input type="checkbox" name="service[]" value="publicist">publicist<br>
<li><input type="checkbox" name="service[]" value="personal assistant">personal assistant<br>
<li><input type="checkbox" name="service[]" value="talent development">talent development<br>
<li><input type="checkbox" name="service[]" value="stylist">stylist<br>
<li><input type="checkbox" name="service[]" value="consulting">consulting<br>
<li><input type="checkbox" name="service[]" value="collaboration">collaboration<br>
<li><input type="checkbox" name="service[]" value="none">none<br>
<li><input type="checkbox" name="service[]" value="" onClick="addser()" id="ser_other">other<br>
<input type="text" name="service[]" id="ser" disabled class="form-control" style="width:200px;"></input><br>
</ul>
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
<p class="col-xs-12"><big>Optional&nbsp(STRONGLY RECOMMENDED)</big></p>
<div class="col-xs-12">
<div class="col-xs-2">
DESCRIBE YOURSELF IN THREE WORDS
</div>
<div class="col-xs-3">
<input type="text" style="width:300px"  name="describeword1" id="describeword1" class="page4 form-control">
</div>
<div class="col-xs-3">
<input type="text" style="width:300px"  name="describeword2" id="describeword2" class="page4 form-control">
</div>
<div class="col-xs-3">
<input type="text" style="width:300px"  name="describeword3" id="describeword3" class="page4 form-control">
 </div>
 </div>
 
<div class="col-xs-12">&nbsp;</div> 

<div class="col-xs-12">
<div class="col-xs-2">
INTRO VIDEO&nbsp(ONE LINK ONLY)
</div>
<div class="col-xs-3">
<input type="text" style="width:300px"  name="introVideo" id="introVideo" class="page4 form-control">
</div>
</div>

<div class="col-xs-12">&nbsp;</div>

<div class="col-xs-12">
<div class="col-xs-2">
PERSONAL WEBSITE&nbsp(ONE LINK ONLY)
</div>
<div class="col-xs-3">
<input type="text" style="width:300px"  name="personalWebsite" id="personalWebsite" class="page4 form-control">
</div>
</div>

<div class="col-xs-12">&nbsp;</div>

<div class="col-xs-12">
<div class="col-xs-2">
SOCIAL MEDIA&nbsp(ONE LINK ONLY)
</div>
<div class="col-xs-3">
<input type="text" style="width:300px"  name="socialMedia" id="socialMedia" class="page4 form-control">
</div>
</div>

<div class="col-xs-12">&nbsp;</div>

<div class="col-xs-12">
<div class="col-xs-2">
ACCOLADES
</div>
<div class="col-xs-3">
<input type="text"  style="width:300px"  name="accolades" id="accolades" class="page4 form-control">
</div>
</div>

<div class="col-xs-12">&nbsp;</div>

 <div class="col-xs-12">
 <div class="col-xs-2">
CURRENT REPRESENTATION
</div> 
<div class="col-xs-3">
<textarea form="myform" name="current_representation" id="current_representation" class="page4 form-control"></textarea>
</div>
</div>

<div class="col-xs-12">&nbsp;</div>

<div class="col-xs-12">
<div class="col-xs-2">
EXPERIENCE 
</div>
<div class="col-xs-3">
<textarea form="myform" name="experience" id="experience" class="page4 form-control"></textarea>
</div>
</div>

<div class="col-xs-12">&nbsp;</div>
<div class="col-xs-12">
<div class="col-xs-2">
ANYTHING ELSE 
</div>
<div class="col-xs-3">
<textarea form="myform" name="anything" id="anything" class="page4 form-control"></textarea>
</div>
</div>

<div class="col-xs-12">&nbsp;</div>

<div class="col-xs-12">
<div class="col-xs-2">
<input type="button" value="PREVIOUS" id="lastPrevious" class="btn btn-danger" style="font-family:'Roboto', Helvetica, Arial, sans-serif"></input>
</div>
<div class="col-xs-3">
<input type="submit" value="SUBMIT" id="submit" formmethod="post" class="btn btn-danger" style="font-family:'Roboto', Helvetica, Arial, sans-serif"></input>
<input type="button" value="REVIEW APPLICATION" id="review" style="font-family:'Roboto', Helvetica, Arial, sans-serif" class="btn btn-danger"></input>
</div>
</div>
</div>


<div class="reviewPage">
<p class="col-xs-12"><big>Review Application</big></p>
<table>
<tr><td class="col-xs-11">FIRST NAME</td><td id="review_fname"></td></tr>
<tr><td class="col-xs-11">LAST NAME</td><td id="review_lname"></td></tr>
<tr><td class="col-xs-11">NICKNAME</td><td id="review_nname"></td></tr>
<tr><td class="col-xs-11">PROFILE PHOTO</td><td id="review_photo"></td></tr>
<tr><td class="col-xs-11">EMAIL</td><td id="review_email"></td></tr>
<tr><td class="col-xs-11">STATE</td><td id="review_state"></td></tr>
<tr><td class="col-xs-11">CITY</td><td id="review_city"></td></tr>
<tr><td class="col-xs-11">ZIP CODE</td><td id="review_zip"></td></tr>
<tr><td class="col-xs-11">GENDER</td><td id="review_gender"></td></tr>
<tr><td class="col-xs-11">PHONE NUMBER</td><td id="review_phone"></td></tr>
<tr><td class="col-xs-11">DATE OF BIRTH</td><td id="review_dob"></td></tr>
<tr><td class="col-xs-11">SELF-INTRODUCTION</td><td id="review_self"></td></tr>
<tr><td class="col-xs-11">TALENT CATEGORY_1</td><td id="review_category1"></td></tr>
<tr><td class="col-xs-11">SPECIFIC TALENT_1</td><td id="review_talent1"></td></tr>
<tr><td class="col-xs-11">PROFILE_1</td><td id="review_profile1"></td></tr>
<tr><td class="col-xs-11">TALENT CATEGORY_2</td><td id="review_category2"></td></tr>
<tr><td class="col-xs-11">SPECIFIC TALENT_2</td><td id="review_talent2"></td></tr>
<tr><td class="col-xs-11">PROFILE_2</td><td id="review_profile2"></td></tr>
<tr><td class="col-xs-11">TALENT CATEGORY_3</td><td id="review_category3"></td></tr>
<tr><td class="col-xs-11">SPECIFIC TALENT_3</td><td id="review_talent3"></td></tr>
<tr><td class="col-xs-11">PROFILE_3</td><td id="review_profile3"></td></tr>
<tr><td class="col-xs-11">OPPORTUNITIES</td><td id="review_opportunities"></td></tr>
<tr><td class="col-xs-11">REPRESENTATION</td><td id="review_representation"></td></tr>
<tr><td class="col-xs-11">SERVICES</td><td id="review_services"></td></tr>
<tr><td class="col-xs-11">DESCRIBE YOURSELF IN THREE WORDS</td><td id="review_describeword"></td></tr>
<tr><td class="col-xs-11">INTRO VIDEO</td><td id="review_introVideo"></td></tr>
<tr><td class="col-xs-11">PERSONAL WEBSITE</td><td id="review_personalWebsite"></td></tr>
<tr><td class="col-xs-11">SOCIAL MEDIA</td><td id="review_socialMedia"></td></tr>
<tr><td class="col-xs-11">ACCOLADES</td><td id="review_accolades"></td></tr>
<tr><td class="col-xs-11">CURRENT REPRESENTATION</td><td id="review_current_representation"></td></tr>
<tr><td class="col-xs-11">EXPERIENCE</td><td id="review_experience"></td></tr>
<tr><td class="col-xs-11">ANYTHING ELSE</td><td id="review_anything"></td></tr>
</table>
<div class="col-xs-12">
<div class="col-xs-2">
<input type='button' value="PREVIOUS" id="reviewPrevious" class="btn btn-danger" style="font-family:'Roboto', Helvetica, Arial, sans-serif"></input>
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
			var message="You are missing the required";
			var picmessage="";
			var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
			if($('#fname').val()=='')message+=" [first name]";
			if($('#lname').val()=='')message+=" [last name]";
			if($('#email').val()=='')message+=" [email]";
			if($('#state').val()=='')message+=" [state]";
			if($('#city').val()=='')message+=" [city]";
			if($('#zip').val()=='')message+=" [zip code]";
			if($('#gender').val()=='')message+=" [gender]";
			if($('#dob').val()=='')message+=" [birthday]";
			if($('#self').val()=='')message+=" [self-introduction]";
      if($('#personal_photo').val()=='')message+=" [personal photo]";
			if(message.length > 28){
			message=message.substring(0,message.length);
			message+=" field(s). Please fill these out.";
			alert(message);
			}
			else if(getextension($('#personal_photo').val())==-1){
				picmessage="The extension name of file is wrong!";
				alert(picmessage);
			} 
            else if(re.test($('#email').val())==false)alert("Please enter a valid email.");
			else{
			$('.firstPage').hide();
			$('.secondPage').show();
			}
	});
	$('#review').click(function(){
		   $('.fourPage').hide();
		   $('.firstPage').show();
	});
	$('#secondPrevious').click(function(){
		   $('.secondPage').hide();
		   $('.firstPage').show();
		   document.getElementById('img1_1').innerHTML="";
		   document.getElementById('img1_2').innerHTML="";
		   document.getElementById('img1_3').innerHTML="";
		   document.getElementById('audio1').innerHTML="";
		   document.getElementById('video1').innerHTML="";
		   document.getElementById('audiolink1').value="";
		   document.getElementById('videolink1').value='';
		   document.getElementById('tphoto1_1').value='';
		   document.getElementById('tphoto1_2').value='';
		   document.getElementById('tphoto1_3').value='';
		   document.getElementById('specific_talent1').value='';
		   document.getElementById('category1').value='';
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
		var message="You are missing the required";
		var picmessage="";
	    if($('#category1').val()=='')message+=" [category]";
	    if($('#specific_talent1').val()=='')message+=" [specific_talent]";
		if(message.length > 28){
		    message=message.substring(0,message.length);
			message+=" field(s). Please fill these out.";
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
		document.getElementById('img1_1').innerHTML="";
		document.getElementById('img1_2').innerHTML="";
		document.getElementById('img1_3').innerHTML="";
		document.getElementById('audio1').innerHTML="";
		document.getElementById('video1').innerHTML="";
		document.getElementById('img2_1').innerHTML="";
		document.getElementById('img2_2').innerHTML="";
		document.getElementById('img2_3').innerHTML="";
		document.getElementById('audio2').innerHTML="";
		document.getElementById('video2').innerHTML="";
		document.getElementById('img3_1').innerHTML="";
		document.getElementById('img3_2').innerHTML="";
		document.getElementById('img3_3').innerHTML="";
		document.getElementById('audio3').innerHTML="";
		document.getElementById('video3').innerHTML="";
		document.getElementById('specific_talent1').value='';
		document.getElementById('category1').value='';
        document.getElementById('specific_talent2').value='';
   	    document.getElementById('category2').value='';
		document.getElementById('specific_talent3').value='';
		document.getElementById('category3').value='';
	});
	$('#thirdNext').click(function(){
		var message="You are missing the required";
	    if($("[name='representation[]']:checked").length==0)message+=" [representation]";
	    if($("[name='opportunity[]']:checked").length==0)message+=" [opportunity]";
		if($("[name='service[]']:checked").length==0)message+=" [service]";
		
		if(message.length > 28){
		    message=message.substring(0,message.length);
			message+=" field(s). Please fill these out.";
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
		var message="You are missing the required";
		var picmessage="";
	    if($('#category1').val()=='')message+=" [category]";
	    if($('#specific_talent1').val()=='')message+=" [specific talent]";
		if(message.length > 28){
		    message=message.substring(0,message.length);
			message+=" field(s). Please fill these out.";
			alert(message);
		}
		else if(getextension($('#tphoto1_1').val())==-1||getextension($('#tphoto1_2').val())==-1||getextension($('#tphoto1_3').val())==-1){
				picmessage="The extension name of file is wrong!";
				alert(picmessage);
			} 
		else{
		var num=0;
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
			num++;
			}
		}
		if($('#videolink1').val()!=''){
			var url=$('#videolink1').val().split(";");
			for(var i=0;i<url.length;i++){
			num++;
			}
		}
		if(num==0)alert("Please upload at least one file!");
		if(num>3)alert("Please upload at most three files!");
		if(num<=3&&num>0&&picmessage==""){
			$('.secondPage').hide();
		    $('.add_one').show();
		}
		}
	});
	
	$('#addonePrevious').click(function(){
		$('.add_one').hide();
		$('.secondPage').show();
		document.getElementById('img2_1').innerHTML="";
		document.getElementById('img2_2').innerHTML="";
		document.getElementById('img2_3').innerHTML="";
		document.getElementById('audio2').innerHTML="";
		document.getElementById('video2').innerHTML="";
		document.getElementById('audiolink2').value='';
		document.getElementById('videolink2').value='';
		document.getElementById('tphoto2_1').value='';
		document.getElementById('tphoto2_2').value='';
		document.getElementById('tphoto2_3').value='';
		document.getElementById('specific_talent2').value='';
		document.getElementById('category2').value='';
	});
	
	$('#addoneNext').click(function(){
		var num=0;
		var pic=0;
		var audio=0;
		var video=0;
		var message="You are missing the required";
		var picmessage="";
	    if($('#category2').val()=='')message+=" [category]";
	    if($('#specific_talent2').val()=='')message+=" [specific talent]";
		if(message.length > 28){
		    message=message.substring(0,message.length);
			message+=" field(s). Please fill these out.";
      alert(message);
		}
		else if(getextension($('#tphoto2_1').val())==-1||getextension($('#tphoto2_1').val())==-1||getextension($('#tphoto2_1').val())==-1){
				picmessage="The extension name of file is wrong!";
				alert(picmessage);
			}
		else if($('#specific_talent2').val()==$('#specific_talent1').val())alert("You have submitted this talent, please provide another one!");
		else{
		if($('#tphoto2_1').val()!='')pic++;
		if($('#tphoto2_2').val()!='')pic++;
		if($('#tphoto2_3').val()!='')pic++;
		if($('#audiolink2').val()!='')audio=$('#audiolink2').val().split(";").length;
		if($('#videolink2').val()!='')video=$('#videolink2').val().split(";").length;
		num=pic+audio+video;
		if(num==0)alert("Please upload at least one file!");
		if(num>3)alert("PLease upload at most three files!");
		if(num<=3&&num>0&&picmessage==""){
			$('.add_one').hide();
		    $('.thirdPage').show();
		}
		}
	})
	
	$('#add_two').click(function(){
		var message="You are missing the required";
		var picmessage="";
	    if($('#category2').val()=='')message+=" [category]";
	    if($('#specific_talent2').val()=='')message+=" [specific talent]";
		if(message.length > 28){
		    message=message.substring(0,message.length);
			message+=" field(s). Please fill these out.";
			alert(message);
		}
		else if(getextension($('#tphoto2_1').val())==-1||getextension($('#tphoto2_2').val())==-1||getextension($('#tphoto2_3').val())==-1){
				picmessage="The extension name of file is wrong!";
				alert(picmessage);
			}
		else if($('#specific_talent2').val()==$('#specific_talent1').val())alert("You have submitted this talent, please provide another one!");
		else{
		var num=0;
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
			num++;
			}
		}
		if($('#videolink2').val()!=''){
			var url=$('#videolink2').val().split(";");
			for(var i=0;i<url.length;i++){
			num++;
			}
		}
		if(num==0)alert("Please upload at least one file!");
		if(num>3)alert("Please upload at most three files!");
		if(num<=3&&num>0&&picmessage==""){
			$('.add_one').hide();
		    $('.add_two').show();
		}
		}
	});
	
	$('#addtwoPrevious').click(function(){
		$('.add_two').hide();
		$('.add_one').show();
		document.getElementById('img3_1').innerHTML="";
		document.getElementById('img3_2').innerHTML="";
		document.getElementById('img3_3').innerHTML="";
		document.getElementById('audio3').innerHTML="";
		document.getElementById('video3').innerHTML="";
		document.getElementById('audiolink3').value='';
		document.getElementById('videolink3').value='';
		document.getElementById('tphoto3_1').value='';
		document.getElementById('tphoto3_2').value='';
		document.getElementById('tphoto3_3').value='';
		document.getElementById('specific_talent3').value='';
		document.getElementById('category3').value='';
	});
	
	$('#addtwoNext').click(function(){
		var num=0;
		var pic=0;
		var audio=0;
		var video=0;
		var message="You are missing the required";
		var picmessage="";
	    if($('#category3').val()=='')message+=" [category]";
	    if($('#specific_talent3').val()=='')message+=" [specific talent]";
		if(message.length > 28){
		    message=message.substring(0,message.length);
			message+=" field(s). Please fill these out.";
			alert(message);
		}
		else if(getextension($('#tphoto3_1').val())==-1||getextension($('#tphoto3_2').val())==-1||getextension($('#tphoto3_3').val())==-1){
				picmessage="The extension name of file is wrong!";
				alert(picmessage);
			}
		else if($('#specific_talent3').val()==$('#specific_talent1').val()||$('#specific_talent3').val()==$('#specific_talent2').val())alert("You have submitted this talent, please provide another one!")
		else{
		if($('#tphoto3_1').val()!='')pic++;
		if($('#tphoto3_2').val()!='')pic++;
		if($('#tphoto3_3').val()!='')pic++;
		if($('#audiolink3').val()!='')audio=$('#audiolink3').val().split(";").length;
		if($('#videolink3').val()!='')video=$('#videolink3').val().split(";").length;
		num=pic+audio+video;
		if(num==0)alert("Please upload at least one file!");
		if(num>3)alert("Please upload at most three files!");
		if(num<=3&&num>0&&picmessage==""){
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


$('#review').click(function(){
	$('.firstPage').hide();
	$('.fourPage').hide();
	$('.reviewPage').show();
	document.getElementById('review_fname').innerHTML=document.getElementById('fname').value;
	document.getElementById('review_lname').innerHTML=document.getElementById('lname').value;
	document.getElementById('review_nname').innerHTML=document.getElementById('nname').value;
	document.getElementById('review_photo').innerHTML=document.getElementById('personal_photo').value;
	document.getElementById('review_email').innerHTML=document.getElementById('email').value;
	document.getElementById('review_state').innerHTML=document.getElementById('state').value;
	document.getElementById('review_city').innerHTML=document.getElementById('city').value;
	document.getElementById('review_zip').innerHTML=document.getElementById('zip').value;
	document.getElementById('review_gender').innerHTML=document.getElementById('gender').value;
	document.getElementById('review_phone').innerHTML=document.getElementById('phone').value;
	document.getElementById('review_dob').innerHTML=document.getElementById('dob').value;
	document.getElementById('review_self').innerHTML=document.getElementById('self').value;
	document.getElementById('review_category1').innerHTML=document.getElementById('category1').value;
	
	document.getElementById('review_talent1').innerHTML=document.getElementById('specific_talent1').value;
	document.getElementById('review_profile1').innerHTML=document.getElementById('tphoto1_1').value+" "+document.getElementById('tphoto1_2').value+" "+document.getElementById('tphoto1_3').value+" "+document.getElementById('audiolink1').value+" "+document.getElementById('videolink1').value;
	document.getElementById('review_category2').innerHTML=document.getElementById('category2').value;
	document.getElementById('review_talent2').innerHTML=document.getElementById('specific_talent2').value;
	document.getElementById('review_profile2').innerHTML=document.getElementById('tphoto2_1').value+" "+document.getElementById('tphoto2_2').value+" "+document.getElementById('tphoto2_3').value+" "+document.getElementById('audiolink2').value+" "+document.getElementById('videolink2').value;
	document.getElementById('review_category3').innerHTML=document.getElementById('category3').value;
	document.getElementById('review_talent3').innerHTML=document.getElementById('specific_talent3').value;
	document.getElementById('review_profile3').innerHTML=document.getElementById('tphoto3_1').value+" "+document.getElementById('tphoto3_2').value+" "+document.getElementById('tphoto3_3').value+" "+document.getElementById('audiolink3').value+" "+document.getElementById('videolink3').value;
	
	 document.getElementById('review_representation').innerHTML="";
	 document.getElementById('review_services').innerHTML="";
	 document.getElementById('review_opportunities').innerHTML="";
     $('input[name="opportunity[]"]:checked').each(function() {
       $('#review_opportunities').append(' '+$(this).val());
     });
	 $('#review_opportunities').append(' ');
	   $('#review_opportunities').append($('#oppo').val());
	$('input[name="representation[]"]:checked').each(function() {
       $('#review_representation').append(' '+$(this).val());
     });
	 $('#review_representation').append(' ');
	   $('#review_representation').append($('#rep').val());
	 $('input[name="service[]"]:checked').each(function() {
       $('#review_services').append(' '+$(this).val());
     });
	 $('#review_services').append(' ');
	   $('#review_services').append($('#ser').val());
	
	document.getElementById('review_describeword').innerHTML=document.getElementById('describeword1').value+" "+document.getElementById('describeword2').value+" "+document.getElementById('describeword3').value;
	document.getElementById('review_introVideo').innerHTML=document.getElementById('introVideo').value;
	document.getElementById('review_personalWebsite').innerHTML=document.getElementById('personalWebsite').value;
	document.getElementById('review_socialMedia').innerHTML=document.getElementById('socialMedia').value;
	document.getElementById('review_accolades').innerHTML=document.getElementById('accolades').value;
	document.getElementById('review_current_representation').innerHTML=document.getElementById('current_representation').value;
	document.getElementById('review_experience').innerHTML=document.getElementById('experience').value;
	document.getElementById('review_anything').innerHTML=document.getElementById('anything').value;
	
});

$('#reviewPrevious').click(function(){
	$('.reviewPage').hide();
	$('.fourPage').show();
});
</script>

<script src="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/js/select2.min.js">
</script>
<script type="text/javascript">
  $('select').select2();
  $('#state').select2({
  });
  
  function readURL1(input,n)
  {   
	  if(input.files&&input.files[0]){
		  var reader = new FileReader();
		  reader.onload = function(e)
		  {
			  document.getElementById('img1_'+n).innerHTML = "<img src=" + e.target.result + " width='100px' height='100px'>&nbsp;";
		  }
		  reader.readAsDataURL(input.files[0]);
	  }
	  else document.getElementById('img1_'+n).innerHTML="";
  }
  $('#tphoto1_1').change(function(){
	  readURL1(this,1)
  });
   $('#tphoto1_2').change(function(){
	  readURL1(this,2)
  });
   $('#tphoto1_3').change(function(){
	  readURL1(this,3)
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
  
  function readURL2(input,n)
  {
	  if(input.files&&input.files[0]){
		  var reader = new FileReader();
		  reader.onload = function(e)
		  {
			  document.getElementById('img2_'+n).innerHTML = "<img src=" + e.target.result + " width='100px' height='100px'>&nbsp;";
		  }
		  reader.readAsDataURL(input.files[0]);
	  }
	  else document.getElementById('img2_'+n).innerHTML="";
  }
  $('#tphoto2_1').change(function(){
	  readURL2(this,1)
  });
   $('#tphoto2_2').change(function(){
	  readURL2(this,2)
  });
   $('#tphoto2_3').change(function(){
	  readURL2(this,3)
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
   
  function readURL3(input,n)
  {
	  if(input.files&&input.files[0]){
		  var reader = new FileReader();
		  reader.onload = function(e)
		  {
			  document.getElementById('img3_'+n).innerHTML = "<img src=" + e.target.result + " width='100px' height='100px'>&nbsp;";
		  }
		  reader.readAsDataURL(input.files[0]);
	  }
	  else document.getElementById('img3_'+n).innerHTML="";
  }
  $('#tphoto3_1').change(function(){
	  readURL3(this,1)
  });
   $('#tphoto3_2').change(function(){
	  readURL3(this,2)
  });
   $('#tphoto3_3').change(function(){
	  readURL3(this,3)
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
</script>

</html>