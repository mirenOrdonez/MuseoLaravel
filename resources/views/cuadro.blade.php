@extends('layouts.layoutppal')
@section('titulo', 'CuadrARTE')

@section('encabezado')
@parent

@endsection
<div class="container">
    <div class="row">
        <div class="col-md-6">
            
        </div>
        <div class="col-md-6">
            <p> {{$cuadro[0]->descripcion}}</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <p>{{$cuadro[0]->titulo}}</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <p>{{$cuadro[0]->artista}}</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <p>{{$cuadro[0]->año}}</p>
        </div>
    </div>
</div>