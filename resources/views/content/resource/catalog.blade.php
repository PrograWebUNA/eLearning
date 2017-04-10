@extends('layouts.master')

@section('content')
          <div class="container">
              <div class="row">
                  <div class="col-md-8 col-md-offset-2">
                      <div class="panel panel-default">
                          <div class="panel-heading">Lista de Cursos</div>
                          <div class="panel-body">

                            <h2>Recursos Activos</h2>

                              <table class="table table-striped">
                                <thead>
                                  <tr>
                                    <th>Tipo</th>
                                    <th>Recurso padre</th>
                                    <th>Nombre</th>
                                    <th>URL</th>
                                    <th>Secuencia</th>
                                    <th>Notas</th>
                                    <th>Modificar</th>
                                    <th>Eliminar</th>
                                 </tr>
                                </thead>
                                <tbody>
                                @foreach ($recursos as $recurso)
                                  <tr>
                                    <td >{{$recurso->TIPO}}</td>
                                    <td >{{$recurso->PADRE}}</td>
                                    <td >{{$recurso->NOMBRE}}</td>
                                    <td >{{$recurso->URL}}</td>
                                    <td >{{$recurso->SECUENCIA}}</td>
                                    <td >{{$recurso->NOTAS}}</td>
                                    <td><button  onclick="updateResource({{ $recurso->ID_RECURSO }})" class="fa fa-pencil" aria-hidden="true" id="modificar" title=""></button></td>
                                    <td><button  onclick="deleteResource({{ $recurso->ID_RECURSO }})" class="fa fa-trash-o" aria-hidden="true" id="eliminar"></button></td>
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
