<html>

<head>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style>
        body {
            background-image: url("{{asset('/img/fondo1.jpg')}}");
        }
        h1 {
            font-size: 50px;
            text-align: center;
        }
        .container {
            margin-top: 30px;
        }
        footer {
            text-align: center;
        }
    </style>
    

    <title>MUSEART - @yield('titulo')</title>
</head>

<body>
    @section('encabezado')
        <div class="container">
            <h1>DESCUBRE EL CUADRO</h1>
            <hr>
        </div>
        
    @show

    @section('contenido')
        <div class="container">
        
        </div>
    @show
</body>

<footer>
    <div class="container">
        <p>MuseART®</p>
        <p>Página web de arte.</p>
        <p>2020</p>
    </div>
</footer>

</html>