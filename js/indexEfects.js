$(function(){
	console.log("Hi");
	$('.carousel').mouseover(function(){
		console.log("Hi");
		$(this).css({'filter':'grayscale(90%)'});
	});
	$('.carousel').mouseleave(function(){
		$(this).css({'filter':'grayscale(0%)'});
	});


});