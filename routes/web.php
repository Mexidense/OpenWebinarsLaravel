<?php

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'PostController@index');

Route::pattern('id', '\d+');
Route::get('post/{id}', [
    'uses' => 'PostController@Show'
]);

Route::post('post/store',[
   'middleware' => 'auth',
   'before' => 'csrf',
   'uses' => 'PostController@store',
]);

Route::get('post/delete/{id}', [
    'middleware' => 'auth',
    'uses' => 'PostController@destroy'
]);


