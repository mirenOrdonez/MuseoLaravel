<html>

<head>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
    <title>MUSEART - @yield('titulo')</title>
</head>

<body>
    @section('barralateral')
    Esto es la barra lateral inicial
    @show
    <div class="container">
        @yield('contenido')
    </div>
</body>

</html>