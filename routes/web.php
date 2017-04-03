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


Route::post('/role/store', 'roleController@store');
/* FIN ASANCHEZ*/


/*JUAN JARA*/

Route::get('/showUsers', 'usersController@showAll');

Route::post('/users/modifyUser/users/updateUser','usersController@updateUser');

Route::get('/users/modifyUser/{id}', 'usersController@showUser');


Route::get('/users/deleteUser/{id}', 'usersController@delete');


/*FIN*/

Auth::routes();

Route::get('/home', 'HomeController@index');
