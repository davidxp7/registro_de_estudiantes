<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="">
        <div class="min-h-screen bg-gray-100">
            @if (Route::has('login'))
                <div class="flex justify-between items-center p-5 bg-white">
                    <div class="flex">
                        <img src="{{ asset('img/fcecep.png') }}" alt="" class="w-30 h-10">
                        @yield('buscador')
                    </div>
                    <div>
                        <a href="{{ route('login') }}" class="p-2 bg-blue-200 hover:bg-blue-300 rounded-lg text-white">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 p-2 bg-blue-300 hover:bg-blue-400 rounded-lg text-white">Register</a>
                        @endif
                    </div>
                </div>
            @endif

            <div class="m-5">
            
                @yield('contenido')
        
            </div>
        </div>

    </body>
</html>
