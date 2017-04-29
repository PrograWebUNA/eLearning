@extends('layouts.master')

@section('content')
<div class="container">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading">Matricular</div>
        <div class="panel-body">
          <form class="form-horizontal" role="form" action="#" method="post" id="saveMatriculaForm">
            {{ csrf_field() }}

            <!-- <div class="form-group">
            <label for="usuario" class="col-md-4 control-label">Usuario</label>

            <div class="col-md-6">
            <select class="form-control" name="ID_USUARIO" id="ID_USUARIO" data-parsley-required="true">
            @foreach ($usuarios as $usuario)
            {
            <option value="{{ $usuario->ID_USUARIO }}">{{ $usuario->name}}</option>
          }
          @endforeach
        </select>
      </div>
    </div>-->


    <div class="form-group" >

      <label for="NOMBRE_USUARIO" class="col-md-4 control-label" >Usuario</label>

      <div class="col-md-6 ">
            <select class="form-control" name="ID_USUARIO" id="ID_USUARIO" >
              @foreach ($usuarios as $usuario)
              {
                <option value="{{ $usuario->ID_USUARIO }}">{{ $usuario->name}}</option>
              }
              @endforeach
            </select>
      </div>
    </div>






    <div class="form-group">
      <label for="CURSO" class="col-md-4 control-label">Curso</label>

      <div class="col-md-6">
        <select class="form-control" name="CURSO" id="CURSO" data-parsley-required="true">
          @foreach ($courses as $course)
          {
            <option value="{{ $course->ID_CURSO}}">{{ $course->NOMBRE }}</option>
          }
          @endforeach
        </select>
      </div>
    </div>

    <div class="form-group">
      <label for="NOMBRE" class="col-md-4 control-label" >Nombre</label>

      <div class="col-md-6">
        <input type="text" class="form-control" id="NOMBRE" name="NOMBRE" required="true">
      </div>
    </div>

    <div class="form-group">
      <label for="FECHA_MATRICULA" class="col-md-4 control-label">Fecha matricula</label>
      <div class="col-md-6 ">
        <input type="date" class="form-control" id="FECHA_MATRICULA"
        onblur="numberOfWeeks();" name="FECHA_MATRICULA" required="true">
      </div>
    </div>

    <div class="form-group" >
      <label for="ANIO" class="col-md-4 control-label">A&ntilde;o</label>
      <div class="col-md-6 ">
        <input type="text" class="form-control" id="ANIO"  name="ANIO" required="true">
      </div>
    </div>


    <div class="form-group">
      <div class="col-md-8 col-md-offset-4">
        <button type="submit" class="btn btn-primary" >
          Matricular
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
