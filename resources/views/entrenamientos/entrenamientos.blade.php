@extends('layouts.admin')

@section('content')
<script src="js/entrenamientos.js"></script>

<div>
    <h1>Esta es la lista de Entrenamientos</h1>

    <div class="col py-3" >
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Nombre</th>
                </tr>
            </thead>
            <tbody>
                @foreach($entrenamientos as $entrenamiento)
                <tr style="cursor: pointer;" class="card bg-dark mb-1 text-white">
                    <td class="text-primary" onclick="redirigirDetalleEntrenamiento({{$entrenamiento->id}})">{{$entrenamiento->name }}</td>
                    <td>
                        <form action="{{url('/entrenamientos', $entrenamiento->id)}}" class="mr-4" method="POST">
                            @csrf
                            {{ method_field('DELETE') }}
                            <button class="btn btn-danger m-3" style="width: 100%;" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    @include('common.alert')
    <div class="m-3 justify-content-center text-dark">
        <form action="{{ url('/entrenamientos')}}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name">Nombre entrenamiento</label>
                <input required type="text" name="name" id="name">

                <label for="descripcion">Descripción del entrenamiento</label>
                <textarea required type="text" name="descripcion" id="descripcion"></textarea>

                <label for="urlImagen">Imagen del entrenamiento</label>
                <textarea required type="text" name="urlImagen" id="urlImagen"></textarea>
            </div>
            <div class="text-right">
                <button type="submit">Enviar</button>
            </div>
        </form>
    </div>


</div>
@endsection

