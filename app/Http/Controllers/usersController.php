<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class usersController extends Controller
{
    //

    public function show(){
      $usuarios = User::orderBy('ID_USUARIO')->get();
     return view('auth.showUsers', compact('usuarios'));
    }



}
