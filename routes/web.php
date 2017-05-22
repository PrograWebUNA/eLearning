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
Route::get('resource/list/{id_curso}', 'recursosController@showAll');

Route::get('resource/list/resource/show/{id_curso}', 'recursosController@show');

Route::post('/resource/store','recursosController@store');

Route::post('/resource/update','recursosController@update');

Route::get('/resource/update/{id}/{idUsuario}', 'recursosController@getForUpdate');

Route::get('/resource/updateVideo/{id}/{idUsuario}', 'recursosController@getForUpdate');

Route::get('/resource/delete/{id}', 'recursosController@delete');

/* FIN ASANCHEZ*/

/*JUAN JARA*/

/*---------------------------------Users  Routes-------------------------------------*/

Route::get('/showUsers', 'usersController@showAll');

Route::post('/users/modifyUser/users/updateUser','usersController@updateUser');

Route::get('/users/modifyUser/{id}', 'usersController@showUser');

Route::get('/users/deleteUser/{id}', 'usersController@delete');

Route::get('/resource/update/1/public/docs/robots.txt', function()
{
    $foto="";
    $path = storage_path().'robots.txt';
     if (file_exists($path)) {
        return Response::download($path);
    }
});


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

Route::post('/storeMatricula', 'matriculaController@store');

//Route::post('/enroll/store', 'matriculaController@store');

Route::post('/enroll/editMatricula/enroll/updateMatricula', 'matriculaController@update');
/*-----------------------Routes DD--------------------------*/

Route::get('/enroll/dd', function () {
         return view('content/enroll/dd');
});

/*FIN AMONTERO*/

Auth::routes();

Route::get('/home', 'HomeController@index');

/*------------------------------Video-----------------------*/
/*Pantalla de inicio*/
Route::get('menu/', function () {
    return view('content/webservice/menu');
});

/*Llama a la pagina para subir un video desde el equipo*/
Route::get('uploadVideo/', function () {
    return view('content/webservice/upload');
});

/*Llama a la pagina para descargar un video al equipo*/
Route::get('downloadVideo/', function () {
    return view('content/webservice/download');
});

/*Llama a la pagina para reproducir el video*/
Route::get('showVideo/', function () {
    return view('content/webservice/showVideo');
});


/*Llama al metodo que sube los videos del repositorio local al repositorio del WS*/
Route::post('upload/', 'WSController@upload');

/*Llama al metodo que descarga los videos del WS al navegador*/
Route::post('download/', 'WSController@download');

/*Llama al metodo que se encarga de reproducir los videos*/
Route::post('play/', 'WSController@play');

Route::get('get-video/{video}', 'WSController@getVideo')->name('getVideo');
