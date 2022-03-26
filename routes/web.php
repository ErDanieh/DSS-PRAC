<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home/{name?}', function ($name=null) {
    return view('home', ['name' => $name]);
});


/**
 * Control de usuarios
 */
Route::get('/users', [UserController::class, 'getUsers']); //Lista todos los usuarios
Route::post('/users/search', [UserController::class,'searchUsers']);//Buscador de usuarios por nombre o email
Route::get('/profile/{id}', [UserController::class, 'getProfile']);

