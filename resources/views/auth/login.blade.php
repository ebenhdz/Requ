@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row mt-5 text-left">

        <!--Grid column-->
        <div class="col-lg-5 col-md-6 ml-auto mb-4 col-md-offset-3 mx-auto">
            <section class="form-elegant">
                <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}
                <!--Form without header-->
                <div class="card">

                    <div class="card-body mx-4">

                        <!--Header-->
                        <div class="text-left">
                            <div class="blue-grey-text text-center">
                                <img src="{{ asset('img/logos/requ.png') }}" style="height: 60px">
                                <h4><strong>Requisiciones</strong></h4>
                            </div>
                            <h4 class="dark-grey-text mb-5">Iniciar sesión</h4>
                        </div>

                        <!--Body-->
                        <div class="md-form">
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                            <label for="email">Introduce tu correo electrónico</label>
                        </div>
                        <div class="md-form">
                            <input id="password" type="password" class="form-control" name="password" required>
                            <label for="password">Introduce tu contraseña</label>
                            <p class="font-small blue-text d-flex justify-content-end mb-0">
                                <a href="{{ route('password.request') }}" class="blue-text ml-1"> ¿Olvidaste la contraseña?</a>
                            </p>
                        </div>
                        <div class="form-check mb-2 pl-0 checkbox-primary-filled">
                            <input type="checkbox" id="remember" name="remember" {{ old('remember') ? 'checked' : '' }} class="filled-in form-check-input">
                            <label class="form-check-label" for="remember">Recordarme</label>
                        </div>
                        <div class="text-center mb-3">
                            <button type="button" class="btn blue-gradient btn-block btn-rounded z-depth-1a waves-effect waves-light">Iniciar sesión</button>
                        </div>

                    </div>

                    <!--Footer-->
                    <div class="modal-footer mx-5 pt-3 mb-1">
                        <p class="font-small grey-text d-flex justify-content-end">
                            <a href="{{ route('register') }}" class="blue-text ml-1"> Registrarse</a>
                        </p>
                    </div>

                </div>
                <!--/Form without header-->
                </form>
            </section>

        </div>
        <!--Grid column-->

    </div>
</div>
    <!--
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Login</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>-->
@endsection

@section('scripts')

@endsection
