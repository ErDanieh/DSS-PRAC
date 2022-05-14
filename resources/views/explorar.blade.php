@extends('home')

@section('content')
<script src="../js/utils.js"> </script>

<div class="container">
    <h1>Pagina de explorar</h1>
    @foreach($entrenamientos->chunk(2) as $subentrenamiento)
    <div class="row">
        @foreach($subentrenamiento as $entrenamiento)
        <div class="col card" style="margin: 10px; max-width: 46%;">
            <img class="card-img-top" style="height: 15vw; object-fit: cover; width: auto;" src="{{$entrenamiento->url_img}}" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">{{$entrenamiento->name}}</h5>
                <p class="card-text">{{Str::limit($entrenamiento->descripcion, 50)}}</p>
                <a onclick="redirectToId({{$entrenamiento->id}})" class="btn btn-primary">Más información</a>
            </div>

        </div>
        @endforeach
    </div>
    @endforeach
</div>
@endsection