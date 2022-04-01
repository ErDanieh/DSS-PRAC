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
Route::get('/admin/usuarios/', [UserController::class, 'getUsers'])->middleware(['auth']); //Lista todos los usuarios
Route::post('/admin/usuarios/', [UserController::class,'searchUsers'])->middleware(['auth']);//Buscador de usuarios por nombre o email
Route::get('/admin/usuarios/{id}', [UserController::class, 'getProfile'])->middleware(['auth']);
Route::delete('/admin/usuarios/{id}', [UserController::class, 'deleteUser'])->middleware(['auth']);
Route::post('/admin/usuarios/{id}', [UserController::class, 'editProfile'])->middleware(['auth']);


/**
 * Control de Musculos
 */
Route::get('/admin/musculos', [MusculosController::class, 'getMusculos'])->middleware(['auth']); //Lista todos los usuarios
Route::post('/admin/musculos', [MusculosController::class, 'newMusculo'])->middleware(['auth']);
Route::delete('/admin/musculos/{id}',[MusculosController::class,'deleteMusculo'])->middleware(['auth']);
Route::get('/admin/musculos/{id}', function() { #Evitar excepcion al acceder a esta pagina
    return abort(404);
});
/**
 * Control de Ejercicios
 */
Route::get('/admin/ejercicios', [EjerciciosController::class, 'getEjercicios'])->middleware(['auth']); //Lista todos los ejercicios
Route::post('/admin/ejercicios', [EjerciciosController::class, 'newEjercicios'])->middleware(['auth']);//Añade ejercicios
Route::delete('/admin/ejercicios/{id}',[EjerciciosController::class,'deleteEjercicio'])->middleware(['auth']);//Elimina ejercicios
Route::get('/admin/ejercicios/{id}', [EjerciciosController::class, 'getEjercicioDetalle'])->middleware(['auth']);//Añade ejercicios


/**
 * Control de gruposMusculares
 */
Route::get('/admin/gruposMusculares', [GrupoMuscularController::class, 'getGruposMusculares'])->middleware(['auth']); //Lista todos los grupos musculares
Route::post('/admin/gruposMusculares', [GrupoMuscularController::class, 'newGruposMusculares'])->middleware(['auth']);
Route::delete('/admin/gruposMusculares/{id}',[GrupoMuscularController::class,'deleteGrupoMuscular'])->middleware(['auth']);
Route::get('/admin/gruposMusculares/{id}', function() { #Evitar excepcion al acceder a esta pagina
    return abort(404);
});

/**
 * Control de Entrenamientos
 */
Route::get('/admin/entrenamientos', [EntrenamientosController::class, 'getEntrenamientos'])->middleware(['auth']);//Lista todos los entrenamientos
Route::post('/admin/entrenamientos', [EntrenamientosController::class, 'newEntrenamiento'])->middleware(['auth']);
Route::get('/admin/entrenamientos/{id}', [EntrenamientosController::class, 'getEntrenamientoDetalle'])->middleware(['auth']);
Route::delete('/admin/entrenamientos/{id}', [EntrenamientosController::class, 'deleteEntrenamiento'])->middleware(['auth']);
Route::post('/admin/entrenamientos/{id}', [EntrenamientosController::class, 'editEntrenamiento'])->middleware(['auth']);


/**
 * Controlador del home
 */
Route::get('/home', [App\Http\Controllers\HomeController::class, 'getHome'])->name('home');

Route::get('/admin', [AdministracionController::class, 'getAdministracion'])->middleware(['auth']);//Lista todos los entrenamientos

Auth::routes();
