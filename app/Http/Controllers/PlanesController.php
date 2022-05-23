<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;
use DB;

class PlanesController extends Controller
{
function getPlanes() 
    {
        return view('planes');
    }
}