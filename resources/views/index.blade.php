<!-- Stored in resources/views/pagina01.blade.php -->
@extends('layouts.layoutppal')

@section('titulo', 'Menú principal')

@section('barralateral')
@parent
<p>Esta parte se añade a la barra lateral original (no la sobreescribe).</p>
@endsection

@section('contenido')
<p>Este es el body de esta página.</p>
<a href="{{ url('pagina02') }}" class="btn btn-xs btn-info pull-right">pagina 02</a>
@endsection