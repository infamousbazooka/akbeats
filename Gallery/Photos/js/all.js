function hideloader() {
	$('.loader').css('display', 'none');
}
var flag = 0;
$(document).ready(function() {
	$('.section').css('min-height', $(window).height() + "px");
	$('.main').css('line-height', $(window).height() + "px");
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