@extends('layouts.master')

@section('content')
          <div class="container">
              <div class="row">
                  <div class="col-md-8 col-md-offset-2">
                      <div class="panel panel-default">
                          <div class="panel-heading">Lista de Matriculas</div>
                          <div class="panel-body">

                            <h2>Matriculas</h2>

                              <table class="table table-striped">
                                <thead>
                                  <tr>
                                    <th>ID Matricula</th>
                                    <th>Curso</th>
                                    <th>Nombre</th>
                                    <th>Fecha matricula</th>
                                    <th>A&ntilde;o</th>
                                 </tr>
                                </thead>
                                <tbody>
                                @foreach ($matriculas as $matricula)
                                  <tr>
                                    <td value="{{ $matricula->ID_MATRICULA }}">{{$matricula->ID_MATRICULA}}</td>
                                    <td value="{{ $matricula->ID_MATRICULA }}">{{$matricula->ID_CURSO}}</td>
                                    <td value="{{ $matricula->ID_MATRICULA }}">{{$matricula->NOMBRE}}</td>
                                    <td value="{{ $matricula->ID_MATRICULA }}">{{$matricula->FECHA_MATRICULA}}</td>
                                    <td value="{{ $matricula->ID_MATRICULA }}">{{$matricula->ANIO}}</td>
                                    <td><button  onclick="updateMatricula({{ $matricula->ID_MATRICULA }})" class="fa fa-pencil" aria-hidden="true" id="modificar" ></button></td>
                                     <td><button  onclick="deleteMatricula({{ $matricula->ID_MATRICULA }})" class="fa fa-trash-o" aria-hidden="true" id="eliminar"></button></td>
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
