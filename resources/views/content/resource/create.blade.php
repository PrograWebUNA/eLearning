@extends('layouts.master')

@section('content')
<div class="row">

  <!-- Blog Entries Column -->

    <form id="resourceForm" action="#" method="post">
      <div class="col-md-8" id="reg-form">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="tipo" class="col-md-4 control-label">Tipo</label>
              <select class="form-control" name="TIPO_RECURSO" id="TIPO_RECURSO" data-parsley-required="true">
              @foreach ($tipos as $tipo)
              {
                <option value="{{ $tipo->ID_TIPO }}">{{ $tipo->NOMBRE}}</option>
              }
              @endforeach
            </select>

    </div>
    <div class="form-group">
          <label for="padre" class="col-md-4 control-label">Recurso padre</label>
                <select class="form-control" name="RECURSO_PADRE" id="RECURSO_PADRE" data-parsley-required="true">
                @foreach ($recursos as $recurso)
                {
                  <option value="{{ $recurso->ID_RECURSO }}">{{ $recurso->NOMBRE}}</option>
                }
                @endforeach
              </select>

    </div>
    <div class="form-group">
      <label for="nombreCurso">Nombre:</label>
      <input type="text" class="form-control" id="nombre" name="nombre">
    </div>
    <div class="form-group">
      <label for="url">URL:</label>
      <input type="text" class="form-control" id="url" onblur="numberOfWeeks();" name="url">
    </div>
    <div class="form-group">
      <label for="fechaFin">Visible:</label>
      <input type="text" class="form-control" id="VISIBLE" name="VISIBLE" onblur="">
    </div>
    <div class="form-group">
      <label for="fechaFin">Secuencia:</label>
      <input type="text" class="form-control" id="secuencia"  name="secuencia">
    </div>
    <div class="form-group">
      <label for="fechaFin">Notas:</label>
      <input type="text" class="form-control" id="notas"  name="notas">
    </div>
    <button type="submit" class="btn btn-default">Guardar</button>
</div>
</form>

</div>
<!-- /.row -->

<hr>
@endsection
