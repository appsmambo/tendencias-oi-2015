$(document).ready(function(){
	$('.slider1').bxSlider({
		slideWidth:2000,
		minSlides:5,
		maxSlides:5,
		slideMargin:0,
		pager:false
	});
	$('.slider2').bxSlider({
		slideWidth:1000,
		minSlides:3,
		maxSlides:3,
		slideMargin:0,
		pager:false
	});
	$('.cerrar-tendencias').click(function() {
		$('.bloque-imprescindibles').hide();
		return false;
	});
});