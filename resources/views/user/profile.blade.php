@extends('layouts.admin')


@section('content')

<div>
    <h1>Editar usuario.</h1>
    <h3>Nombre: {{$user->name}}</h3>
    <h3>Email: {{$user->email}}</h3>
    <h3>Rol administrador: {{$user->is_admin}}</h3>
    <h3>Rol entrenador: {{$user->is_trainer}}</h3>

    @include('common.alert')

    <div class="" style="margin-top: 20px;">
        <form action="{{ url('/admin/usuarios',$user->id)}}" method="POST">
            @csrf
            {{ method_field('PUT') }}
            <div class="form-group">
                <label for="name">Nuevo nombre de usuario</label>
                <input class="form-control" type="text" name="name" id="name">
            </div>
        
            <div class="form-group">
                <label for="email">Nuevo email</label>
                <input class="form-control" type="email" name="email" id="email"></textarea>
            </div>

            <div class="form-group">
                <label for="password">Nueva contraseña</label>
                <input class="form-control" type="password" name="password" id="password"></textarea>
            </div>

            <button class="btn btn-primary" type="submit" style="margin-top: 20px;">Editar usuario</button>
        </form>
    </div>
</div>
@endsection