@extends('layouts.app')

@section('content')
{{--    <div class="container">--}}
{{--        <div class="row">--}}
{{--            <div class="col-md-offset-3 col-md-6">--}}
{{--                <div class="heading">Авторизоваться</div>--}}
{{--                    <form class="form-horizontal" method="POST" action="{{route('login')}}">--}}
{{--                        {{ csrf_field() }}--}}

{{--                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">--}}
{{--                            <label for="email" class="form-group">E-Mail Адрес</label>--}}
{{--                            <div class="form-group">--}}
{{--                                <input type="email" class="form-control" value="{{ old('email') }}" id="inputEmail" placeholder="E-mail" required autofocus>--}}
{{--                                <i class="fa fa-user"></i>--}}

{{--                                @if ($errors->has('email'))--}}
{{--                                    <span class="help-block">--}}
{{--                                        <strong>{{ $errors->first('email') }}</strong>--}}
{{--                                    </span>--}}
{{--                                @endif--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">--}}
{{--                            <label for="password" class="col-md-4 control-label">Пароль</label>--}}

{{--                            <div class="form-group help">--}}
{{--                                <input type="password" class="form-control" id="inputPassword" placeholder="Password" required>--}}
{{--                                <i class="fa fa-lock"></i>--}}
{{--                                <a href="#" class="fa fa-question-circle"></a>--}}

{{--                                @if ($errors->has('password'))--}}
{{--                                    <span class="help-block">--}}
{{--                                        <strong>{{ $errors->first('password') }}</strong>--}}
{{--                                    </span>--}}
{{--                                @endif--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group">--}}
{{--                            <div class="main-checkbox">--}}
{{--                                <input type="checkbox" value="none" id="checkbox1" name="check"/>--}}
{{--                                <label for="checkbox1"></label>--}}
{{--                            </div>--}}
{{--                            <span class="text" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Запомнить меня</span>--}}
{{--                            <div class="col-md-8 col-md-offset-4">--}}
{{--                            <button class="btn btn-default">ВХОД</button>--}}
{{--                            </div>--}}
{{--                            <br>--}}
{{--                            <a class="btn btn-link" href="{{ route('password.request') }}">--}}
{{--                            Забыли?--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                    </form>--}}

{{--                </div>--}}
{{--            </div>--}}

{{--        </div>--}}


    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Авторизоваться</div>

                    <div class="panel-body">
                        <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="col-md-4 control-label">E-Mail Адрес</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="E-mail" required autofocus>

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password" class="col-md-4 control-label">Пароль</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control" name="password" placeholder="Password" required>

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
                                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Запомнить меня
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-8 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Авторизоваться
                                    </button>

                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        Забыли пароль?
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
