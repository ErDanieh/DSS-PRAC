@extends('layouts.admin')


@section('content')
<script src="../js/users.js"> </script>

<div>
    <h1>Editar entrenamiento</h1>
    <h2>Entrenamiento: {{$entrenamiento->name}}</h2>
    <h2>Descripción: {{$entrenamiento->descripcion}}</h2>


    @include('common.alert')
    <div class="" style="margin-top: 20px;">
        <form action="{{ url('/admin/entrenamientos',$entrenamiento->id)}}" method="POST">
            @csrf
            {{ method_field('PUT') }}
            <div class="form-group">
                <label for="name">Nombre entrenamiento</label>
                <input class="form-control" name="name" id="name">
            </div>
            
            <div class="form-group">
                <label for="descripcion">Descripción del entrenamiento</label>
                <textarea class="form-control" name="descripcion" id="descripcion"></textarea>
            </div>

            <div class="form-group">
                <label for="urlImagen">Imagen del entrenamiento</label>
                <input class="form-control" name="urlImagen" id="urlImagen"></textarea>
            </div>

            <button class="btn btn-primary" type="submit" style="margin-top: 20px;">Editar entrenamiento</button>
        </form>
    </div>

    <!--TODO: Listar ejercicios el entrenamiento. -->
</div>
@endsection