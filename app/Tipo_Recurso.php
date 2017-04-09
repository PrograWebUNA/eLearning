<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipo_Recurso extends Model
{
  protected $table = 'TIPO_RECURSO';
  protected $primaryKey = 'ID_TIPO_RECURSO';
  public $timestamps = false;
  protected $fillable = ['NOMBRE'];
}
