<!-- Stored in resources/views/surrealismo.blade.php -->
@extends('layouts.layoutppal')

@section('titulo', 'CuadrARTE')

@section('barralateral')
@parent
<p>Aquí podría no poner nada si quisiera</p>
@endsection

@section('contenido')
<h3>Este es el body de la página 02.</h3>
<a href="{{ url('/') }}" class="btn btn-xs btn-info pull-right">Menú principal</a>
@endsection