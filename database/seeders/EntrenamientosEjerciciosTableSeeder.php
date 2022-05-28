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

        $entrenamiento = Entrenamiento::where('name', '=', 'Entrenamiento 2')->first();  
        $ejercicio = Ejercicio::where('name', '=', 'Sentadillas')->first();
        $entrenamiento->ejercicios()->attach($ejercicio->id);
        $ejercicio = Ejercicio::where('name', '=', 'Gluteo')->first();
        $entrenamiento->ejercicios()->attach($ejercicio->id);

        $entrenamiento = Entrenamiento::where('name', '=', 'Entrenamiento 3')->first();  
        $ejercicio = Ejercicio::where('name', '=', 'Levantamiento de pesas')->first();
        $entrenamiento->ejercicios()->attach($ejercicio->id);
        $ejercicio = Ejercicio::where('name', '=', 'Deltoides')->first();
        $entrenamiento->ejercicios()->attach($ejercicio->id);

        $entrenamiento = Entrenamiento::where('name', '=', 'Entrenamiento 4')->first();  
        $ejercicio = Ejercicio::where('name', '=', 'Abdominales')->first();
        $entrenamiento->ejercicios()->attach($ejercicio->id);
        $ejercicio = Ejercicio::where('name', '=', 'Abdomen')->first();
        $entrenamiento->ejercicios()->attach($ejercicio->id);

        $entrenamiento = Entrenamiento::where('name', '=', 'Entrenamiento 5')->first();  
        $ejercicio = Ejercicio::where('name', '=', 'Sentadillas con mancuernas')->first();
        $entrenamiento->ejercicios()->attach($ejercicio->id);
        $ejercicio = Ejercicio::where('name', '=', 'Piernas')->first();
        $entrenamiento->ejercicios()->attach($ejercicio->id);

        $entrenamiento = Entrenamiento::where('name', '=', 'Entrenamiento 6')->first();  
        $ejercicio = Ejercicio::where('name', '=', 'Flexiones')->first();
        $entrenamiento->ejercicios()->attach($ejercicio->id);
        $ejercicio = Ejercicio::where('name', '=', 'Deltoides')->first();
        $entrenamiento->ejercicios()->attach($ejercicio->id);
    }
}
