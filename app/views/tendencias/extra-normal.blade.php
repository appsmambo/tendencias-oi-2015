@extends('layouts.tendencias')
@section('content')
<div class="bloque-imprescindibles">
	<a href="#" class="cerrar-tendencias">
		<img src="{{url()}}/images/btn-close.png" alt="">
	</a>
    <img src="{{url()}}/images/imprescindible.png" alt="" class="img-responsive pull-right">
</div>
<div class="row">
	<div class="col-sm-1">
		<p class="info">
			<img src="{{url()}}/images/extra-normal/logo.jpg" alt="" class="img-responsive">
			<br>
			DESEO EXCESIVO DE VESTIR LO QUE TENGAS A LA MANO CUANDO DESPIERTAS PORQUE ERES UNA PERSONA NORMAL Y SOLO QUIERES TENER UNA VIDA NORMAL.
		</p>
		<br>
		<div class="bloque-prenda">
			<p>
				<a href="#">
					<img src="{{url()}}/images/facebook-blanco.png" alt="">
				</a>
				<a href="#">
					<img src="{{url()}}/images/twitter-blanco.png" alt="">
				</a>
				<a href="#">
					<img src="{{url()}}/images/pinterest-blanco.png" alt="">
				</a>
			</p>
			<img src="{{url()}}/images/extra-normal/1.jpg" alt="" class="center-block img-responsive">
		</div>
	</div>
	<div class="col-sm-2">
		<div class="row">
			<div class="col-sm-2">
				<img src="{{url()}}/images/extra-normal/2.jpg" alt="" class="center-block img-responsive">
			</div>
			<div class="col-sm-2">
				<img src="{{url()}}/images/extra-normal/3.jpg" alt="" class="center-block img-responsive">
			</div>
		</div>
		<div class="row">
			<div class="col-sm-4">
				<img src="{{url()}}/images/extra-normal/6.jpg" alt="" class="center-block img-responsive">
			</div>
		</div>
	</div>
	<div class="col-sm-1">
		<img src="{{url()}}/images/extra-normal/4.jpg" alt="" class="center-block img-responsive">
		<img src="{{url()}}/images/extra-normal/5.jpg" alt="" class="center-block img-responsive">
	</div>
</div>
@stop