$(document).ready(function(){
	var musica = document.getElementById("musica");
	$('.musica').click(function() {
		var estado = $(this).data('estado');
		if (estado == 'off') {
			musica.pause();
			$(this).data('estado', 'on');
		} else {
			musica.play();
			$(this).data('estado', 'off');
		}
		return false;
	});
});