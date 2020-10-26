@extends('layouts.layoutppal')
@section('titulo', 'CuadrARTE')

@section('encabezado')
    <div class="container">
        <h1>{{$cuadro[0]->estilo}}</h1>
        <hr>
    </div>
    
@endsection


@section('contenido')
<div class="container">
    <div class="row">
        <div class="col-md-6">
        <img src= "{{asset('img/'.$cuadro[0]->imagen. '')}}"  height="400px" width="500px">
        <!--{{Storage::url($cuadro[0]->imagen)}}-->
        </div>
        <div class="col-md-6">
            <p> {{$cuadro[0]->descripcion}}</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <h2><b>{{$cuadro[0]->titulo}}</b></h2>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <h3>{{$cuadro[0]->artista}}</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <h3>{{$cuadro[0]->año}}</h3>
        </div>
    </div>

    <br>

    <div class="row justify-content-center">
        <a href="{{ url('/') }}" class="btn btn-dark pull-right">Menú principal</a>
    </div>
</div>
@endsection