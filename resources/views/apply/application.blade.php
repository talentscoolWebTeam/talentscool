<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
    <title>
        TalentsCool | Application
    </title>
    
    <link href='https://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <link rel="stylesheet" href="css/application-style.css" />
    <link href='https://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet' type='text/css'>
</head>

<body>
	
    <div class="header">
        <div>
            <h1><a href="/"><img src="images/TSVector.png"></a></h1>
        </div>
    </div>

    {!! Form::open(['url' => 'submitapp', 'method'=>'POST', 'name' => 'application', 'files'=>true])!!}
    <div id="app1">
        <div class="app_heading">
            <h1>
                Application
            </h1>
            <p>
                Personal Information
            </p>
        </div>
    
    
        <div class="navigation">
            <ul>
                <li class="personal_li">
                    Step 1 <br><br> <span>Personal Information</span>
                </li>
                <li>
                    Step 2 <br><br> <span>Talent</span>
                </li>
                <li>
                    Step 3 <br><br> <span>Desired Services</span>
                </li>
                <li>
                    Step 4 <br><br> <span>More About Yourself</span>
                </li>
            </ul>
        </div>
    
        <div class="info"> 
        <div class="row clearfix"> 
			<p class="half-row">
                <label>
                    Headshot*
                </label>
                <input type="file" id="profile_image" onchange="validateImage('profile_image');" name = "profile_image" autocomplete="off" placeholder="Profile Photo" 
                required></input>
			</p>
            <p class="right-col" id="img-container">
				<img id="display_image" src="#" alt="<Choose Profile Pic>" />
			</p>
        </div>

        <div class="row clearfix">
			<p class="half-row">	
				<label>
                    First Name*
               </label>
                <input id="first_name" name="first_name" type="text" autocomplete="off" required></input>
            </p>
            <p class="half-row right-col">
                <label>
                    Last Name*
                </label>
                <input id="last_name" name="last_name" type="text" autocomplete="off" required></input>
            </p>
        </div>
        <div class="row">
            <p class="full-row">
                <label>
                    Stage Name
                </label>
                <input id="stage_name" name="stage_name" type="text" autocomplete="off"></input>
            </p>
        </div>
        <div class="row">
            <p class="half-row">
                <label>
                     E-mail*
                </label>
                <input onchange="validateEmail('email');" id="email" name="email" type="text" autocomplete="off" required></input>
            </p>
            <p class="half-row right-col">
                <label>
                    Phone Number*
                </label>
                <input onchange="validatePhone('phone');" id="phone" name="phone" type="text" onclick="this.placeholder='(_ _ _) _ _ _ - _ _ _ _';" autocomplete="off" 
                required></input>
            </p>
        </div>

        <div class="row">
            <p class="half-row">
                <label>
                    Country*
                </label>
                <select id="country" name="country" placeholder="Country" required></select>
            </p>
            <p class="half-row right-col">
                <label>
                    State*
                </label>
                <select id="state" name="state" placeholder="State" required></select>
            </p>
        </div>

        <div class="row">
            <p class="half-row">
                <label>
                    City*
                </label>
                <input type="text" id="city" name="city" autocomplete="off" required></input>
            </p>
            <p class="right-col half-row">
                <label>
                    Zip Code*
                </label>
                <input type="text" id="zip" name = "zip" autocomplete="off" required></input>
            </p>
        </div>

        <div class="row">
            <p class="half-row">
                <label>
                    Date of Birth*
                </label>
                <input onchange="validateDOB('dob');" id="dob" type="text" name ="dob" autocomplete="off" onclick="this.placeholder='MM/DD/YYYY';" required></input>
            </p>
            <p class= "right-col half-row">
                <label>
                    Gender*
                </label>
                <select name="gender" id="gender" autocomplete="off" required></select>
            </p>
        </div>
            
        </div> <!-- end .info -->
    
     <div class="buttons_container clearfix">
            <div class="buttons">
                <button type="button" class="next-button button">
                    Next
	            </button>
	        </div>
        </div>
	</div>
	
				
	
    <!------------------------------------------------------------------------------------------------------------>

    <div id="app2">
        <div class="app_heading">
            <h1>
                Application
            </h1>
            <p>
                Talent
            </p>
        </div>


        <div class="navigation">
            <ul>
                <li>
                    Step 1 <br><br> <span>Personal Information</span>
                </li>
                <li class="talent_li">
                    Step 2 <br><br> <span>Talent</span>
                </li>
                <li>
                    Step 3 <br><br> <span>Desired Services</span>
                </li>
                <li>
                    Step 4 <br><br> <span>More About Yourself</span>
                </li>
            </ul>

        </div>

        <div class="info">
            <div class="app2_wrapper">
                <div id = "container">
                    <div id = "talent-container" class="talent-container-class">
                        <div id = "industry">
                            <label>Industry</label>
                            <select id="talent_category" name="talent_category[]" required>
                                <option value="-1">Select Industry</option>
                                <option value="Dance">Dance</option>
                                <option value="Fashion">Fashion</option>
                                <option value="Film">Film</option>
                                <option value="Athletics">Athletics</option>
                                <option value="Music">Music</option><option value="Art">Art</option>
                            </select>
                        </div><!-- for industry-->
                        <div id = "talents">
                            <div id = "specific" class = "talent">
                                <p id="portfolio" style="padding-bottom: 0px;">
                                    <label>Talent</label>
                                    <input id="specific_talent" name="specific_talent[]" type="text" placeholder = "">
                                </p>

                            </div><!-- for dance-->
                            <div id="media-container" class ="media">
                                <div id="media1" class = "visible">
                                    <select id="drop1" name="type1[]">
                                        <option>Image</option>
                                        <option>Audio</option>
                                        <option>Video</option>
                                    </select>
                                    <input id="link1" name="media1[]" placeholder="Enter Link" />
                                </div>
                                <div id="media2" class = "visible">
                                    <select id="drop2" name="type2[]">
                                        <option>Image</option>
                                        <option>Audio</option>
                                        <option>Video</option>
                                    </select>
                                    <input id="link2" name="media2[]" placeholder="Enter Link" />
                                    <button type="button"class="removeRow button">Remove Media</button>
                                </div>
                                <div id="media3" class = "visible">
                                    <select id="drop3" name="type3[]">
                                        <option>Image</option>
                                        <option>Audio</option>
                                        <option>Video</option>
                                    </select>
                                    <input id="link3" name="media3[]" placeholder="Enter Link" />
                                    <button type="button" class="removeRow button">Remove Media</button>
                                </div>
                            </div>
                            <button type="button" class="addRow button">Add Media</button>
                        </div>

                    </div> <!-- end #talent-container .talent-container-class -->
                </div> <!-- end #container -->
                <button type="button" class="addTalent text-button">Add Talent</button>
                <button type="button" class="removeTalent text-button">Remove Talent</button>
            </div>
        </div>
        <div class="buttons_container">
            <div class="buttons">
                <button type="button" class="prev-button button">
                    Previous
                </button>
                <button type="button" id="app2-next" class="next-button button">
                    Next
                </button>
            </div>
        </div>
    </div>
    <!-- for app2 -->

    <!------------------------------------------------------------------------------------------------------------>

    <div id="app3">
        <div class="app_heading">
            <h1>
                Application
            </h1>
            <p>
                Desired Services
            </p>
        </div>
    
    
        <div class="navigation">
            <ul>
                <li>
                    Step 1 <br><br> <span>Personal Information</span>
                </li>
                <li>
                    Step 2 <br><br> <span>Talent</span>
                </li>
                <li class="additional_li">
                    Step 3 <br><br> <span>Desired Services</span>
                </li>
                <li>
                    Step 4 <br><br> <span>More About Yourself</span>
                </li>
            </ul>
 

        </div>
    
        <div class="info">
            <div class="row">
                <div class="half-row">
                    <label>
                        Opportunities
                    </label>
                    <div class="checkboxlist">
                        <input type="checkbox" name="opportunity[]" value="booking"> Bookings<br>
                        <input type="checkbox" name="opportunity[]" value="audition"> Auditions<br>
                        <input type="checkbox" name="opportunity[]" value="tour"> Tours<br>
                        <input type="checkbox" name="opportunity[]" value="showcase"> Showcases<br>
                        <input type="checkbox" name="opportunity[]" value="internship"> Internships<br>
                        <input type="checkbox" name="opportunity[]" value="job"> Jobs<br>
                        <input type="checkbox" name="opportunity[]" value="endorsement"> Endorsements<br>
                    </div>
                </div>
                <div class="half-row right-col">
                    <label>
                        Representation
                    </label>
                    <div class="checkboxlist">
                            <input type="checkbox" name="representation[]" value="manager"> Manager<br>
                            <input type="checkbox" name="representation[]" value="agent"> Agent<br>
                            <input type="checkbox" name="representation[]" value="record_deal"> Record Deal<br>
                            <input type="checkbox" name="representation[]" value="booking_agent"> Booking Agent<br>
                            <input type="checkbox" name="representation[]" value="publicist"> Publicist<br>
                            <input type="checkbox" name="representation[]" value="talent_agent"> Talent Agent<br>
                            <input type="checkbox" name="representation[]" value="brand_manager"> Brand Manager<br>
                    </div>
                </div>
            </div> <!--end row-->

            <div class="row">
                <div class="half-row">
                    <label>
                        General Services
                    </label>
                    <div class="checkboxlist">
    				<div class ="cb-container">
                          <input type="checkbox" name="general[]" value="musician"> Musician<br>
                          <input type="checkbox" name="general[]" value="vocalist"> Vocalist<br>
                          <input type="checkbox" name="general[]" value="dancer"> Dancer<br>
                          <input type="checkbox" name="general[]" value="lawyer"> Lawyer<br>
                          <input type="checkbox" name="general[]" value="accountant"> Accountant<br>
                          <input type="checkbox" name="general[]" value="investor"> Investor<br>
                          <input type="checkbox" name="general[]" value="personal_asssitant"> Personal Assistant<br>
                          <input type="checkbox" name="general[]" value="webdesigner"> Web Designer<br>
                          <input type="checkbox" name="general[]" value="engineer"> Engineer<br>
                          <input type="checkbox" name="general[]" value="fitnesstrainer"> Fitness Trainer<br>
                          <input type="checkbox" name="general[]" value="cameracrew"> Camera Crew<br>
    				</div>
                    </div>
                </div>
                <div class="half-row right-col">
                    <label>
                        Vanity & Luxury Services
                    </label>
                    <div class="checkboxlist">
                        <input type="checkbox" name="vanitylux[]" value="clothingstylist"> Clothing Stylist<br>
                        <input type="checkbox" name="vanitylux[]" value="hairstylist"> Hair Stylist<br>
                        <input type="checkbox" name="vanitylux[]" value="barber"> Barber<br>
                        <input type="checkbox" name="vanitylux[]" value="makeupartist"> Makeup Artist<br>
                        <input type="checkbox" name="vanitylux[]" value="model"> Model<br>
                        <input type="checkbox" name="vanitylux[]" value="photographer"> Photographer<br>
                        <input type="checkbox" name="vanitylux[]" value="bodyguard"> Bodyguard<br>
                        <input type="checkbox" name="vanitylux[]" value="limodriver"> Limo Driver<br>
                        <input type="checkbox" name="vanitylux[]" value="privatejet"> Private Jet Rental<br>
                        <input type="checkbox" name="vanitylux[]" value="studiorental"> Studio Rental<br>
                    </div>
                </div>
            </div> <!-- end row-->

            <div class="row">
                <div class="half-row">
                    <label>
                        Talent Development
                    </label>
                    <div class="checkboxlist">
                      <div class ="cb-container">
                        <input type="checkbox" name="talent_dev[]" value="vocalcoach"> Vocal Coach<br>
                        <input type="checkbox" name="talent_dev[]" value="actingcoach"> Acting Coach<br>
                        <input type="checkbox" name="talent_dev[]" value="instrumentteacher"> Instrument Teacher<br>
                        <input type="checkbox" name="talent_dev[]" value="danceinstructor"> Dance Instructor<br>
                        <input type="checkbox" name="talent_dev[]" value="artinstructor"> Art Instructor<br>
                        <input type="checkbox" name="talent_dev[]" value="schoolplacement"> School Placement<br>
                      </div>
                    </div>
                </div>
                <div class="half-row right-col">
                    <label>
                        Additional Requests
                    </label>
                    <textarea id="additional" name="additional" autocomplete="off" ></textarea>
                </div>
            </div>
        </div> <!--end row-->
    
        <div class="buttons_container">
            <div class="buttons">
                <button type="button" class="prev-button button">
                    Previous
                </button>
           
            <button type="button" id="app3-next" class="next-button button">
                Next
            </button>
            </div>
        </div>
    </div>
    
		
    
<!------------------------------------------------------------------------------------------------------------>


    <div id="app4">

        <div class="app_heading">
            <h1>
                Application
            </h1>
            <p>
                More About Yourself
            </p>
        </div>
    
    
        <div class="navigation">
            <ul>
                <li>
                    Step 1 <br><br> <span>Personal Information</span>
                </li>
                <li>
                    Step 2 <br><br> <span>Talent</span>
                </li>
                <li>
                    Step 3 <br><br> <span>Desired Services</span>
                </li>
                <li class="services_li">
                    Step 4 <br><br> <span>More About Yourself</span>
                </li>
            </ul>
        </div>
    
        <div class="info"> 
           <div class="app4_wrapper">
            <div class="row">
                <p>
                    <label id="describeyourself-label">
                        Describe Yourself*
                    </label>
                    <textarea id="aboutme" name="aboutme" autocomplete="off" rows="12" placeholder="(max 1000 characters)" oninput="countChars();" required></textarea>
                </p>
                <div id="instagram">
                    <p>
                        <label>
                            Instagram Link
                        </label>
                        <input type="text" name="instagram" autocomplete="off"></input>
                        
                    </p>
                </div>
                <div id="facebook">
                    <p>
                        <label>
                            Facebook Link
                        </label>
                        <input type="text" name="facebook" autocomplete="off"></input>
                        
                    </p>
                </div>
                <div id="twitter">
                    <p>
                        <label>
                            Twitter Link
                        </label>
                        <input type="text" name="twitter" autocomplete="off"></input>
                        
                    </p>
                </div>
                <div id="youtube">
                    <p>
                        <label>
                            YouTube Link
                        </label>
                        <input type="text" name="youtube" autocomplete="off"></input>
                        
                    </p>
                </div>
                <div id="add_links">
                    <p>
                        <label>
                            Personal Web/Social Media
                        </label>
                        <input type="text" name="socialmedia[]" autocomplete="off"></input>
                        <div id="extra_links"></div>
                        <button type="button" class="addlink-button text-button" onclick="add_link();">Add Link</button>
                        <button type="button" class="removelink-button text-button" onclick="remove_link('extra_links');">Remove Link</button>
                    </p>
                </div>
                <p>
                    <label id="experiences-label">
                        Experiences* 
                    </label>
                    <textarea id="exp" name="experience" autocomplete="off" rows="4" oninput="countChars();" required></textarea>
                </p>
                <p>
                    <label id="awards-label">
                        Awards 
                    </label>
                    <textarea id="awards" name="awards" autocomplete="off" rows="4" oninput="countChars();"></textarea>
                </p>
                <p>
                    <label>
                        Current Representative
                    </label>
                    <input type="text" name="curr_rep" autocomplete="off"></input>
                </p>        
            </div>
        </div>
    
        <div class="buttons_container clearfix">
                 <button type="button" class="prev-button button">
                    Previous
                </button>
                <button id="submit-button" class="submit-button button">
                    Submit
                </button>
                    
        </div>
    
    </div>
</div>
    </form>

    <!------------------------------------------------------------------------------------------------------------>


		<footer id="footer">
			<div class="social-media-bar">
			<ul>
				<li><a target="_blank" href="https://twitter.com/talentscool"><img src="images/twitter_logo.png" title="Follow us on Twitter!" class="media-icon"></a></li>
				<li><a target="_blank" href="https://www.facebook.com/talentscool"><img src="images/facebook_logo.png" title="Follow us on Facebook!" class="media-icon"></a>
                </li>
				<li><a target="_blank" href="https://www.instagram.com/talentscool/"><img src="images/instagram_logo.png" title="Follow us on Instagram!" class="media-icon">
                </a></li>
			</ul>
		</div>
			<p>Copyright &copy 2016. Talentscool, Inc. All rights reserved. </p>
		</footer>

</body>

<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script> -->
<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script src="js/application-script.js"></script>
<script src="js/countries.js"></script>
<script language="javascript">populateCountries("country", "state");</script>
<script language="javascript">populateGender();</script>