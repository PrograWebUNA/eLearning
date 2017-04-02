<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Rol;
use App\User;

class roleController extends Controller
{
    public function show(){
      $usuarios = User::orderBy('ID_USUARIO')->get();
      $roles = Rol::orderBy('ID_ROL')->get();
     //$usuarios = User->pluck('ID_USUARIO','name','IDENTIFICACION');
     //$roles = DB::table('ROL')->pluck('ID_ROL','NOMBRE','IDENTIFICACION')->where('ESTADO',1);

     return view('content.role.assign', compact('usuarios','roles'));
    }
}
