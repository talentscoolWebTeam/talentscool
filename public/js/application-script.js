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
    document.getElementById("app3").style.display = "none";
    document.getElementById("app4").style.display = "block";
});

$('.navigation li:nth-child(4)').click(function() {
    //alert("clicked fourth");
    document.getElementById("app1").style.display = "none";
    document.getElementById("app2").style.display = "none";
    document.getElementById("app3").style.display = "block";
    document.getElementById("app4").style.display = "none";
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
    document.getElementById("app3").style.display = "none";
    document.getElementById("app4").style.display = "block";
});
/* app3 prev */
$('#app3 .prev-button').click(function() {
    document.getElementById("app1").style.display = "none";
    document.getElementById("app2").style.display = "none";
    document.getElementById("app3").style.display = "none";
    document.getElementById("app4").style.display = "block";
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
    document.getElementById("app2").style.display = "block";
    document.getElementById("app3").style.display = "none";
    document.getElementById("app4").style.display = "none";
});

/* app4 previous */
$('#app4 .next-button').click(function() {
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
    gender.options[3] = new Option('Prefer Not To Say','Prefer Not To Say');
}

function populateTalentCategory() {
    var talent = document.getElementById("talent_category");
    talent.options[0] = new Option('Select Industry','-1');
    talent.options[1] = new Option('Dance','Dance');
    talent.options[2] = new Option('Fashion','Fashion');
    talent.options[3] = new Option('Film','Film');
    talent.options[4] = new Option('Athletics','Athletics');
    talent.options[5] = new Option('Music','Music');
    talent.options[6] = new Option('Art','Art');
//     talent.options[7] = new Option('Other (Specify Below)','Other');
}

/*function clearOptions() {
    var select = document.getElementById("specific_talent");
    var length = select.options.length;
    for (i = 0; i < length; i++) {
      select.options[i] = null;
    }
}
*/
/*
function furtherPopulateTalent() {
    var further = document.getElementById("specific_talent");
    var talent = document.getElementById("talent_category");
    clearOptions();
    if(talent.options[talent.selectedIndex].text == "Dancer") {
        further.options[0] = new Option('Select Specific Talent','-1');
        further.options[1] = new Option('Hip Hop','Hip Hop');
        further.options[2] = new Option('Jazz','Jazz');
        further.options[3] = new Option('Ballet','Ballet');
        further.options[4] = new Option('Western','Western');
        further.options[5] = new Option('Zumba','Zumba');
    }
    
    if(talent.options[talent.selectedIndex].text == "Fashion") {
        further.options[0] = new Option('Select Specific Talent','-1');
        further.options[1] = new Option('Model','Model');
        further.options[2] = new Option('Clothing Stylist','Clothing Stylist');
        further.options[3] = new Option('Hair Stylist','Hair Stylist');
        further.options[4] = new Option('Designing','Designing');
    }
    
    if(talent.options[talent.selectedIndex].text == "Film") {
        further.options[0] = new Option('Select Specific Talent','-1');
        further.options[1] = new Option('Actor','Actor');
        further.options[2] = new Option('Comedian','Comedian');
        further.options[3] = new Option('Make-Up Artist','Make-Up Artist');
    }
    
    if(talent.options[talent.selectedIndex].text == "Athlete") {
        further.options[0] = new Option('Select Specific Talent','-1');
        further.options[1] = new Option('Gymnast','Gymnast');
        further.options[2] = new Option('Football','Football');
        further.options[3] = new Option('Wrestling','Wrestling');
        further.options[4] = new Option('Kayaking','Kayaking');
        further.options[5] = new Option('Martial Arts','Martial Arts');
    }
    
    if(talent.options[talent.selectedIndex].text == "Musician") {
        further.options[0] = new Option('Select Specific Talent','-1');
        further.options[1] = new Option('Songwriter','Songwriter');
        further.options[2] = new Option('Vocalist','Vocalist');
        further.options[3] = new Option('Pianist','Pianist');
        further.options[4] = new Option('Guitarist','Guitarist');
    }
    
    if(talent.options[talent.selectedIndex].text == "Artist") {
        further.options[0] = new Option('Select Specific Talent','-1');
        further.options[1] = new Option('Painting','Painting');
        further.options[2] = new Option('Photography','Photography');
        further.options[3] = new Option('Architecture','Architecture');
        further.options[4] = new Option('Sculpture','Sculpture');
        further.options[5] = new Option('Crafting','Crafting');
    }
    
}*/
/*
Dance: Hip Hop, Jazz, Ballet, Western, Zumba etc.
Musician: Songwriter, Vocalist, Pianist, Guitarist etc.
Fashion: Model, clothing or hair stylist, designing etc.
Film: actor or actress, comedian, make-up artists etc.
Athlete: Gymnast, football, wrestling, kayaking, martial arts etc.
Art: Painting, Photography, architecture, sculpture, crafting etc.

*/

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
    opp.options[0].selected = true;
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
    rep.options[0].selected = true;
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
    td.options[0].selected = true;
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
    gs.options[0].selected = true;
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
    vanity.options[0].selected = true;
}

var added_links = 0;
function add_link() {
    //alert("in add links");
    added_links = added_links + 1;
    if(added_links >= 15) {
        alert("Cannot add more than 15 social media links");
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
//MB - basically does the profile pic preview thing
function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function (e) {
                $('#display_image').attr('src', e.target.result);
				$('#display_image').attr('height', 150);
				$('#display_image').attr('width', 150);
				
            }	
            
            reader.readAsDataURL(input.files[0]);
        }
    }
    
    $("#profile_image").change(function(){
        readURL(this);
    });

jQuery(function($) {
//     var $j = jQuery.noConflict();
//     $j("#dob").datepicker();
    $("#dob").datepicker({
      changeMonth: true,
      changeYear: true,
      yearRange: '1916:2016'
    });
});
//MB - function for dynamically changing the talent fields
 var uniqueId = 2;
 $('#talents').children().hide();
$("select#talent_category").change(function(){
  listId = $(this).val();
  var listChildren = $(this).parent().siblings('#talents').children();
  
  $(listChildren).each(function(){
  
    var childId = $(this).attr("id");
    if(childId == listId)
    {
      //alert(childId);
      var thisChild = $(this).parent().children('#'+childId);
      thisChild.show();
      thisChild.siblings().hide();
      thisChild.siblings('.addRow').show();
      thisChild.siblings('.media').show();
    }
    //alert(id);
    });
});
 $('.removeRow').click(function() {
    $(this).parent().hide();
    $(this).parent().attr('class', 'hidden');
 });
 $('.addRow').click(function() {
    var m2 = $(this).siblings('.media').children('#media2');
    var m3 = $(this).siblings('.media').children('#media3');
    var m2class = m2.attr('class');
    var m3class = m3.attr('class');
    //4 cases
    //case1 : media 2 and media 3 are both hidden, display m2
     if(m2class == 'hidden' && m3class == 'hidden')
     {
        m2.show();
        m2.attr('class','visible');
     }
    //case 2: media 2 is hidden, media 3 is visible, display m2
     if(m2class =='hidden' && m3class == 'visible')
     {
        m2.show();
        m2.attr('class','visible');
     }
     //case 3: media 2 is visible, media 3 is hidden, display m2
     if(m2class == 'visible' && m3class == 'hidden')
     {
       m3.show();
       m3.attr('class','visible');
     }
     //case 4: media 2 is visible, media 3 is visible, do nothing
    
 });
$(function() {
     $('.addTalent').click(function() {
         var copy = $("#talent-container").clone(true);
         var formId = 'talent-container' + uniqueId;
         copy.attr('id', formId );
         
         $('#container').append(copy);
         $('#' + formId).find('.media:last-child').each(function(){
         var $temp = $('.media:last-child').attr('id');
         alert($temp);
        // uniqueId = parseInt($tempMedia[$tempMedia.length-1])+1;
            $(this).attr('id', $(this).attr('id') + uniqueId); 
             
         });
         uniqueId++;  
     });
});