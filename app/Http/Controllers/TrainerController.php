<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TrainerController extends Controller
{
    function getTrainerZone()
    {
        return view("admin.trainer");
    }
}
