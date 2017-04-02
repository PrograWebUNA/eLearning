<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario_rol extends Model
{
  protected $table = 'USUARIO_ROL';
  protected $primaryKey = 'ID_USUARIO_ROL';
  public $timestamps = false;
  protected $fillable = ['ID_USUARIO', 'ROL', 'ESTADO',];
}
