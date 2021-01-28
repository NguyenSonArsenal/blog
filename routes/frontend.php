<?php

Route::any('/', ['as' => 'home', 'uses' => 'FrontendController@getHome']);
Route::get('/404', ['as' => 'error.404', 'uses' => 'FrontendController@getPage404']);
Route::get('/chem-gio', ['as' => 'list_post', 'uses' => 'FrontendController@getListPost']);
Route::get('/lien-he', ['as' => 'contact', 'uses' => 'FrontendController@getContact']);
Route::get('/ho-so', ['as' => 'profile', 'uses' => 'FrontendController@getProfile']);
