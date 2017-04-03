<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class usersController extends Controller
{
    //

    public function showAll(){
      $usuarios = User::orderBy('ID_USUARIO')->get();
     return view('auth.showUsers', compact('usuarios'));
    }

    public function showUser($id){
      $usuario = User::find($id);
      return view('auth.modifyUser', compact('usuario'));
    }


    public function updateUser(Request $request)
    {
        /*dd("Entro enupdate  ".$request->name);*/
        $user = User::find($request->ID_USUARIO);

        if (is_null ($user))
        {
            App::abort(404);
        }
        $user->name = $request->name;
        $user->email = $request->email;
        $user->IDENTIFICACION = $request->IDENTIFICACION;
        $user->GENERO = $request->GENERO;
        $user->PAIS = $request->PAIS;
        $user->save();
    }


    public function delete($id){
      $usuario = User::find($id);
      $usuario->delete();
      /*return view('content.index');*/
      /*return redirect()->route('/showUsers');*/
     dd("Se Elimino con exito a ".$usuario->name);
    }



}
