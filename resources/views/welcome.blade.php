<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Feria Virtual UCC</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">


    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">

    <style>
        body {
            font-family: 'Nunito';
            background-image: url('img/fondo.png');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
        }

    </style>
</head>

<body class="antialiased">

    <!-- Inicio Navbar -->
    <div>
        <nav class="flex items-center justify-between flex-wrap bg-teal-500 p-6">
            <div class="flex items-center flex-shrink-0 text-white mr-6">
                <img src="{{ asset('img/logoUCC.png') }}" alt="" style="width:60px;height:60px;">
                <span class="font-semibold text-xl tracking-tight">Feria Virtual UCC</span>
            </div>
            <div class="block lg:hidden">
                <button
                    class="flex items-center px-3 py-2 border rounded text-teal-200 border-teal-400 hover:text-white hover:border-white">
                    <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <title>Menu</title>
                        <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
                    </svg>
                </button>
            </div>
            <div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto">
                <div class="text-sm lg:flex-grow">
                    @if (Route::has('login'))
                        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                            @auth
                                <a href="{{ url('/dashboard') }}"
                                    class="block mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-white mr-4">
                                    Volver a la Feria
                                </a>
                            @else
                                <a href="{{ route('login') }}"
                                    class="block mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-white mr-4">
                                    Iniciar Sesión
                                </a>

                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}"
                                        class="block mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-white mr-4">Registro</a>


                                @endif
                            </div>
                        @endauth
                </div>
            </div>
            @endif
        </nav>
    </div>
    <!-- Fin Navbar -->

    <!-- Inicio Contenido -->

    <div class="container">
        <div>
            <h1 style="color: teal;">
                UNIVERSIDAD COOPERATIVA DE COLOMBIA
            </h1>
        </div>
        <div style="margin-top: 15px">
            <img style="width:100%; " src="{{ asset('img/letras.png') }}">
        </div>
    </div>

    </div>

    <!-- Fin Contenido -->

</body>

</html>
