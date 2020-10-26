<?php

namespace App\Http\Controllers;

use App\Cuadros;
use Illuminate\Http\Request;

class CuadrosController extends Controller
{
    public function carga_cuadro($estilo)
    {
        return view('cuadro')
            ->with('cuadro', Cuadros::where('estilo', $estilo)->inRandomOrder()->limit(1)->get())
            ->with('tema', $estilo);
    }
}
