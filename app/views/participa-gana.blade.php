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
				- 1 -
				<p>
					<span>Mira nuestro<br> catálogo</span>
				</p>
			</div>
			
		</div>
		<div class="col-sm-1 text-center">
			<div>
				- 2 -
				<p>
					<span>Escoge el look que<br/> más te guste</span>
				</p>
			</div>
		</div>
		<div class="col-sm-1 text-center">
			<div>
				- 3 -
				<p>
					<span>Tómale una <br> foto</span>
				</p>
			</div>
		</div>
		<div class="col-sm-1 text-center">
			<div class="last">
				- 4 -
				<p>
					<span>
						Y compártelo en <br>    
						<a href=""><img src="{{url()}}/images/participa-gana/twitter.png" alt=""></a>
						o 
						<a href=""><img src="{{url()}}/images/participa-gana/instagram.png" ></a><br>
						con el hashtag<br>
						<img src="{{url()}}/images/participa-gana/tu-eliges.png" alt="">
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
			<a href="#" target="_blank"><img src="{{url()}}/images/participa-gana/btn-catalogo-online.jpg" class="img-responsive center-block" alt=""></a>
			<p>
				para ganar uno de los 10 vales de s./500 que sorteamos<br>
				¡Anímate a participar!
			</p>
		</div>
	</div>
</div>
@stop
