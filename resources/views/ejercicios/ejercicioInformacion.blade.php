@extends('home')

@section('content')
    <h1>{{$ejercicio->name}}</h1>
    <p>{{$ejercicio->descripcion}}</p>
    <img src={{$ejercicio->url_img}}>


    <h2>Puedes encontrar este ejercicio en:</h2>
    <div class="container">
    @foreach($ejercicio->entrenamientos->chunk(2) as $entrenamientoChunk)
        <div class="row">
        @foreach($entrenamientoChunk as $entrenamiento)
            <div class="col">
                <h4>{{$entrenamiento->name}}</h4>
                <p>{{Str::limit($entrenamiento->descripcion, 50)}}</p>
            </div>
        @endforeach
        </div>
    @endforeach
    </div>

    
@endsection