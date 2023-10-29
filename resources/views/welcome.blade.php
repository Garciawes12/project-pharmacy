<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/welcome.css')}}">
    <title>Welcome</title>
</head>
<body>


    <div class="grid-container">

        <div class="logo-image">
            <img src="{{asset('image/flealogo.jpg')}}" alt="logo de farmacia flea">
        </div>


        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
            <h1>Bienvenido a Farmacia Flea</h1>
            <p>Este es un proyecto final, con el fin de aprovar la tesis</p>
            <ul> Integrantes
                <li>Wesling Garcia</li>
                <li>Marima Acevedo</li>
                <li>Leonardo</li>
            </ul>

            @if (Route::has('login'))
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                @auth
                <a href="{{ url('/home') }}" class="text-sm text-white underline">Home</a>
                @else
                <p>Preciona el boton para acceder al login </p>
                <a href="{{ route('login') }}" class="text-sm text-white underline" id="login">Login</a>

                {{-- @if (Route::has('register'))
                <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                @endif --}}
                @endif
            </div>
            @endif
        </div>

    </div>
    </body>
</html>
