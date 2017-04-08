  @extends('layouts.master')

  @section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
          <div class="panel-heading">Modificar Curso</div>
          <div class="panel-body">
            <form class="form-horizontal" role="form"  action="courses/updateCourse" method="post">
              {{ csrf_field() }}

              <div class="form-group{{ $errors->has('ID_CURSO') ? ' has-error' : '' }}">
                <input type='hidden' id="ID_CURSO" type="text" class="form-control" name="ID_CURSO" value="{{$course->ID_CURSO}}" required>

                @if ($errors->has('ID_CURSO'))
                <span class="help-block">
                  <strong>{{ $errors->first('ID_CURSO') }}</strong>
                </span>
                @endif
              </div>

              <div class="form-group{{ $errors->has('NOMBRE') ? ' has-error' : '' }}">
                <label for="NOMBRE" class="col-md-4 control-label">Nombre del Curso:</label>

                <div class="col-md-6">
                  <input  type="text" class="form-control" id="nombre" name="nombre" value="{{$course->NOMBRE}}" required autofocus>

                  @if ($errors->has('NOMBRE'))
                  <span class="help-block">
                    <strong>{{ $errors->first('NOMBRE') }}</strong>
                  </span>
                  @endif
                </div>
              </div>

              <div class="form-group">
                <label for="fechaIni">Inicio del Curso:</label>
                <input type="date" class="form-control" id="fecha_inicio" onblur="numberOfWeeks();" value="{{$course->FECHA_INICIO}}" name="fecha_inicio">
              </div>

              <div class="form-group">
                <label for="fechaFin">Fecha final del Curso:</label>
                <input type="date" class="form-control" id="fecha_fin" name="fecha_fin" value="{{$course->FECHA_FIN}}" onblur="numberOfWeeks();">
              </div>

              <div class="form-group">
                <label for="fechaFin">Numero de Semanas:</label>
                <input type="text" class="form-control" id="duracion"  name="duracion" value="{{$course->DURACION}}" readonly >

                <input type="hidden" class="form-control" id="estado" name="estado" value="{{$course->ESTADO}}" readonly >
              </div>

              <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                  <button type="submit" class="btn btn-primary">
                    Modificar
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
