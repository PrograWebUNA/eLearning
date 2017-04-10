  @extends('layouts.master')

  @section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
          <div class="panel-heading">Modificar Curso</div>
          <div class="panel-body">
            <form class="form-horizontal" role="form"  action="#" method="post" id="updateCourseForm">
              {{ csrf_field() }}

              <div class="form-group{{ $errors->has('ID_CURSO') ? ' has-error' : '' }}">
                <input type='hidden' id="ID_CURSO" type="text" class="form-control" name="ID_CURSO" value="{{$course->ID_CURSO}}" required>

                @if ($errors->has('ID_CURSO'))
                <span class="help-block">
                  <strong>{{ $errors->first('ID_CURSO') }}</strong>
                </span>
                @endif
              </div>

              <div class="form-group">
                <label for="NOMBRE">Nombre del Curso:</label>
                <input  type="text" class="form-control" id="NOMBRE" name="NOMBRE" value="{{$course->NOMBRE}}" required autofocus>
              </div>

              <div class="form-group">
                <label for="urlCurso">URL de Imagen:</label>
                <input type="text" class="form-control" id="urlCurso" name="urlCurso" value="{{$course->URL_IMAGEN}}">
              </div>

              <div class="form-group">
                <label for="urlCurso">Descripci&oacute;n del Curso:</label>
                <input type="text" class="form-control" id="descripcion" name="descripcion" value="{{$course->DESCRIPCION}}" required>
              </div>

              <div class="form-group">
                <label for="fechaIni">Inicio del Curso:</label>
                <input type="date" class="form-control" id="fecha_inicio" onblur="numberOfWeeks();" value="{{$course->FECHA_INICIO}}" name="fecha_inicio" required>
              </div>

              <div class="form-group">
                <label for="fechaFin">Fecha final del Curso:</label>
                <input type="date" class="form-control" id="fecha_final" name="fecha_final" value="{{$course->FECHA_FIN}}" onblur="numberOfWeeks();" required>
              </div>

              <div class="form-group">
                <label for="fechaFin">Numero de Semanas:</label>
                <input type="text" class="form-control" id="duracion"  name="duracion" value="{{$course->DURACION}}" readonly >

                <input type="hidden" class="form-control" id="ESTADO" name="ESTADO" value="{{$course->ESTADO}}" readonly >
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
