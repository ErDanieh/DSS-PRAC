<?php

namespace App\Http\Controllers;

use App\Models\Ejercicio;
use App\Models\GrupoMuscular;
use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;
use DB;

class EjerciciosController extends Controller
{
    /**
     * Lista todos los ejercicios
     *  */
    function getEjercicios(Request $req)
    {


        try {
            $busquedaRequest = request()->search;
            $grupoMuscularFilter = request()->gm;
            $resultado = Ejercicio::paginate(10);


            try {
                if ($grupoMuscularFilter != null) {
                    $grupoMuscular = GrupoMuscular::where('name', '=', $grupoMuscularFilter)->first();
                    $resultado = $grupoMuscular->ejercicios();
                }
                if ($busquedaRequest != null) {
                    $ejerciciosFIltradosNombre = Ejercicio::where('name', 'like', "%{$busquedaRequest}%");
                    if ($grupoMuscularFilter != null) {
                        $resultado = array_intersect($resultado ,$ejerciciosFIltradosNombre);
                        echo "he hehco la interseccion";
                    } else {
                        $resultado = $ejerciciosFIltradosNombre;
                    }
                }
            } catch (\Throwable $th) {
                echo "error";
                return view('ejercicios.ejercicios', ['ejercicios' => Ejercicio::paginate(10)]);
            }

            return view('ejercicios.ejercicios', ['ejercicios' => $resultado->simplePaginate(10)]);
        } catch (\Throwable $th) {
            return abort(503, 'Internal Error');
        }
    }


    /**
     * Añade ejercicios
     */
    function newEjercicios(Request $req)
    {
        try {
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
        } catch (\Throwable $th) {
            return abort(503, 'Internal Error');
        }
    }

    function deleteEjercicio($id)
    {
        try {
            $ejercicioEsperado = Ejercicio::findOrFail($id);

            if ($ejercicioEsperado != null) {
                $ejercicioEsperado->delete();
                return redirect()->back()->with('exito', 'Ejercicio eliminado con exito');
            }
            return redirect()->back()->with('error', 'Error no existe el ejercicio');
        } catch (\Throwable $th) {
            return abort(503, 'Internal Error');
        }
    }


    function getEjercicioDetalle($id)
    {
        try {
            return view('ejercicios.ejercicioDetalle')->with('ejercicio', Ejercicio::findOrFail($id));
        } catch (\Throwable $th) {
            return abort(503, 'Internal Error');
        }
    }

    function editEjercicio(Request $req, $id)
    {
        try {
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
            } else {
                return redirect()->back()->with('error', 'Error ya existe el Ejercicio');
            }
        } catch (\Throwable $th) {
            return abort(503, 'Internal Error');
        }
    }

    function searchEjercicios(Request $req)
    {
        try {
            return view('ejercicios.ejercicios')->with('ejercicios', Ejercicio::where('name', 'LIKE', "%{$req->input('search')}%")
                ->simplePaginate(10));
        } catch (\Throwable $th) {
            return abort(503, 'Internal Error');
        }
    }

    static function seleccionableGrupoMuscular()
    {
        $gruposMusculares = GrupoMuscular::all();

        foreach ($gruposMusculares as $grupoMuscular) {

            echo "<option value='" . $grupoMuscular->name . "'>" . $grupoMuscular->name . "</option>";
        }
    }
}
