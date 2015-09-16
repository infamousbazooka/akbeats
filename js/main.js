$(document).ready(function() {
	$('.section').css('height', $(window).height() + "px");
	$('.main').css('line-height', $(window).height() + "px");
});
$(window).resize(function() {
	$('.section').css('height', $(window).height() + "px");
	$('.main').css('line-height', $(window).height() + "px");
});