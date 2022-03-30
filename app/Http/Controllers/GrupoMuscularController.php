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

    /**
     * Proceso para añadir un nuevo musculo.
     */
    function newGruposMusculares(Request $req)
    {
        $nombre = $req->input('name');
        $grupoMuscularNoEsperado = GrupoMuscular::where('name', '=',$nombre )->first();

        if ($grupoMuscularNoEsperado == null) {
            $grupoMuscularNuevo = new GrupoMuscular();
            $grupoMuscularNuevo->name = $nombre;
            $grupoMuscularNuevo->descripcion = $req->input('descripcion');
            $grupoMuscularNuevo->save();

            return redirect()->back()->with('exito', 'Grupo Muscular insertado con exito');
        } else {
            return redirect()->back()->with('error', 'Error ese grupo muscular ya ha sido añadido');
        }
    }
}
