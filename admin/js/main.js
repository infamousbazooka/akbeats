function hideloader(){
	$('.loader').css('display', 'none');
}
$(document).ready(function() {
	$('.section').css('min-height', $(window).height() + "px");
	$('.main').css('line-height', $(window).height() + "px");
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

function display(id){
	$('#album').css('display', 'none');
	$('#photo').css('display', 'none');
	$('#video').css('display', 'none');
	$('#achievement').css('display', 'none');
	$(id).css('display', 'block');
}