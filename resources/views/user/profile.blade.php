@extends('layouts.admin')


@section('content')


<h1>Este perfil es de {{$user->name}}</h1>
<h3>Correo electronico: {{$user->email}}</h3>
@if($user->is_admin == '1')
<span class="text-warning">Este usuario es un ADMINISTRADOR</span>
@endif
@if($user->is_trainer == '1')
<span class="text-primary">Este usuario es un ENTRENADOR</span>
@endif




@include('common.alert')
<div class="m-3 justify-content-center text-dark">
    <form action="{{ url('/admin/usuarios',$user->id)}}" method="POST">
        @csrf
        {{ method_field('PUT') }}
        <div class="mb-3">
            <label for="name">Nombre de usuario nuevo:</label>
            <input type="text" name="name" id="name">

            <label for="email">Correo electrónico nuevo:</label>
            <textarea type="text" name="email" id="email"></textarea>

            <label for="password">Contraseña nueva:</label>
            <textarea type="password" name="password" id="password"></textarea>
        </div>
        <div class="text-right">
            <button type="submit">Enviar</button>
        </div>
    </form>
</div>


@endsection