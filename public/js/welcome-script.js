/* Javascript file for adding Parallax effects to welcome page */

$('#window1').parallax({imageSrc: 'images/steampunk-city.jpg'});
$('#window3').parallax({imageSrc: 'images/city.jpg'});
$('#window5').parallax({imageSrc: 'images/city.jpg'});


/*For sticky header*/

$(document).ready(function() {
var stickyNavTop = $('.navbar').offset().top;
var headerHt = $('div.header').height();
var navBarHt = $("div.navbar").height()*2;

var ht = $("div.header").height();
var stickyNav = function(){
var scrollTop = $(window).scrollTop();
      
if (scrollTop > stickyNavTop) { 
    $('.navbar').addClass('sticky');
     //$('#window1').addClass('saveplace');
} else {
    $('.navbar').removeClass('sticky'); 
     //$('#window1').removeClass('saveplace');
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
	//problem for iphone
	//reset the scrollTop so that the headerHt can be readjusted
	var scrollTop = $(window).scrollTop();
	//check everytime
	if(scrollTop > stickyNavTop)
	{
			$("html,body").animate({scrollTop: $("#window2").offset().top - navBarHt + headerHt}, 600);
	}
	else
	{
			$("html,body").animate({scrollTop: $("#window2").offset().top}, 600);
	}	
});

$('#services_tab').click(function() {
    $("html, body").animate({scrollTop: $("#window3").offset().top}, 600);
});

$('#founder_tab').click(function() {
    $("html, body").animate({scrollTop: $("#window4").offset().top}, 600);
});

$('#contactus_tab').click(function() {
	$("html, body").animate({scrollTop: $("#window5").offset().top}, 600);
});

});
