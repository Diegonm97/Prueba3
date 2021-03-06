<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="shortcut icon" href="/assets/img/intersaludfavicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />


    <title>Intersalud Colombia</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">


    <!-- Bootstrap core CSS     -->
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="{{asset('assets/css/animate.min.css')}}" rel="stylesheet" />

    <!--  Light Bootstrap Table core CSS    -->
    <link href="{{asset('assets/css/light-bootstrap-dashboard.css?v=1.4.0')}}" rel="stylesheet" />

    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="{{asset('assets/css/pe-icon-7-stroke.css')}}" rel="stylesheet" />

    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />



    <style>
        .modal-backdrop.in {
            position: inherit;
        }

        .modal-backdrop {
            background-color: #f5f5f5;
        }
    </style>
</head>

<body>

    <div class="wrapper">
        <div class="sidebar" data-color="blue" data-image="{{asset('assets/img/sidebar-4.jpg')}}">

            <!--

        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag

    -->

            <div class="sidebar-wrapper">
                <div class="logo">
                    <a href="{{route('home')}}" class="simple-text">
                        Intersalud Colombia
                    </a>
                </div>

                <ul class="nav">
                    @role('cliente')
                    <li>
                        <a href="{{route('pago.index')}}">
                            <i class="pe-7s-news-paper"></i>
                            <p>Pagos</p>
                        </a>
                    </li>
                    @endrole

                    @role('administrador')
                    <li>
                        <a href="{{route('pago.index')}}">
                            <i class="pe-7s-news-paper"></i>
                            <p>Pagos</p>
                        </a>
                    </li>

                    <li>
                        <a href="{{route('clientes.index')}}">
                            <i class="pe-7s-user"></i>
                            <p>Clientes</p>
                        </a>
                    </li>

                    <li>
                        <a href="{{route('empresa.index')}}">
                            <i class="pe-7s-portfolio"></i>
                            <p>Empresas</p>
                        </a>
                    </li>

                    <li>
                        <a href="{{route('empleado_empresa.index')}}">
                            <i class="pe-7s-users"></i>
                            <p>Empleado empresa</p>
                        </a>
                    </li>

                    <li>
                        <a href="{{route('empleado.index')}}">
                            <i class="pe-7s-users"></i>
                            <p>Empleado</p>
                        </a>
                    </li>

                    <li>
                        <a href="{{route('sede.index')}}">
                            <i class="pe-7s-map-marker"></i>
                            <p>Sedes</p>
                        </a>
                    </li>

                    <li>
                        <a href="{{route('entidad.index')}}">
                            <i class="pe-7s-culture"></i>
                            <p>Entidades</p>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('ciudad.index')}}">
                            <i class="pe-7s-home"></i>
                            <p>Ciudades</p>
                        </a>
                    </li>

                    <li>
                        <a href="{{route('configuracion.index')}}">
                            <i class="pe-7s-note2"></i>
                            <p>Configuración</p>
                        </a>
                    </li>
                    @endrole

                    @role('empleado')

                    <li>
                        <a href="{{route('clientes.index')}}">
                            <i class="pe-7s-user"></i>
                            <p>Clientes</p>
                        </a>
                    </li>

                    <li>
                        <a href="{{route('empresa.index')}}">
                            <i class="pe-7s-portfolio"></i>
                            <p>Empresas</p>
                        </a>
                    </li>

                    <li>
                        <a href="{{route('empleado_empresa.index')}}">
                            <i class="pe-7s-users"></i>
                            <p>Empleado empresa</p>
                        </a>
                    </li>

                    <li>
                        <a href="{{route('entidad.index')}}">
                            <i class="pe-7s-culture"></i>
                            <p>Entidades</p>
                        </a>
                    </li>

                    @endrole


                </ul>
            </div>
        </div>

        <div class="main-panel">
            <nav class="navbar navbar-default navbar-fixed">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                    </div>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">

                            <li>
                                <a href="\assets\Manual de Usuario.pdf" target="_blank"><i class="fas fa-question-circle fa-3x"></i></a>
                                @role('administrador')
                            </li>
                            <li>
                                <a href="{{ route('users.index') }}">
                                    Cuentas
                                </a>

                            </li>
                            <li>
                                <a href="{{ route('roles.index') }}">
                                    Roles
                                </a>
                            </li>
                            @endrole
                            @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            <li class="nav-item">
                                @if (Route::has('register'))
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                @endif
                            </li>
                            @else
                            <li class="dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            {{ __('Salir del sistema') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </li>
                                </ul>
                            </li>
                            @endguest

                        </ul>




                    </div>
                </div>
            </nav>


            <div class="content">
                <div class="container-fluid">
                    <div class="row">

                        @yield('content')

                    </div>
                </div>
            </div>


            <footer class="footer">
                <div class="container-fluid">
                    <nav class="pull-left">
                        <ul>
                            <li>
                                <a href="home">
                                    Pag. Principal
                                </a>
                            </li>

                        </ul>
                    </nav>
                    <p class="copyright pull-right">
                        &copy; <script>
                            document.write(new Date().getFullYear())
                        </script> <a href="">Intersalud Colombia</a>
                    </p>
                </div>
            </footer>

        </div>
    </div>


</body>

<!--   Core JS Files   -->
<script src="{{asset('assets/js/jquery.3.2.1.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}" type="text/javascript"></script>

<!--  Charts Plugin -->
<script src="{{asset('assets/js/chartist.min.js')}}"></script>

<!--  Notifications Plugin    -->
<script src="{{asset('assets/js/bootstrap-notify.js')}}"></script>

<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

<!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
<script src="{{asset('assets/js/light-bootstrap-dashboard.js?v=1.4.0')}}"></script>

<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
<script src="{{asset('assets/js/demo.js')}}"></script>


</html>