@extends('layouts.admin')

@section('content')
<script src="../js/entrenamientos.js"></script>

<div>
    <h1>Entrenamientos</h1>
    <script src="../js/users.js"> </script>
    <div class="" style="margin: 50px auto;">
        <h2>Añadir entrenamiento</h2>
        <form action="{{ url('/admin/entrenamientos')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Nombre entrenamiento</label>
                <input class="form-control" placeholder="Nombre del entrenamiento..." required type="text" name="name" id="name">
            </div>

            <div class="form-group">
                <label for="descripcion">Descripción del entrenamiento</label>
                <input class="form-control" placeholder="Descripción del entrenamiento..." required type="text" name="descripcion" id="descripcion">
            </div>

            <div class="form-group">
                <label for="urlImagen">Imagen del entrenamiento</label>
                <input class="form-control" placeholder="URL de la imagen..." required type="text" name="urlImagen" id="urlImagen">
            </div>
            <button class="btn btn-primary" type="submit" style="margin-top: 20px;">
                Añadir aentrenamiento 
            </button>
        </form>

    </div>

    @include('common.alert')
    <h2>Listado de Entrenamientos</h2>

    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Descripción</th>
                    <th scope="col">URL Imagen</th>
                    <th scope="col">Editar</th>
                    <th scope="col">Eliminar</th>
                </tr>
            </thead>
            <tbody>
                @foreach($entrenamientos as $entrenamiento)
                <tr>
                    <td>{{$entrenamiento->name }}</td>
                    <td>{{$entrenamiento->descripcion }}</td>
                    <td>{{$entrenamiento->url_img }}</td>
                    <td>
                        <button class="btn btn-success" type="submit" onclick="showProfile({{$entrenamiento->id}})">Editar</button>
                    </td>
                    <td>
                        <form action="{{url('/admin/entrenamientos', $entrenamiento->id)}}" method="POST">
                            @csrf
                            {{ method_field('DELETE') }}
                            <button class="btn btn-danger" type="submit">Eliminar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>
@endsection