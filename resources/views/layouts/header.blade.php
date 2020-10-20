<div class="container">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
{{--    <div class="row" style="margin: auto">--}}
{{--        <aside class="col-md-3" style="padding-left: 0">--}}
    <div class="form-inline">
     <a class="navbar-brand" href="{{ url('/') }}">
         <span class="navbar-brand mb-0 h1">{{ config('app.name', 'Nirvana') }}</span>
            </a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
               <ul class="navbar-nav mr-auto">
            @include('layouts.top_menu', ['categories' => $categories])
        </ul>
                   <ul class="nav justify-content-end">
            <!-- Authentication Links -->
                       @guest
                <li class="nav-item"><a class="btn" href="{{ route('login') }}">Войти</a></li>
                <li class="nav-item"><a  class="btn" href="{{ route('register') }}">Регестрация</a></li>
            @else
                           <li class="dropdown">
                    <a href="#" class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu" role="menu">
                        <li>
                            <a class="btn" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                Logout
                            </a>
                            <br>
                            <a class="btn" href="/admin">Admin</a>



                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                </li>
                       @endguest
                   </ul>
          </div>
    </div>

</nav>
</div>




{{--<nav class="navbar navbar-default navbar-static-top">--}}
{{--    <div class="container">--}}
{{--        <div class="navbar-header">--}}

{{--            <!-- Collapsed Hamburger -->--}}
{{--            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">--}}
{{--                <span class="sr-only">Навигация</span>--}}
{{--                <span class="icon-bar"></span>--}}
{{--                <span class="icon-bar"></span>--}}
{{--                <span class="icon-bar"></span>--}}
{{--            </button>--}}

{{--            <!-- Branding Image -->--}}
{{--            <a class="navbar-brand" href="{{ url('/') }}">--}}
{{--                {{ config('app.name', 'Nirvana') }}--}}
{{--                Nirvana--}}
{{--            </a>--}}
{{--        </div>--}}

{{--        <div class="collapse navbar-collapse" id="app-navbar-collapse">--}}
{{--            <!-- Left Side Of Navbar -->--}}
{{--            <ul class="nav navbar-nav">--}}
{{--                @include('layouts.top_menu', ['categories' => $categories])--}}
{{--            </ul>--}}

{{--            <!-- Right Side Of Navbar -->--}}
{{--            <ul class="nav navbar-nav navbar-right">--}}
{{--                <!-- Authentication Links -->--}}
{{--                @guest--}}
{{--                    <li><a href="{{ route('login') }}">Войти</a></li>--}}
{{--                    <li><a href="{{ route('register') }}">Регестрация</a></li>--}}
{{--                @else--}}
{{--                    <li class="dropdown">--}}
{{--                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">--}}
{{--                            {{ Auth::user()->name }} <span class="caret"></span>--}}
{{--                        </a>--}}

{{--                        <ul class="dropdown-menu" role="menu">--}}
{{--                            <li>--}}
{{--                                <a href="{{ route('logout') }}"--}}
{{--                                    onclick="event.preventDefault();--}}
{{--                                             document.getElementById('logout-form').submit();">--}}
{{--                                    Logout--}}
{{--                                    <a href="/admin">Admin Panel</a>--}}
{{--                                </a>--}}

{{--                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
{{--                                    {{ csrf_field() }}--}}
{{--                                </form>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </li>--}}
{{--                @endguest--}}
{{--            </ul>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</nav>--}}
