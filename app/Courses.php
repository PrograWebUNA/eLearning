<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
  protected $table = 'CURSO';
  protected $primaryKey = 'ID_CURSO';
  public $timestamps = false;
  protected $fillable = ['NOMBRE', 'DURACION', 'FECHA_INICIO', 'FECHA_FIN','ESTADO','URL_IMAGEN'];
    //


    public function matriculas()
    {
       return $this->hasMany('App\Matricula');
    }
}
