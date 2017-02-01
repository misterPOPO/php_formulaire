<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//user
Route::get('/user/create', 'UserController@create');
Route::post('/user', 'UserController@store');


//news
Route::get('/news/create', 'NewsController@create');
Route::post('/news', 'NewsController@store');


//test
Route::get('/messages', 'UserController@test');



Auth::routes();

Route::get('/home', 'HomeController@index');
