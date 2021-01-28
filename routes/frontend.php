<?php

Route::any('/', ['as' => 'home', 'uses' => 'HomeController@index']);
Route::get('/404', ['as' => 'error.404', 'uses' => 'HomeController@showError404']);
