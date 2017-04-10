@extends('layouts.master')

@section('content')
<div class="row">

  <!-- Blog Entries Column -->
  <div class="col-md-8">
    <form action="#" method="get" id="saveCourseForm">
      {{ csrf_field() }}

    <div class="form-group">
      <label for="nombreCurso">Nombre:</label>
      <input type="text" class="form-control" id="nombre" name="nombre" required>
    </div>

    <div class="form-group">
      <label for="urlCurso">URL de Imagen:</label>
      <input type="text" class="form-control" id="urlCurso" name="urlCurso">
    </div>

    <div class="form-group">
      <label for="urlCurso">Descripci&oacute;n del Curso:</label>
      <input type="text" class="form-control" id="descripcion" name="descripcion" required>
    </div>

    <div class="form-group">
      <label for="fechaIni">Fecha de Inicio:</label>
      <input type="date" class="form-control" id="fecha_inicio" onblur="numberOfWeeks();" name="fecha_inicio" required>
    </div>

    <div class="form-group">
      <label for="fechaFin">Fecha de Fin:</label>
      <input type="date" class="form-control" id="fecha_final" name="fecha_final" onblur="numberOfWeeks();" required>
    </div>

    <div class="form-group">
      <label for="fechaFin">Semanas:</label>
      <input type="text" class="form-control" id="duracion" readonly name="duracion">
      <input type="hidden" class="form-control" id="estado"  value="1" readonly name="estado">
    </div>

    <button type="submit" class="btn btn-default">Guardar</button>

</form>
</div>
</div>

<!-- /.row -->

<hr>
@endsection
