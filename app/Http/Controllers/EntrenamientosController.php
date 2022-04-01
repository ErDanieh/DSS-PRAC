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
    function getEntrenamientoDetalle($id)
    {
        return view('entrenamientos.entrenamientoDetalle')->with('entrenamiento', Entrenamiento::findOrFail($id));
    }

    function newEntrenamiento(Request $req)
    {
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

            return redirect("/entrenamientos/" . strval($EntrenamientoNuevo->id))->with('exito', 'al añadir el entrenamiento');
        } else {
            return redirect()->back()->with('error', 'Error ya existe el Entrenamiento');
        }
    }

    /** 
    function deleteEntrenamiento(Request $req)
    {
        $nombreEntrenamiento = $req->input('delname');
        $EntrenamientoEsperado = Entrenamiento::where('name', '=', $nombreEntrenamiento)->first();

        if ($EntrenamientoEsperado != null) {
            $EntrenamientoEsperado->delete();
            return redirect()->back()->with('exito', 'Entrenamiento eliminado');
        }
        return redirect()->back()->with('error', 'Error no existe el Entrenamiento');
    }
     */

    function deleteEntrenamiento($id)
    {
        $EntrenamientoEsperado = Entrenamiento::where('id', '=', $id)->first();

        if ($EntrenamientoEsperado != null) {
            $EntrenamientoEsperado->delete();
            return redirect()->back()->with('exito', 'Entrenamiento eliminado');
        }
        return redirect()->back()->with('error', 'Error no existe el Entrenamiento');
    }

    function editEntrenamiento(Request $req, $id)
    {
        $nombreEntrenamiento = $req->input('name');
        $descripcionEntrenamiento = $req->input('descripcion');
        $urlImagenEntrenamiento = $req->input('urlImagen');

        $EntrenamientoEditar = Entrenamiento::findOrFail($id);

        if ($EntrenamientoEditar != null) {
            $EntrenamientoEditar->name = $nombreEntrenamiento;
            $EntrenamientoEditar->descripcion = $descripcionEntrenamiento;
            $EntrenamientoEditar->url_img = $urlImagenEntrenamiento;
            $EntrenamientoEditar->save();

            return redirect()->back()->with('exito', 'Entrenamiento editado');
        } else {
            return redirect()->back()->with('error', 'Error ya existe el Entrenamiento');
        }
    }

}
