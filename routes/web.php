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
//Route::get('/', function () {
  //     return view('content/index');
//});

Route::get('/', 'coursesController@showCoursesIndex');

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

/*---------------------------------Resources  Routes-------------------------------------*/
Route::get('resource/list', 'recursosController@showAll');

Route::get('resource/show/{id_usuario}', 'recursosController@show');

Route::post('/resource/store','recursosController@store');

Route::post('/resource/update','recursosController@update');

Route::get('/resource/update/{id}', 'recursosController@getForUpdate');

Route::get('/resource/delete/{id}', 'recursosController@delete');

/* FIN ASANCHEZ*/

/*JUAN JARA*/

/*---------------------------------Users  Routes-------------------------------------*/

Route::get('/showUsers', 'usersController@showAll');

Route::post('/users/modifyUser/users/updateUser','usersController@updateUser');

Route::get('/users/modifyUser/{id}', 'usersController@showUser');

Route::get('/users/deleteUser/{id}', 'usersController@delete');

/*-----------------------------------------------------------------------------------*/


/*---------------------------------Courses  Routes-------------------------------------*/

Route::get('/showCourses', 'coursesController@showAll');

Route::post('/courses/modifyCourse/courses/updateCourse','coursesController@updateCourse');

Route::get('/courses/modifyCourse/{id}', 'coursesController@showCourse');

Route::get('/courses/deleteCourse/{id}', 'coursesController@delete');


/*-----------------------------------------------------------------------------------*/





/*FIN JUAN JARA*/


/*FIN*/


/*AMONTERO*/

/* ---------------Routes matricula-------------------------*/
Route::get('/enroll/show', 'matriculaController@show');

Route::get('/enroll/showMatriculas', 'matriculaController@showAll');

Route::get('/enroll/deleteMatricula/{id}', 'matriculaController@delete');

Route::get('/enroll/editMatricula/{id}', 'matriculaController@edit');

Route::get('/enroll/create', function () {
       return view('content/enroll/create');
});

Route::post('/enroll/store', 'matriculaController@store');

Route::post('/enroll/editMatricula/enroll/updateMatricula', 'matriculaController@update');
/*-----------------------Routes DD--------------------------*/

Route::get('/enroll/dd', function () {
         return view('content/enroll/dd');
});

/*FIN AMONTERO*/

Auth::routes();

Route::get('/home', 'HomeController@index');
