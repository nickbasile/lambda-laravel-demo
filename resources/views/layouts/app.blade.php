<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <svg class="w-25 h-auto" fill="#20292D" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="481.5" height="152.5" viewBox="0 0 481.5 152.5"><path fill="#A0001E" d="M68.114 33.217L37.708 87.615h17.139L77.184 47.24l22.337 40.375h17.14L86.254 33.217z"></path><path fill="#A0001E" d="M15.967 9.649V98.92l61.061 43.394 61.374-43.615V9.649H15.967zM77.028 124.92L30.313 91.745V23.552h93.77v67.971L77.028 124.92z"></path><defs><path id="SVGID_1_" d="M-45.5-52h574.005v249H-45.5z"></path></defs><clipPath id="SVGID_2_"><use xlink:href="#SVGID_1_" overflow="visible"></use></clipPath><path clip-path="url(#SVGID_2_)" d="M186.653 79.337c0 4.197 1.943 5.285 6.761 5.285h3.343c5.906 0 8.549-3.73 14.145-13.756h2.72l-2.72 16.866h-41.893v-2.721c5.441-.621 6.218-1.088 6.218-5.362V41.254c0-4.275-.777-4.741-6.218-5.363V33.17h23.862v2.721c-5.441.622-6.218 1.088-6.218 5.363v38.083zM252.872 79.104c0 2.642.544 4.352 2.565 4.352 1.166 0 2.253-.389 3.108-.776l.466 1.71c-2.253 2.643-5.207 4.119-8.86 4.119-4.196 0-6.995-2.565-7.771-6.84-2.487 3.265-6.528 6.684-12.125 6.684-6.295 0-10.492-3.808-10.492-10.025 0-6.685 4.819-9.404 10.648-11.582l11.736-4.274v-6.606c0-4.43-1.477-7.617-5.519-7.617-3.73 0-5.207 2.798-5.207 6.529 0 1.554.233 3.109.622 4.818l-6.451.855c-2.098-.699-3.42-2.332-3.42-4.897 0-6.45 6.684-9.792 15.312-9.792 9.948 0 15.389 3.652 15.389 12.746v20.596zm-10.726.7V65.27l-6.684 2.72c-3.264 1.244-5.285 3.031-5.285 7.383 0 4.042 1.865 6.918 5.985 6.918 2.254 0 3.809-.855 5.984-2.487M316.293 58.974c0-4.43-1.555-6.684-5.596-6.684-3.109 0-5.597 1.476-8.006 3.264v26.192c0 2.721 1.011 3.188 4.585 3.42v2.565h-20.052v-2.565c3.653-.232 4.664-.699 4.664-3.42V58.974c0-4.43-1.555-6.684-5.597-6.684-3.108 0-5.596 1.476-8.083 3.186v26.27c0 2.721 1.089 3.188 4.663 3.42v2.565h-20.285v-2.565c3.653-.232 4.896-.699 4.896-3.42V54.233l-4.663-2.72v-1.477l13.912-4.275h1.787l-.311 7.695c3.265-4.197 7.384-7.695 13.912-7.695 5.674 0 9.094 2.409 10.104 7.85 3.265-4.119 7.772-7.85 14.224-7.85 7.15 0 10.647 4.275 10.647 12.514v23.471c0 2.721 1.244 3.188 4.819 3.42v2.565h-20.208v-2.565c3.575-.232 4.586-.699 4.586-3.42V58.974zM334.946 32.238v-1.633l13.757-3.73h1.71v26.192c2.565-3.886 6.84-7.306 13.058-7.306 9.481 0 15.467 6.918 15.467 18.887 0 15.233-9.404 23.861-21.374 23.861-6.84 0-13.523-1.788-17.953-5.441v-48.42l-4.665-2.41zm33.11 36.218c0-9.56-3.497-16.166-10.803-16.166-2.564 0-5.051 1.088-6.84 2.72v21.684c0 5.908 2.332 8.938 7.072 8.938 6.608.001 10.571-7.616 10.571-17.176M408.414 32.238v-1.633l13.757-3.73h1.71v52.618c0 2.643.155 3.497 3.108 3.73l1.943.155v2.332l-14.146 2.798h-2.021l.311-7.229c-3.108 4.431-7.072 7.229-12.513 7.229-9.404 0-15.7-7.617-15.7-19.431 0-14.69 8.705-23.161 19.819-23.161 3.575 0 6.528 1.01 8.394 2.72v-13.99l-4.662-2.408zm-12.901 33.109c0 9.482 3.886 16.555 10.959 16.555 2.643 0 4.818-.855 6.605-2.487V58.896c0-6.062-2.564-9.637-7.228-9.637-6.528 0-10.336 6.373-10.336 16.088M467.018 79.104c0 2.642.544 4.352 2.564 4.352 1.166 0 2.254-.389 3.107-.776l.468 1.71c-2.254 2.643-5.207 4.119-8.86 4.119-4.197 0-6.995-2.565-7.772-6.84-2.487 3.265-6.528 6.684-12.124 6.684-6.295 0-10.492-3.808-10.492-10.025 0-6.685 4.818-9.404 10.647-11.582l11.736-4.274v-6.606c0-4.43-1.478-7.617-5.519-7.617-3.73 0-5.207 2.798-5.207 6.529 0 1.554.232 3.109.621 4.818l-6.451.855c-2.098-.699-3.419-2.332-3.419-4.897 0-6.45 6.684-9.792 15.311-9.792 9.948 0 15.39 3.652 15.39 12.746v20.596zm-10.726.7V65.27l-6.685 2.72c-3.265 1.244-5.285 3.031-5.285 7.383 0 4.042 1.865 6.918 5.984 6.918 2.255 0 3.809-.855 5.986-2.487"></path></svg>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item">
                                <a class="nav-link" href="/admin">Admin</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
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
</body>
</html>
