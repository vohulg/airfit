$(function() {

	var callState = false;
	$('.right-call .call-top, .call-open').click(function() {
		var delta = (callState) ? "-=260" : "+=260";
		$('.right-call').animate({width: delta}, 250);
		callState = !callState;
		return false;
	});

});