<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>


{{--    <link href="{{ asset('css/app.css') }}" rel="stylesheet">--}}

    <!-- Fonts -->

    <link rel="shortcut icon" href="{{asset("images/favicon.ico")}}" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset("css/dash/bootstrap.min.css")}}">
    <!-- Typography CSS -->
    <link rel="stylesheet" href="{{asset("css/dash/typography.css")}}">
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{asset("css/dash/style.css")}}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{asset("css/dash/responsive.css")}}">
    <!-- Styles -->
{{--    <link href="{{ asset('css/app.css') }}" rel="stylesheet">--}}
</head>

<body>
    <div id="app" style="font-family: Cairo">
{{--        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">--}}
{{--            <div class="container">--}}
{{--                <a class="navbar-brand" href="{{ url('/') }}">--}}
{{--                    {{ config('app.name', 'Laravel') }}--}}
{{--                </a>--}}
{{--                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">--}}
{{--                    <span class="navbar-toggler-icon"></span>--}}
{{--                </button>--}}

{{--                <div class="collapse navbar-collapse" id="navbarSupportedContent">--}}
{{--                    <!-- Left Side Of Navbar -->--}}
{{--                    <ul class="navbar-nav mr-auto">--}}

{{--                    </ul>--}}

{{--                    <!-- Right Side Of Navbar -->--}}
{{--                    <ul class="navbar-nav ml-auto">--}}
{{--                        <!-- Authentication Links -->--}}
{{--                        @guest--}}
{{--                            @if (Route::has('login'))--}}
{{--                                <li class="nav-item">--}}
{{--                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>--}}
{{--                                </li>--}}
{{--                            @endif--}}

{{--                            @if (Route::has('register'))--}}
{{--                                <li class="nav-item">--}}
{{--                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>--}}
{{--                                </li>--}}
{{--                            @endif--}}
{{--                        @else--}}

{{--                            <li class="nav-item dropdown">--}}
{{--                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>--}}
{{--                                    {{ Auth::user()->name }}--}}
{{--                                </a>--}}

{{--                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">--}}
{{--                                    <a class="dropdown-item" href="{{ route('logout') }}"--}}
{{--                                       onclick="event.preventDefault();--}}
{{--                                                     document.getElementById('logout-form').submit();">--}}
{{--                                        {{ __('Logout') }}--}}
{{--                                    </a>--}}

{{--                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">--}}
{{--                                        @csrf--}}
{{--                                    </form>--}}
{{--                                </div>--}}
{{--                            </li>--}}
{{--                        @endguest--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </nav>--}}
        <div id="loading">
            <div id="loading-center">
            </div>
        </div>
        <main style="font-family: Cairo">
            @yield('content')
        </main>
    </div>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{asset("js/dash/jquery.min.js")}}"></script>
    <script src="{{asset("js/dash/popper.min.js")}}"></script>
    <script src="{{asset("js/dash/bootstrap.min.js")}}"></script>
    <!-- Appear JavaScript -->
    <script src="{{asset("js/dash/jquery.appear.js")}}"></script>
    <!-- Countdown JavaScript -->
    <script src="{{asset("js/dash/countdown.min.js")}}"></script>
    <!-- Counterup JavaScript -->
    <script src="{{asset("js/dash/waypoints.min.js")}}"></script>
    <script src="{{asset("js/dash/jquery.counterup.min.js")}}"></script>
    <!-- Wow JavaScript -->
    <script src="{{asset("js/dash/wow.min.js")}}"></script>
    <!-- Slick JavaScript -->
    <script src="{{asset("js/dash/slick.min.js")}}"></script>
    <!-- Owl Carousel JavaScript -->
    <script src="{{asset("js/dash/owl.carousel.min.js")}}"></script>
    <!-- Magnific Popup JavaScript -->
    <script src="{{asset("js/dash/jquery.magnific-popup.min.js")}}"></script>
    <!-- Smooth Scrollbar JavaScript -->
    <script src="{{asset("js/dash/smooth-scrollbar.js")}}"></script>
    <!-- Chart Custom JavaScript -->
    <script src="{{asset("js/dash/chart-custom.js")}}}"></script>
    <!-- Custom JavaScript -->
    <script src="{{asset("js/dash/custom.js")}}"></script>
</body>
</html>
