<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

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
            


        );
    }
}
