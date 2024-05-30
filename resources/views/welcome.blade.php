<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>
            body, html {
                margin: 0;
                height: 100%;
                width: 100%;
            }
            .background-image {
                background-size: cover;
                background-position: center;
                background-repeat: no-repeat;
                height: 100%;
                width: 100%;
                position: absolute;
                top: 0;
                left: 0;
            }
            .overlay-text {
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                color: white;
                font-size: 2em;
                text-align: center;
                background: rgba(255, 255, 255, 0.282);
                padding: 20px;
                border-radius: 10px;
            }
            .overlay-text > a : hover {
                background: rgba(0, 0, 0, 0.282);
            }
            a {
                text-decoration: none; 
                color: black
            }
            a:hover {
                color: white
            }
        </style>
    </head>
    <body>
        <div class="container">
            <img class="background-image" src="{{ asset('storage/images/desk.jpg') }}" />
            <div class="overlay-text">
                @if (Route::has('login'))
                    <nav class="-mx-3 flex flex-1 justify-end">
                        @auth
                            <a href="{{ url('/dashboard') }}">
                                Inicio
                            </a>
                        @else
                            <a href="{{ route('login') }}">
                                Iniciar sesión
                            </a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}">
                                    Registrarme
                                </a>
                            @endif
                        @endauth
                    </nav>
                @endif
            </div>
        </div>
    </body>
</html>
