<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class GrupoMuscularsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('grupo_musculars')->delete();


        DB::table('grupo_musculars')->insert(
            ['name' => 'Pantorrillas',
            'descripcion' => 'Riquisimas bby']
        );
    }
}
