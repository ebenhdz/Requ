@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row mt-5 text-left">
            <!--Grid column-->
            <div class="col-lg-5 col-md-6 ml-auto mb-4 col-md-offset-3 mx-auto">
                <section class="form-elegant">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
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
                                    <h4 class="dark-grey-text mb-5">Restablecer contraseña</h4>
                                </div>

                                <!--Body-->
                                <div class="md-form pb-2">
                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
                                    <label for="email">Correo electrónico</label>
                                </div>

                                <div class="text-center mb-2">
                                    <button type="submit" class="btn aqua-gradient btn-block btn-rounded z-depth-1a waves-effect waves-light">Enviar link para reestablecer contraseña</button>
                                </div>

                            </div>

                            <!--Footer-->
                            <div class="modal-footer mx-5">
                                <p class="font-small grey-text d-flex justify-content-end">
                                    <a href="{{ route('login') }}" class="blue-text ml-1"> Iniciar sesión</a>
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
                <div class="panel-heading">Reset Password</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form class="form-horizontal" method="POST" action="{{ route('password.email') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Send Password Reset Link
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>-->
@endsection
