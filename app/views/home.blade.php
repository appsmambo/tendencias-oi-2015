<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<title>Tendencias Ripley Otoño-Invierno 2015 #tueliges</title>
		<meta name="description" content="Masculine, bohemio, militar...descubre las nuevas tendencias que te trae Ripley este Otoño Invierno 2015">
		<meta name="keywords" content="tendencias, ripley, otoño invierno 2015, new york, moda, militar, tomboy, bohemio, masculine, metalicos, animal print, cuadros, mylife, tueliges">
		
		<link rel="canonical" href="{{url()}}">
		<meta property="fb:app_id" content="348754865322281">
		<meta property="og:title" content="Tendencias Ripley Otoño-Invierno 2015 #tueliges">
		<meta property="og:type" content="website">
		<meta property="og:url" content="{{url()}}">
		<meta property="og:image" content="{{url()}}/images/200x200.png">
		<meta property="og:site_name" content="Tendencias Ripley Otoño-Invierno 2015 #tueliges">
		<meta property="fb:admins" content="100008010128050">
		<meta property="og:description" content="Masculine, bohemio, militar...descubre las nuevas tendencias que te trae Ripley este Otoño Invierno 2015">
		
		<link rel="icon" href="{{url()}}/favicon.ico" type="image/x-icon">
		<link rel="stylesheet" type="text/css" href="{{url()}}/scripts/home/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="{{url()}}/scripts/fancybox/jquery.fancybox.css">
		<link rel="stylesheet" type="text/css" href="{{url()}}/css/home.css">
		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
		<script src="{{url()}}/scripts/queryloader2.min.js"></script>
		<script type="text/javascript">
			var urlBase = "{{url()}}";
			window.addEventListener('DOMContentLoaded', function () {
				new QueryLoader2(document.querySelector("body"), {
					barColor: "#fff",
					backgroundColor: "#181a20",
					percentage: false,
					barHeight: 1,
					minimumTime: 500,
					maxTime: 15000,
					fadeOutTime: 1000,
					onComplete: function() {
						<?php if (!Agent::isMobile()): ?>
						var musica = document.getElementById("musica");
						musica.volume = 0.2;
						musica.play();
						<?php endif; ?>
					}
				});
			});
		</script>
		<script src="{{url()}}/scripts/jquery.min.js"></script>
		<script src="{{url()}}/scripts/home/bootstrap.min.js"></script>
		<script src="{{url()}}/scripts/fancybox/jquery.fancybox.js"></script>
        <script src="{{url()}}/scripts/fancybox/helpers/jquery.fancybox-media.js"></script>
		<script src="{{url()}}/scripts/scripts.js"></script>
		<script src="{{url()}}/scripts/home.js"></script>
		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
			ga('create', 'UA-60722801-1', 'auto');
			ga('require', 'displayfeatures');
			ga('send', 'pageview');
		</script>
	</head>
	<body>
		<section class="bloque-menu" style="display:none">
			<a href="#" class="cerrar">
				<img src="{{url()}}/images/btn-close.png" alt="">
			</a>
			<p class="text-center">
				<a href="{{url()}}">
					HOME
				</a>
				<br>
				<a href="{{url()}}/extra-normal">
					TENDENCIAS
				</a>
				<br>
				<a href="{{url()}}/imprescindibles">
					INPRESCINDIBLES
				</a>
				<br>
				<a href="{{url()}}/must">
					MUST
				</a>
				<br>
				<a href="{{url()}}/videos">
					VIDEO
				</a>
				<br>
				<a href="{{url()}}/concurso">
					CONCURSO
				</a>
			</p>
			<hr>
			<p class="redes text-center">
				<a href="https://twitter.com/ripleyenperu" target="_blank">
					<img src="{{url()}}/images/twitter.png" alt="">
				</a>
				<a href="https://www.facebook.com/RipleyPeru" target="_blank">
					<img src="{{url()}}/images/facebook.png" alt="">
				</a>
			</p>
		</section>
		<div class="jumbotron vertical-center">
			<?php $class = (Agent::isMobile()) ? 'container' : 'container-fluid' ?>
			<section class="<?php echo $class ?> children">
				<header class="container visible-xs">
					<section class="row">
						<div class="col-xs-1 no-border">
							<?php if (Agent::isMobile()): ?>
							<a href="#" class="musica" data-estado="on">
								<img src="{{url()}}/images/icono-audio.png" alt="">
							</a>
							<?php else: ?>
							<a href="#" class="musica" data-estado="off">
								<img src="{{url()}}/images/icono-audio.gif" alt="">
							</a>
							<?php endif; ?>
						</div>
						<div class="col-xs-5 no-border">
							<a href="{{url()}}">
								<img src="{{url()}}/images/titulo-tendencias.jpg" class="img-responsive center-block">
							</a>
						</div>
						<div class="col-xs-1 no-border">
							<a href="#" class="menu pull-right text-right" data-estado="off">
								<img src="{{url()}}/images/icono-menu.png" alt="">
							</a>
						</div>
					</section>
				</header>
				<div class="row">
					<div class="col-sm-2">
						<?php if (Agent::isMobile()): ?>
						<a href="#" class="musica" data-estado="on">
							<img src="{{url()}}/images/icono-audio.png" alt="" class="img-responsive hidden-xs">
						</a>
						<?php else: ?>
						<a href="#" class="musica" data-estado="off">
							<img src="{{url()}}/images/icono-audio.gif" alt="" class="img-responsive hidden-xs">
						</a>
						<?php endif; ?>
						<img src="{{url()}}/images/home/elige-ser-tu-misma.jpg" class="img-responsive center-block" alt="">
					</div>
					<div class="col-sm-2">
						<a href="{{url()}}/extra-normal" class="hover">
							<img src="{{url()}}/images/home/extra-normal.jpg" class="img-responsive center-block" alt="">
						</a>
					</div>
					<div class="col-sm-1 hidden-xs">
						<img src="{{url()}}/images/home/tendecias-2015.jpg" class="img-responsive center-block todo-ancho" alt="">
					</div>
					<div class="col-sm-2 hidden-xs container-menu">
						<img src="{{url()}}/images/home/menu.png" class="img-responsive center-block" alt="">
						<div>
							<p class="text-right">
								<a href="{{url()}}">
									HOME
								</a>
								<br>
								<a href="{{url()}}/extra-normal">
									TENDENCIAS
								</a>
								<br>
								<a href="{{url()}}/imprescindibles">
									INPRESCINDIBLES
								</a>
								<br>
								<a href="{{url()}}/must">
									MUST
								</a>
								<br>
								<a href="{{url()}}/videos">
									VIDEO
								</a>
								<br>
								<a href="{{url()}}/concurso">
									CONCURSO
								</a>
							</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-4">
						<a href="http://www.youtube.com/watch?v=M5cyWJbJz50&spfreload=10" class="hover fancybox-media">
							<img src="{{url()}}/images/home/tendecias-2015-video.jpg" class="img-responsive center-block" alt="">
						</a>
					</div>
					<div class="col-sm-1">
						<a href="{{url()}}/must" class="hover">
							<img src="{{url()}}/images/home/must.jpg" class="img-responsive center-block todo-ancho" alt="">
						</a>
						<img src="{{url()}}/images/home/tu-eliges-1.jpg" class="img-responsive hidden-xs center-block" alt="">
					</div>
					<div class="col-sm-2">
						<a href="{{url()}}/concurso" class="hover">
							<img src="{{url()}}/images/home/participa-y-gana.jpg" class="img-responsive center-block" alt="">
						</a>
						<img src="{{url()}}/images/home/tu-eliges-2.jpg" class="img-responsive hidden-xs center-block" alt="">
					</div>
				</div>
				<div class="row visible-xs">
					<div class="col-xs-7">
						<img src="{{url()}}/images/home/tu-eliges.jpg" class="img-responsive center-block" alt="">
					</div>
				</div>
				<footer>
					<section class="row">
						<div class="col-xs-3 no-border">
							<a href="https://twitter.com/ripleyenperu" target="_blank">
								<img src="{{url()}}/images/twitter-footer.png" alt="">
							</a>
							<a href="https://www.facebook.com/RipleyPeru" target="_blank">
								<img src="{{url()}}/images/facebook-footer.png" alt="">
							</a>
						</div>
						<div class="col-xs-3 col-xs-offset-1 no-border">
							<img src="{{url()}}/images/logo-ripley.png" class="img-responsive pull-right logo-ripley">
						</div>
					</section>
				</footer>
			</section>
		</div>
		<div class="hidden">
			<audio id="musica" loop="loop" controls="controls">
				<source src="{{url()}}/audio/musica.mp3" />
			</audio>
		</div>
	</body>
</html>