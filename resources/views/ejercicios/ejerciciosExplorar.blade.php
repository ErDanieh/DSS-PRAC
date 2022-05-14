@extends('home')


@section('content')
<script src="../js/utils.js"> </script>

<div class="container">
    <h1>Página de explorar ejercicios</h1>
    @foreach($ejercicios->chunk(2) as $ejerciciosChunk)
    <div class="row">
        @foreach($ejerciciosChunk as $ejercicio)
        <div class="col card" style="margin: 10px; max-width: 46%;">
            <img class="card-img-top" style="height: 15vw; object-fit: cover; width: auto;" src="{{$ejercicio->url_img}}" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">{{$ejercicio->name}}</h5>
                <p class="card-text">{{Str::limit($ejercicio->descripcion, 50)}}</p>
                <a onclick="redirectToId({{$ejercicio->id}})" class="btn btn-primary">Más información</a>
            </div>

        </div>
        @endforeach
    </div>
    @endforeach
</div>
@endsection