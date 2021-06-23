<!DOCTYPE html>
<!--
Template Name: Materialize - Material Design Admin Template
Author: PixInvent
Website: http://www.pixinvent.com/
Contact: hello@pixinvent.com
Follow: www.twitter.com/pixinvents
Like: www.facebook.com/pixinvents
Purchase: https://themeforest.net/item/materialize-material-design-admin-template/11446068?ref=pixinvent
Renew Support: https://themeforest.net/item/materialize-material-design-admin-template/11446068?ref=pixinvent
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.

-->
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
