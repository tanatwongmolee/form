<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    {{-- <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}


    <!--

    THIS IS THE DEMO VERSION OF Dashmix UI FRAMEWORK!
    COMMENTS ARE REMOVED, CODE IS COMPRESSED AND CODE STYLE IS ALTERED!

    IN THE FULL VERSION
        THE CODE IS INDENTED CORRECTLY AND WELL COMMENTED!
        YOU GET AN EXTENSIVE DOCUMENTATION TO GET YOU STARTED!
        YOU GET THE PHP VERSION (ALONG WITH THE HTML VERSION) WHICH HAS EXTRA FEATURES!
        YOU GET THE ES6 FILES OF THE UI FRAMEWORK
        YOU GET THE SASS FILES OF THE UI FRAMEWORK
        YOU GET A GULPFILE WITH LOTS OF AUTOMATIONS
        YOU GET ACCESS TO FRAMEWORK UPDATES WITH NEW FEATURES AND PLUGIN UPGRADES
        WE CAN PROVIDE SUPPORT IF YOU NEED IT :-)

    THANK YOU FOR HAVING A LOOK!

    ** A LICENSE MUST BE ACQUIRED FOR LEGAL USE -> LINK: https://goo.gl/mDBqx1 **
    ** PLEASE SUPPORT US IF YOU LIKE OUR WORK, IT HELPS US CONTINUE, THANK YOU VERY MUCH! **
    -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description"
        content="Dashmix - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
    <meta name="author" content="pixelcave">
    <meta name="robots" content="noindex, nofollow">
    <meta property="og:title" content="Dashmix - Bootstrap 4 Admin Template &amp; UI Framework">
    <meta property="og:site_name" content="Dashmix">
    <meta property="og:description"
        content="Dashmix - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    <meta property="og:image" content="">
    <link rel="shortcut icon" href="{{ asset('assets/media/favicons/favicon.png') }}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('assets/media/favicons/favicon-192x192.png') }}">
    <link rel="apple-touch-icon" sizes="180x180"
        href="{{ asset('assets/media/favicons/apple-touch-icon-180x180.png') }}">
    <link rel="stylesheet"
        href="{{ asset('https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,400i,600,700') }}">
    <link rel="stylesheet" id="css-main" href="{{ asset('assets/css/dashmix-1.0.min.css') }}">
    {{-- <script src="{{ asset('assets/js/dashmix.core.min.js') }}"></script>
    <script src="{{ asset('assets/js/dashmix.app.min.js') }}"></script> --}}
    <script>
        (function(i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function() {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o), m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
        ga('create', 'UA-16158021-6', 'auto');
        ga('send', 'pageview');
    </script>
    <script src="{{ asset('assets/js/dashmix.core-1.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/dashmix.app-1.0.min.js') }}"></script>
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">




                <div>
                    <!-- Left Side Of Navbar -->


                    <!-- Right Side Of Navbar -->

                    <!-- Authentication Links -->
                    @guest
                        <div class="content-header">
                            <a href="{{ url('/') }}" class="text-dark"><i class="fa fa-home"></i> หน้าแรก</a>
                        @else
                            {{-- <a href="{{ url('/home') }}" class="">Home</a> --}}


                            <div class="content-header">
                                <a href="{{ url('/home') }}" class=""><i class="fa fa-home"></i> หน้าแรก</a>
                                <a class="right align-right" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('ออกจากระบบ') }} <i class="fas fa-sign-out-alt"></i>
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    class="d-none ">
                                    @csrf
                                </form>
                            </div>
                        @endguest

                    </div>
                </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <script src="assets/js/dashmix.core-1.0.min.js"></script>
    <script src="assets/js/dashmix.app-1.0.min.js"></script>

</body>

</html>
