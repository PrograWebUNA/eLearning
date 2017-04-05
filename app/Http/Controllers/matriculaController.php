<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Matricula;
use App\User;
use App\Courses;

class matriculaController extends Controller
{
    public function show(){
      $usuarios = User::orderBy('ID_USUARIO')->get();
      $courses = Courses::orderBy('ID_Curso')->get();
     return view('content.enroll.join', compact('usuarios','courses'));
    }

	public function store(Request $request)
    {
        $matricula= new Matricula;
        $matricula->ID_MATRICULA = $request->ID_MATRICULA;
        $matricula->CURSO = $request->CURSO;
		$matricula->ID_USUARIO = $request->ID_USUARIO;
		$matricula->NOMBRE = $request->NOMBRE;
		$matricula->FECHA_MATRICULA = $request->FECHA_MATRICULA;
		$matricula->ANIO = $request->ANIO;
        $matricula->save();

    }

}
