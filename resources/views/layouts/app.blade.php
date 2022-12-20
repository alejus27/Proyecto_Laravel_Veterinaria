<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Histovet') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body class="bg-light" >
    <div id="app">

        <nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm" > 
            <div class="container" >
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ 'Histovet' }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->


                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        @can('access-cart')
                        @include('partials.navbar')
                        @endcan

                        <!-- Authentication Links -->
                        @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Iniciar sesión') }}</a>
                        </li>
                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Registro') }}</a>
                        </li>
                        @endif
                        @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a style=" color: red; font-weight: bold;"  class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Cerrar sesión') }}
                                </a>

                                @can('manage-users')
                                <a class="dropdown-item" href="{{route('admin.users.index')}}">
                                    Gestión de usuarios
                                </a>
                                @endcan

                                @can('manage-pets')
                                <a class="dropdown-item" href="{{route('pets.index')}}">
                                    Gestión de mascotas
                                </a>
                                @endcan

                                @can('manage-medicines')
                                <a class="dropdown-item" href="{{route('medicines.index')}}">
                                    Gestión de medicinas
                                </a>
                                @endcan


                                @can('manage-users')
                                <a class="dropdown-item" href="{{route('veterinary.index')}}">
                                    Gestión de veterinarias
                                </a>
                                @endcan

                                @can('manage-pets')
                                <a class="dropdown-item" href="{{route('attention.index')}}">
                                    Atención
                                </a>
                                @endcan



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

        <div class="container">

        </div>


        <div class="container" style="margin-top: 50px">
            @include('partials.alerts')
            @yield('content')
        </div>




    </div>
</body>

</html>