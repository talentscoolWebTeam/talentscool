$('.navigation li:nth-child(1)').click(function() {
    //alert("clicked first");
    document.getElementById("app1").style.display = "block";
    document.getElementById("app2").style.display = "none";
    document.getElementById("app3").style.display = "none";
    document.getElementById("app4").style.display = "none";
});

$('.navigation li:nth-child(2)').click(function() {
    //alert("clicked second");
    document.getElementById("app1").style.display = "none";
    document.getElementById("app2").style.display = "block";
    document.getElementById("app3").style.display = "none";
    document.getElementById("app4").style.display = "none";
});

$('.navigation li:nth-child(3)').click(function() {
    //alert("clicked third");
    document.getElementById("app1").style.display = "none";
    document.getElementById("app2").style.display = "none";
    document.getElementById("app3").style.display = "block";
    document.getElementById("app4").style.display = "none";
});

$('.navigation li:nth-child(4)').click(function() {
    //alert("clicked fourth");
    document.getElementById("app1").style.display = "none";
    document.getElementById("app2").style.display = "none";
    document.getElementById("app3").style.display = "none";
    document.getElementById("app4").style.display = "block";
});

/* Next and previous buttons */
/* app1 next */
$('#app1 .next-button').click(function() {
    document.getElementById("app1").style.display = "none";
    document.getElementById("app2").style.display = "block";
    document.getElementById("app3").style.display = "none";
    document.getElementById("app4").style.display = "none";
});
/* app2 prev */
$('#app2 .prev-button').click(function() {
    document.getElementById("app1").style.display = "block";
    document.getElementById("app2").style.display = "none";
    document.getElementById("app3").style.display = "none";
    document.getElementById("app4").style.display = "none";
});
/* app2 next */
$('#app2 .next-button').click(function() {
    document.getElementById("app1").style.display = "none";
    document.getElementById("app2").style.display = "none";
    document.getElementById("app3").style.display = "block";
    document.getElementById("app4").style.display = "none";
});
/* app3 prev */
$('#app3 .prev-button').click(function() {
    document.getElementById("app1").style.display = "none";
    document.getElementById("app2").style.display = "block";
    document.getElementById("app3").style.display = "none";
    document.getElementById("app4").style.display = "none";
});
/* app3 next */
$('#app3 .next-button').click(function() {
    document.getElementById("app1").style.display = "none";
    document.getElementById("app2").style.display = "none";
    document.getElementById("app3").style.display = "none";
    document.getElementById("app4").style.display = "block";
});
/* app4 previous */
$('#app4 .prev-button').click(function() {
    document.getElementById("app1").style.display = "none";
    document.getElementById("app2").style.display = "none";
    document.getElementById("app3").style.display = "block";
    document.getElementById("app4").style.display = "none";
});

function populateGender() {
    var gender = document.getElementById("gender");
    gender.options[0] = new Option('Select Gender','-1');
    gender.options[1] = new Option('Male','Male');
    gender.options[2] = new Option('Female','Female');
    gender.options[3] = new Option('Other','Other');
    gender.options[4] = new Option('Prefer Not To Say','Prefer Not To Say');
}

function populateTalentCategory() {
    var talent = document.getElementById("talent_category");
    talent.options[0] = new Option('Select Talent Category','-1');
    talent.options[1] = new Option('Dancer','Dancer');
    talent.options[2] = new Option('Fashion','Fashion');
    talent.options[3] = new Option('Film','Film');
    talent.options[4] = new Option('Athlete','Athlete');
    talent.options[5] = new Option('Musician','Musician');
    talent.options[6] = new Option('Painter','Painter');
    talent.options[7] = new Option('Other (Specify Below)','Other');
}

function populateOpportunities() {
    var opp = document.getElementById("opportunities");
    opp.options[0] = new Option('Select Opportunities','-1');
    opp.options[1] = new Option('Bookings','Bookings');
    opp.options[2] = new Option('Endorsements','Endorsements');
    opp.options[3] = new Option('Auditions','Auditions');
    opp.options[4] = new Option('Showcases','Showcases');
    opp.options[5] = new Option('Appearances','Appearances');
    opp.options[6] = new Option('Collaborations','Collarborations');
    opp.options[7] = new Option('Jobs','Jobs');
    opp.options[8] = new Option('Internships','Internships');
}

function populateRepresentation() {
    var rep = document.getElementById("representation");
    rep.options[0] = new Option('Select Representation','-1');
    rep.options[1] = new Option('Manager','Manager');
    rep.options[2] = new Option('Agent','Agent');
    rep.options[3] = new Option('Record Deal','Record Deal');
    rep.options[4] = new Option('Booking Agent','Booking Agent');
    rep.options[5] = new Option('Publicist','Publicist');
    rep.options[6] = new Option('Talent Agent','Talent Agent');
    rep.options[7] = new Option('Brand Manager','Brand Manager');
}

function populateTalentDevelopment() {
    var td = document.getElementById("talent_development");
    td.options[0] = new Option('Select Talent Development','-1');
    td.options[1] = new Option('Vocal Coach','Vocal Coach');
    td.options[2] = new Option('Acting Coach','Acting Coach');
    td.options[3] = new Option('Instrument Teacher','Instrument Teacher');
    td.options[4] = new Option('Dance Instructor','Dance Instructor');
    td.options[5] = new Option('Art Instructor','Art Instructor');
    td.options[6] = new Option('School Placement','School Placement');
}

function populateGeneralServices() {
    var gs = document.getElementById("general_services");
    gs.options[0] = new Option('Select General Services','-1');
    gs.options[1] = new Option('Musician','Musician');
    gs.options[2] = new Option('Vocalist','Vocalist');
    gs.options[3] = new Option('Dancer','Dancer');
    gs.options[4] = new Option('Lawyer','Lawyer');
    gs.options[5] = new Option('Accountant','Accountant');
    gs.options[6] = new Option('Investor','Investor');
    gs.options[7] = new Option('Personal Assistant','Personal Assistant');
    gs.options[8] = new Option('Web Designer','Web Designer');
    gs.options[9] = new Option('Engineer','Engineer');
    gs.options[10] = new Option('Fitness Trainer','Fitness Trainer');
    gs.options[11] = new Option('Camera Crew','Camera Crew');
}

function populateVanity() {
    var vanity = document.getElementById("vanity");
    vanity.options[0] = new Option('Select Vanity & Luxury Services','-1');
    vanity.options[1] = new Option('Clothing Stylist','Clothing Stylist');
    vanity.options[2] = new Option('Hair Stylist','Hair Stylist');
    vanity.options[3] = new Option('Barber','Barber');
    vanity.options[4] = new Option('Makeup Artist','Makeup Artist');
    vanity.options[5] = new Option('Model','Model');
    vanity.options[6] = new Option('Photographer','Photographer');
    vanity.options[7] = new Option('Bodyguard','Bodyguard');
    vanity.options[8] = new Option('Limo Driver','Limo Driver');
    vanity.options[9] = new Option('Private Jet Rental','Private Jet Rental');
    vanity.options[10] = new Option('Studio Rental','Studio Rental');
}

var added_links = 0;
function add_link() {
    //alert("in add links");
    added_links = added_links + 1;
    if(added_links >= 4) {
        alert("Cannot add more than 3 new links");
    }
    else {
        var name = 'extralink' + added_links;
        document.getElementById("add_links").innerHTML+= '<p><input type="text" name=' + name + ' focused autocomplete="off" placeholder="New Link" required></input></p>';
    }
}

function countChars() {
    var ta = document.getElementById("describe");
    if(ta.value.length > 1000) {
        ta.value = ta.value.substring(0, 1000);
    }
}

function validateLength(string_id) {
    var name = document.getElementById(string_id);
    if(name.value.length > 50) {
        alert("Length must be less than 50 characters");
        name.value = name.value.substring(0, 50);
    }
}

function validateText(name_id) {
    //alert("validateName");
    var regex = /^[A-Za-z]+$/;
    var name = document.getElementById(name_id);
    if(!regex.test(name.value)) {
        alert("This cannot contain numbers or special characters");
        name.value = "";
    }
    validateLength(name_id);
}


function validateEmail(email_id) {
    //alert("validateEmail");
    var regex = /^(([^<>()\[\]\.,;:\s@\"]+(\.[^<>()\[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;
    var email = document.getElementById(email_id);
    if(!regex.test(email.value)) {
        alert("Invalid E-mail");
        email.value = "";
    }
}

function validatePhone(phone_id) {
    //alert("validatePhone");
    var regex = /^(\()?\d{3}(\))?(-|\s)?\d{3}(-|\s)\d{4}$|^[0-9]{10}$/;
    var phone = document.getElementById(phone_id);
    if(!regex.test(phone.value)) {
        alert("Invalid Phone Number");
        phone.value = "";
    }
}

function validateDOB(dob_id) {
//     alert("validateDOB");
    var regex = /^(0[1-9]|1[0-2])\/(0[1-9]|1\d|2\d|3[01])\/(19|20)\d{2}$/;
    var dob = document.getElementById(dob_id);
//     alert(dob.value);
//     if(!regex.test(dob.value)) {
//        alert("Invalid Date of Birth");
//        dob.value = "";
//     }
    var today = new Date();
//     alert(today);
    var dob_date = new Date(dob.value);
//     alert(dob_date);
    var age = today.getFullYear() - dob_date.getFullYear();
//     alert(age);
    var month = today.getMonth() - dob_date.getMonth();
    if (month < 0 || (month == 0 && today.getDate() < dob_date.getDate())) {
        age--;
    }
    if(age < 13) {
        alert("Applicant must be at least 13 years old");
        dob.value = "";
    }
}


function validateImage(image_id) {
    var photo = document.getElementById(image_id);
    var path = photo.value;
    var extension = path.split('.').pop();
    //alert(extension);
    
    if((extension == "gif") || (extension == "png") || (extension == "bmp") || (extension == "jpeg") || (extension == "jpg")) {
        //valid extensions
        //alert("valid extension");
        //do nothing, all's well
    }
    
    else {
        alert("Invalid Extension for Images");
        photo.value = "";
    }
    
}


function validateVideo(video_id) {
    var video = document.getElementById(video_id);
    var path = video.value;
    var extension = path.split('.').pop();
    //alert(extension);
    
    if((extension == "flv") || (extension == "gif") || (extension == "avi") || (extension == "mov") || (extension == "wmv")
    || (extension == "mp4") || (extension == "mpg") || (extension == "mp2") || (extension == "mpeg") || (extension == "mpe") 
    || (extension == "mpv") || (extension == "m4v")) {
        //valid extensions
        //alert("valid extension");
        //do nothing, all's well
    }
    
    else {
        alert("Invalid Extension for Video");
        video.value = "";
    }
    
}



function validateAudio(audio_id) {
    var audio = document.getElementById(audio_id);
    var path = audio.value;
    var extension = path.split('.').pop();
    //alert(extension);
    
    if((extension == "aac") || (extension == "wav") || (extension == "wma") || (extension == "mp3") || (extension == "mp4")) {
        //valid extensions
        //alert("valid extension");
        //do nothing, all's well
    }
    
    else {
        alert("Invalid Extension for Audio");
        audio.value = "";
    }
    
}



jQuery(function($) {
//     var $j = jQuery.noConflict();
//     $j("#dob").datepicker();
    $("#dob").datepicker({
      changeMonth: true,
      changeYear: true,
      yearRange: '1916:2016'
    });
});
















