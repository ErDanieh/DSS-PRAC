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
            'url_img' => 'https://media.revistagq.com/photos/5ecea90bd6d588d6f671d17c/16:9/w_2560%2Cc_limit/ejercicios-comba.jpg'
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
            'url_img' => 'https://quieroserdeportista.com/wp-content/uploads/2021/04/Categorias-del-entrenamiento-deportivo1.jpg'
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
