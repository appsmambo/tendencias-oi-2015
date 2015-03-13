<?php

Route::get('/', array('as' => 'index', 'uses' => 'HomeController@index'));

Route::get('/extra-normal', array('as' => 'extraNormal', 'uses' => 'HomeController@extraNormal'));
Route::get('/masculine', array('as' => 'masculine', 'uses' => 'HomeController@masculine'));
Route::get('/animal-print', array('as' => 'animalPrint', 'uses' => 'HomeController@animalPrint'));
Route::get('/cuadros', array('as' => 'cuadros', 'uses' => 'HomeController@cuadros'));
Route::get('/bohemio', array('as' => 'bohemio', 'uses' => 'HomeController@bohemio'));
Route::get('/militar', array('as' => 'militar', 'uses' => 'HomeController@militar'));
Route::get('/tomboy', array('as' => 'tomboy', 'uses' => 'HomeController@tomboy'));
Route::get('/metalicos', array('as' => 'metalicos', 'uses' => 'HomeController@metalicos'));

Route::get('/videos', array('as' => 'videos', 'uses' => 'HomeController@videos'));

Route::get('/imprescindibles', array('as' => 'imprescindibles', 'uses' => 'HomeController@imprescindibles'));

Route::get('/must', array('as' => 'must', 'uses' => 'HomeController@camisaBlanca'));
Route::get('/must/camisa-blanca', array('as' => 'camisaBlanca', 'uses' => 'HomeController@camisaBlanca'));
Route::get('/must/capas-livianas', array('as' => 'capasLivianas', 'uses' => 'HomeController@capasLivianas'));
Route::get('/must/casacas-livianas', array('as' => 'casacasLivianas', 'uses' => 'HomeController@casacasLivianas'));
Route::get('/must/cuello-tortuga', array('as' => 'cuelloTortuga', 'uses' => 'HomeController@cuelloTortuga'));

Route::get('/concurso', array('as' => 'participaGana', 'uses' => 'HomeController@participaGana'));

Route::get('/extra-normal/{url_prenda}', 'HomeController@verPrendaExtraNormal');
Route::get('/masculine/{url_prenda}', 'HomeController@verPrendaMasculine');
Route::get('/animal-print/{url_prenda}', 'HomeController@verPrendaAnimalPrint');
Route::get('/cuadros/{url_prenda}', 'HomeController@verPrendaCuadros');
Route::get('/bohemio/{url_prenda}', 'HomeController@verPrendaBohemio');
Route::get('/militar/{url_prenda}', 'HomeController@verPrendaMilitar');
Route::get('/tomboy/{url_prenda}', 'HomeController@verPrendaTomboy');
Route::get('/metalicos/{url_prenda}', 'HomeController@verPrendaMetalicos');
