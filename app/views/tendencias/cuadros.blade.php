@extends('layouts.tendencias')
@section('content')
<div class="row">
	<div class="col-sm-1">
		<p class="info">
			<img src="{{url()}}/images/cuadros/logo.jpg" alt="" class="img-responsive">
			<br>
			Los cuadros en combinaciones con azul, verde y guinda son los preferidos de la temporada.
		</p>
		<img src="{{url()}}/images/cuadros/1.jpg" alt="" class="center-block img-responsive">
		<img src="{{url()}}/images/cuadros/6.jpg" alt="" class="center-block img-responsive">
	</div>
	<div class="col-sm-2">
		<img src="{{url()}}/images/cuadros/2.jpg" alt="" class="center-block img-responsive">
		<img src="{{url()}}/images/cuadros/4.jpg" alt="" class="center-block img-responsive">
	</div>
	<div class="col-sm-1">
		<img src="{{url()}}/images/cuadros/3.jpg" alt="" class="center-block img-responsive">
		<img src="{{url()}}/images/cuadros/5.jpg" alt="" class="center-block img-responsive">
	</div>
</div>
@stop