<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function (){
   return "Hello world";
});

Route::get('url', function (){
    $url = url('url');

    return "You are in " . $url;
});

//Adding a new pattern for id of type integer
Route::pattern('id', '\d+');

Route::get('welcome/{user}/{id}', function ($user, $id) {
    return 'Welcome ' . $user . ', your ID is: ' . $id;
});

Route::get('welcome/{user?}', function ($user = null) {
    $messenge = 'Welcome ';
    if($user === null){
        $messenge .= 'anonymous';
    }
    else{
        $messenge .= $user;
    }
    return $messenge;
});
