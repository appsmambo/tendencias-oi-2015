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
			<img src="{{url()}}/images/bohemio/logo.jpg" alt="" class="img-responsive">
			<br>
			Las capas serán las infalibles del invierno, úsalas con flecos, pelos y en todas las texturas posibles. Para un look más atrevido, combínalas con prints en tonos guindas y verdosos.
		</p>
	</div>
	<div class="col-sm-2">
		<img src="{{url()}}/images/bohemio/1.jpg" alt="" class="center-block img-responsive">
	</div>
</div>
<div class="row">
	<div class="col-sm-2">
		<img src="{{url()}}/images/bohemio/2.jpg" alt="" class="center-block img-responsive">
	</div>
	<div class="col-sm-2">
		<img src="{{url()}}/images/bohemio/3.jpg" alt="" class="center-block img-responsive">
	</div>
</div>
@stop