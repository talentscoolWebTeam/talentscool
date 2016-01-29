/* Javascript file for adding Parallax effects to welcome page */

$('#window1').parallax({imageSrc: 'images/steampunk-city.jpg'});
$('#window3').parallax({imageSrc: 'images/city.jpg'});

/*For sticky header*/
$(document).ready(function() {
var stickyNavTop = $('.navbar').offset().top;
 
var stickyNav = function(){
var scrollTop = $(window).scrollTop();
      
if (scrollTop > stickyNavTop) { 
    $('.navbar').addClass('sticky');
     $('#window1').addClass('saveplace');
} else {
    $('.navbar').removeClass('sticky'); 
     $('#window1').removeClass('saveplace');
}

};
 
stickyNav();
 
$(window).scroll(function() {
    stickyNav();
});

$('#welcome_tab').click(function() {
    $("html, body").animate({scrollTop: 0}, 600);
});

$('#whatwedo_tab').click(function() {
    $("html, body").animate({scrollTop: $("#window2").offset().top + 10}, 600);
});

$('#services_tab').click(function() {
    $("html, body").animate({scrollTop: $("#window3").offset().top + 30}, 600);
});

$('#founder_tab').click(function() {
    $("html, body").animate({scrollTop: $("#window4").offset().top}, 600);
});


});
