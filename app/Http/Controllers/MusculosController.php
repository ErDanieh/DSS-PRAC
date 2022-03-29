<?php

namespace App\Http\Controllers;

use App\Models\GrupoMuscular;
use App\Models\Musculo;
use Illuminate\Http\Request;

class MusculosController extends Controller
{
    /**
     * Lista todos los usuarios
     *  */
    function getMusculos()
    {
        return view('musculos.musculos')->with('musculos', Musculo::simplePaginate(100));
    }

    /**
     * Processes to form to add a new university.
     */
    function newMusculo(Request $req)
    {   
        if( $req->has('name') && $req->has('nombreGrupo')) {
        $grupoMuscular = GrupoMuscular::where('name', '=', $req->input('nombreGrupo'))->first();
        $musculo = new Musculo();
        $musculo->name = $req->input('name');
        $musculo->grupoMuscular()->associate($grupoMuscular);
        $musculo->save();
        }
        return view('musculos.musculos');
    }
}
