var flag = 0;
$(document).ready(function() {
	$('.section').css('height', $(window).height() + "px");
	$('.section-half').css('height', ($(window).height()*1/4) + "px");
	$('.three-inst').css('height', ($(window).height()*3/4) + "px");
	$('.main').css('line-height', $(window).height() + "px");
	$('.arrow h1').css('width', $(".arrow h1").height() + "px");
	$('.arrow').css('top', ($(window).height() - $(".arrow").height()) + "px");
	$('.btn').click(function() {
		if(flag == 0){
			$('.mobile ul').show();
			flag = 1;
		}
		else{
			$('.mobile ul').hide();
			flag = 0;
		}
	});
});
$(window).resize(function() {
	$('.section').css('height', $(window).height() + "px");
	$('.section-half').css('height', ($(window).height()*1/4) + "px");
	$('.three-inst').css('height', ($(window).height()*3/4) + "px");
	$('.main').css('line-height', $(window).height() + "px");
	$('.arrow h1').css('width', $(".arrow h1").height() + "px");
	$('.arrow').css('top', ($(window).height() - $(".arrow").height()) + "px");
});
function hideloader(){
	$('.loader').css('display', 'none');
}
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
	var arh = $('window').height();
	if($(window).scrollTop() > arh){
		$('.arrow').css('display', 'none');
	}
	else{
		$('.arrow').css('display', 'inline-block');
	}
	if ($(window).scrollTop() > num) {
		$('.menu').addClass('fixed');
	}
	else {
		num = $('.land').height();
		$('.menu').removeClass('fixed');
	}
});