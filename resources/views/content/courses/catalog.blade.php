@extends('layouts.master')

@section('content')
          <div class="container">
              <div class="row">
                  <div class="col-md-8 col-md-offset-2">
                      <div class="panel panel-default">
                          <div class="panel-heading">Lista de Cursos</div>
                          <div class="panel-body">

                            <h2>Cursos Activos</h2>

                              <table class="table table-striped">
                                <thead>
                                  <tr>
                                    <th>Nombre</th>
                                    <th>Duraci&oacute;n</th>
                                    <th>Fecha de Inicio</th>
                                    <th>Fecha Final</th>
                                    <th>Estado</th>
                                    @if(!roleController::hasRole(Auth::user()->ID_USUARIO,"ESTUDIANTE"))
                                    <th>Modificar</th>
                                    <th>Eliminar</th>
                                    @endif
                                 </tr>
                                </thead>
                                <tbody>
                                @foreach ($courses as $course)
                                  <tr>
                                    <td value="{{ $course->ID_CURSO }}">{{$course->NOMBRE}}</td>
                                    <td value="{{ $course->ID_CURSO }}">{{$course->DURACION}}</td>
                                    <td value="{{ $course->ID_CURSO }}">{{$course->FECHA_INICIO}}</td>
                                    <td value="{{ $course->ID_CURSO }}">{{$course->FECHA_FIN}}</td>
                                    <td value="{{ $course->ID_CURSO }}">{{$course->ESTADO}}</td>
                                    @if(!roleController::hasRole(Auth::user()->ID_USUARIO,"ESTUDIANTE"))
                                    <td><button  onclick="updateCourse({{ $course->ID_CURSO }})" class="fa fa-pencil" aria-hidden="true" id="modificar" title=""></button></td>
                                    <td><button  onclick="deleteCourse({{ $course->ID_CURSO }})" class="fa fa-trash-o" aria-hidden="true" id="eliminar"></button></td>
                                    @endif
                                  </tr>
                                @endforeach

                                </tbody>
                              </table>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
@endsection
