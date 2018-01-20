<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/fontawesome-all.min.css') }}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
</head>
<body class="bg-grey-light font-sans">
    <div id="app">
        <div class="bg-white">
            <div class="container mx-auto flex items-center py-4">
                <nav class="w-2/5">
                    <a href="#" class="top-nav-item"><i class="fal fa-home"></i> Home</a>
                    <a href="#" class="top-nav-item"><i class="fal fa-bolt"></i> Moments</a>
                    <a href="#" class="top-nav-item"><i class="fal fa-bell"></i> Notifications</a>
                    <a href="#" class="top-nav-item"><i class="fal fa-envelope"></i> Messages</a>
                </nav>
                <div class="w-1/5 text-center"><a href="#"><i class="fas fa-poo fa-lg"></i></a></div>
                <div class="w-2/5 flex justify-end">
                    <div class="relative">
                        <input type="text" class="bg-grey-lighter h-8 px-4 py-2 text-xs w-48 -mb-3 -mt-3 rounded-full" placeholder="Search Pooper">
                        <span class="flex items-center absolute pin-r pin-y mr-3 pt-1"><i class="fal fa-search text-grey"></i></span>
                    </div>
                    <div><a href="#"><img src="{{ Auth::user()->getAvatar() }}" alt="Avatar" class="h-8 w-8 rounded-full -mb-3 -mt-3 mr-6 ml-6"></a></div>
                    <div><button class="bg-indigo hover:bg-indigo-dark text-white text-sm -m-2 py-2 px-6 rounded-full">Poop</button></div>
                </div>
            </div>
        </div>
        {{--<nav class="navbar navbar-default navbar-static-top">--}}
            {{--<div class="container">--}}
                {{--<div class="navbar-header">--}}

                    {{--<!-- Collapsed Hamburger -->--}}
                    {{--<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">--}}
                        {{--<span class="sr-only">Toggle Navigation</span>--}}
                        {{--<span class="icon-bar"></span>--}}
                        {{--<span class="icon-bar"></span>--}}
                        {{--<span class="icon-bar"></span>--}}
                    {{--</button>--}}

                    {{--<!-- Branding Image -->--}}
                    {{--<a class="navbar-brand" href="{{ url('/') }}">--}}
                        {{--<i class="fal fa-poo"></i> {{ config('app.name', 'Tweeter') }}--}}
                    {{--</a>--}}
                {{--</div>--}}

                {{--<div class="collapse navbar-collapse" id="app-navbar-collapse">--}}
                    {{--<!-- Left Side Of Navbar -->--}}
                    {{--<ul class="nav navbar-nav">--}}
                        {{--&nbsp;--}}
                    {{--</ul>--}}

                    {{--<search-users></search-users>--}}

                    {{--<!-- Right Side Of Navbar -->--}}
                    {{--<ul class="nav navbar-nav navbar-right">--}}
                        {{--<!-- Authentication Links -->--}}
                        {{--@guest--}}
                            {{--<li><a href="{{ route('login') }}">Login</a></li>--}}
                            {{--<li><a href="{{ route('register') }}">Register</a></li>--}}
                        {{--@else--}}

                            {{--<li class="dropdown">--}}
                                {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">--}}
                                    {{--{{ Auth::user()->username }} <span class="caret"></span>--}}
                                {{--</a>--}}

                                {{--<ul class="dropdown-menu">--}}
                                    {{--<li>--}}
                                        {{--<a href="{{ route('logout') }}"--}}
                                            {{--onclick="event.preventDefault();--}}
                                                     {{--document.getElementById('logout-form').submit();">--}}
                                            {{--Logout--}}
                                        {{--</a>--}}

                                        {{--<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
                                            {{--{{ csrf_field() }}--}}
                                        {{--</form>--}}
                                    {{--</li>--}}
                                {{--</ul>--}}
                            {{--</li>--}}
                        {{--@endguest--}}
                    {{--</ul>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</nav>--}}

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
