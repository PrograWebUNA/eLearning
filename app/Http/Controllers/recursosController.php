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
    public function showAll($id_usuario){
    $recursos =   DB::table('RECURSO')
        ->join('TIPO_RECURSO', function ($join) {
            $join->on('TIPO_RECURSO.ID_TIPO_RECURSO', '=', 'RECURSO.TIPO_RECURSO');
        })->join('RECURSO AS R2', function ($join2) {
            $join2->on('R2.ID_RECURSO', '=', DB::raw('ifnull(RECURSO.RECURSO_PADRE,3)'));
        })

        ->select('TIPO_RECURSO.NOMBRE AS TIPO', DB::raw('ifnull(R2.NOMBRE,"NA") AS PADRE') , 'RECURSO.*')
        ->get();



    /*  $recursos = DB::table('RECURSO')->join('TIPO_RECURSO', 'TIPO_RECURSO.ID_TIPO_RECURSO', '=', 'RECURSO.TIPO_RECURSO')
    ->join('RECURSO AS R2' , 'R2.ID_RECURSO', '=', 'RECURSO.RECURSO_PADRE')->orOn('R2.ID_RECURSO','IS NULL')
    ->select('TIPO_RECURSO.NOMBRE AS TIPO', 'R2.NOMBRE AS PADRE', 'RECURSO.NOMBRE')
    ->get();*/
     return view('content.resource.catalog', compact('recursos'));
    }
    function show($id_usuario){
      $tipos = Tipo_Recurso::orderBy('ID_TIPO_RECURSO')->get();
      $recursos = Recurso::orderBy('ID_RECURSO')->where('ID_USUARIO',$id_usuario)->get();
      return view('content.resource.create', compact('tipos','recursos'));
    }
    function store(Request $request){
      $recurso= new Recurso;
      $recurso->TIPO_RECURSO = $request->TIPO_RECURSO;
      $recurso->RECURSO_PADRE = $request->RECURSO_PADRE;
      $recurso->SEMANA = 1;
      $recurso->NOMBRE = $request->nombre;
      $recurso->URL = $request->url;
      $recurso->VISIBLE = $request->VISIBLE;
      $recurso->SECUENCIA = $request->secuencia;
      $recurso->NOTAS = $request->notas;
      $recurso->ESTADO = 1;
      $recurso->ID_USUARIO = $request->id_usuario;
      $recurso->save();
      return response()->json("Recurso creado exitosamente");
    }
    function update(){

    }
    function getForUpdate($id){

    }
    public function delete($id){
      $recurso = Recurso::find($id);
      $recurso->delete();
      /*return view('content.index');*/
      /*return redirect()->route('/showUsers');*/
     return response()->json("El recurso se elimino correctamente!");
    }
}
