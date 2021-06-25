<!DOCTYPE html>
<html class="loading" lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    @include('layouts.partials.header')
</head>
<!-- END: Head-->

<body
    class="vertical-layout page-header-light vertical-menu-collapsible vertical-menu-nav-dark 2-columns
    data-open="click" data-menu="vertical-modern-menu" data-col="2-columns">
    <!-- BEGIN: Header-->
    @include('layouts.partials.topbar')
    <!-- END: Header-->
    @include('layouts.partials.searchbar')
    <!-- BEGIN: SideNav-->
    @include('layouts.partials.asidebar')
    <!-- END: SideNav-->
    <!-- BEGIN: Page Main-->
    <div id="main">
        <div class="row">
            <div class="content-wrapper-before blue-grey lighten-5"></div>
            <!--<div class="content-wrapper-before gradient-45deg-indigo-purple"></div>-->
            <div class="col s12">
                <div class="container">
                    @yield('contenido')
                    @include('layouts.partials.rigthbar')
                    <!-- @include('layouts.partials.intro') -->
                </div>
            </div>
        </div>
    </div>
    <!-- END: Page Main-->
    <!-- Theme Customizer -->
    @include('layouts.partials.propertiesbar')
    <!-- BEGIN: Footer-->
    @include('layouts.partials.footer')
    <!-- END: Footer-->
    <!-- BEGIN VENDOR JS-->
    @include('layouts.partials.scripts')
    <!-- END PAGE LEVEL JS-->
</body>
</html>
