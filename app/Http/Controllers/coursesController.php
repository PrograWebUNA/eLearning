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
    $course->save();
}

}
