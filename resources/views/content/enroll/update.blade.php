  @extends('layouts.master')

  @section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
          <div class="panel-heading">Modificar Matricula</div>
          <div class="panel-body">
            <form class="form-horizontal" role="form"  action="enroll/updateMatricula" method="post">
              {{ csrf_field() }}


              <div class="form-group">
                <label for="ID_MATRICULA" class="col-md-2 control-label">Id Matricula:</label>
                <div class="col-md-6">
                <input  type="text" id="ID_MATRICULA" type="text" class="form-control" name="ID_MATRICULA" value="{{$matricula->ID_MATRICULA}}" readonly="true">
              </div>


              </div>


              <div class="form-group" >
  							  <label for="NOMBRE_USUARIO" class="col-md-2 control-label">Usuario</label>

  							   <div class="col-md-6">
  							  <input type="text" class="form-control" id="NOMBRE_USUARIO"
  							  name="NOMBRE_USUARIO" value="{{$matricula->ID_USUARIO}}"
  							  readonly="true">
  							   </div>
  					</div>



              <div class="form-group{{ $errors->has('NOMBRE') ? ' has-error' : '' }}">

                <label for="NOMBRE" class="col-md-2 control-label">Nombre:</label>

                <div class="col-md-6">
                  <input  type="text" class="form-control" id="NOMBRE" name="NOMBRE" value="{{$matricula->NOMBRE}}" required autofocus>

                  @if ($errors->has('NOMBRE'))
                  <span class="help-block">
                    <strong>{{ $errors->first('NOMBRE') }}</strong>
                  </span>
                  @endif
                </div>
              </div>


              <div class="form-group">
                  <label for="CURSO" class="col-md-2 control-label">Curso</label>

                  <div class="col-md-6">
                      <select class="form-control" name="CURSO" id="CURSO" data-parsley-required="true">
                        @foreach ($courses as $course)
                        {
                          <option value="{{ $course->ID_CURSO}}">{{ $course->NOMBRE}}</option>
                        }
                        @endforeach
                      </select>
                  </div>
              </div>

              <div class="form-group">
                <label for="fechaIni" class="col-md-2 control-label">Fecha matricula:</label>
                <div class="col-md-6">
                <input type="date" class="form-control" id="FECHA_MATRICULA" onblur="numberOfWeeks();" value="{{$matricula->FECHA_MATRICULA}}" name="FECHA_MATRICULA">
              </div>
              </div>


              <div class="form-group">
                <label for="anio" class="col-md-2 control-label">A&ntilde;o:</label>
                <div class="col-md-6">
                <input type="text" class="form-control" id="ANIO" value="{{$matricula->ANIO}}"  name="ANIO">
              </div>

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
