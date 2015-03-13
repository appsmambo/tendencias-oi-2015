<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<title>{{$meta['titulo']}}</title>
		<meta name="description" content="{{$meta['descripcion']}}">
		<meta name="keywords" content="{{$meta['keyword']}}">

		<meta property="fb:app_id" content="242776895908289">
		<meta property="og:title" content="{{$meta['titulo']}}">
		<meta property="og:type" content="website">
		<meta property="og:site_name" content="{{$meta['titulo']}}">
		<meta property="fb:admins" content="100008010128050">
		<meta property="og:description" content="{{$meta['descripcion']}}">
		@if (isset($prenda))
		<link rel="canonical" href="{{url()}}/{{$prenda->categoria}}/{{$prenda->url}}">
		<meta property="og:url" content="{{url()}}/{{$prenda->categoria}}/{{$prenda->url}}">
		<meta property="og:image" content="{{url()}}/images/{{$prenda->categoria}}/{{$prenda->imagen}}">
		@else
		<link rel="canonical" href="{{url()}}">
		<meta property="og:url" content="{{url()}}">
		<meta property="og:image" content="{{url()}}/images/200x200.png">
		@endif
		
		<link rel="icon" href="{{url()}}/favicon.ico" type="image/x-icon">
        <link rel="stylesheet" type="text/css" href="{{url()}}/scripts/tendencias/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="{{url()}}/scripts/fancybox/jquery.fancybox.css">
		<link rel="stylesheet" type="text/css" href="{{url()}}/css/internas.css">
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
					percentage: true,
					barHeight: 1,
					minimumTime: 200,
					fadeOutTime: 1000,
					onComplete: function() {
						var musica = document.getElementById("musica");
						musica.volume = 0.2;
						musica.play();
					}
				});
			});
		</script>
		<script src="{{url()}}/scripts/jquery.min.js"></script>
		<script src="{{url()}}/scripts/tendencias/bootstrap.min.js"></script>
        <script src="{{url()}}/scripts/fancybox/jquery.fancybox.js"></script>
        <script src="{{url()}}/scripts/fancybox/helpers/jquery.fancybox-media.js"></script>
		<script src="{{url()}}/scripts/internas.js"></script>
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
		<header class="container-fluid">
			<section class="row">
                <div class="col-xs-1">
					<a href="#" class="musica" data-estado="off">
						<img src="{{url()}}/images/icono-audio.gif" alt="">
					</a>
				</div>
				<div class="col-xs-2">
					<p class="titulo text-center titulo-tendencias">
                        <a href="{{url()}}">
							<img src="images/titulo-tendencias.jpg" class="img-responsive center-block" />
						</a>
					</p>
				</div>
				<div class="col-xs-1">
					<a href="#" class="menu pull-right text-right" data-estado="off">
						<img src="{{url()}}/images/icono-menu.png" alt="">
					</a>
				</div>
			</section>
		</header>
		<section class="container-fluid">
			@yield('content')
		</section>
		<div class="hidden">
			<audio id="musica" loop="loop" controls="controls">
				<source src="{{url()}}/audio/musica.mp3" />
			</audio>
		</div>
	</body>
</html>