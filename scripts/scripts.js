$(document).ready(function () {
	var musica = document.getElementById("musica");
	$('.musica').click(function () {
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
	$('.fancybox-media').fancybox({
		openEffect: 'none',
		closeEffect: 'none',
		helpers: {
			media: {}
		}
	});
});