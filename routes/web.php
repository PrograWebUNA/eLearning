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
       return view('content/index');
});

Route::get('/account/login', function () {
       return view('content/account/login');
});

/*ASANCHEZ*/
Route::get('/courses/create', function () {
       return view('content/courses/create');
});

Route::get('/storeCourse', 'coursesController@store');
/* FIN ASANCHEZ*/
