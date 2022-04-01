<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdministracionController extends Controller
{
    function getAdministracion()
    {
        return view("layouts.admin");
    }

}
