@extends('home')
@section('content')
<h1>Trainer Zone</h1>
<!--Se mostrarán todos los entrenamientos que haya creado un entrenador!-->
<div class="container">

    <div class="" style="margin: 50px auto;">
        <h2>Añadir entrenamiento</h2>
        <form action="{{ url('/trainer')}}" method="POST">
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
            <button class="btn btn-primary" type="submit" style="margin-top: 20px; font-size: 1.2rem;">
                Añadir entrenamiento
            </button>
        </form>
        <a href="/trainer/ejercicioCreation">
            <button class="btn btn-primary" type="submit" style="margin-top: 20px; font-size: 1.2rem;" >
                Crear un nuevo ejercicio
            </button>
        </a>

    </div>
    <div class="row">
        @foreach($entrenamientos as $entrenamiento)
        @if($entrenamiento->creator_id == auth::user()->id)
        <div class="col card" style="margin: 10px; max-width: 46%;">
            <img class="card-img-top" src="{{$entrenamiento->url_img}}" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">{{$entrenamiento->name}}</h5>
                <p class="card-text">{{Str::limit($entrenamiento->descripcion, 50)}}</p>
                <a href="/entrenamientos/{{$entrenamiento->id}}" class="btn btn-primary">Más información</a>
            </div>

        </div>
        @endif
        @endforeach
    </div>

</div>

@endsection