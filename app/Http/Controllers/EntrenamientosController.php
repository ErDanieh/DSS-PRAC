<?php

namespace App\Http\Controllers;

use App\Models\Entrenamiento;
use App\Models\Ejercicio;
use Illuminate\Http\Request;

class EntrenamientosController extends Controller
{
    /**
     * Lista todos los entrenamientos
     *  */
    function getEntrenamientos()
    {
        $busquedaRequest = request()->search;
        $busquedaOrder = request()->ordered;
        //echo $busquedaOrder;
        if ($busquedaOrder == "Ascendente") {
            return view('entrenamientos.entrenamientos')->with('entrenamientos', Entrenamiento::where('name', 'LIKE', "%{$busquedaRequest}%")
                ->orderBy('name', 'ASC')
                ->simplePaginate(10));
        } elseif ($busquedaOrder == "Descendente") {
            return view('entrenamientos.entrenamientos')->with('entrenamientos', Entrenamiento::where('name', 'LIKE', "%{$busquedaRequest}%")
                ->orderBy('name', 'DESC')
                ->simplePaginate(10));
        }
        return view('entrenamientos.entrenamientos')->with('entrenamientos', Entrenamiento::where('name', 'LIKE', "%{$busquedaRequest}%")
            ->simplePaginate(10));
    }

    /**
     * Devuelve la vista del entrenamiento detallado
     */
    function getEntrenamientoDetalle($id)
    {
        try {
            return view('entrenamientos.entrenamientoDetalle')->with('entrenamiento', Entrenamiento::findOrFail($id));
        } catch (\Throwable $th) {
            return abort(503, 'Internal server error');
        }
    }

    function newEntrenamiento(Request $req)
    {
        try {
            $nombreEntrenamiento = $req->input('name');
            $descripcionEntrenamiento = $req->input('descripcion');
            $urlImagenEntrenamiento = $req->input('urlImagen');

            $EntrenamientoNoEsperado = Entrenamiento::where('name', '=', $nombreEntrenamiento)->first();

            if ($EntrenamientoNoEsperado == null) {
                $EntrenamientoNuevo = new Entrenamiento();
                $EntrenamientoNuevo->name = $nombreEntrenamiento;
                $EntrenamientoNuevo->descripcion = $descripcionEntrenamiento;
                $EntrenamientoNuevo->url_img = $urlImagenEntrenamiento;
                $EntrenamientoNuevo->save();

                return redirect("/admin/entrenamientos/" . strval($EntrenamientoNuevo->id))->with('exito', 'al añadir el entrenamiento');
            } else {
                return redirect()->back()->with('error', 'Error ya existe el Entrenamiento');
            }
        } catch (\Throwable $th) {
            return abort(503, 'Internal server error');
        }
    }


    function deleteEntrenamiento($id)
    {
        try {
            $EntrenamientoEsperado = Entrenamiento::where('id', '=', $id)->first();

            if ($EntrenamientoEsperado != null) {
                $EntrenamientoEsperado->delete();
                return redirect()->back()->with('exito', 'Entrenamiento eliminado');
            }
            return redirect()->back()->with('error', 'Error no existe el Entrenamiento');
        } catch (\Throwable $th) {
            return abort(503, 'Internal server error');
        }
    }

    function editEntrenamiento(Request $req, $id)
    {

        try {
            $EntrenamientoEditar = Entrenamiento::findOrFail($id);
            if ($EntrenamientoEditar != null) {

                if ($req->input('name') != null) {
                    $EntrenamientoEditar->name = $req->input('name');
                }

                if ($req->input('descripcion') != null) {
                    $EntrenamientoEditar->descripcion = $req->input('descripcion');
                }

                if ($req->input('urlImagen') != null) {
                    $EntrenamientoEditar->url_img = $req->input('urlImagen');
                }

                $EntrenamientoEditar->save();

                return redirect()->back()->with('exito', 'Entrenamiento editado');
            } else {
                return redirect()->back()->with('error', 'Error ya existe el Entrenamiento');
            }
        } catch (\Throwable $th) {
            return abort(503, 'Internal server error');
        }
    }


    /**
     * E.imina un ejercicio de un entrenamiento
     */
    function eliminarEjercicioDeEntrenamiento($idEntrenamiento, $idEjercicio)
    {

        try {
            $entrenamiento = Entrenamiento::findOrFail($idEntrenamiento);
            $ejercicio = Ejercicio::findOrFail($idEjercicio);
            $ejercicio->entrenamientos()->detach($entrenamiento);
            return redirect()->back()->with('exito', 'Ejercicio eliminado del entrenamiento.');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'No se ha podido eliminar el ejercicio del entrenamiento-');
        }
    }

    function addEjercicioEntrenamiento(Request $req, $idEntrenamiento)
    {
        try {
            $entrenamiento = Entrenamiento::findOrFail($idEntrenamiento);
            $ejercicio = Ejercicio::findOrFail($req->grupo);
            $entrenamiento->ejercicios()->attach($ejercicio);
            $entrenamiento->save();
            return redirect()->back()->with('exito', 'Ejercicio anadido al entrenamiento.');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'No se ha podido anadir el ejercicio');
        }
    }

    static function seleccionableEjercicios()
    {
        $ejercicios = Ejercicio::all();

        foreach ($ejercicios as $ejercicio) {

            echo "<option value='" . $ejercicio->id . "'>" . $ejercicio->name . "</option>";
        }
    }

    function searchEntreamiento(Request $req)
    {
        return view('entrenamientos.entrenamientos')->with('entrenamientos', Entrenamiento::where('name', 'LIKE', "%{$req->input('search')}%")
            ->simplePaginate(10));
    }
}
