$(document).ready(function () {
	var musica = document.getElementById("musica");
	$('.fancybox-media').fancybox({
		openEffect: 'none',
		closeEffect: 'none',
		beforeShow: function() {
			musica.pause();
			$('.musica').data('estado', 'on');
			$('img', '.musica').attr('src', urlBase + '/images/icono-audio-off.gif');
		},
		helpers: {
			media: {}
		}
	});
	
});