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
<style type="text/css">

body{
	background-image: url(http://talentscool.com/images/background.png);
	background-size: cover;
	background-repeat: no-repeat;
	background-color: #000000;
}
#formBox  .hidden_menu {height:0px;display:none;}
#selectField_chzn.chzn-container-single .chzn-single { height:24px !important; line-height:24px !important; }
#formBox, .formBox  { position:relative; border:1px solid #F2F2F2; padding:10px 20px 20px 20px; margin-top:20px; width:100%; }
#formBox h2, .formBox h2 { font-weight:bold; font-size:18px; margin:0px; padding:0px;}
.leftblock #formBox h2:hover { cursor:text; }
#formBox .description, .formBox .description { display:block; font-size:12px; margin-top:15px; line-height:15px; }
.leftblock #formBox .description:hover { cursor:text; }
#formBox .rowBlock, .formBox .rowBlock { width:560px; padding:10px; margin:0px -10px 10px -10px; border:1px dotted transparent; position:relative; }
#formContainer .rowBlock { border:none; }
#formContainer .rowBlock:hover { border:none; }
.leftblock #formBox .rowBlock:hover { border-color:#8F8F8F; cursor:move; }
.rowBlock .fieldDesc { font-size:14px; font-weight:bold; display:block; }
.rowBlock .fieldDesc .required { color:#ED1C24; font-size:14px; display:inline; }
.rowBlock input[type=text], .rowBlock select  { display:block;  margin-top:12px; margin-right:5px; font-size:14px; width:547px; height:25px; border-color:#A6A6A6; -moz-border-radius: 3px; -webkit-border-radius: 3px; border-radius: 3px; }
.rowBlock .not_filled { font-weight:bold; color:#BFBFBF; }
.rowBlock input[disabled=disabled], .rowBlock textarea[disabled=disabled] { background-color:#fff;  cursor:text; }
.rowBlock #firstName { margin-right:20px; }
.rowBlock textarea#address { border:1px solid #A6A6A6; margin-top:15px; font-size:14px; font-family: Arial; -moz-border-radius: 3px; -webkit-border-radius: 3px; border-radius: 3px; width:547px; height:55px; padding:5px; }
#country_chzn { clear:both; margin-top:12px;  }
#selectPhoneType_chzn, #im_service_name_chzn, #im_type_chzn, #selectWebsiteType_chzn, #selectSocialType_chzn, #selectGender_chzn { margin-top:11px; }
#im_service_name_chzn { margin-right:20px; }
#day_chzn, #month_chzn, #year_chzn, #website, #social { margin-top:12px; }
#subscribeToList { clear:both; font-size:14px; font-weight:bold; padding:5px 10px; border:none; color:#fff; cursor:pointer; margin-top:20px; }
.signupError { padding:20px 0px 0px 0px; text-align:center; color:red; font-weight:bold; font-size:14px; }

#formContainer { width:560px; margin:0 auto; position:relative; font-family: Arial;}
#formContainer input[type=text] { padding:0px 5px; }
#formContainer #formBox .rowBlock:hover { border-color:#fff; }
#formContainer .rowBlock:hover .hidden_arrow, #formContainer .rowBlock:hover #deleteItem { display:none; }
.cmpLnk { float:right; font-size:11px; font-weight:bold; text-decoration:none; margin-top:37px; }
.cmpLnk:hover { text-decoration:underline;  }

#formBox h2 { color:#ffffff; font-family:Geneva, Tahoma, sans-serif; background:none; width:auto;  }
.formContainer .description { color: #ffffff; }
#formBox { background: #c83939; border-color:#F3F3F1; }
#formBox .fieldDesc { color:#ffffff; }
#subscribeToList { background-color: #ffffff; color:#c83939; }


</style>

<div id="logo_top" style="float:right; position: relative; margin-top:20px; margin-right: 2%"><a href="http://talentscool.com"><img src="/pic/TSVector.png" style="width:200px;"></a></div>
<div id="formContainer" style="position: absolute; margin-top: 15%; margin-left: 33%;">
<div id="formBox">
<form id="signupSubscriberForm" method="post" action="http://talentscool.campayn.com/contacts/signup_form_add_contact/27361" accept-charset="utf-8">

 
 
 <input type="hidden" name="formId" value="32706">
 <input type="hidden" id="selectedImage" value="">
 <input type="hidden" id="selectedImageId" value="">
 
 
 
 
 <div class="formContainer ui-sortable">
 <div class="rowBlock stackmail_block signupForNewsletter" style="width: 560px; position: relative;">

 <h2 class="richtext editable cke_editable_inline cke_contents_ltr cke_editable cke_show_borders" id="editable_3101e00c-d3c4-6549-652c-1e8a77988eab" tabindex="0" spellcheck="true" role="textbox" aria-label="false" title="" aria-describedby="cke_28" style="color: rgb(255, 255, 255); font-family: Geneva, Tahoma, sans-serif;"><b>Sign up for our newsletter!</b></h2>
 <div class="description richtext editable cke_editable_inline cke_contents_ltr cke_editable cke_show_borders" id="editable_6ab212a2-0f79-7739-0d78-d146114e82ed" tabindex="0" spellcheck="true" role="textbox" aria-label="false" title="" aria-describedby="cke_49" style="color: rgb(255, 255, 255); font-family: 'Lucida Grande', sans-serif;">Get the latest news and helpful tips delivered right to your email.</div>
 </div>
 <div class="rowBlock stackmail_block emailAddress" style="width: 560px;">
 
 <div class="fieldDesc" style="color: rgb(255, 255, 255); font-family: Geneva, Tahoma, sans-serif;"><b>Email address<div class="required" style="color: inherit;">*</div></b></div>
 <input type="text" id="emailAddress" value="" class="" name="email" placeholder="Email address" style="width: 500px; color: black;">
 </div>
 </div>
 <input type="submit" id="subscribeToList" value="Subscribe" style="background-color: rgb(255, 255, 255); color: rgb(237, 28, 36);">
 <div class="clearBothDiv" style="clear:both;"></div> 
</form>
</div>
</div>

		
	</body>
</html>