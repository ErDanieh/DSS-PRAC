<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class EjerciciosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ejercicios')->delete();


        DB::table('ejercicios')->insert(
            ['name' => 'Press de pecho con mancuerna.',
             'descripcion' => 'El press de banca con mancuernas es una variación del press de banca con barra y un ejercicio utilizado para fortalecer los músculos del pecho.  Muchas veces, el press de banca con mancuernas se recomienda después de alcanzar un cierto punto de fuerza en el press de banca con barra para evitar lesiones en los pectorales y los hombros.  Además, el press de banca con mancuernas proporciona un control del ego en cuanto a la cantidad de peso utilizado debido a la necesidad de mantener la estabilidad de los hombros durante todo el ejercicio.  El ejercicio en sí puede presentarse como un levantamiento principal en sus entrenamientos o un levantamiento accesorio para el press de banca dependiendo de sus objetivos.',
             'url_img' => 'https://wger.de/media/exercise-images/97/Dumbbell-bench-press-2.png']
        );

        DB::table('ejercicios')->insert(
            ['name' => 'Press de pecho con mancuerna inlcinado',
             'descripcion' => 'El press de banca inclinado con mancuernas es una variación del press de banca inclinado y un ejercicio utilizado para desarrollar los músculos del pecho. Los hombros y los tríceps también estarán involucrados indirectamente.  Utilizar una inclinación te permitirá apuntar mejor a la parte superior del cofre, una parte rezagada para muchos levantadores.  El uso de mancuernas también promoverá una fuerza equilibrada e igual entre ambos lados del pecho. También pueden ayudar a prevenir lesiones en los hombros y los pectorales al realizar prensas.  Puede incluir press de banca inclinado con mancuernas en sus entrenamientos de pecho, entrenamientos de la parte superior del cuerpo, entrenamientos de empuje y entrenamientos de cuerpo completo.',
             'url_img' => '']
        );

        DB::table('ejercicios')->insert(
            ['name' => '',
             'descripcion' => '',
             'url_img' => '']
        );
        DB::table('ejercicios')->insert(
            ['name' => '',
             'descripcion' => '',
             'url_img' => '']
        );
        DB::table('ejercicios')->insert(
            ['name' => '',
             'descripcion' => '',
             'url_img' => '']
        );
        DB::table('ejercicios')->insert(
            ['name' => '',
             'descripcion' => '',
             'url_img' => '']
        );

    }
}
