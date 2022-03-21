<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Entrenamiento;

class EntrenamientoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $entrenamiento = new Entrenamiento([
            'name' => 'Entrenamiento 1',
            'descripcion' => 'Esta es la descripcion del entrenamiento 1.',
            'url_img' => 'https://url_de_prueba.img'
        ]);

        try
        {
            $entrenamiento->save();
        }
        catch(\Exception $e){
            echo $e->getMessage();
        }

        $entrenamiento = new Entrenamiento([
            'name' => 'Entrenamiento 2',
            'descripcion' => 'Esta es la descripcion del entrenamiento 2.',
            'url_img' => 'https://url_de_prueba2.img'
        ]);

        try
        {
            $entrenamiento->save();
        }
        catch(\Exception $e){
            echo $e->getMessage();
        }
    }
}
