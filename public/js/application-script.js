$('.navigation li:nth-child(1)').click(function() {
    //alert("clicked first");
    document.getElementById("app1").style.display = "block";
    document.getElementById("app2").style.display = "none";
    document.getElementById("app3").style.display = "none";
    document.getElementById("app4").style.display = "none";
    $('body').scrollTop(0);
});

$('.navigation li:nth-child(2)').click(function() {
    //alert("clicked second");
    document.getElementById("app1").style.display = "none";
    document.getElementById("app2").style.display = "block";
    document.getElementById("app3").style.display = "none";
    document.getElementById("app4").style.display = "none";
    $('body').scrollTop(0);
});

$('.navigation li:nth-child(3)').click(function() {
    //alert("clicked third");
    document.getElementById("app1").style.display = "none";
    document.getElementById("app2").style.display = "none";
    document.getElementById("app3").style.display = "block";
    document.getElementById("app4").style.display = "none";
    $('body').scrollTop(0);
});

$('.navigation li:nth-child(4)').click(function() {
    //alert("clicked fourth");
    document.getElementById("app1").style.display = "none";
    document.getElementById("app2").style.display = "none";
    document.getElementById("app3").style.display = "none";
    document.getElementById("app4").style.display = "block";
    $('body').scrollTop(0);
});

/* Next and previous buttons */
/* app1 next */
$('#app1 .next-button').click(function() {
    document.getElementById("app1").style.display = "none";
    document.getElementById("app2").style.display = "block";
    document.getElementById("app3").style.display = "none";
    document.getElementById("app4").style.display = "none";
    $('body').scrollTop(0);
});
/* app2 prev */
$('#app2 .prev-button').click(function() {
    document.getElementById("app1").style.display = "block";
    document.getElementById("app2").style.display = "none";
    document.getElementById("app3").style.display = "none";
    document.getElementById("app4").style.display = "none";
    $('body').scrollTop(0);
});
/* app2 next */
$('#app2 .next-button').click(function() {
    document.getElementById("app1").style.display = "none";
    document.getElementById("app2").style.display = "none";
    document.getElementById("app3").style.display = "block";
    document.getElementById("app4").style.display = "none";
    $('body').scrollTop(0);
});
/* app3 prev */
$('#app3 .prev-button').click(function() {
    document.getElementById("app1").style.display = "none";
    document.getElementById("app2").style.display = "block";
    document.getElementById("app3").style.display = "none";
    document.getElementById("app4").style.display = "none";
    $('body').scrollTop(0);
});
/* app3 next */
$('#app3 .next-button').click(function() {
    document.getElementById("app1").style.display = "none";
    document.getElementById("app2").style.display = "none";
    document.getElementById("app3").style.display = "none";
    document.getElementById("app4").style.display = "block";
    $('body').scrollTop(0);
});

/* app4 previous */
$('#app4 .prev-button').click(function() {
    document.getElementById("app1").style.display = "none";
    document.getElementById("app2").style.display = "none";
    document.getElementById("app3").style.display = "block";
    document.getElementById("app4").style.display = "none";
    $('body').scrollTop(0);
});

/* FOR POPULATING DROPDOWNS */
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

/* VALIDATION */
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


/* DYNAMIC ELEMENT ADDING AND REMOVAL */
var added_links = 0;
function add_link() {
    //alert("in add links");
    added_links = added_links + 1;
    if(added_links >= 15) {
        alert("Cannot add more than 15 social media links");
    }
    else {
        document.getElementById("extra_links").innerHTML+= '<p><input type="text" name="socialmedia[] focused autocomplete="off" placeholder="New Link"></input></p>';
    }
}

function remove_link(container_div_id) {
    var container = document.getElementById(container_div_id);
    if (container != null && container.childNodes.length > 0) {
        container.removeChild(container.childNodes[container.childNodes.length-1]);
    }

}

/* ADDING AND REMOVING MEDIA AND TALENT SECTION */

//MB - function for dynamically changing the talent fields
/*
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
*/
var uniqueId = 2;
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
         //alert($temp);
        // uniqueId = parseInt($tempMedia[$tempMedia.length-1])+1;
            $(this).attr('id', $(this).attr('id') + uniqueId); 
            
         });
         uniqueId++; 
     });
});

$(function() {
     $('.removeTalent').click(function() {
     var lastChild = $(this).siblings('#container').children().last().attr('id');
     if(lastChild != "talent-container")
      $("#"+lastChild).remove();
     });
});

function SetPlaceholder(talent) {
    var talent_value = talent.options[talent.selectedIndex].text;
    //alert(talent_value);
    var specific_div = talent.parentNode.nextElementSibling.firstElementChild.firstElementChild;
    var elems = specific_div.childNodes;
    for(var i = 0; i < elems.length; i++){
     if(elems[i].id == 'specific_talent'){
      //alert(elems[i].placeholder);
      switch(talent_value){
      case "Dance":
elems[i].placeholder = "Hip Hop, Jazz, Ballet, Western, Zumba";
break;
case "Fashion":
elems[i].placeholder = "Model, Clothing Stylist, Hair Stylist, Designing";
break;
case "Film":
elems[i].placeholder = "Actor, Comedian, Make-up Artist";
break;
case "Athletics":
elems[i].placeholder = "Gymnastics, Football, Wrestling, Kayaking, Martial Arts";
break;
case "Music":
elems[i].placeholder = "Songwriter, Vocalist, Pianist, Guitarist";
break;
case "Art":
elems[i].placeholder = "Painting, Photography, Architecture, Sculpting, Crafting";
break;
      }
    }
    }
    }

