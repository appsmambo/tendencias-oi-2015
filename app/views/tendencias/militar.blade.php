@extends('layouts.tendencias')
@section('content')
<div class="bloque-imprescindibles">
    <img src="{{url()}}/images/imprescindible.png" alt="" class="img-responsive pull-right">
</div>
<div class="row">
    <div class="col-sm-1">
        <p class="info">
            <img src="{{url()}}/images/militar/logo.jpg" alt="" class="img-responsive">
            <br>
            ¡Perfecto estilismo de batalla! ¿La táctica a seguir? Probar chaquetas de aviador, abrigos y enteritos inspirados en el ejército del aire.
        </p>
        <img src="{{url()}}/images/militar/1.jpg" alt="" class="center-block img-responsive">
    </div>
    <div class="col-sm-2">
        <img src="{{url()}}/images/militar/2.jpg" alt="" class="center-block img-responsive">
    </div>
    <div class="col-sm-1">
        <img src="{{url()}}/images/militar/3.jpg" alt="" class="center-block img-responsive">
    </div>
</div>
@stop