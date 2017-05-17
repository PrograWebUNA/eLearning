@extends('layouts.master');

@section('header')
    <h2>Solicitar Video</h2>
@stop

@section('content')
    {!! Form::open(['url'=>'play','class'=>'form-horizontal']) !!}
        <div class="form-group">
            {!! Form::label('nombre', 'Nombre del video (con extension):', ['class'=>'control-label col-md-2']) !!}
            <div class="col-md-10">
                {!! Form::text('nombre', null,  ['class'=>'form-control']) !!}
                {!! $errors->has('nombre')?$errors->first('nombre'):'' !!}
            </div>
        </div>
         <div class="form-group">
            <div class="col-md-offset-2 col-md-10">
                {!! Form::submit('Ver video',  ['class'=>'btn btn-primary']) !!}
            </div>
        </div>
    {!! Form::close() !!}
@stop




