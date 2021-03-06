@extends('layouts.registerLayout')

@section('contenido')
    <div id="register-page" class="row">
        <div class="col s12 m6 l4 z-depth-4 card-panel border-radius-6 register-card bg-opacity-8">
            <form class="login-form"  method="POST" action="{{ route('register') }}">
                @csrf
                <div class="row">
                    <div class="input-field col s12">
                        <h5 class="ml-4">{{ __('Register') }}</h5>
                        <p class="ml-4">¡Únete a nuestra comunidad ahora!</p>
                    </div>
                </div>
                <div class="row margin">
                    <div class="input-field col s12">
                        <i class="material-icons prefix pt-2">person_outline</i>
                        <input id="name" type="text" name="name" value="{{ old('name') }}" required
                               autocomplete="name" autofocus >
                        <label for="name" class="center-align">{{ __('Name') }}</label>
                        @error('name')
                        <span class="helper-text red-text" data-error="wrong" data-success="right">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="row margin">
                    <div class="input-field col s12">
                        <i class="material-icons prefix pt-2">mail_outline</i>
                        <input id="email" type="email" name="email"
                               autocomplete="email" autofocus>
                        <label for="email" class="center-align">{{ __('E-Mail Address') }}</label>
                        @error('email')
                        <span class="helper-text red-text" data-error="wrong" data-success="right">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="row margin">
                    <div class="input-field col s12">
                        <i class="material-icons prefix pt-2">lock_outline</i>
                        <input id="password" type="password" name="password" required autocomplete="new-password">
                        <label for="password">{{ __('Password') }}</label>
                        @error('password')
                        <span class="helper-text red-text" data-error="wrong" data-success="right">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="row margin">
                    <div class="input-field col s12">
                        <i class="material-icons prefix pt-2">lock_outline</i>
                        <input id="password-confirm" type="password" name="password_confirmation" required autocomplete="new-password">
                        <label for="password-confirm">{{ __('Confirm Password') }}</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <button type="submit" class="btn waves-effect waves-light border-round gradient-45deg-purple-deep-orange col s12">
                            {{ __('Register') }}
                        </button>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <p class="margin medium-small"><a href="{{ route('login') }}">{{ __('Login') }}</a></p>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection



<!--<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>-->
