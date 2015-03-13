<?php

Route::get('/', array('as' => 'index', 'uses' => 'HomeController@index'));

Route::get('/tendencias', array('as' => 'tendencias', 'uses' => 'HomeController@extraNormal'));
Route::get('/must', array('as' => 'tendencias', 'uses' => 'HomeController@camisaBlanca'));
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
Route::get('/must/camisa-blanca', array('as' => 'camisaBlanca', 'uses' => 'HomeController@camisaBlanca'));
Route::get('/must/capas-livianas', array('as' => 'capasLivianas', 'uses' => 'HomeController@capasLivianas'));
Route::get('/must/casacas-livianas', array('as' => 'casacasLivianas', 'uses' => 'HomeController@casacasLivianas'));
Route::get('/must/cuello-tortuga', array('as' => 'cuelloTortuga', 'uses' => 'HomeController@cuelloTortuga'));
Route::get('/participa-gana', array('as' => 'participaGana', 'uses' => 'HomeController@participaGana'));