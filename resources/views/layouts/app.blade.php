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
    <script src="{{ asset('/js/jquery-2.2.4.min.js') }}" defer></script>
    <script src="{{ asset('/js/bootstrap.min.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link href="{{ asset('extra/css/linearicons.css') }}" rel="stylesheet">
    <link href="{{ asset('extra/css/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ asset('extra/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('extra/css/nice-select.css') }}" rel="stylesheet">
    <link href="{{ asset('extra/css/magnific-popup.css') }}" rel="stylesheet">
    <link href="{{ asset('extra/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('extra/css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/file.css') }}" rel="stylesheet">

    <script src="{{ asset('extra/js/vendor/jquery-2.2.4.min.js') }}" defer></script>
    <script src="{{ asset('extra/js/jquery.min.js') }}" defer></script>
    <script src="{{ asset('extra/js/vendor/bootstrap.min.js') }}" defer></script>
    <!-- <script src="{{ asset('extra/js/jquery.ajaxchimp.min.js') }}" defer></script> -->
    <script src="{{ asset('extra/js/owl.carousel.min.js') }}" defer></script>
    <script src="{{ asset('extra/js/jquery.nice-select.min.js') }}" defer></script>
    <script src="{{ asset('extra/js/jquery.magnific-popup.min.js') }}" defer></script>
    <script src="{{ asset('extra/js/main.js') }}" defer></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/file.js') }}" defer></script>
       <script>
        $(document).ready(function () {
            $("#myInput").on('keyup', function () {
                var searchTerm = $(this).val().toLowerCase();
                $("#myTable tr").each(function () {
                    $(this).toggle($(this).text().toLowerCase().indexOf(searchTerm) > -1)

                });
            });

        });

    </script>


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/bootstrap.min.css') }}"  rel="stylesheet">

    
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
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
                            <a class="nav-link" href="{{ route('login') }}"></a>
                        </li>
                        <li class="nav-item">
                            @if (Route::has('register'))
                            <a class="nav-link" href="{{ route('register') }}"></a>
                            @endif
                        </li>
                        @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    style="display: none;">
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