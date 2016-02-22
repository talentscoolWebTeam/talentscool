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
    gender.options[1] = new Option('Male','0');
    gender.options[2] = new Option('Female','1');
    gender.options[3] = new Option('Other','2');
    gender.options[4] = new Option('Prefer Not To Say','3');
}

function add_link() {
    //alert("in add links");
    document.getElementById("add_links").innerHTML+= '<p><input type="text" focused autocomplete="off" placeholder="New Link" required></input></p>';
}

function countChars() {
    var ta = document.getElementById("describe");
    if(ta.value.length > 1000) {
        ta.value = ta.value.substring(0, 1000);
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
    var regex = /^(\()?\d{3}(\))?(-|\s)?\d{3}(-|\s)\d{4}$/;
    var phone = document.getElementById(phone_id);
    if(!regex.test(phone.value)) {
        alert("Invalid Phone Number");
        phone.value = "";
    }
}

function validateDOB(dob_id) {
    //alert("validateDOB");
    var regex = /^(0[1-9]|1[0-2])\/(0[1-9]|1\d|2\d|3[01])\/(19|20)\d{2}$/;
    var dob = document.getElementById(dob_id);
    if(!regex.test(dob.value)) {
       alert("Invalid Date of Birth");
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




















