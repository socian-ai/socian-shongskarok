<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="{{ URL::to('plugins/images/favicon.png') }}" rel="icon" type="image/png" sizes="16x16">


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>


    <!-- Styles -->
    <link href="{{ URL::to('bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ URL::to('css/animate.css') }}" rel="stylesheet">
    <link href="{{ URL::to('css/style.css') }}" rel="stylesheet">

    <link href="{{ URL::to('css/colors/blue.css') }}" id="theme" rel="stylesheet">

    <script src="{{ URL::to('https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js') }}"></script>
    <script src="{{ URL::to('https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js') }}"></script>

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body>
    <div class="preloader">
        <div class="cssload-speeding-wheel"></div>
    </div>


    <section id="wrapper" class="login-register">
        <div class="login-box">
            <div class="white-box">
                @yield('content')
            </div>
        </div>
    </section>

    <!-- Scripts -->
    <script src="{{ URL::to('plugins/bower_components/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ URL::to('bootstrap/dist/js/bootstrap.min.js') }}"></script>

    <script src="{{ URL::to('plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js') }}"></script>
    <script src="{{ URL::to('js/jquery.slimscroll.js') }}"></script>
    <script src="{{ URL::to('js/waves.js') }}"></script>

    <script src="{{ URL::to('js/custom.min.js') }}"></script>
    <script src="{{ URL::to('js/jasny-bootstrap.js') }}"></script>

    <script src="{{ URL::to('plugins/bower_components/styleswitcher/jQuery.style.switcher.js') }}"></script>
</body>
</html>
