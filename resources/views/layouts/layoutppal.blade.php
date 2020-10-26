<html>

<head>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Styles -->
    
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">

    <title>MUSEART - @yield('titulo')</title>
</head>

<body>
    @section('encabezado')
        <div class="container">
            <div class="row justify-content-center">
                <h1>DESCUBRE EL CUADRO</h1>
            </div>
        </div>
        
    @show
    <div class="container">
        @yield('contenido')
    </div>
</body>

</html>