<?php

Route::any('/', ['as' => 'home', 'uses' => 'FrontendController@getHome']);
Route::get('/404', ['as' => 'error.404', 'uses' => 'FrontendController@getPage404']);
Route::get('/chem-gio', ['as' => 'post.list', 'uses' => 'FrontendController@getListPost']);
Route::get('/chem-gio/{id}', ['as' => 'post.detail', 'uses' => 'FrontendController@showPost']);
Route::get('/lien-he', ['as' => 'contact', 'uses' => 'FrontendController@getContact']);
Route::get('/ho-so', ['as' => 'profile', 'uses' => 'FrontendController@getProfile']);
