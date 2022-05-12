<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $hashedPassword = Hash::make('12345');
        $user = new User([
            'name' => 'Ander',
            'email' => 'ander@uafit.com',
            'password' => $hashedPassword,
            'is_trainer' =>'0',
            'is_admin' =>'1'
        ]);

        try {
            $user->save();
        } catch (\Exception $e) {
            echo $e->getMessage();
        }

        $hashedPassword = Hash::make('caballo');
        $user = new User([
            'name' => 'Juan',
            'email' => 'juan@uafit.com',
            'password' => $hashedPassword,
            'is_trainer' =>'0',
            'is_admin' =>'0'
        ]);

        try {
            $user->save();
        } catch (\Exception $e) {
            echo $e->getMessage();
        }


        $hashedPassword = Hash::make('23456');
        $user = new User([
            'name' => 'daniel',
            'email' => 'daniel@uafit.com',
            'password' => $hashedPassword,
            'is_trainer' =>'1',
            'is_admin' =>'0'
        ]);

        try {
            $user->save();
        } catch (\Exception $e) {
            echo $e->getMessage();
        }

        $hashedPassword = Hash::make('34567');
        $user = new User([
            'name' => 'Laura',
            'email' => 'laura@uafit.com',
            'password' => $hashedPassword,
            'is_trainer' =>'1',
            'is_admin' =>'1'
        ]);

        try {
            $user->save();
        } catch (\Exception $e) {
            echo $e->getMessage();
        }
    }
}
