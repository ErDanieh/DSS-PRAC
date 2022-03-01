<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class EjercicioGrupoMuscularsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ejerciciogrupomuscular')->delete();


        DB::table('ejerciciogrupomuscular')->insert(
            ['id_ejercicio' => 1,
             'id_grupo_muscular' => 1
             ]
        );
    }
}
