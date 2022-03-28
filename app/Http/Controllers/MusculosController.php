<?php

namespace App\Http\Controllers;

use App\Models\Musculo;
use Illuminate\Http\Request;

class MusculosController extends Controller
{
    /**
     * Lista todos los usuarios
     *  */
    function getMusculos()
    {
        return view('musculos.musculos')->with('musculos', Musculo::simplePaginate(10));
    }
}
