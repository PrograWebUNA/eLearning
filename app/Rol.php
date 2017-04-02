<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
  protected $table = 'ROL';
  protected $primaryKey = 'ID_ROL';
  public $timestamps = false;
  protected $fillable = ['NOMBRE', 'ESTADO',];
}
