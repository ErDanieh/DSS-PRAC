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

            return redirect("/entrenamientos/" . strval($EntrenamientoNuevo->id))->with('exito', 'Exitoo lo he añadido');
        } else {
            return redirect()->back()->with('error', 'Error ya existe el Entrenamiento');
        }
    }
}
