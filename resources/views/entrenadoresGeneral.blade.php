@extends('home')

@section('content')
<script src="../js/utils.js"> </script>

<div class="container">
    <h1>Pagina de Entrenadores</h1>
    @foreach($entrenadores->chunk(4) as $trainers)
    <div class="row">
        @foreach($trainers as $trainer)
        <div class="col card" style="margin: 10px; max-width: 46%;">
            <img class="card-img-top" style="height: 15vw; object-fit: cover; width: auto;" src="{{$trainer->picture}}" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">{{$trainer->name}}</h5>
                <p class="card-text">{{Str::limit($trainer->email, 50)}}</p>
                <a onclick="redirectToId({{$trainer->id}})" class="btn btn-primary">Más información</a>
            </div>

        </div>
        @endforeach
    </div>
    @endforeach
</div>
@endsection