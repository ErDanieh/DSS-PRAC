<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Entrenamiento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PerfilController extends Controller
{
    function getPerfil()
    {
        return view("user.perfil")->with('misEntrenamientos', User::find(Auth::id())->entrenamientos);
    }
}
