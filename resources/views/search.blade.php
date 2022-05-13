@extends('home')

@section('content')
    <h1>Pagina de busqueda</h1>


    <div class="container">
        <h2>Entrenamientos: </h2>

        @foreach($data['entrenamientos']->chunk(2) as $entrenamientosChunk)
            <div class="row">
                @foreach($entrenamientosChunk as $entrenamiento)
                <div class="col">
                    <h3>{{$entrenamiento->name}}</h3>
                </div>
                @endforeach
            </div>
        @endforeach

        <h2>Ejercicios: </h2>
        @foreach($data['ejercicios']->chunk(2) as $entrenamientosChunk)
            <div class="row">
                @foreach($entrenamientosChunk as $ejercicio)
                <div class="col">
                    <h3>{{$ejercicio->name}}</h3>
                </div>
                @endforeach
            </div>
        @endforeach

        <h2>Entrenadores: </h2>
        @foreach($data['entrenadores']->chunk(2) as $entrenadoresChunk)
            <div class="row">
                @foreach($entrenadoresChunk as $entrenador)
                <div class="col">
                    <h3>{{$entrenador->name}}</h3>
                </div>
                @endforeach
            </div>
        @endforeach
    </div>

@endsection