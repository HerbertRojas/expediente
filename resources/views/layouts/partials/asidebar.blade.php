<aside class="sidenav-main nav-expanded nav-lock nav-collapsible sidenav-light sidenav-active-square">
    <div class="brand-sidebar">
        <h1 class="logo-wrapper"><a class="brand-logo darken-1" href="index.html"><img class="hide-on-med-and-down" src="../../../app-assets/images/logo/materialize-logo-color.png" alt="materialize logo"/><img class="show-on-medium-and-down hide-on-med-and-up" src="../../../app-assets/images/logo/materialize-logo.png" alt="materialize logo"/><span class="logo-text hide-on-med-and-down">Expedientes</span></a><a class="navbar-toggler" href="#"><i class="material-icons">radio_button_checked</i></a></h1>
    </div>
    <ul class="sidenav sidenav-collapsible leftside-navigation collapsible sidenav-fixed menu-shadow" id="slide-out" data-menu="menu-navigation" data-collapsible="menu-accordion">
        <li class="@if(Request::is('home')) active @endif bold"><a class="waves-effect waves-cyan @if(Request::is('home')) active @endif" href="{{ url('/home') }}"><i class="material-icons">settings_input_svideo</i><span class="menu-title" data-i18n="Dashboard">Dashboard</span></a>
        </li>
        <li class="@if(Request::is('roles')) active @endif bold"><a class="waves-effect waves-cyan @if(Request::is('roles')) active @endif" href="{{ route('roles.index') }}"><i class="material-icons">work</i><span class="menu-title" data-i18n="Work">Roles</span></a>
        </li>
        <li class="@if(Request::is('usuarios')) active @endif bold"><a class="waves-effect waves-cyan @if(Request::is('usuarios')) active @endif" href="{{ route('usuarios.index') }}"><i class="material-icons">person</i><span class="menu-title" data-i18n="Person">Usuarios</span></a>
        </li>
        <li class="bold"><a class="waves-effect waves-cyan" href=""><i class="material-icons">cloud_upload</i><span class="menu-title" data-i18n="CloudUpload">Subir Archivos</span></a>
        </li>
    </ul>
    <div class="navigation-background"></div><a class="sidenav-trigger btn-sidenav-toggle btn-floating btn-medium waves-effect waves-light hide-on-large-only" href="#" data-target="slide-out"><i class="material-icons">menu</i></a>
</aside>
