<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\User;


class UserController extends Controller
{
    /**
     * Lista todos los usuarios
     *  */
    function getUsers()
    {
        return view('user.users')->with('users', User::simplePaginate(10));
    }

    /**Busca usuarios por nombre o email
     * 
     */
    function searchUsers(Request $req)
    {
        return view('user.users')->with('users', User::where('name', 'LIKE', "%{$req->input('search')}%")
            ->orWhere('email', 'LIKE', "%{$req->input('search')}%")
            ->simplePaginate(10));
    }

    /**
     * Devuelve la vista del perfil del usuario
     */
    function getProfile($id)
    {
        return view('user.profile')->with('user', User::findOrFail($id));
    }

    function deleteUser($id)
    {
        $usuario = User::findOrFail($id);
        if ($usuario != null) {
            $usuario->delete();
            return redirect()->back()->with('exito', 'Usuario eliminado con exito');
        }
        return redirect()->back()->with('error', 'Error no existe el usuario');


        return redirect()->back();
    }

    function editProfile(Request $req, $id)
    {

        $UsuarioEditar = User::findOrFail($id);
        if ($UsuarioEditar != null) {


            if ($req->input('name') != null) {
                $UsuarioEditar->name = $req->input('name');
            }
            if ($req->input('email') != null) {
                $UsuarioEditar->email = $req->input('email');
            }
            if ($req->input('password') != null) {
                $UsuarioEditar->password = bcrypt($req->input('password'));
            }
            $UsuarioEditar->save();
            return redirect()->back()->with('exito', 'Perfil editado');
        }
        return redirect()->back()->with('error', 'Error el perfil no existe');
    }
}
