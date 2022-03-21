<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Entrenamiento;
use App\Models\Ejercicio;

class EntrenamientosEjerciciosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $entrenamiento = Entrenamiento::where('name', '=', 'Entrenamiento 1')->first();  
        $ejercicio = Ejercicio::where('name', '=', 'Apertura de mancuernas')->first();
        $entrenamiento->ejercicios()->attach($ejercicio->id);

        $ejercicio = Ejercicio::where('name', '=', 'Curl Femoral')->first();
        $entrenamiento->ejercicios()->attach($ejercicio->id);
    }
}
