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
            ['name' => 'Press de pecho plano con mancuerna.',
             'descripcion' => 'Nos tumbaremos en un banco colocado de manera plana y empujaremos las mancuernas hacia arriba a la altura de nuestro pecho.',
             'url_img' => 'https://wger.de/media/exercise-images/97/Dumbbell-bench-press-2.png']
        );

        DB::table('ejercicios')->insert(
            ['name' => 'Press de pecho con mancuerna inclinado',
             'descripcion' => 'Nos tumbaremos en un banco colocado de manera inclinada y empujaremos las mancuernas hacia arriba a la altura de nuestro pecho.',
             'url_img' => 'https://depowerlifting.site/wp-content/uploads/2021/06/ejercicios-para-hombros-1024x683-1.jpeg']
        );

        DB::table('ejercicios')->insert(
            ['name' => 'Apertura de mancuernas',
             'descripcion' => 'Nos tumbaremos en un banco colocado de manera plana, subiremos los brazos y los abriremos y cerraremos con las mancuernas en las manos.',
             'url_img' => 'https://depowerlifting.site/wp-content/uploads/2021/06/ejercicios-para-hombros-1024x683-1.jpeg']
        );
        DB::table('ejercicios')->insert(
            ['name' => 'Cruces en polea alta',
             'descripcion' => 'En las poleas mixtas colocaremos los agarres arriba y cruzaremos los brazos formando una X',
             'url_img' => 'https://depowerlifting.site/wp-content/uploads/2021/06/ejercicios-para-hombros-1024x683-1.jpeg']
        );
        DB::table('ejercicios')->insert(
            ['name' => 'Cruces en polea baja',
             'descripcion' => 'En las poleas mixtas colocaremos los agarres baja y cruzaremos los brazos formando una X',
             'url_img' => 'https://depowerlifting.site/wp-content/uploads/2021/06/ejercicios-para-hombros-1024x683-1.jpeg']
        );
        DB::table('ejercicios')->insert(
            ['name' => 'Extensión de cuadriceps ',
             'descripcion' => 'Eleveramos las piernas en la máquina de extensión de cuadriceps',
             'url_img' => 'https://depowerlifting.site/wp-content/uploads/2021/06/ejercicios-para-hombros-1024x683-1.jpeg']
        );

        DB::table('ejercicios')->insert(
            ['name' => 'Curl Femoral',
             'descripcion' => 'Eleveramos las piernas en la máquina de curl de femoral',
             'url_img' => 'https://depowerlifting.site/wp-content/uploads/2021/06/ejercicios-para-hombros-1024x683-1.jpeg']
        );

        DB::table('ejercicios')->insert(
            ['name' => 'Elevación de gemelos en máquina',
             'descripcion' => 'Nos pondremos de puntillas con el peso en los hombros en la máquina de elevación de gemelos',
             'url_img' => 'https://depowerlifting.site/wp-content/uploads/2021/06/ejercicios-para-hombros-1024x683-1.jpeg']
        );

        DB::table('ejercicios')->insert(
            ['name' => 'Abductor en máquina',
             'descripcion' => 'Cerraremos las piernas en abductor en máquina de manera controlada.',
             'url_img' => 'https://depowerlifting.site/wp-content/uploads/2021/06/ejercicios-para-hombros-1024x683-1.jpeg']
        );

        DB::table('ejercicios')->insert(
            ['name' => 'Press Militar con mancuernas sentado',
             'descripcion' => 'En un banco sentados con el respaldo a 90 grados elevaremos de manera vertical las mancuernas por encima de la cabeza.',
             'url_img' => 'https://depowerlifting.site/wp-content/uploads/2021/06/ejercicios-para-hombros-1024x683-1.jpeg']
        );

        DB::table('ejercicios')->insert(
            ['name' => 'Elevaciones laterales',
             'descripcion' => 'Eleveramos las mancuernas a los lados de nuestro cuerpo de manera controlada.',
             'url_img' => 'https://depowerlifting.site/wp-content/uploads/2021/06/ejercicios-para-hombros-1024x683-1.jpeg']
        );

    }
}
