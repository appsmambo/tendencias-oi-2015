$(document).ready(function(){
	$('.fancybox-media').fancybox({
		openEffect  : 'none',
		closeEffect : 'none',
		helpers : {
			media : {}
		}
	});
	$(".various").fancybox({
		maxWidth	: 800,
		maxHeight	: 500,
		fitToView	: false,
		width		: '80%',
		height		: '80%',
		autoSize	: false,
		closeClick	: false,
		openEffect	: 'none',
		closeEffect	: 'none'
	});
	$('.menu, .cerrar').click(function() {
		$('.bloque-menu').toggle();
		return false;
	});
	var musica = document.getElementById("musica");
	$('.musica').click(function() {
		var estado = $(this).data('estado');
		if (estado == 'off') {
			musica.pause();
			$(this).data('estado', 'on');
			$('img', this).attr('src', urlBase + '/images/icono-audio-off.gif');
		} else {
			musica.play();
			$(this).data('estado', 'off');
			$('img', this).attr('src', urlBase + '/images/icono-audio.gif');
		}
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