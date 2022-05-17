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
        $busquedaRequest = request()->search;
        $busquedaOrder = request()->ordered;
        //echo $busquedaOrder;
        if ($busquedaOrder == "Ascendente") {
            return view('musculos.musculos')->with('musculos', Musculo::where('name', 'LIKE', "%{$busquedaRequest}%")
                ->orderBy('name', 'ASC')
                ->simplePaginate(10));
        } elseif ($busquedaOrder == "Descendente") {
            return view('musculos.musculos')->with('musculos', Musculo::where('name', 'LIKE', "%{$busquedaRequest}%")
                ->orderBy('name', 'DESC')
                ->simplePaginate(10));
        }
        return view('musculos.musculos')->with('musculos', Musculo::where('name', 'LIKE', "%{$busquedaRequest}%")
            ->simplePaginate(10));
    }

    /**
     * Proceso para añadir un nuevo musculo.
     */
    function newMusculo(Request $req)
    {
        $grupoMuscular = GrupoMuscular::where('name', '=', $req->input('grupo'))->first();

        if ($grupoMuscular != null) {
            $musculo = new Musculo();
            $musculo->name = $req->input('name');
            $musculo->grupoMuscular()->associate($grupoMuscular);
            $musculo->save();

            return redirect()->back()->with('exito', 'Musculo insertado con exito');
        } else {
            return redirect()->back()->with('error', 'Error no existe el musculo');
        }
    }

    /**
     * Elimina el musculo
     */
    static function deleteMusculo($id)
    {
        $musculo = Musculo::findOrFail($id);
        if ($musculo !=  null) {
            $musculo->delete();
            return redirect()->back()->with('exito', 'Musculo eliminado con exito');
        }
        return redirect()->back()->with('error', 'Error no existe el musculo');
    }

    function getMusculoDetalle($id)
    {
        return view('musculos.musculoDetalle')->with('musculo', Musculo::findOrFail($id));
    }

    function editMusculo(Request $req, $id)
    {
        $musculoEditar = Musculo::findOrFail($id);

        if ($musculoEditar != null) {

            if ($req->input('name') != null) {
                $musculoEditar->name = $req->input('name');
            }

            if ($req->input('grupo') != null) {
                $grupoMuscular = GrupoMuscular::where('name', '=', $req->input('grupo'))->first();
                if ($grupoMuscular != null) {
                    $musculoEditar->grupoMuscular()->associate($grupoMuscular);
                } else {
                    return redirect()->back()->with('error', 'Error no existe el grupo muscular');
                }
            }
            $musculoEditar->save();

            return redirect()->back()->with('exito', 'Musculo editado');
        } else {
            return redirect()->back()->with('error', 'Error no existe el Musculo');
        }
    }

    /**
     * Popula el seleccionable de grupos musculares
     */
    static function seleccionableGruposMusculares()
    {
        $gruposMusculares = GrupoMuscular::all();

        foreach ($gruposMusculares as $grupoMuscular) {
            echo "<option>" . $grupoMuscular->name . "</option>";
        }
    }

    function searchMusculo(Request $req)
    {
        return view('musculos.musculos')->with('musculos', Musculo::where('name', 'LIKE', "%{$req->input('search')}%")
            ->simplePaginate(10));
    }
}
