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
        $grupoMuscularNoEsperado = GrupoMuscular::where('name', '=', $nombre)->first();

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

    function deleteGrupoMuscular(Request $req)
    {
        $nombre = $req->input('delname');
        $grupoMuscularEsperado = GrupoMuscular::where('name', '=', $nombre)->first();

        if ($grupoMuscularEsperado != null) {
            $grupoMuscularEsperado->delete();
            return redirect()->back()->with('exito', 'Grupo Muscular eliminado con exito');
        }
        return redirect()->back()->with('error', 'Error ese grupo muscular no existe');
    }
}
