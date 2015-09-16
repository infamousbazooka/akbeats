jQuery(document).ready(function($) {
	$('.section').css('height', $(window).height() + "px");
	$('.main').css('line-height', $(window).height() + "px");
});

jQuery(document).resize(function() {
	$('.section').css('height', $(window).height() + "px");
	$('.land').css('line-height', $(window).height() + "px");
});