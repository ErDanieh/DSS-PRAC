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
            ['id_grupo_muscular' => 1,
             'name' => 'Pectoral mayor']
        );

        DB::table('musculos')->insert(
            ['id_grupo_muscular' => 1,
             'name' => 'Pectoral menor']
        );

        DB::table('musculos')->insert(
            ['id_grupo_muscular' => 2, 
             'name' => 'Deltoides anterior']
        );

        DB::table('musculos')->insert(
            ['id_grupo_muscular' => 2, 
             'name' => 'Deltoides medio']
        );

        DB::table('musculos')->insert(
            ['id_grupo_muscular' => 2, 
             'name' => 'Deltoides posterior']
        );

        DB::table('musculos')->insert(
            ['id_grupo_muscular' => 3, 
             'name' => 'Dorsal']
        );

        DB::table('musculos')->insert(
            ['id_grupo_muscular' => 3, 
             'name' => 'Lumbar']
        );

        DB::table('musculos')->insert(
            ['id_grupo_muscular' => 3, 
             'name' => 'Redondos']
        );

        DB::table('musculos')->insert(
            ['id_grupo_muscular' => 3, 
             'name' => 'Serrato']
        );

        DB::table('musculos')->insert(
            ['id_grupo_muscular' => 4, 
             'name' => 'Gluteos']
        );


        DB::table('musculos')->insert(
            ['id_grupo_muscular' => 5, 
             'name' => 'Trapecio superior']
        );

        DB::table('musculos')->insert(
            ['id_grupo_muscular' => 5, 
             'name' => 'Trapecio medio']
        );
        
        DB::table('musculos')->insert(
            ['id_grupo_muscular' => 6, 
             'name' => 'Recto abdominal']
        );

        DB::table('musculos')->insert(
            ['id_grupo_muscular' => 6, 
             'name' => 'Oblicuo']
        );

        DB::table('musculos')->insert(
            ['id_grupo_muscular' => 7, 
             'name' => 'Biceps']
        );

        DB::table('musculos')->insert(
            ['id_grupo_muscular' => 7, 
             'name' => 'Triceps']
        );

        DB::table('musculos')->insert(
            ['id_grupo_muscular' => 7, 
             'name' => 'Antebrazo']
        );

        DB::table('musculos')->insert(
            ['id_grupo_muscular' => 7, 
             'name' => 'Antebrazo']
        );

        DB::table('musculos')->insert(
            ['id_grupo_muscular' => 8, 
             'name' => 'Femoral']
        );

        DB::table('musculos')->insert(
            ['id_grupo_muscular' => 8, 
             'name' => 'Cuadriceps']
        );

        DB::table('musculos')->insert(
            ['id_grupo_muscular' => 8, 
             'name' => 'Gemelos']
        );

        DB::table('musculos')->insert(
            ['id_grupo_muscular' => 8, 
             'name' => 'Aductores']
        );

    }
}
