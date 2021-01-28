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

Route::group(['prefix'=>'user/', 'as'=>'user.'], function(){

    Route::get('/', ['as' => 'list', 'uses' => 'UserController@index']);

    Route::get('/create', ['as' => 'create', 'uses' => 'UserController@create']);

    Route::post('/', ['as' => 'store', 'uses' => 'UserController@store']);

    Route::get('/{id}/edit', ['as' => 'edit', 'uses' => 'UserController@edit']);

    Route::post('/{id}', ['as' => 'update', 'uses' => 'UserController@update']);

    Route::delete('/{id}', ['as' => 'destroy', 'uses' => 'UserController@destroy']);
});
