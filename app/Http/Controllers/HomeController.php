<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function showMyCourses(){
      $cursos = DB::table('MATRICULA')
      ->join('CURSO', function ($join){
          $join->on('MATRICULA.CURSO','=','CURSO.ID_CURSO');
      })->join('users',function($join2){
          $join2->on('MATRICULA.ID_USUARIO','=','users.ID_USUARIO');
      })->select('CURSO.NOMBRE AS NOMBRE_CURSO','users.ID_USUARIO AS USER_ID','MATRICULA.*')->get();

    //  $matriculas = Matricula::orderBy('ID_MATRICULA')->get();
    //  $course = DB::table('curso')->get();
     return view('content.index', compact('cursos'));
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('/');
    }
}
