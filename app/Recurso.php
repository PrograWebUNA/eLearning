<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recurso extends Model
{
  protected $table = 'RECURSO';
  protected $primaryKey = 'ID_RECURSO';
  public $timestamps = false;
  protected $fillable = ['TIPO_RECURSO', 'RECURSO_PADRE','SEMANA','NOMBRE','URL','VISIBLE','SECUENCIA','NOTAS','ESTADO'];
}
