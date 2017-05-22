@extends('layouts.master')

@section('content')
<div class="row">

  <!-- Blog Entries Column -->

    <form id="updateResource" action="#" method="post">
      <div class="col-md-8" id="reg-form">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="tipo" class="col-md-4 control-label">Tipo</label>
              <select class="form-control" name="tipo" id="tipo" data-parsley-required="true">
              @foreach ($tipos as $tipo)
              {
                <option value="{{ $tipo->ID_TIPO_RECURSO }}">{{ $tipo->NOMBRE}}</option>
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
      <input type="text" class="form-control" id="nombre" value="{{$recurso->NOMBRE}}" name="nombre">
    </div>
    <div class="form-group">
      <label for="url">URL:</label>
      <input type="text" class="form-control" id="url"  value="{{$recurso->URL}}" name="url">
      <input type="hidden" class="form-control" id="ID_RECURSO"  value="{{$recurso->ID_RECURSO}}" name="ID_RECURSO">
    </div>
    <div class="form-group">
      <label for="fechaFin">Visible:</label>
      <input type="text" class="form-control" id="VISIBLE" value="{{$recurso->VISIBLE}}" name="VISIBLE" onblur="">
    </div>
    <div class="form-group">
      <label for="fechaFin">Secuencia:</label>
      <input type="text" class="form-control" id="secuencia" value="{{$recurso->SECUENCIA}}"  name="secuencia">
    </div>
    <div class="form-group">
      <label for="fechaFin">Notas:</label>
      <input type="text" class="form-control" id="notas"  name="notas" value="{{$recurso->NOTAS}}">
      <input type="hidden" class="form-control" id="id_usuario" value="  {{ Auth::user()->ID_USUARIO  }}"readonly name="id_usuario">
    </div>
    <div class="form-group">
      <label for="Docs">Documentos:</label>
    <a href="{{url('docs/'.$nombreArchivo)}}" target="_blank">Ver Documento</a>
    </div>

    <div class="form-group">
      <label >Video:</label>
      <a href="play" class="btn btn-primary">Reproducir</a>
    </div>


    <button type="submit" class="btn btn-default">Guardar</button>
</div>
</form>

</div>
<!-- /.row -->

<hr>
@endsection
