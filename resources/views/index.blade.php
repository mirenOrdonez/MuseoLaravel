<!-- Stored in resources/views/pagina01.blade.php -->
@extends('layouts.layoutppal')

@section('titulo', 'Menú principal')

@section('encabezado')
@parent

@endsection

@section('contenido')
        <div class="row">
            <div class="col-md-4">
                <a href="{{ url('cuadro', ['Abstracto']) }}" class="btn btn-info">ABSTRACTO</a>
            </div>
            <div class="col-md-4">
                <a href="{{ url('cuadro', ['SurrealismoO']) }}" class="btn btn-info pull-right">SURREALISMO</a>
            </div>
            <div class="col-md-4">
                <a href="{{ url('cuadro', ['Impresionismo']) }}" class="btn btn-info pull-right">IMPRESIONISMO</a>
            </div>
        </div>
    
    <br><br>
    
    @endsection

