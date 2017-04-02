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
       return view('auth/login');
});

Route::get('/account/register', function () {
       return view('/auth/register');
});
/*ASANCHEZ*/
Route::get('/courses/create', function () {
       return view('content/courses/create');
});

Route::get('/storeCourse', 'coursesController@store');


Route::get('/role/show', 'roleController@show');
Route::get('/role/assign', function () {
       return view('content/courses/create');
});
Route::post('/role/assign', function () {
       return view('content/courses/create');
});

Route::post('/role/store', 'roleController@store');
/* FIN ASANCHEZ*/

Auth::routes();

Route::get('/home', 'HomeController@index');
