<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Courses;
use DB;

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
    $course->URL_IMAGEN = $request->urlCurso;
    $course->fecha_inicio = $request->fecha_inicio;
    $course->fecha_fin = $request->fecha_final;
    $course->estado = 1;
    $course->DESCRIPCION = $request->descripcion;
    /*enviar semana, primero añadir campo en la base de datos OJOOOOOOOO*/
    $course->save();
    return response()->json("Se guardo el curso correctamente!");

}


public function showCoursesIndex(){
  $courses = Courses::orderBy('ID_CURSO')->get();

  /*$misCursos = DB::table('MATRICULA')
  ->join('CURSO', function ($join){
      $join->on('MATRICULA.CURSO','=','CURSO.ID_CURSO');
  })->join('users',function($join2){
      $join2->on('MATRICULA.ID_USUARIO','=','users.ID_USUARIO');
  })->select('CURSO.NOMBRE AS NOMBRE_CURSO','users.ID_USUARIO AS USER_ID','MATRICULA.*')->get();*/

  //return view('content.index', compact('courses','misCursos'));
  return view('content.index', compact('courses'));
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
    $course = Courses::find($request->ID_CURSO);

    $course->NOMBRE = $request->NOMBRE;
    $course->DURACION = $request->duracion;
    $course->URL_IMAGEN = $request->urlCurso;
    $course->FECHA_INICIO = $request->fecha_inicio;
    $course->FECHA_FIN = $request->fecha_final;
    $course->ESTADO = $request->ESTADO;
    $course->DESCRIPCION = $request->descripcion;
    $course->save();
    return response()->json("Curso actualizado correctamente!");
}


    public function delete($id){
      $course = Courses::find($id);
      $course->delete();
      /*return view('content.index');*/
      /*return redirect()->route('/showUsers');*/
     return response()->json("El curso se elimino correctamente!");
    }




}
