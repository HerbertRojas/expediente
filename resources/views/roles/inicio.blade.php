@extends('layouts.master')

@section('contenido')
    <br>
    <br>
    <div class="col s12">
        <a class="waves-effect waves-light  btn gradient-45deg-green-teal box-shadow-none border-round mr-1 mb-1"
           href="{{ route('roles.create') }}">
            <i class="fas fa-plus"></i>Nuevo Rol</a>
        <a class="waves-effect waves-light  btn gradient-45deg-amber-amber box-shadow-none border-round mr-1 mb-1">Exportar a PDF</a>
    </div>
    <div class="row">
        <div class="col s12">
            <div class="card">
                <div class="card-content">
                    <h4 class="card-title">Roles de Usuario</h4>
                    <div class="row">
                        <div class="col s12">
                            <table id="page-length-option" class="display dataTable dtr-inline">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nombre</th>
                                    <th>Slug</th>
                                    <th>Estado</th>
                                    <th>Accion</th>
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
                                                    <span class="badge pill blue float-right mr-2">Activo</span>
                                                @else
                                                    <span class="badge pill red float-right mr-2">Inactivo</span>
                                                @endif
                                            </td>
                                            <td>
                                                <form method="POST" action="{{ route('roles.destroy', $role->id) }}">
                                                    <a href="{{ route('roles.edit', $role->id) }}" class="btn btn-warning btn-sm">
                                                        <i class="material-icons">edit</i>
                                                    </a>
                                                    @csrf
                                                    @method('DELETE')
                                                    @if($role->estado == 1)
                                                        <button type="submit" class="btn btn-danger btn-sm">
                                                            <i class="material-icons">delete</i>
                                                        </button>
                                                    @else
                                                        <button type="submit" class="btn btn-info btn-sm">
                                                            <i class="material-icons">restore</i>
                                                        </button>
                                                    @endif

                                                </form>
                                            </td>
                                            <td></td>
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

