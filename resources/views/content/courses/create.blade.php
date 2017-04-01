@extends('layouts.master')

@section('content')
<div class="row">

  <!-- Blog Entries Column -->
  <div class="col-md-8">
    <form action="/storeCourse" method="get">
      {{ csrf_field() }}
    <div class="form-group">
      <label for="nombreCurso">Nombre:</label>
      <input type="text" class="form-control" id="nombre" name="nombre">
    </div>
    <div class="form-group">
      <label for="fechaIni">Inicio:</label>
      <input type="date" class="form-control" id="fecha_inicio" onblur="numberOfWeeks();" name="fecha_inicio">
    </div>
    <div class="form-group">
      <label for="fechaFin">Fin:</label>
      <input type="date" class="form-control" id="fecha_final" name="fecha_final" onblur="numberOfWeeks();">
    </div>
    <div class="form-group">
      <label for="fechaFin">Semanas:</label>
      <input type="text" class="form-control" id="duracion" readonly name="duracion">
      <input type="hidden" class="form-control" id="estado"  value="1" readonly name="estado">
    </div>
    <button type="submit" class="btn btn-default">Guardar</button>
  </div>
</form>
</div>
<!-- /.row -->

<hr>
@endsection
