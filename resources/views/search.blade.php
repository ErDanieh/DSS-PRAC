@extends('home')

@section('content')


    <div class="container min-vh-100">
        <h1>Pagina de busqueda</h1>
        @if($data['entrenamientos']->isEmpty() && $data['ejercicios']->isEmpty() && $data['entrenadores']->isEmpty())

            <div class="container">
                <span>Lo siento... No hemos encontrado ningun resultado para tu busqueda.</span>
            </div>

        @endif

        @if(!$data['entrenamientos']->isEmpty())
            <h2>Entrenamientos: </h2>
            @foreach($data['entrenamientos']->chunk(2) as $entrenamientosChunk)
                <div class="row">
                    @foreach($entrenamientosChunk as $entrenamiento)
                    <div class="col">
                        <div class="card" style="margin-bottom: 10px;">
                            <img class="card-img-left" style="height: 15vw; width: auto; object-fit: cover;" src="{{$entrenamiento->url_img}}">
                            <div class="card-body">
                                <h5 class="card-title">{{$entrenamiento->name}}</h5>
                                <p class="card-text">
                                    {{$entrenamiento->descripcion}}
                                </p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            @endforeach
        @endif

        @if(!$data['ejercicios']->isEmpty())
            <h2>Ejercicios: </h2>
            @foreach($data['ejercicios']->chunk(2) as $entrenamientosChunk)
                <div class="row">
                    @foreach($entrenamientosChunk as $ejercicio)
                    <div class="col">
                        <div class="card" style="margin-bottom: 10px;" >
                            <img class="card-img-left" style="height: 15vw; width: auto; object-fit: cover;" src="{{$ejercicio->url_img}}">
                            <div class="card-body min-vh-10">
                                <h5 class="card-title">{{$ejercicio->name}}</h5>
                                <p class="card-text">
                                    {{$ejercicio->descripcion}}
                                </p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            @endforeach
        @endif

        @if(!$data['entrenadores']->isEmpty())
            <h2>Entrenadores: </h2>
            @foreach($data['entrenadores']->chunk(2) as $entrenadoresChunk)
                <div class="row">
                    @foreach($entrenadoresChunk as $entrenador)
                    <div class="col">
                        <div class="card" style="margin-bottom: 10px;">
                            <img class="card-img-left" style="height: 15vw; width: auto; object-fit: cover;" src="{{$entrenador->picture}}">
                            <div class="card-body">
                                <h5 class="card-title">{{$entrenador->name}}</h5>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            @endforeach
        @endif
    </div>

@endsection