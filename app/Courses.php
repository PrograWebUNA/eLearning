<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
  protected $table = 'Curso';
  protected $primaryKey = 'id_curso';
  public $timestamps = false;
  protected $fillable = ['nombre', 'duracion', 'fecha_inicio', 'fecha_final','estado'];
    //
}
