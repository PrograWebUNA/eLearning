@extends('layouts.master')

@section('header')
    <h1>Metodos de subida y descarga con servicio web</h1>
    <h2> http://localhost:9999/MtomStreamingService?wsdl </h2>
    <br />
    <br />
@stop

@section('content')
    <a href="uploadVideo" class="btn btn-primary">Subir Archivo</a>
    <a href="downloadVideo" class="btn btn-primary">Descargar Archivo</a>
    <a href="showVideo" class="btn btn-primary">Reproducir</a>

@stop
