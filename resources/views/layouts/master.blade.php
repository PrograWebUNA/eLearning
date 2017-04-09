<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>e-Learning</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{ url('css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ url('css/blog-home.css')}}" rel="stylesheet">

    <link href="{{ url('css/font-awesome.css')}}" rel="stylesheet">

    <link href="{{ url('css/style.css')}}" rel="stylesheet">




</head>

<body>

    <!-- Navigation -->
    @include('partials.navbar')

    <!-- Page Content -->
    <div class="container">
      @yield('content')

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Cursos virtuales CR 2017</p>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="{{ url('js/jquery.js') }}"></script>

    <script src="{{ url('js/jquery.mjs.nestedSortable.js') }}"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="{{ url('js/bootstrap.min.js') }}"></script>

    <!-- Noty -->
    <script src="{{ url('js/noty/packaged/jquery.noty.packaged.min.js') }}"></script>
    <!-- Customize script -->
    <script src="{{ url('js/functions.js') }}"></script>


</body>

</html>
