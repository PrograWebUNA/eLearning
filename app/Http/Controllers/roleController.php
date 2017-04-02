<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Rol;
use App\User;
use App\Usuario_rol;

class roleController extends Controller
{
    public function show(){
      $usuarios = User::orderBy('ID_USUARIO')->get();
      $roles = Rol::orderBy('ID_ROL')->get();
     return view('content.role.assign', compact('usuarios','roles'));
    }
    public function store(Request $request)
    {
        $usuarioRol= new Usuario_rol;
        $usuarioRol->ID_USUARIO = $request->ID_USUARIO;
        $usuarioRol->ROL = $request->ROL;
        $usuarioRol->ESTADO = 1;
        $usuarioRol->save();
    }

    public static function  hasRole($ID_USUARIO, $RoleName)
    {
      $id_rol = 0;
      foreach (Rol::where('NOMBRE', $RoleName)->cursor() as $rol) {
          $id_rol = $rol->ID_ROL;
      }

      if (Usuario_rol::where([['ID_USUARIO', '=', $ID_USUARIO], ['ROL', '=', $id_rol]])->exists()) {
          return true;
      }else{
        return false;
      }
    }
}
