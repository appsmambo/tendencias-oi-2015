<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<title>{{$meta['titulo']}}</title>
		<meta name="description" content="{{$meta['descripcion']}}">
		<meta name="keywords" content="{{$meta['keyword']}}">
		
		<link rel="canonical" href="{{url()}}">
		<!--meta property="fb:app_id" content="242776895908289">
		<meta property="og:title" content="Blog Ripley">
		<meta property="og:type" content="blog">
		<meta property="og:url" content="http://blogripley.com/">
		<meta property="og:image" content="http://blogripley.com/images/facebook.jpg">
		<meta property="og:site_name" content="Blog Ripley">
		<meta property="fb:admins" content="100008010128050">
		<meta property="og:description" content="Masculine, bohemio, militar...descubre las nuevas tendencias que te trae Ripley este Otoño Invierno 2015">
		<meta name="twitter:card" content="summary">
		<meta name="twitter:site" content="@RipleyenPeru">
		<meta name="twitter:description" content="Masculine, bohemio, militar...descubre las nuevas tendencias que te trae Ripley este Otoño Invierno 2015"-->
		
		<link rel="icon" href="{{url()}}/favicon.ico" type="image/x-icon">
		<link rel="stylesheet" type="text/css" href="{{url()}}/scripts/tendencias/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="{{url()}}/scripts/tendencias/jquery.bxslider/jquery.bxslider.css">
		<link rel="stylesheet" type="text/css" href="{{url()}}/css/tendencias.css">
		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
		<script src="{{url()}}/scripts/queryloader2.min.js"></script>
		<script type="text/javascript">
			window.addEventListener('DOMContentLoaded', function () {
				new QueryLoader2(document.querySelector("body"), {
					barColor: "#fff",
					backgroundColor: "#181a20",
					percentage: true,
					barHeight: 1,
					minimumTime: 200,
					fadeOutTime: 1000
				});
			});
		</script>
		<script src="{{url()}}/scripts/jquery.min.js"></script>
		<script src="{{url()}}/scripts/tendencias/bootstrap.min.js"></script>
		<script src="{{url()}}/scripts/tendencias/jquery.bxslider/jquery.bxslider.min.js"></script>
		<script src="{{url()}}/scripts/tendencias.js"></script>
	</head>
	<body>
		<header class="container-fluid">
			<section class="row">
				<div class="col-sm-1">
					
				</div>
				<div class="col-sm-2">
					
				</div>
				<div class="col-sm-1">
					
				</div>
			</section>
		</header>
		<section class="container-fluid slider-tendencias">
			<div class="slider1">
				<div class="slide">
					<a href="#" class="hover">
						<img src="{{url()}}/images/extra-normal.jpg" alt="">
					</a>
				</div>
				<div class="slide">
					<a href="#" class="hover">
						<img src="{{url()}}/images/masculine.jpg" alt="">
					</a>
				</div>
				<div class="slide">
					<a href="#" class="hover">
						<img src="{{url()}}/images/metalicos.jpg" alt="">
					</a>
				</div>
				<div class="slide">
					<a href="#" class="hover">
						<img src="{{url()}}/images/animal-print.jpg" alt="">
					</a>
				</div>
				<div class="slide">
					<a href="#" class="hover">
						<img src="{{url()}}/images/cuadros.jpg" alt="">
					</a>
				</div>
				<div class="slide">
					<a href="#" class="hover">
						<img src="{{url()}}/images/bohemio.jpg" alt="">
					</a>
				</div>
				<div class="slide">
					<a href="#" class="hover">
						<img src="{{url()}}/images/militar.jpg" alt="">
					</a>
				</div>
				<div class="slide">
					<a href="#" class="hover">
						<img src="{{url()}}/images/tomboy.jpg" alt="">
					</a>
				</div>
			</div>
		</section>
		<section class="container-fluid tu-eliges">
			<img src="{{url()}}/images/tu-eliges.jpg" alt="" class="center-block">
		</section>
		<section class="container-fluid">
			@yield('content')
		</section>
	</body>
</html>