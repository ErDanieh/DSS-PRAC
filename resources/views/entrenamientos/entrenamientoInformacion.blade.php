@extends('home')

@section('content')
<div>
    <h1>{{$entrenamiento->name}}</h1>
    <p>{{$entrenamiento->descripcion}}</p>

    <img src={{$entrenamiento->url_img}}>


    @if(!auth::guest() && auth::user()->id == $entrenamiento->creator_id)
    @include('common.alert')
    <div class="" style="margin-top: 20px;">
        <form action="{{ url('/trainer/entrenamientos',$entrenamiento->id)}}" method="POST">
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
        <form action="{{url('/trainer/entrenamientos', $entrenamiento->id)}}" method="POST">
            @csrf
            {{ method_field('DELETE') }}
            <button class="btn btn-danger" type="submit">Eliminar</button>
        </form>
    </div>

    <h2>Añadir un ejercicio</h2>
    <form action="{{route('entrenamiento.addEjercicio', $entrenamiento->id)}}" method="POST">
        @csrf
        <select name="grupo" class="form-select">
            {{ App\Http\Controllers\TrainerController::seleccionableEjercicios();}}
        </select>
        <button class="btn btn-primary" type="submit" style="margin-top: 20px;">Añadir Ejercicio</button>
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



    <button>Añadir a mis entrenamientos</button>

</div>
@endsection