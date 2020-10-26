<!-- Stored in resources/views/pagina01.blade.php -->
@extends('layouts.layoutppal')

@section('titulo', 'Menú principal')

@section('encabezado')
    @parent
@endsection

<br><br>

@section('contenido')

<div class="container">
    <div class="row">
        <div class="card text-center" style="width: 22rem; margin-right: 20px" >
            <img src="{{ asset('img/abstracto.jpg')}}" class="card-img-top" height="250px" >
            <div class="card-body">
                <h5 class="card-title">ABSTRACTO</h5>
                <a href="{{ url('cuadro', ['Abstracto']) }}" class="btn btn-dark">Descúbrelo</a>
            </div>
        </div>

        <div class="card text-center" style="width: 22rem; margin-right: 20px">
            <img src="{{ asset('img/surrealismo.jpg')}}" class="card-img-top" height="250px">
            <div class="card-body">
                <h5 class="card-title">SURREALISMO</h5>
                <a href="{{ url('cuadro', ['Surrealismo']) }}" class="btn btn-dark">Descúbrelo</a>
            </div>
        </div>

        <div class="card text-center" style="width: 22rem; margin-right: 20px">
            <img src="{{ asset('img/impresionismo.jpeg')}}" class="card-img-top" height="250px">
            <div class="card-body">
                <h5 class="card-title" >IMPRESIONISMO</h5>
                <a href="{{ url('cuadro', ['Impresionismo']) }}" class="btn btn-dark">Descúbrelo</a>
            </div>
        </div>
    </div>
</div>


<br><br>

@endsection