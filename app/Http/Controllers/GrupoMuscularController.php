<?php

namespace App\Http\Controllers;

use App\Models\GrupoMuscular;
use Illuminate\Http\Request;

class GrupoMuscularController extends Controller
{
    /**
     * Lista todos los usuarios
     *  */
    function getGruposMusculares()
    {
        return view('gruposMusculares.gruposMusculares')->with('gruposMusculares', GrupoMuscular::simplePaginate(10));
    }
}
