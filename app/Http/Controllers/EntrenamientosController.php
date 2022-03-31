<?php

namespace App\Http\Controllers;

use App\Models\Entrenamiento;
use Illuminate\Http\Request;

class EntrenamientosController extends Controller
{
    /**
     * Lista todos los entrenamientos
     *  */
    function getEntrenamientos()
    {
        return view('entrenamientos.entrenamientos')->with('entrenamientos', Entrenamiento::simplePaginate(100));
    }

    /**
     * Devuelve la vista del entrenamiento detallado
     */
    function getEntrenamientoDetalle($id){
        return view('entrenamientos.entrenamientoDetalle')->with('entrenamiento', Entrenamiento::findOrFail($id));
    }

    
}

