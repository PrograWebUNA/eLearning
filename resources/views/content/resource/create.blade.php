@extends('layouts.master')

@section('content')
<div class="row">

  <!-- Blog Entries Column -->
 {!! Form::open(array('id'=>'resourceForm','method'=>'POST', 'files'=>true)) !!}
    <!--<form id="resourceForm" action="#" method="post"> -->
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
      <input type="text" class="form-control" id="nombre" name="nombre">
    </div>
    <div class="form-group">
      <label for="url">URL:</label>
      <input type="text" class="form-control" id="url"  name="url">
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
      <input type="hidden" class="form-control" id="id_usuario" value="{{ Auth::user()->ID_USUARIO  }}"readonly name="id_usuario">
      <input type="hidden" class="form-control" id="id_curso" value="{{ $curso }}"readonly name="id_curso">

    </div>

    <div class="about-section">
       <div class="text-content">
         <div class="span7 offset1">
            @if(Session::has('success'))
              <div class="alert-box success">
              <h2>{!! Session::get('success') !!}</h2>
              </div>
            @endif
            <div class="secure">Ruta de carga de archivo</div>

             <div class="control-group">
              <div class="controls">
              {!! Form::file('file',array('class'=>'file')) !!}
    	  <p class="errors">{!!$errors->first('any')!!}</p>
    	@if(Session::has('error'))
    	<p class="errors">{!! Session::get('msg') !!}</p>
    	@endif
            </div>
            </div>

       </div>
    </div>





    <button type="submit" class="btn btn-default">Guardar</button>
</div>
{!! Form::close() !!}

</div>
<!-- /.row -->

<hr>
@endsection
