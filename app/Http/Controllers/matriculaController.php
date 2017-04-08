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
     return view('content.enroll.create', compact('usuarios','courses'));
    }

    public function showAll(){
      $matriculas = Matricula::orderBy('ID_MATRICULA')->get();
    //  $course = DB::table('curso')->get();
     return view('content.enroll.catalog', compact('matriculas'));
    }


public function delete($id){
        $matricula=Matricula::find($id);
        $matricula->delete();
        return redirect('enroll/showMatriculas');

}

public function update(Request $request){
        $matricula=Matricula::find($request->ID_MATRICULA);
        $matriculaUpdate = $request->all();
        $matricula->update($matriculaUpdate);
        return redirect('enroll/showMatriculas');

}

public function edit($id)
 {
     $matricula = Matricula::find($id);
     $courses = DB::table('curso')->get();
     return view('content.enroll.update', compact('matricula', 'courses'));
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
      return redirect('enroll/showMatriculas');

    }

}
