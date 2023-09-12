<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">



    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Font "INSTRUMENT SANS" -->
        <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Instrument+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">


        <!-- Font "MONTSERRAT" -->        
        <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

        <!-- Scripts -->
        @vite(['resources/sass/app.scss', 'resources/js/app.js', 'resources/css/app.css'])
    </head>



    <!-- BODY 
    ==================================================================-->
    <body>
        <div id="app">


            <!-- NAVBAR 
            ==================================================================-->
            <nav class="navbar navbar-expand-md navbar-light p-0 fixed-top mt-3 rounded col-11 mx-auto" data-bs-theme="dark" id="navbar">
                <div class="container-fluid">


                    <!-- LOGO -->
                    <a class="navbar-brand" href="home#">
                        <img src="{{ asset('images/logo.png') }}" alt="Logo" id="logo_navbar_app_blade">
                    </a>

                    <!-- MENU BURGER -->
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>


                    <!-- LIENS D'ATHENTIFICATION
                    ==================================================================-->
                    <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                        <div class="navbar-nav gap-3" id="liens-navbar">

                            @guest
                                @if (Route::has('login'))

                                    <!-- LIEN CONNEXION -->
                                    <li class="nav-link liste position-relative pb-1">
                                        <a class="nav-link text-light p-0 text-center" href="{{ route('login') }}"><span>{{ __('Connexion') }}</span></a>
                                    </li>

                                @endif

                                @if (Route::has('register'))

                                    <!-- LIEN INSCRIPTION -->
                                    <li class="nav-link liste position-relative pb-1">
                                        <a class="nav-link text-light p-0 text-center" href="{{ route('register') }}"><span>{{ __('Inscription') }}</span></a>
                                    </li>

                                @endif
                            @else

                                <!-- NAVBAR DEROULER 
                                ==================================================================-->
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>{{ Auth::user()->name }}</a>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">

                                        <!-- LIEN VERS "MON COMPTE" -->
                                        <a class="dropdown-item " href="{{ route('user.edit', $user = Auth::user() )}}">Mon compte</a>

                                        <!-- LIEN DECONNEXION -->
                                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Déconnexion') }}</a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>

                                    </div>
                                </li>

                            @endguest


                        </div>
                    </div>


                </div>
            </nav>


            <!-- MAIN 
            ==================================================================-->
            <main>
                @yield('content')
            </main>


        </div>
    </body>


</html>
