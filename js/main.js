$(document).ready(function() {
	$('.section').css('height', $(window).height() + "px");
	$('.section-half').css('height', ($(window).height()/2) + "px");
	$('.main').css('line-height', $(window).height() + "px");
});
$(window).resize(function() {
	$('.section').css('height', $(window).height() + "px");
	$('.main').css('line-height', $(window).height() + "px");
});