@extends('layouts.master')

@section('content')
<div class="row">

    <!-- Blog Entries Column -->
    <div class="col-md-8">

        <h1 class="page-header">
            Elearning Platform
            <small>by AAJ</small>
        </h1>

        <h2>
            Catalogo de Cursos
        </h2>


        @foreach ($courses as $course)
            <!-- First Blog Post -->
            <h2>
                <a href="#">{{$course->NOMBRE}}</a>
            </h2>
            <p class="lead">
                by <a href="index.php">Elearning</a>
            </p>
            <p><span class="glyphicon glyphicon-time"></span> Posteado en {{$course->FECHA_INICIO}}</p>
            <p><span class="glyphicon glyphicon-time"></span> Fecha de finalizaci&oacute;n en {{$course->FECHA_FIN}}</p>
            <hr>
            <img class="img-responsive" src="{{$course->URL_IMAGEN}}" alt="">
            <hr>
            <p>{{$course->DESCRIPCION}}</p>
            <a class="btn btn-primary" onclick="showResources({{ $course->ID_CURSO }})">Ver M&aacute;s <span class="glyphicon glyphicon-chevron-right"></span></a>
            
            <hr>
        @endforeach


        <!-- Pager -->
        <ul class="pager">
            <li class="previous">
                <a href="#">&larr; Older</a>
            </li>
            <li class="next">
                <a href="#">Newer &rarr;</a>
            </li>
        </ul>

    </div>

    <!-- Blog Sidebar Widgets Column -->
    <div class="col-md-4">

        <!-- Blog Search Well -->
        <div class="well">
            <h4>Busqueda</h4>
            <div class="input-group">
                <input type="text" class="form-control">
                <span class="input-group-btn">
                    <button class="btn btn-default" type="button">
                        <span class="glyphicon glyphicon-search"></span>
                </button>
                </span>
            </div>
            <!-- /.input-group -->
        </div>

        <!-- Blog Categories Well -->
        <div class="well">
            <h4>Categorias</h4>
            <div class="row">
                <div class="col-lg-6">
                    <ul class="list-unstyled">
                        <li><a href="#">Matem&aacute;tica</a>
                        </li>

                        <li><a href="#">Pedagog&iacute;a</a>
                        </li>

                    </ul>
                </div>
                <!-- /.col-lg-6 -->
                <div class="col-lg-6">
                    <ul class="list-unstyled">
                      <li><a href="#">Ingenier&iacute;a</a>
                      </li>
                      <li><a href="#">Ingl&eacute;s</a>
                      </li>

                    </ul>
                </div>
                <!-- /.col-lg-6 -->
            </div>
            <!-- /.row -->
        </div>

        <!-- Side Widget Well -->
        <div class="well">
            <h4>Acerca de Eleraning</h4>
            <p>Somos una plataforma de aprendizaje virtual, que busca ayudar a jovenes promesas que quieran incursionar en temas de su inter&eacute;s y desarrollar sus habilidades en los mismos.</p>
        </div>

    </div>

</div>
<!-- /.row -->

<hr>
@endsection
