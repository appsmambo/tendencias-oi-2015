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
	$('.menu, .cerrar').click(function() {
		$('.bloque-menu').toggle();
		return false;
	});
});