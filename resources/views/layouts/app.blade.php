<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title','Nirvana|Мой блог')</title>
    <meta name="keywords" content="@yield('meta_keyword')">
    <meta name="description" content="@yield('meta_description')">
    <!-- Styles -->
{{--    <link href="{{ asset('css/app.css') }}" rel="stylesheet">--}}
    <link href="{{ asset('bootstrap/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('bootstrap/css/bootstrap-grid.css') }}" rel="stylesheet">
    <link href="{{ asset('bootstrap/css/bootstrap-reboot.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        @include('layouts.header')

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script type="text/javascript" src="{{ asset('bootstrap/js/bootstrap.js')}}"></script>
    <script type="text/javascript" src="{{ asset('bootstrap/js/bootstrap.bundle.js') }}"></script>
</body>
</html>
