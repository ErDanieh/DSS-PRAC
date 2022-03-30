<?php

use App\Http\Controllers\MusculosController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EjerciciosController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GrupoMuscularController;
use App\Http\Controllers\HomeController;

use App\Models\Ejercicio;

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

Route::get('/', [HomeController::class, 'getHome']);//Devuelve la vista del home




/** 
Route::get('/home/{name?}', function ($name=null) {
    return view('home', ['name' => $name]);
});
*/


/**
 * Control de usuarios
 */
Route::get('/users', [UserController::class, 'getUsers']); //Lista todos los usuarios
Route::post('/users', [UserController::class,'searchUsers']);//Buscador de usuarios por nombre o email
Route::get('/profile/{id}', [UserController::class, 'getProfile']);

/**
 * Control de Musculos
 */
Route::get('/musculos', [MusculosController::class, 'getMusculos']); //Lista todos los usuarios
Route::post('/musculos', [MusculosController::class, 'newMusculo']);


/**
 * Control de Ejercicios
 */
Route::get('/ejercicios', [EjerciciosController::class, 'getEjercicios']); //Lista todos los usuarios


/**
 * Control de gruposMusculares
 */
Route::get('/gruposMusculares', [GrupoMuscularController::class, 'getGruposMusculares']); //Lista todos los usuarios
Route::post('/gruposMusculares', [GrupoMuscularController::class, 'newGruposMusculares']);




/**
 * Controlador del home
 */
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


