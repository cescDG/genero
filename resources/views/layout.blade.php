<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google.">
    <meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template, eCommerce dashboard, analytic dashboard">
    <meta name="author" content="ThemeSelect">
    <title>
        @yield('title')
    </title>

    <link rel="apple-touch-icon" href="{{ asset('genero/images/logo/legisfav.svg') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('genero/images/logo/legisfav.svg') }}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- BEGIN: VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('genero/vendors/vendors.min.css') }}">
    <!-- END: VENDOR CSS-->
    <!-- BEGIN: Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('genero/css/themes/vertical-menu-nav-dark-template/materialize.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('genero/css/themes/vertical-menu-nav-dark-template/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('genero/css/pages/page-knowledge.css')}}">
    <!-- END: Page Level CSS-->
    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('genero/css/custom/custom.css')}}">
    <!-- END: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('genero/vendors/materialize-stepper/materialize-stepper.min.css')}} ">
    <link rel="stylesheet" type="text/css" href="{{ asset('genero/vendors/materialize-stepperUno/materialize-stepper.min.css')}} ">
    <link rel="stylesheet" type="text/css" href="{{ asset('genero/css-rtl/pages/form-wizard.css')}} ">
    <link rel="stylesheet" href="{{ asset('genero/vendors/select2/select2.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('genero/vendors/select2/select2-materialize.css') }}" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{ asset('genero/css/pages/form-select2.css') }}">

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
</head>
<!-- END: Head-->

<body class="vertical-layout page-header-light vertical-menu-collapsible vertical-menu-nav-dark preload-transitions 2-columns   " data-open="click" data-menu="vertical-menu-nav-dark" data-col="2-columns">

    <!-- BEGIN: Header-->
    <header class="page-topbar" id="header">
        <div class="navbar navbar-fixed">
            <nav class="navbar-main navbar-color nav-collapsible sideNav-lock navbar-dark bg-primary color-bg-nav gradient-shadow">
                <div class="nav-wrapper">
                    <ul class="navbar-list right" >
                        <li>
                            <a class="waves-effect waves-block waves-light profile-button" href="" data-target="profile-dropdown">
                                <span class="avatar-status avatar-online"><img src="{{ asset('genero/images/logo/avsvg2.svg') }}" alt="avatar"/>
                                    <i>
                                    </i>
                                </span>
                            </a>
                        </li>
                    </ul>
                    <ul class="navbar-list right" >
                        <li>
                            <a class="waves-effect waves-block waves-light notification-button" href="" data-target="notifications-dropdown">
                                <i class="material-icons">notifications_active</i>
                            </a>
                        </li>
                    </ul>
                    <ul class="dropdown-content" id="notifications-dropdown">
                        <li>
                            <h6>Notificaciones<span class="new " id="spanNotificaciones"></span></h6>
                        </li>
                        <li class="divider"></li>
                    </ul>
                    <!-- profile-dropdown-->
                    <ul class="dropdown-content" id="profile-dropdown">
                        <li><a class="grey-text text-darken-1" href=""><i class="material-icons">person_outline</i> Perfil</a></li>
                        <li><a class="grey-text text-darken-1" onclick="cerrarSesion(event)"><i class="material-icons">keyboard_tab</i>Salir</a></li>
                    </ul>
                    <ul class="right hide-on-med-and-down" style="font-size: 11px; line-height : 15px !important">
                        <br>
                        Bienvenido   ADMINISTRADOR  USUARIO </strong>
                        <br>
                        al Sistema.
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <!-- END: Header-->


    <aside class="sidenav-main nav-expanded nav-lock nav-collapsible sidenav-light navbar-full sidenav-active-rounded">
        @include('menu')
        <div class="navigation-background"></div><a class="bg-menu sidenav-trigger btn-sidenav-toggle btn-floating btn-medium waves-effect waves-light hide-on-large-only" href="#" data-target="slide-out"><i class="material-icons">menu</i></a>
    </aside>

    <div id="main">
        @yield('content')
    </div>

    <footer class="page-footer footer footer-static footer-dark color-bg-nav gradient-shadow navbar-border navbar-shadow"
    style="border-radius:15px;">
        <div class="footer-copyright">
            <div class="container">
                <center>
                        <span>
                        Poder Legislativo del Estado de México <br>
    Plaza Hidalgo s/n, Col. Centro Toluca de Lerdo, Estado de México <br>
    Tels. 722 279 64 00 y 279 65 00

                        </span>
                </center>
            </div>
        </div>
    </footer>
    <form id="logout-formm" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
    <script src="{{ asset('genero/js/vendors.min.js')}}"></script>
    <script src="{{ asset('genero/js/plugins.js')}}"></script>
    <script src="{{ asset('genero/js/search.js')}}"></script>
    <script src="{{ asset('genero/js/custom/custom-script.js')}}"></script>
    <script src="{{ asset('genero/vendors/materialize-stepper/materialize-stepper.min.js')}}"></script>
    <script src="{{ asset('genero/js/scripts/form-wizard.js')}}"></script>
    <script src="{{ asset('genero/vendors/select2/select2.full.min.js') }}"></script>
    <script src="{{ asset('genero/vendors/select2/select2.full.min.js') }}"></script>
    <script src="{{ asset('genero/js/scripts/form-select2.js') }}"></script>
    <script src="http://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script type="text/javascript">    
        function cerrarSesion(event) {
            event.preventDefault();
            $("#logout-formm").submit();
        }
    </script>
    @stack('scripts')
</body>

</html>
