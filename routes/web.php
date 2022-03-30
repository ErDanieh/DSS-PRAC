<?php

use App\Http\Controllers\MusculosController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EjerciciosController;
use App\Http\Controllers\EntrenamientosController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GrupoMuscularController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdministracionController;

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
Route::delete('/musculos',[MusculosController::class,'deleteMusculo']);

/**
 * Control de Ejercicios
 */
Route::get('/ejercicios', [EjerciciosController::class, 'getEjercicios']); //Lista todos los ejercicios


/**
 * Control de gruposMusculares
 */
Route::get('/gruposMusculares', [GrupoMuscularController::class, 'getGruposMusculares']); //Lista todos los grupos musculares
Route::post('/gruposMusculares', [GrupoMuscularController::class, 'newGruposMusculares']);


/**
 * Control de Entrenamientos
 */
Route::get('/entrenamientos', [EntrenamientosController::class, 'getEntrenamientos']);//Lista todos los entrenamientos
Route::get('/entrenamientoDetalle/{id}', [EntrenamientosController::class, 'getEntrenamientoDetalle']);



/**
 * Controlador del home
 */
Route::get('/home', [App\Http\Controllers\HomeController::class, 'getHome'])->name('home');

Route::get('/admin', [AdministracionController::class, 'getAdministracion']);//Lista todos los entrenamientos

Auth::routes();
