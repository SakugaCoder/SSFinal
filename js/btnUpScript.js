$(function(){
	$(window).scroll(function(){
		var altura = $(window).scrollTop();
		console.log(altura);
		if(altura >= 720){
			$('.btnUp').slideDown();
		}
		else if(altura < 720){
			$('.btnUp').slideUp();
		}
	});
	$('.btnUp').click(function(){
		$('html, body').animate({"scrollTop":"0"},1000);
	});
});