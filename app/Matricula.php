<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matricula extends Model
{
  protected $table = 'MATRICULA';
  protected $primaryKey = 'ID_MATRICULA';
  public $timestamps = false;
  protected $fillable = ['NOMBRE', 'ID_USUARIO','CURSO','FECHA_MATRICULA','ANIO',];
}
