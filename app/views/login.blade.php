@extends('layout')

@section('style')

    <style>
        .ot-login
        {
            background-color: #064c96;
            color: white;
            border-radius: 0;
            width: 100%;
        }

        .login-form-ot
        {
            margin-top: 40px;
            height: 50%;
        }
    </style>

    @endsection

@section('content')

    <section id="loginform" class="outer-wrapper login-form-ot">
        <div class="inner-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4 col-sm-offset-4">
                        <h2 class="text-center" style="padding-bottom: 25px">Logowanie</h2>
                        {{ Form::open() }}
                        <div class="form-group">
                            {{ Form::text('login',null,[
                                'class'         =>  'form-control',
                                'placeholder'   =>  'Login',
                                'autofocus'
                                ]) }}
                        </div>
                        <div class="form-group">
                            {{ Form::password('password', [
                                'class'         =>  'form-control',
                                'placeholder'   =>  'Hasło'
                                ]) }}
                        </div>
                        {{ Form::submit("Zaloguj", ['class' => 'btn btn-primary ot-login']) }}
                        {{ Form::close() }}
                    </div>
                </div>
            </div>
        </div>
    </section>

    @endsection