<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;
use DB;

class ContactanosController extends Controller
{
function getContactanos() 
    {
        return view('contactanos');
    }
}