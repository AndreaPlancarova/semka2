<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="../../js/script.js" ></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body id="body">
    <div id="app">
        <nav class="navbar sticky-top navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" id="home" href="{{ url('/') }}">
{{--                    {{ config('app.name', 'Laravel') }}--}}
                    SKI&FUN
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        @can('viewAny', \App\Models\User::class)
                        @auth
                            <li>
                                <a class="nav-link" id="userButton" href="{{ route('user.index') }}">{{__('Users')}}</a>
                            </li>
                        @endauth
                        @endcan
                    </ul>

                    <ul class="navbar-nav mr-auto">
                        <li>
                        <a class="nav-link" id="review" href="{{ route('review') }}">{{__('Reviews')}}</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav mr-auto">

                        @auth
                            <li>
                        <a class="nav-link" id="instructor" href="{{ route('instructor') }}">{{__('Instructors')}}</a>
                            </li>
                        @endauth

                    </ul>

                    <ul class="navbar-nav mr-auto">

                        @auth
                            <li>
                            <a class="nav-link" id="messages" href="{{ route('message') }}">{{__('Messages')}}</a>
                            </li>
                        @endauth

                    </ul>

                    <div class="collapse navbar-collapse">
                        <ul class="navbar-nav mr-auto">

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" id="gallery" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Gallery
                                </a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" id="beatles" href="{{ route('home.beatles') }}">Beatles</a>
                                    <a class="dropdown-item" id="bears" href="{{ route('home.bears') }}">Bears</a>
                                </div>
                            </li>
                            <li>
                            <a class="nav-link" href="{{ route('home.contact') }}">Kontakt</a>
                            </li>
                        </ul>

                    </div>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" id="login" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" id="register" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    {{ Auth::user()->name }}
                                </a>

                                <div id="logout" class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a id="logoutButton" class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <div>
        <a href="{{ route('home.contact') }}" id="kontakt"></a>
    </div>
</body>
</html>
