$(document).ready(function(){
	$('.slider1').bxSlider({
		slideWidth:2000,
		minSlides:5,
		maxSlides:5,
		hideControlOnEnd:false,
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
	$('.menu, .cerrar').click(function() {
		$('.bloque-menu').toggle();
		return false;
	});
	$('.cerrar-tendencias').click(function() {
		$('.bloque-imprescindibles').hide();
		return false;
	});
	$('.bloque-prenda').hover(
		function() {
			$('div', this).fadeIn();
		},
		function() {
			$('div', this).fadeOut();
		}
	);
});