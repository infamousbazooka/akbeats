function hideloader() {
	$('.loader').css('display', 'none');
}
$(document).ready(function() {
	$('.section').css('min-height', $(window).height() + "px");
	$('.main').css('line-height', $(window).height() + "px");
	$('.item').css('height', $(window).height());
});
$(window).resize(function() {
	$('.section').css('min-height', $(window).height() + "px");
	$('.main').css('line-height', $(window).height() + "px");
});
var num = $(window).height();
$(window).bind('scroll', function() {
	if ($(window).scrollTop() > num) {
		$('.menu').addClass('fixed');
	}
	else {
		num = $(window).height();
		$('.menu').removeClass('fixed');
	}
});