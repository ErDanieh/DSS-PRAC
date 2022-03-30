<?php

namespace App\Http\Controllers;

use App\Models\Ejercicio;
use Illuminate\Http\Request;

class EjerciciosController extends Controller
{
    /**
     * Lista todos los ejercicios
     *  */
    function getEjercicios()
    {
        return view('ejercicios.ejercicios')->with('ejercicios', Ejercicio::simplePaginate(100));
    }
}
