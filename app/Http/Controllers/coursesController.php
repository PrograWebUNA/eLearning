<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Courses;

class coursesController extends Controller
{
    function getCourseCatalog(){
      $users = User::all();
      foreach( $courses as $course ) {
          echo $course->nombre;
      }
    }

public function store(Request $request)
{
    $course = new Courses;
    $course->nombre = $request->nombre;
    $course->duracion = $request->duracion;
    $course->fecha_inicio = $request->fecha_inicio;
    $course->fecha_final = $request->fecha_final;
    $course->estado =1;
    /*enviar semana, primero añadir campo en la base de datos OJOOOOOOOO*/
    $course->save();

}


public function showAll(){
  $courses = Courses::orderBy('ID_CURSO')->get();
 return view('content.courses.catalog', compact('courses'));
}


public function showCourse($id){
  $course = Courses::find($id);
  return view('content.courses.update', compact('course'));
}



public function updateCourse(Request $request)
{
  dd("Entro enupdate  ".$request->ID_CURSO);
  dd("CURSO NOMBRE:   ".$request->NOMBRE);
  dd("CURSO DURACION:   ".$request->DURACION);
  dd("CURSO FECHA INICIO:   ".$request->FECHA_INICIO);
  dd("CURSO FECHA FIN:   ".$request->FECHA_FIN);
  dd("CURSO ESTADO:   ".$request->ESTADO);

    $course = Courses::find($request->ID_CURSO);

    if (is_null ($course))
    {
        App::abort(404);
    }
    $course->NOMBRE = $request->nombre;
    $course->DURACION = $request->duracion;
    $course->FECHA_INICIO = $request->fecha_inicio;
    $course->FECHA_FINAL = $request->fecha_fin;
    $course->ESTADO = $request->estado;
    $course->save();
}


    public function delete($id){
      $course = Courses::find($id);
      $course->delete();
      /*return view('content.index');*/
      /*return redirect()->route('/showUsers');*/
     dd("Se Elimino con exito el curso:  ".$course->NOMBRE);
    }




}
