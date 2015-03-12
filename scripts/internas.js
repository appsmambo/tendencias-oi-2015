$(document).ready(function(){
	$('.fancybox-media').fancybox({
		openEffect  : 'none',
		closeEffect : 'none',
		helpers : {
			media : {}
		}
	});
	$('.menu, .cerrar').click(function() {
		$('.bloque-menu').toggle();
		return false;
	});
});