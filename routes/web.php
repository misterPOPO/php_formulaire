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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/user/create', 'UserController@create');
// Route::post('/user', 'UserController@store');

// Route::get('/news/create', 'NewsController@create');
// Route::post('/news', 'NewsController@store');



// //test de relation avec ma base de donnée 1.0
// Route::get('/messages', 'UserController@test');



//new test relation avec ma base de donnée 1.5 tutorial
Route::get('/home', 'PagesController@home');
    
 
Route::resource('tasks', 'TasksController');
