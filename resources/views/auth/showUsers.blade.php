@extends('layouts.master')



@section('content')


<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Lista de Usuario</div>
                <div class="panel-body">

                  <h2>Usuarios Regitrados</h2>

                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>Nombre</th>
                          <th>Email</th>
                          <th>Identificaion</th>
                          <th>&Uacute;ltimo Ingreso</th>
                          <th>Modificar</th>
                          <th>Eliminar</th>

                        </tr>
                      </thead>
                      <tbody>
                      @foreach ($usuarios as $usuario)
                        <tr>
                          <td value="{{ $usuario->ID_USUARIO }}">{{$usuario->name}}</td>
                          <td value="{{ $usuario->ID_USUARIO }}">{{$usuario->email}}</td>
                          <td value="{{ $usuario->ID_USUARIO }}">{{$usuario->IDENTIFICACION}}</td>
                          <td value="{{ $usuario->ID_USUARIO }}">{{$usuario->updated_at}}</td>
                          <td><button  onclick="updateUser({{$usuario->ID_USUARIO}})" class="fa fa-pencil" aria-hidden="true" id="modificar" title=""></button></td>
                          <td><button  onclick="deleteUser({{$usuario->ID_USUARIO}})" class="fa fa-trash-o" aria-hidden="true" id="eliminar"></button></td>
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
