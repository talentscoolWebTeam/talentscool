<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        TalentsCool | Application
    </title>
    
    <link rel="stylesheet" href="css/application-style.css" />
    <link href='https://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
</head>

<body>
	
    <div class="header">
        <div>
            <h1><a href="index.html"><img src="images/TSVector.png"></a></h1>
        </div>
    </div>

    {!! Form::open(['url' => 'submitapp', 'method'=>'POST', 'name' => 'application', 'files'=>true])!!}
    <div id="app1">
        <div class="app_heading">
            <h1>
                Application
                <div>
                
                </div>
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
                <!--<li>
                    Step 5 <br><br> <span>Review Application</span>
                </li>
                <li>
                    Step 6 <br><br> <span>Complete</span>
                </li>-->
            </ul>
<!-- 
            <div>
                <br><br><br>*required
            </div>
 -->
        </div>
    
        <div class="info"> 
	    <p>
                <label>
                    Headshot
                </label>
                <input type="file" class = "left" id="profile_image" onchange="validateImage('profile_image');" name = "profile_image" autocomplete="off" placeholder="Profile Photo" required></input>
        </p>

            <p>
		    <img class = "right" id="display_image" src="#" alt="<Choose Profile Pic>" />
	    </p>
	    <p>	
	       <label>
                    First Name
               </label>
                <input id="first_name" name="first_name" type="text" class="left" autocomplete="off" placeholder="First Name*" required></input>
            </p>
            <p>
                <label>
                    Last Name
                </label>
                <input id="last_name" name="last_name" type="text" class="right" autocomplete="off" placeholder="Last Name*" required></input>
            </p>
            <p>
                <label>
                    E-mail
                </label>
                <input onchange="validateEmail('email');" id="email" name="email" type="text" class="left" autocomplete="off" placeholder="E-mail*" required></input>
            </p>
            <p>
                <label>
                    Phone Number
                </label>
                <input onchange="validatePhone('phone');" id="phone" name="phone" type="text" class="right" onclick="this.placeholder='(_ _ _) _ _ _ - _ _ _ _';" autocomplete="off" placeholder="Phone Number" required></input>
            </p>
            <p>
                <label>
                    Country
                </label>
                <select id="country" name="country" placeholder="Country" required></select>
            </p>
            <p>
                <label>
                    State
                </label>
                <select id="state" name="state" placeholder="State" required></select>
            </p>
            <p>
                <label>
                    City
                </label>
                <input type="text" id="city" name="city" class="left" autocomplete="off" placeholder="City" required></input>
            </p>
            <p>
                <label>
                    Zip Code
                </label>
                <input type="text" name = "zip" class="right" autocomplete="off" placeholder="Zip Code" required></input>
            </p>
            <p>
                <label>
                    Date of Birth
                </label>
                <input onchange="validateDOB('dob');" id="dob" type="text" name ="dob" class="left" autocomplete="off" placeholder="Date of Birth" onclick="this.placeholder='MM/DD/YYYY';" required></input>
            </p>
            <p>
                <label>
                    Gender
                </label>
                <select name="gender" id="gender" class="right" autocomplete="off" required></select>
            </p>
            
        </div>
    
     <div class="buttons_container">
            <div class="buttons">
                <button class="next-button">
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
                <!--
                                <li>
                                    Step 5 <br><br> <span>Review Application</span>
                                </li>
                                <li>
                                    Step 6 <br><br> <span>Complete</span>
                                </li>
                 -->
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
                            <div id = "Dance" class = "talent">
                                <p id="portfolio" style="padding-bottom: 0px;">
                                    <label>Talent</label>
                                    <input id="specific_talent" name="specific_talent[]" type="text" placeholder="Hip Hop, Jazz, Ballet, Western, Zumba">
                                </p>

                            </div><!-- for dance-->
                            <div id = "Fashion" class = "talent">
                                <p id="portfolio" style="padding-bottom: 0px;">
                                    <label>Talent</label>
                                    <input id="specific_talent" name="specific_talent[]" type="text" class="left" autocomplete="off" placeholder="Model, Clothing Stylist, Hair Stylist, Designing">
                                </p>
                            </div><!-- for fashion-->
                            <div id = "Film" class = "talent">
                                <p id="portfolio" style="padding-bottom: 0px;">
                                    <label>Talent</label>
                                    <input id="specific_talent" name="specific_talent[]" type="text" class="left" autocomplete="off" placeholder="Actor, Comedian, Make-Up Artist">
                                </p>
                            </div><!-- for film-->
                            <div id = "Athletics" class = "talent">
                                <p id="portfolio" style="padding-bottom: 0px;">
                                    <label>Talent</label>
                                    <input id="specific_talent" name="specific_talent[]" type="text" class="left" autocomplete="off" placeholder="Gymnastics, Football, Wrestling, Kayaking, Martial Arts">
                                </p>
                            </div><!-- for athletics-->
                            <div id = "Music" class = "talent">
                                <p id="portfolio" style="padding-bottom: 0px;">
                                    <label>Talent</label>
                                    <input id="specific_talent" name="specific_talent[]" type="text" class="left" autocomplete="off" placeholder="Songwriter, Vocalist, Pianist, Guitarist">
                                </p>
                            </div><!-- for music-->
                            <div id = "Art" class = "talent">
                                <p id="portfolio" style="padding-bottom: 0px;">
                                    <label>Talent</label>
                                    <input id="specific_talent" name="specific_talent[]" type="text" class="left" autocomplete="off" placeholder="Painting, Photography, Architecture, Sculpting, Crafting">
                                </p>
                            </div><!-- for art-->
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
                                    <button class="removeRow">Remove Media</button>
                                </div>
                                <div id="media3" class = "visible">
                                    <select id="drop3" name="type3[]">
                                        <option>Image</option>
                                        <option>Audio</option>
                                        <option>Video</option>
                                    </select>
                                    <input id="link3" name="media3[]" placeholder="Enter Link" />
                                    <button class="removeRow">Remove Media</button>
                                </div>
                            </div>
                            <button class="addRow">Add Media</button>
                        </div>

                    </div>
                </div>
                <button class="addTalent">Add Talent</button>
                <button class="removeTalent">Remove Talent</button>
            </div>
        </div>
        <div class="buttons_container">
            <div class="buttons">
                <button class="prev-button">
                    Previous
                </button>
                <button class="next-button">
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
<!-- 
                <li>
                    Step 5 <br><br> <span>Review Application</span>
                </li>
                <li>
                    Step 6 <br><br> <span>Complete</span>
                </li>
 -->
            </ul>
<!-- 
            <div>
                <br><br><br>*required
            </div>
 -->
        </div>
    
        <div class="info"> 
           <div class="app3_wrapper">
                <p>

                    <label>
                        Describe Yourself
                    </label>
                    <textarea id="describe" name="aboutme" autocomplete="off" rows="12" placeholder="Describe Yourself (max 1000 characters)*" oninput="countChars();" required></textarea>
                </p>
                <div id="instagram">
                    <p>
                        <label>
                            Instagram Link
                        </label>
                        <input type="text" name="instagram" autocomplete="off" placeholder="Instagram Link" required></input>
                        
                    </p>
                </div>
                <div id="facebook">
                    <p>
                        <label>
                            Facebook Link
                        </label>
                        <input type="text" name="facebook" autocomplete="off" placeholder="Facebook Link" required></input>
                        
                    </p>
                </div>
                <div id="twitter">
                    <p>
                        <label>
                            Twitter Link
                        </label>
                        <input type="text" name="twitter" autocomplete="off" placeholder="Twitter Link" required></input>
                        
                    </p>
                </div>
                <div id="youtube">
                    <p>
                        <label>
                            YouTube Link
                        </label>
                        <input type="text" name="youtube" autocomplete="off" placeholder="YouTube Link" required></input>
                        
                    </p>
                </div>
                <div id="add_links">
                    <p>
                        <label>
                            Personal Web/Social Media
                        </label>
                        <input type="text" name="socialmedia[]" autocomplete="off" placeholder="Personal Web/Social Media" required></input>
                        <button class="addlink-button" onclick="add_link();">Add Links</button>
                    </p>
                </div>
                <p>
                    <label>
                        Experiences 
                    </label>
                    <textarea id="exp" name="experience" autocomplete="off" rows="4" placeholder="Experiences" oninput="countChars();" required></textarea>
                </p>
                <p>
                    <label>
                        Awards 
                    </label>
                    <textarea id="awards" name="awards" autocomplete="off" rows="4" placeholder="Awards" oninput="countChars();" required></textarea>
                </p>
                <p>
                    <label>
                        Current Representative
                    </label>
                    <input type="text" name="curr_rep" autocomplete="off" placeholder="Current Representative" required></input>
                </p>        
            </div>
        </div>
    
        <div class="buttons_container">
            <div class="buttons">
                <button class="prev-button">
                    Previous
                </button>
                <button class="submit-button">
                    Submit
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
<!-- 
                <li>
                    Step 5 <br><br> <span>Review Application</span>
                </li>
                <li>
                    Step 6 <br><br> <span>Complete</span>
                </li>
 -->
            </ul>
 

        </div>
    
        <div class="info">
            <p>
                <label>
                    Opportunities
                </label>
                <div class="checkboxlist">
                    <h3>OPPORTUNITIES</h3>
                    <input type="checkbox" name="opportunity[]" value="booking"> Bookings<br>
                    <input type="checkbox" name="opportunity[]" value="audition"> Auditions<br>
                    <input type="checkbox" name="opportunity[]" value="tour"> Tours<br>
                    <input type="checkbox" name="opportunity[]" value="showcase"> Showcases<br>
                    <input type="checkbox" name="opportunity[]" value="internship"> Internships<br>
                    <input type="checkbox" name="opportunity[]" value="job"> Jobs<br>
                    <input type="checkbox" name="opportunity[]" value="endorsement"> Endorsements<br>
                    <input type="checkbox" name="opportunity[]" value="none"> None<br>
                </div>
            </p>
            <p>
                <label>
                    Representation
                </label>
            <div class="checkboxlist">
                <h3>REPRESENTATION</h3>
                <input type="checkbox" name="representation[]" value="manager"> Manager<br>
                <input type="checkbox" name="representation[]" value="agent"> Agent<br>
                <input type="checkbox" name="representation[]" value="record_deal"> Record Deal<br>
                <input type="checkbox" name="representation[]" value="booking_agent"> Booking Agent<br>
                <input type="checkbox" name="representation[]" value="publicist"> Publicist<br>
                <input type="checkbox" name="representation[]" value="talent_agent"> Talent Agent<br>
                <input type="checkbox" name="representation[]" value="brand_manager"> Brand Manager<br>
                <input type="checkbox" name="representation[]" value="none"> None<br>
            </div>
            </p>
            <p>
                <label>
                    Talent Development
                </label>
                <div class="checkboxlist">
                  <h3>TALENT DEVELOPMENT</h3>
                  <input type="checkbox" name="talent_dev[]" value="vocalcoach"> Vocal Coach<br>
                  <input type="checkbox" name="talent_dev[]" value="actingcoach"> Acting Coach<br>
                  <input type="checkbox" name="talent_dev[]" value="instrumentteacher"> Instrument Teacher<br>
                  <input type="checkbox" name="talent_dev[]" value="danceinstructor"> Dance Instructor<br>
                  <input type="checkbox" name="talent_dev[]" value="artinstructor"> Art Instructor<br>
                  <input type="checkbox" name="talent_dev[]" value="schoolplacement"> School Placement<br>
                  <input type="checkbox" name="talent_dev[]" value="none"> None<br>
                </div>
            </p>
            <p>
                <label>
                    General Services
                </label>
                <div class="checkboxlist">
                  <h3>GENERAL SERVICES</h3>
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
                  <input type="checkbox" name="general[]" value="none"> None<br>
                </div>
            </p>
            <p>
                <label>
                    Vanity & Luxury Services
                </label>
                <div class="checkboxlist">
                <h3>VANITY AND LUXURY SERVICES</h3>
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
                <input type="checkbox" name="vanitylux[]" value="none"> None<br>
                </div>
            </p>
            <p style="margin-left: 11.5%;">
                <label>
                    Additional Requests
                </label>
                <input style="width: 500px;" type="text" id="additional" class="right" autocomplete="off" placeholder="Additional Requests" required></input>
            </p>
        </div>
    
        <div class="buttons_container">
            <div class="buttons">
                <button class="prev-button">
                    Previous
                </button>
           
<!-- 
                <a style="text-decoration: none; color: white;" href="../renas_code/app-thankyou.html"><button class="submit-button">
                    Next
                </button></a>
 -->
            <button class="next-button">
                Next
            </button>
            </div>
        </div>
    </div>
    </form>
		
    
<!------------------------------------------------------------------------------------------------------------>
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

<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script> -->
<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script src="js/application-script.js"></script>
<script src="js/countries.js"></script>
<script language="javascript">populateCountries("country", "state");</script>
<script language="javascript">populateGender();</script>
<script language="javascript">populateTalentCategory();</script>
<script language="javascript">populateOpportunities();</script>
<script language="javascript">populateRepresentation();</script>
<script language="javascript">populateTalentDevelopment();</script>
<script language="javascript">populateGeneralServices();</script>
<script language="javascript">populateVanity();</script>