<!-- Stored in resources/views/surrealismo.blade.php -->
@extends('layouts.layoutppal')

@section('titulo', 'CuadrARTE')

@section('encabezado')
@parent

@endsection

@section('contenido')
<div class="container">
    <div class="row justify-content-center">
        <h1>{{ $estilo }}</h1>
    </div>

    <div class="row justify-content-center">
        <a href="{{ url('/') }}" class="btn btn-xs btn-info pull-right">Menú principal</a>
    </div>
</div>

@endsection