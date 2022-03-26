<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User([
            'name' => 'Ander',
            'email' => 'ander@uafit.com',
            'password' => '12345',
            'is_trainer' =>'0',
            'is_admin' =>'0'
        ]);

        try {
            $user->save();
        } catch (\Exception $e) {
            echo $e->getMessage();
        }

        $user = new User([
            'name' => 'Juan',
            'email' => 'juan@uafit.com',
            'password' => 'caballo',
            'is_trainer' =>'0',
            'is_admin' =>'0'
        ]);

        try {
            $user->save();
        } catch (\Exception $e) {
            echo $e->getMessage();
        }


        $user = new User([
            'name' => 'daniel',
            'email' => 'daniel@uafit.com',
            'password' => '23456',  
            'is_trainer' =>'0',
            'is_admin' =>'0'
        ]);

        try {
            $user->save();
        } catch (\Exception $e) {
            echo $e->getMessage();
        }

        $user = new User([
            'name' => 'Laura',
            'email' => 'laura@uafit.com',
            'password' => '34567',
            'is_trainer' =>'0',
            'is_admin' =>'0'
        ]);

        try {
            $user->save();
        } catch (\Exception $e) {
            echo $e->getMessage();
        }
    }
}
