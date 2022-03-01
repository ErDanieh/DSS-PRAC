<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class MusculosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('musculos')->delete();


        DB::table('musculos')->insert(
            [
                'id_grupo_muscular' => 1,
                'id' => 1,
                'name' => 'Pectoral mayor'
            ]
        );

        DB::table('musculos')->insert(
            [
                'id_grupo_muscular' => 1,
                'id' => 2,
                'name' => 'Pectoral menor'
            ]
        );

        DB::table('musculos')->insert(
            [
                'id_grupo_muscular' => 2,
                'id' => 3,
                'name' => 'Deltoides anterior'
            ]
        );

        DB::table('musculos')->insert(
            [
                'id_grupo_muscular' => 2,
                'id' => 4,
                'name' => 'Deltoides medio'
            ]
        );


        DB::table('musculos')->insert(
            [
                'id_grupo_muscular' => 3,
                'id' => 5,
                'name' => 'Dorsal'
            ]
        );

        DB::table('musculos')->insert(
            [
                'id_grupo_muscular' => 3,
                'id' => 6,
                'name' => 'Lumbar'
            ]
        );

        DB::table('musculos')->insert(
            [
                'id_grupo_muscular' => 3,
                'id' => 7,
                'name' => 'Redondos'
            ]
        );

        DB::table('musculos')->insert(
            [
                'id_grupo_muscular' => 3,
                'id' => 8,
                'name' => 'Serrato'
            ]
        );

        DB::table('musculos')->insert(
            [
                'id_grupo_muscular' => 4,
                'id' => 9,
                'name' => 'Gluteos'
            ]
        );


        DB::table('musculos')->insert(
            [
                'id_grupo_muscular' => 5,
                'id' => 10,
                'name' => 'Trapecio superior'
            ]
        );

        DB::table('musculos')->insert(
            [
                'id_grupo_muscular' => 5,
                'id' => 11,
                'name' => 'Trapecio medio'
            ]
        );

        DB::table('musculos')->insert(
            [
                'id_grupo_muscular' => 6,
                'id' => 12,
                'name' => 'Recto abdominal'
            ]
        );

        DB::table('musculos')->insert(
            [
                'id_grupo_muscular' => 6,
                'id' => 13,
                'name' => 'Oblicuo'
            ]
        );

        DB::table('musculos')->insert(
            [
                'id_grupo_muscular' => 7,
                'id' => 14,
                'name' => 'Biceps'
            ]
        );

        DB::table('musculos')->insert(
            [
                'id_grupo_muscular' => 7,
                'id' => 15,
                'name' => 'Triceps'
            ]
        );

        DB::table('musculos')->insert(
            [
                'id_grupo_muscular' => 7,
                'id' => 16,
                'name' => 'Antebrazo'
            ]
        );

        DB::table('musculos')->insert(
            [
                'id_grupo_muscular' => 7,
                'id' => 17,
                'name' => 'Antebrazo'
            ]
        );

        DB::table('musculos')->insert(
            [
                'id_grupo_muscular' => 8,
                'id' => 18,
                'name' => 'Femoral'
            ]
        );

        DB::table('musculos')->insert(
            [
                'id_grupo_muscular' => 8,
                'id' => 19,
                'name' => 'Cuadriceps'
            ]
        );

        DB::table('musculos')->insert(
            [
                'id_grupo_muscular' => 8,
                'id' => 20,
                'name' => 'Gemelos'
            ]
        );

        DB::table('musculos')->insert(
            [
                'id_grupo_muscular' => 8,
                'id' => 21,
                'name' => 'Aductores'
            ]
        );


        DB::table('musculos')->insert(
            [
                'id_grupo_muscular' => 2,
                'id' => 22,
                'name' => 'Deltoides posterior'
            ]
        );
    }
}
