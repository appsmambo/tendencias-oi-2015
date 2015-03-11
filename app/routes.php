<?php

Route::get('/', array('as' => 'index', 'uses' => 'HomeController@index'));

Route::get('/tendencias', array('as' => 'tendencias', 'uses' => 'HomeController@extraNormal'));
Route::get('/extra-normal', array('as' => 'extraNormal', 'uses' => 'HomeController@extraNormal'));
