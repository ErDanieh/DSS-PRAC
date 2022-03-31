<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdministracionController extends Controller
{
    function getAdministracion()
    {
        return view("layouts.admin");
    }

}
