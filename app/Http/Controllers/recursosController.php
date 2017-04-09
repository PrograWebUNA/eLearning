<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Recurso;
use App\Tipo_Recurso;
use App\Http\Controllers\Auth;
class recursosController extends Controller
{
    //
    function showAll(){

    }
    function show($id_usuario){
      $tipos = Tipo_Recurso::orderBy('ID_TIPO_RECURSO')->get();
      $recursos = Recurso::orderBy('ID_RECURSO')->where('ID_USUARIO',$id_usuario)->get();
      return view('content.resource.create', compact('tipos','recursos'));
    }
    function store(Request $request){

      return response()->json("juan");
    }
    function update(){

    }
    function getForUpdate($id){

    }
    function delete($id){

    }
}
