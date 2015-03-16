@extends('layouts.internas')
@section('content')
<div class="row">
    <div class="col-sm-4">
		<img src="{{url()}}/images/participa-gana/cabecera.jpg" class="img-responsive center-block" alt="">
	</div>
</div>
<div class="row">
	<div class="content-plomo">
		<div class="col-sm-1 text-center">
			<div>
				<img src="{{url()}}/images/1.png" alt="">
				<p>
					<span>Mira nuestro<br> catálogo</span>
				</p>
			</div>
			
		</div>
		<div class="col-sm-1 text-center">
			<div>
				<img src="{{url()}}/images/2.png" alt="">
				<p>
					<span>Escoge el look que<br/> más te guste</span>
				</p>
			</div>
		</div>
		<div class="col-sm-1 text-center">
			<div>
				<img src="{{url()}}/images/3.png" alt="">
				<p>
					<span>Tómale una <br> foto</span>
				</p>
			</div>
		</div>
		<div class="col-sm-1 text-center">
			<div class="last">
				<img src="{{url()}}/images/4.png" alt="">
				<p>
					<span>
						Y compártelo en    
						<img src="{{url()}}/images/participa-gana/twitter.png" alt="">
						o 
						<img src="{{url()}}/images/participa-gana/instagram.png" alt=""><br>
						con el hashtag
						<strong>#tueliges</strong>
					</span>
				</p>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<div class="row">
	<div class="content-catalogo">
		<div class="sm-1"></div>
		<div class="sm-2 text-center">
			<?php if (Agent::isMobile()): ?>
			<a href="http://bit.ly/ripleytueliges" target="_blank">
				<img src="{{url()}}/images/participa-gana/btn-catalogo-online.jpg" class="img-responsive center-block" alt="">
			</a>
			<?php else: ?>
			<a class="various catalo-enlace" data-fancybox-type="iframe" href="http://e.issuu.com/embed.html#0/11859323">
				<img src="{{url()}}/images/participa-gana/btn-catalogo-online.jpg" class="img-responsive center-block" alt="">
			</a>
			<?php endif; ?>
			<p>
				para ganar uno de los 10 vales de s./500 que sorteamos<br><br><br>
				<span class="animate">¡Anímate a participar!</span><br>
				<?php if (Agent::isMobile()): ?>
				<a href="{{url()}}/docs/terminos-y-condiciones.pdf" target="_blank" class="terminos">
					ver términos y condiciones
				</a>
				<?php else: ?>
				<a class="various terminos " data-fancybox-type="iframe"  href="http://tueliges.com.pe/docs/terminos-y-condiciones.pdf" target="_blank" class="terminos">
					ver términos y condiciones
				</a>
				<?php endif; ?>
			</p>
		</div>
	</div>
</div>
@stop
