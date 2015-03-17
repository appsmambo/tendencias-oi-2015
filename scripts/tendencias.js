$(document).ready(function(){
	var ancho = $(document).width();
	$('.slider1').bxSlider({
		slideWidth:ancho,
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
		$('.imprescindibles').attr('src', urlBase + '/images/imprescindible-mobile.png');
		$(this).hide();
		//$('.bloque-imprescindibles').hide();
		return false;
	});
});
$(window).load(function() {
	var alto = $(document).height();
	var altoMaximo = parseInt(alto * 0.19);
	$(document).scroll(function() {
		if ($(document).scrollTop() > altoMaximo)
			$('.bloque-imprescindibles').css('position', 'fixed');
		else
			$('.bloque-imprescindibles').css('position', 'absolute');
	});
});