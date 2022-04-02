<?php

namespace App\Http\Controllers;

use App\Models\Ejercicio;
use Illuminate\Http\Request;

class EjerciciosController extends Controller
{
    /**
     * Lista todos los ejercicios
     *  */
    function getEjercicios()
    {
        return view('ejercicios.ejercicios')->with('ejercicios', Ejercicio::simplePaginate(100));
    }

    /**
     * Añade ejercicios
     */
    function newEjercicios(Request $req)
    {
        $nombreEjercicio = $req->input('name');
        $descripcionEjercicio = $req->input('descripcion');
        $urlImagenEjercicio = $req->input('urlImagen');

        $ejercicio = Ejercicio::where('name', '=', $nombreEjercicio)->first();

        if ($ejercicio == null) {
            $ejercicioNuevo = new Ejercicio();
            $ejercicioNuevo->name = $nombreEjercicio;
            $ejercicioNuevo->descripcion = $descripcionEjercicio;
            $ejercicioNuevo->url_img = $urlImagenEjercicio;
            $ejercicioNuevo->save();

            return redirect()->back()->with('exito', 'Ejercicio insertado con exito');
        } else {
            return redirect()->back()->with('error', 'Error ya existe el ejercicio');
        }
    }

    function deleteEjercicio($id)
    {

        $ejercicioEsperado = Ejercicio::findOrFail($id);

        if ($ejercicioEsperado != null) {
            $ejercicioEsperado->delete();
            return redirect()->back()->with('exito', 'Ejercicio eliminado con exito');
        }
        return redirect()->back()->with('error', 'Error no existe el ejercicio');
    }


    function getEjercicioDetalle($id)
    {
        return view('ejercicios.ejercicioDetalle')->with('ejercicio', Ejercicio::findOrFail($id));
    }

    function editEjercicio(Request $req, $id)
    {
        $EjercicioEditar = Ejercicio::findOrFail($id);
        if ($EjercicioEditar != null) {

            if ($req->input('name') != null) {
                $EjercicioEditar->name = $req->input('name');
            }

            if ($req->input('descripcion') != null) {
                $EjercicioEditar->descripcion = $req->input('descripcion');
            }

            if ($req->input('urlImagen') != null) {
                $EjercicioEditar->url_img = $req->input('urlImagen');
            }

            $EjercicioEditar->save();

            return redirect()->back()->with('exito', 'Ejercicio editado');
        }
        else 
        {
            return redirect()->back()->with('error', 'Error ya existe el Ejercicio');
        }
    }
}
