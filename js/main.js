$(document).ready(function() {
	$('.section').css('height', $(window).height() + "px");
	$('.section-half').css('height', ($(window).height()*1/4) + "px");
	$('.three-inst').css('height', ($(window).height()*3/4) + "px");
	$('.main').css('line-height', $(window).height() + "px");
});
$(window).resize(function() {
	$('.section').css('height', $(window).height() + "px");
	$('.main').css('line-height', $(window).height() + "px");
});

function player (instr) {
	var audio = $(instr)[0];
	audio.play();
}
function stopper (instr) {
	var audio = $(instr)[0];
	audio.pause();
}

var num = $('.land').height();
$(window).bind('scroll', function() {
	if ($(window).scrollTop() > num) {
		$('.menu').addClass('fixed');
	}
	else {
		num = $('.land').height();
		$('.menu').removeClass('fixed');
	}
});