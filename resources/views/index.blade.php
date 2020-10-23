<!-- Stored in resources/views/pagina01.blade.php -->
@extends('layouts.layoutppal')

@section('titulo', 'Menú principal')

@section('encabezado')
@parent

@endsection

@section('contenido')
        <div class="row">
            <div class="col-md-4">
                <a href="{{ url('pagina02', ['abstracto']) }}" class="btn btn-info">ABSTRACTO</a>
            </div>
            <div class="col-md-4">
                <a href="{{ url('pagina02', ['surrealismo']) }}" class="btn btn-info pull-right">SURREALISMO</a>
            </div>
            <div class="col-md-4">
                <a href="{{ url('pagina02', ['impresionismo']) }}" class="btn btn-info pull-right">IMPRESIONISMO</a>
            </div>
        </div>
    
    <br><br>
    
    @endsection

