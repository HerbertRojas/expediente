@extends('layouts.app        ')

@section('content')

    <!--<div class="section">
        <div class="card">
            <div class="card-content">
                <p class="caption mb-0">
                    Sample blank page for getting start!! Created and designed by Google, Material Design is a design
                    language that combines the classic principles of successful design along with innovation and
                    technology.
                </p>
            </div>
        </div>
    </div> START RIGHT SIDEBAR NAV -->



    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Nuevo Rol</div>
                    <div class="card-body">
                        <form id="form-roles" action="{{ route('roles.store') }}" method="POST">
                            @csrf
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{'Nombre'}}</label>

                                <div class="col-md-6">
                                    <input id="nombre" type="text" class="form-control @error('nombre') is-invalid @enderror" name="nombre" value="{{ old('nombre') }}">

                                    @error('nombre')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="slug" class="col-md-4 col-form-label text-md-right">{{'Ruta'}}</label>

                                <div class="col-md-6">
                                    <input id="slug" type="text" class="form-control @error('slug') is-invalid @enderror" name="slug" value="{{ old('slug') }}">

                                    @error('slug')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Guardar
                                    </button>

                                    <a href="{{ route('roles.index') }}" class="btn btn-danger">
                                        Cancelar
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
