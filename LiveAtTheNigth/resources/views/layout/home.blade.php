<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
        <link href="https://fonts.googleapis.com/css?family=Poppins:400,500&display=swap" rel="stylesheet"/>
		<link rel="stylesheet" href="./style.css" />
		<title>LiveInTheNight</title>

        <script src="{{asset('js/jquery.js')}}"></script>
        <script src="{{asset('js/jquery-migrate-1.2.1.js')}}"></script>
        <script src="https://kit.fontawesome.com/cad9d9af25.js"></script> 

        <title>Laravel</title>

    </head>
    <body>
        <header>
            <div class="logo-container">
                <img src="./img/logo.svg" alt="logo" />
                <h4 class="logo">LiveInTheNigth</h4>
            </div>
            <nav>
                <ul class="nav-links">
                    <li><a class="nav-link" href="/">Inicio</a></li>
                    <li><a class="nav-link" href="/about">Sobre Nosotros</a></li>
                    <li><a class="nav-link" href="/contact">Contacto</a></li>
                </ul>
            </nav>
            <div class="cart">

            </div>
        </header>
        @yield('content')
    </body>
</html>
