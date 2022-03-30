<?php

namespace App\Http\Controllers;

use App\Models\GrupoMuscular;
use App\Models\Musculo;
use Illuminate\Http\Request;
use SebastianBergmann\Environment\Console;

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
        $grupoMuscular = GrupoMuscular::where('name', '=', $req->input('grupo'))->first();

        if ($grupoMuscular != null) {
            $musculo = new Musculo();
            $musculo->name = $req->input('name');
            $musculo->grupoMuscular()->associate($grupoMuscular);
            $musculo->save();

            return redirect()->back()->with('exito','Musculo insertado con exito');
        }
        else{
            return redirect()->back()->with('error','Error no existe el musculo');
        }

        
    }
}
