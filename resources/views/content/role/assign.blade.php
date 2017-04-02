@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Asignar Rol</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="">
                        {{ csrf_field() }}

                        <div>
                            <label for="usuario" class="col-md-4 control-label">Usuario</label>

                            <div class="col-md-6">
                                <select class="form-control" name="usuario" id="usuario" data-parsley-required="true">
                                  @foreach ($usuarios as $usuario)
                                  {
                                    <option value="{{ $usuario->ID_USUARIO }}">{{ $usuario->name}}</option>
                                  }
                                  @endforeach
                                </select>
                            </div>
                        </div>

                        <div>
                            <label for="rol" class="col-md-4 control-label">Rol</label>

                            <div class="col-md-6">
                                <select class="form-control" name="rol" id="rol" data-parsley-required="true">
                                  @foreach ($roles as $rol)
                                  {
                                    <option value="{{ $rol->ID_ROL}}">{{ $rol->NOMBRE }}</option>
                                  }
                                  @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Asignar
                                </button>


                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
