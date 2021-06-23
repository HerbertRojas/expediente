@extends('layouts.master')
@section('estilos')
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/data-tables/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/data-tables/extensions/responsive/css/responsive.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/data-tables/css/dataTables.checkboxes.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/pages/app-invoice.css">
    <!-- END: Page Level CSS-->
    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/css/custom/custom.css">
@endsection
@section('contenido')
    <div class="breadcrumbs-inline pt-3 pb-1" id="breadcrumbs-wrapper">
        <!-- Search for small screen-->
        <div class="container">
            <div class="row">
                <div class="col s10 m6 l6 breadcrumbs-left">
                    <h5 class="breadcrumbs-title mt-0 mb-0 display-inline hide-on-small-and-down"><span><i class="material-icons">work</i> Roles</span></h5>
                    <ol class="breadcrumbs mb-0">
                        <li class="breadcrumb-item"><a href="{{ url('home') }}">Home</a>
                        </li>
                        <li class="breadcrumb-item active">Roles
                        </li>
                    </ol>
                </div>
                <div class="col s2 m6 l6">
                    <a class="btn btn-floating dropdown-settings waves-effect waves-light breadcrumbs-btn right" href="#!" data-target="dropdown1">
                        <i class="material-icons">expand_more </i><i class="material-icons right">arrow_drop_down</i>
                    </a>
                    <ul class="dropdown-content" id="dropdown1" tabindex="0">
                        <li tabindex="0"><a class="grey-text text-darken-2" href="user-profile-page.html">Profile<span class="new badge red">2</span></a></li>
                        <li tabindex="0"><a class="grey-text text-darken-2" href="app-contacts.html">Contacts</a></li>
                        <li tabindex="0"><a class="grey-text text-darken-2" href="page-faq.html">FAQ</a></li>
                        <li class="divider" tabindex="-1"></li>
                        <li tabindex="0"><a class="grey-text text-darken-2" href="user-login.html">Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <section class="invoice-list-wrapper section">
        <!-- create invoice button-->
        <!-- Options and filter dropdown button-->
        <div class="invoice-filter-action mr-3">
            <a href="#" class="btn waves-effect waves-light invoice-export border-round z-depth-4">
                <i class="material-icons">picture_as_pdf</i>
                <span class="hide-on-small-only">Exportar a Pdf</span>
            </a>
        </div>
        <!-- create invoice button-->
        <div class="invoice-create-btn">
            <a href="app-invoice-add.html" class="btn waves-effect waves-light invoice-create border-round z-depth-4">
                <i class="material-icons">add</i>
                <span class="hide-on-small-only">Nuevo Rol</span>
            </a>
        </div>
        <div class="filter-btn">
            <!-- Dropdown Trigger -->
            <a class='dropdown-trigger btn waves-effect waves-light purple darken-1 border-round' href='#' data-target='btn-filter'>
                <span class="hide-on-small-only">Filter Invoice</span>
                <i class="material-icons">keyboard_arrow_down</i>
            </a>
            <!-- Dropdown Structure -->
            <ul id='btn-filter' class='dropdown-content'>
                <li><a href="#!">Paid</a></li>
                <li><a href="#!">Unpaid</a></li>
                <li><a href="#!">Partial Payment</a></li>
            </ul>
        </div>
        <div class="responsive-table">
            <table class="table invoice-data-table white border-radius-4 pt-1">
                <thead>
                <tr>
                    <th>
                       Nombre de Rol
                    </th>
                    <th>Amount</th>
                    <th>Date</th>
                    <th>Customer</th>
                    <th>Tags</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
                </thead>

                <tbody>
                </tbody>
            </table>
        </div>
    </section><!-- START RIGHT SIDEBAR NAV -->


    <!--<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Listado de Roles</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12 mb-2">
                                <a href="{{ route('roles.create') }}" class="btn btn-success">
                                    <i class="fas fa-plus"></i>Nuevo Rol
                                </a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <table class="table table-sm table-bordered">
                                    <thead>
                                        <tr class="bg-secondary">
                                            <th>#</th>
                                            <th>Nombre</th>
                                            <th>Slug</th>
                                            <th>Estado</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($roles as $role)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $role->nombre }}</td>
                                                <td>{{ $role->slug }}</td>
                                                <td>
                                                    @if($role->estado == 1)
                                                        <span class="badge badge-success">Activo</span>
                                                    @else
                                                        <span class="badge badge-danger">Inactivo</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    <form method="POST" action="{{ route('roles.destroy', $role->id) }}">
                                                        <a href="{{ route('roles.edit', $role->id) }}" class="btn btn-warning btn-sm">
                                                            Editar
                                                        </a>
                                                        @csrf
                                                        @method('DELETE')
                                                        @if($role->estado == 1)
                                                            <button type="submit" class="btn btn-danger btn-sm">
                                                                Eliminar
                                                            </button>
                                                        @else
                                                            <button type="submit" class="btn btn-info btn-sm">
                                                                Restaurar
                                                            </button>
                                                        @endif

                                                    </form>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="4" class="text-danger text-center">
                                                    -- Datos no Registrados --
                                                </td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>-->
@endsection

@section('mis-scripts')
    <script src="app-assets/vendors/data-tables/js/jquery.dataTables.min.js"></script>
    <script src="app-assets/vendors/data-tables/extensions/responsive/js/dataTables.responsive.min.js"></script>
    <script src="app-assets/vendors/data-tables/js/datatables.checkboxes.min.js"></script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN THEME  JS-->
    <script src="app-assets/js/plugins.js"></script>
    <script src="app-assets/js/search.js"></script>
    <script src="app-assets/js/custom/custom-script.js"></script>
    <!-- END THEME  JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="app-assets/js/scripts/app-invoice.js"></script>
@endsection
