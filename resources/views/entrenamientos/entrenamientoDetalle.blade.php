@extends('layouts.admin')


@section('content')

<h1>Este perfil es de {{$entrenamiento->name}}</h1>
<h3>{{$entrenamiento->descripcion}}</h3>
@include('common.alert')
<div class="m-3 justify-content-center text-dark">
    <form action="{{ url('/admin/entrenamientos',$entrenamiento->id)}}" method="POST">
        @csrf
        {{ method_field('PUT') }}
        <div class="mb-3">
            <label for="name">Nombre entrenamiento</label>
            <input type="text" name="name" id="name">

            <label for="descripcion">Descripción del entrenamiento</label>
            <textarea type="text" name="descripcion" id="descripcion"></textarea>

            <label for="urlImagen">Imagen del entrenamiento</label>
            <textarea type="text" name="urlImagen" id="urlImagen"></textarea>
        </div>
        <div class="text-right">
            <button type="submit">Enviar</button>
        </div>
    </form>
</div>

@endsection