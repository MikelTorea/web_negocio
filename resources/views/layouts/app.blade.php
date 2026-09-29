<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title') | Andalucía de Viaje</title>

    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>

<body>

    <header class="header">
        <div class="container">

            <a href="{{ route('home') }}" class="logo">
                Andalucía de Viaje
            </a>

            <nav>
                <a href="{{ route('home') }}">Inicio</a>
                <a href="{{ route('destinos') }}">Destinos</a>
                <a href="{{ route('contacto') }}">Contacto</a>
            </nav>

        </div>
    </header>

    <main>
        @yield('content')
    </main>

    <footer class="footer">
        <div class="container">
            <p>Andalucía de Viaje · Proyecto Laravel</p>
        </div>
    </footer>

</body>
</html>