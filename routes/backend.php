<?php
Route::get('/', 'DashboardController@index')->name('dashboard');

Route::group(['prefix'=>'admin/', 'as'=>'admin.'], function(){

    Route::get('/', ['as' => 'list', 'uses' => 'AdminController@index']);

    Route::get('/create', ['as' => 'create', 'uses' => 'AdminController@create']);

    Route::post('/', ['as' => 'store', 'uses' => 'AdminController@store']);

    Route::get('/{id}/edit', ['as' => 'edit', 'uses' => 'AdminController@edit']);

    Route::post('/{id}', ['as' => 'update', 'uses' => 'AdminController@update']);

    Route::delete('/{id}', ['as' => 'destroy', 'uses' => 'AdminController@destroy']);
});

Route::group(['prefix'=>'post/', 'as'=>'post.'], function(){

    Route::get('/', ['as' => 'list', 'uses' => 'PostController@index']);

    Route::get('/create', ['as' => 'create', 'uses' => 'PostController@create']);

    Route::post('/', ['as' => 'store', 'uses' => 'PostController@store']);

    Route::get('/{id}/edit', ['as' => 'edit', 'uses' => 'PostController@edit']);

    Route::post('/{id}', ['as' => 'update', 'uses' => 'PostController@update']);

    Route::delete('/{id}', ['as' => 'destroy', 'uses' => 'PostController@destroy']);
});
