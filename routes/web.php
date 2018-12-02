<?php

Auth::routes();
/**
 * Routes for login and view homepage
 */
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'PostController@index');

/**
 * Regexp for id. Only integers
 */
Route::pattern('id', '\d+');
/**
 * Route for view one post
 */
Route::get('post/{id}', [
    'uses' => 'PostController@Show'
]);
/**
 * Route for create one post
 */
Route::post('post/store',[
   'middleware' => 'auth',
   'before' => 'csrf',
   'uses' => 'PostController@store',
]);
/**
 * Route for delete one post
 */
Route::get('post/delete/{id}', [
    'middleware' => 'auth',
    'uses' => 'PostController@destroy'
]);
/**
 * Route of form view for create post
 */
Route::get('post/create', [
   'middleware' => 'auth',
   'uses' => 'PostController@create',
]);