<ul class="sidenav sidenav-collapsible  leftside-navigation collapsible sidenav-fixed menu-shadow" id="slide-out" data-menu="menu-navigation" data-collapsible="menu-accordion">
    <h1 class="logo-wrapper img">
        <a class="brand-logo center darken-1" style="color: #000000; text-align: center !important;" href="">
            <img src="{{ asset('genero/images/logo/saf.png') }}"  alt=" avatar" width="100%"/>
        </a>
    </h1>

<li><a href=""><i class="material-icons ">home</i><span data-i18n="Modern Menu">Inicio</span></a></li>
<li class="bold"><a class="collapsible-header  waves-effect color-bg-nav-menu active" href="JavaScript:void(0)"><i class="material-icons">visibility</i><span class="menu-title" data-i18n="Templates">Reportes</span></a>
    <div class="collapsible-body">
        <ul class="collapsible collapsible-sub" data-collapsible="accordion">
            <ul class="collapsible" data-collapsible="accordion">
                <li><a href="{{route('reportes.individual')}}"><span data-i18n="Modern Menu">Individual</span></a></li>
                <li><a href="{{route('reportes.dependencia')}}"><span data-i18n="Modern Menu">Dependencia</span></a></li>
                <li><a href="{{route('reportes.pregunta')}}"><span data-i18n="Modern Menu">Por preguntas</span></a></li>
            </ul>
        </ul>
    </div>
</li>
</ul>
