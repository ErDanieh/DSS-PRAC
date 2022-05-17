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

        $hashedPassword = Hash::make('123123412341234');
        $user = new User([
            'name' => 'Antonio',
            'email' => 'antonio@uafit.com',
            'password' => $hashedPassword,
            'is_trainer' =>'0',
            'is_admin' =>'10'
        ]);

        try {
            $user->save();
        } catch (\Exception $e) {
            echo $e->getMessage();
        }

        $hashedPassword = Hash::make('askdlfjlaskdf');
        $user = new User([
            'name' => 'Chris Bumsted',
            'email' => 'roncero@uafit.com',
            'password' => $hashedPassword,
            'is_trainer' =>'1',
            'is_admin' =>'0',
            'picture' => 'https://lifestyle.fit/app/uploads-lifestyle.fit/2022/01/Nuevo-proyecto-4.jpg?x=480&y=375&quality=40'
        ]);

        try {
            $user->save();
        } catch (\Exception $e) {
            echo $e->getMessage();
        }

        $hashedPassword = Hash::make('loquillo19');
        $user = new User([
            'name' => 'Luis Fernandez',
            'email' => 'loquillo19@uafit.com',
            'password' => $hashedPassword,
            'is_trainer' =>'0',
            'is_admin' =>'0'
        ]);

        try {
            $user->save();
        } catch (\Exception $e) {
            echo $e->getMessage();
        }

        $hashedPassword = Hash::make('34567');
        $user = new User([
            'name' => 'Tony Stark',
            'email' => 'starkIndy@indy.com',
            'password' => $hashedPassword,
            'is_trainer' =>'1',
            'is_admin' =>'0',
            'picture' => 'https://www.cinemascomics.com/wp-content/uploads/2019/01/desvelan-rescatara-tony-stark-vengadores-endgame.jpg'
        ]);

        try {
            $user->save();
        } catch (\Exception $e) {
            echo $e->getMessage();
        }

        $hashedPassword = Hash::make('asdjklfjkasdfhjklas');
        $user = new User([
            'name' => 'Ronnie Coleman',
            'email' => 'sanpe@uafit.com',
            'password' => $hashedPassword,
            'is_trainer' =>'1',
            'is_admin' =>'0',
            'picture' => 'https://m.media-amazon.com/images/I/81A+Gt39AqL._SS500_.jpg'
        ]);

        try {
            $user->save();
        } catch (\Exception $e) {
            echo $e->getMessage();
        }

        $hashedPassword = Hash::make('asdjklfjkasdfhjklas');
        $user = new User([
            'name' => 'Nick Walker',
            'email' => 'Walker@uafit.com',
            'password' => $hashedPassword,
            'is_trainer' =>'1',
            'is_admin' =>'0',
            'picture' => 'https://i.ytimg.com/vi/zFkT4BLmAUw/hqdefault.jpg'
        ]);

        try {
            $user->save();
        } catch (\Exception $e) {
            echo $e->getMessage();
        }



    }
}
