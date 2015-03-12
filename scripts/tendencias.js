$(document).ready(function(){
	$('.slider1').bxSlider({
		slideWidth:2000,
		minSlides:5,
		maxSlides:5,
		infiniteLoop:false,
		hideControlOnEnd:true,
		slideMargin:0,
		pager:false
	});
	$('.slider2').bxSlider({
		slideWidth:1000,
		minSlides:3,
		maxSlides:3,
		infiniteLoop:false,
		hideControlOnEnd:true,
		slideMargin:0,
		pager:false
	});
	$('.menu, .cerrar').click(function() {
		$('.bloque-menu').toggle();
		return false;
	});
});