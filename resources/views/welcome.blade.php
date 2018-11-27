<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/prova.css') }}">
    <!-- Styles -->
    {{--<style>--}}
    {{--html, body {--}}
    {{--background-color: #fff;--}}
    {{--color: #636b6f;--}}
    {{--font-family: 'Nunito', sans-serif;--}}
    {{--font-weight: 200;--}}
    {{--height: 100vh;--}}
    {{--margin: 0;--}}
    {{--}--}}

    {{--.full-height {--}}
    {{--height: 100vh;--}}
    {{--}--}}

    {{--.flex-center {--}}
    {{--align-items: center;--}}
    {{--display: flex;--}}
    {{--justify-content: center;--}}
    {{--}--}}

    {{--.position-ref {--}}
    {{--position: relative;--}}
    {{--}--}}

    {{--.top-right {--}}
    {{--position: absolute;--}}
    {{--right: 10px;--}}
    {{--top: 18px;--}}
    {{--}--}}

    {{--.content {--}}
    {{--text-align: center;--}}
    {{--}--}}

    {{--.title {--}}
    {{--font-size: 84px;--}}
    {{--}--}}

    {{--.links > a {--}}
    {{--color: #636b6f;--}}
    {{--padding: 0 25px;--}}
    {{--font-size: 12px;--}}
    {{--font-weight: 600;--}}
    {{--letter-spacing: .1rem;--}}
    {{--text-decoration: none;--}}
    {{--text-transform: uppercase;--}}
    {{--}--}}

    {{--.m-b-md {--}}
    {{--margin-bottom: 30px;--}}
    {{--}--}}
    {{--</style>--}}
    <!-- prova mia -->
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/favicon.ico') }}">
    <!-- google fonts -->
    <link href='https://fonts.googleapis.com/cssdca7.css?family=Lato:400,900,700,300' rel='stylesheet'
          type='text/css'>
    <!-- all css here -->
    <!-- bootstrap v3.3.6 css -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <!-- animate css -->
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <!-- jquery-ui.min css -->
    <link rel="stylesheet" href="{{ asset('css/jquery-ui.min.css') }}">
    <!-- meanmenu css -->
    <link rel="stylesheet" href="{{ asset('css/meanmenu.min.css') }}">
    <!-- RS slider css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('lib/rs-plugin/css/settings.css') }}" media="screen" />
    <!-- owl.carousel css -->
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}">
    <!-- font-awesome css -->
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <!-- style css -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- responsive css -->
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <!-- color css -->
    <link class="color-scheme-color" type="text/css" rel="stylesheet" media="all" href="{{ asset('css/theme/color-01.css') }}">
    <!-- modernizr css -->
    <script src="{{ asset('js/vendor/modernizr-2.8.3.min.js') }}"></script>
    {{--fine prova mia--}}
<!-- fine prova mia -->
</head>
<body>

<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}">Home</a>
                {{--                {{$utente}}--}}
            @else
                <a href="{{ route('login') }}">Login</a>
                <a href="{{ route('register') }}">Register</a>

                REGISTRATI BESTIA
            @endauth
        </div>
    @endif

    <div class="content">
        <div class="title m-b-md">
            Laravel
        </div>
        @if (Route::has('login'))
            @auth
                <div class="links">
                    <a href="/insertEvento"> inserisci evento </a>
                    <a href="/listaEvento"> lista evento </a>
                    <a href="/insertNewServizio">inserisci servizi eventi</a>
                    <a href="/listaServizi">lista servizi eventi</a>
                </div>

            @else
                <div class="links">
                    <a href="https://laravel.com/docs">Documentation</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            @endauth
        @endif

    </div>
</div>
</body>
</html>
