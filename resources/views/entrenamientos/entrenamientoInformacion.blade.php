@extends('home')

@section('content')
<div class="container">
    <h1 class="display-1">{{$entrenamiento->name}}</h1>

    <div class="row">

        <img src="{{$entrenamiento->url_img}}" class="col-md-9" style="object-fit: cover;" />

        <div class="container col-md-3">

            @if(!auth::guest() && auth::user()->id == $entrenamiento->creator_id)
            @include('common.alert')
            <form action="{{ url('/trainer/entrenamientos',$entrenamiento->id)}}" method="POST" class="form-group">
                <h2>Modificar ejercicio</h2>

                @csrf
                {{ method_field('PUT') }}
                <div class="row">
                    <label for="name">Nombre entrenamiento</label>
                    <input name="name" id="name" value="{{$entrenamiento->name}}" class="form-control">
                </div>

                <div class="row">
                    <label for="descripcion">Descripción del entrenamiento</label>
                    <textarea name="descripcion" id="descripcion" class="form-control">{{$entrenamiento->descripcion}}</textarea>
                </div>

                <div class="row">
                    <label for="urlImagen">Imagen del entrenamiento</label>
                    <input name="urlImagen" id="urlImagen" class="form-control" value="{{$entrenamiento->url_img}}" />
                </div>

                <div class="row mt-4">
                    <button type="submit" class="mb-3 btn btn-warning">Editar entrenamiento</button>
                </div>
            </form>
            
            <form action="{{url('/trainer/entrenamientos', $entrenamiento->id)}}" method="POST" class="col-md-12 mt-3">
                @csrf
                {{ method_field('DELETE') }}
                <button type="submit" class="btn btn-danger">Eliminar</button>
            </form>
        </div>

    </div>

    <h2>Añadir un ejercicio</h2>
    <form action="{{route('entrenamiento.addEjercicio', $entrenamiento->id)}}" method="POST">
        @csrf
        <select name="grupo">
            {{ App\Http\Controllers\TrainerController::seleccionableEjercicios();}}
        </select>
        <button type="submit">Añadir Ejercicio</button>
    </form>

    <h2>Ejercicios del entrenamiento</h2>
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Descripción</th>
                    <th scope="col">Eliminar</th>
                </tr>
            </thead>
            <tbody>
                @foreach($entrenamiento->ejercicios as $ejercicio)
                <tr>
                    <td>{{$ejercicio->name }}</td>
                    <td>{{$ejercicio->descripcion }}</td>
                    <td>
                        <form action="{{route('entrenamiento.disociateEjercicio', ['id' =>  $entrenamiento->id , 'idEjercicio' =>  $ejercicio->id ])}}" method="POST">
                            @csrf
                            {{ method_field('POST') }}
                            <button class="btn btn-danger" type="submit">Quitar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>


    @endif

    @foreach($entrenamiento->ejercicios as $ejercicio)
    <div>
        <h2>
            {{$ejercicio->name}}
        </h2>
    </div>
    @endforeach


    <form action="{{url('/entrenamientos', $entrenamiento->id)}}" method="POST">
        @csrf
        {{ method_field('POST') }}
        <button type="submit">Seguir Entrenamiento</button>
    </form>

    <form action="{{url('/entrenamientos', $entrenamiento->id)}}" method="POST">
        @csrf
        {{ method_field('PUT') }}
        <button type="submit">Dejar de seguir Entrenamiento</button>
    </form>

</div>
@endsection