@extends('layouts.admin')


@section('content')
<script src="../js/users.js"> </script>
<script src="../js/utils.js"> </script>
<div>
    <h1>Ejercicios</h1>

    {{-- Buscador --}}
    <label for="search"> Buscar por nombre. </label>
    <div class="">
        <input class="form-control" name="search" type="text" id="search" autofocus></input>
        <button type="submit" class="btn btn-primary" onclick="redirectSearch()">Buscar</button>
    </div>

    <div class="" style="margin: 50px auto;">
        <h2>Añadir ejercicio</h2>
        <form action="{{ url('/admin/ejercicios') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Ejercicio</label>
                <input class="form-control" placeholder="Nombre del ejercicio..." required type="text" name="name" id="name">
            </div>
            <div class="form-group">
                <label for="descripcion">Descripción del ejercicio</label>
                <input class="form-control" placeholder="Descripción del ejercicio..." required type="text" name="descripcion" id="descripcion">
            </div>
            <div class="form-group">
                <label for="urlImagen">Imagen del ejercicio</label>
                <input class="form-control" placeholder="URL de la imagen" required type="text" name="urlImagen" id="urlImagen">
            </div>
            <button class="btn btn-primary" type="submit" style="margin-top: 20px;">Añadir Musculo</button>
        </form>
    </div>

    @include('common.alert')


    <h2>Listado de ejercicios</h2>
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Grupo Muscular</th>
                    <th scope="col">URL imagen</th>
                    <th scope="col">Editar</th>
                    <th scope="col">Eliminar</th>
                </tr>
            </thead>
            <tbody>
                @foreach($ejercicios as $ejercicio)
                <tr>
                    <td>{{$ejercicio->name }}</td>
                    <td>{{$ejercicio->descripcion }}</td>
                    <td type="url">{{$ejercicio->url_img }}</td>
                    <td>
                        <button class="btn btn-success" type="submit" onclick="showProfile({{$ejercicio->id}})">Editar</button>
                    </td>
                    <td>
                        <form action="{{url('/admin/ejercicios', $ejercicio->id)}}" class="mr-4" method="POST">
                            @csrf
                            {{ method_field('DELETE') }}
                            <button class="btn btn-danger m-3" style="width: 100%;" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
    </div>

</div>
@endsection
