<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Entrenamiento; 
use Illuminate\Support\Facades\Auth;

class TrainerController extends Controller
{
    function getTrainerAll()
    {

        $busquedaRequest = request()->search;
        $busquedaOrder = request()->ordered;
        return view('trainers.trainer')->with('entrenamientos', Entrenamiento::where('name', 'LIKE', "%{$busquedaRequest}%")
            ->simplePaginate(10));
    }
}
