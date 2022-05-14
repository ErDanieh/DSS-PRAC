@extends('home')

@section('content')
<script src="../js/utils.js"> </script>

<div class="container min-vh-100 px-1 mb-5">

    <h1 class="mt-4">Pagina de explorar</h1>
    <div class="row justify-content-around">
        @foreach($entrenamientos as $entrenamiento)
        <div class="col-md-5 card mt-4 mx-4" style="padding: 0;">
            <img class="card-img-top" style="height: 15vw; object-fit: cover; width: auto;" src="{{$entrenamiento->url_img}}" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">{{$entrenamiento->name}}</h5>
                <p class="card-text">{{Str::limit($entrenamiento->descripcion, 50)}}</p>
                <a onclick="redirectToId({{$entrenamiento->id}})" class="btn btn-primary">Más información</a>
            </div>

        </div>
        @endforeach
    </div>
</div>
@endsection