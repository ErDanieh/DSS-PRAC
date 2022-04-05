<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\User;
use App\Models\Entrenamiento;
use App\Models\Ejercicio;
use App\Models\Musculo;
use App\Models\GrupoMuscular;

class AdministracionController extends Controller
{
    function getAdministracion()
    {
        return view("admin.admin");
    }

    static function numUsers()
    {
        return User::all()->count();
    }

    static function numEntrenadores()
    {
        return User::where('is_trainer', '=', 1)->count();
    }

    static function numEntrenamientos()
    {
        return Entrenamiento::all()->count();
    }

    static function numEjercicios()
    {
        return Ejercicio::all()->count();
    }

    static function numMusculos()
    {
        return Musculo::all()->count();
    }

    static function grupoMuscular()
    {
        return GrupoMuscular::all()->count();
    }

}
