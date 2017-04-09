<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Cursos virtuales</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
              @if (Auth::guest())
                <li>
                    <a href="/">Inicio</a>
                </li>
                <li>
                    <a href="/courses/catalog">Cursos</a>
                </li>

                <li>
                    <a href="/account/register">Registrar</a>
                </li>
                <li>
                    <a href="/account/login">Ingresar</a>
                </li>
                @else
                <li >
                    <a href="#" >
                        {{ Auth::user()->name  }}
                    </a>
                </li>
                <li class="dropdown">
                  <a  role="button"  href="/account/login">Mis cursos<span class="caret"></span></a>
                </li>
                <li>
                @if(roleController::hasRole(Auth::user()->ID_USUARIO,"ADMINISTRADOR"))
                  <li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Configuraciones</a>
            								<ul class="dropdown-menu">
            									<li><a href="/courses/create">Crear Curso</a></li>
                              <li><a href="/role/show">Asignar rol</a></li>
                              <li><a href="/showUsers">Ver Usuarios</a></li>
                              <li><a href="/showCourses">Ver Cursos</a></li>
            								</ul>
            		</li>
                @else
                <h1>AQUI VA LO QUE SE TIENE QUE MOSTRAR SI NO TIENE EL ROL</h1>
                @endif


                </li>
                        <li>
                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                                Logout
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                @endif
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>
