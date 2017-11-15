$(document).ready(function(){
	$("#anhorvikup-1, #anhorvikup-2, #anhorvikup-3").on("click","a", function (event) {
		event.preventDefault();
		var id  = $(this).attr('href'),
		top = $(id).offset().top;
		$('body,html').animate({scrollTop: top}, 1500);
	});
});