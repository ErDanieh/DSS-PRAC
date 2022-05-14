@extends('home')

@section('content')
<script src="../js/utils.js"> </script>

<div class="container">
    <h1>Pagina de Entrenadores</h1>

    <div class="row justify-content-around">
        @foreach($entrenadores as $trainer)
        <div class="col-md-3 card mt-4 mx-4" style="padding: 0;">
            <img class="card-img-top" style="height: 15vw; object-fit: cover; width: auto; min-height: 15vh" src="{{$trainer->picture}}" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">{{$trainer->name}}</h5>
                <p class="card-text">{{Str::limit($trainer->email, 50)}}</p>
                @if(!Auth::guest())
                <a onclick="redirectToId({{$trainer->id}})" class="btn btn-primary">Más información</a>
                @else
                <a href='/login'>
                    <button class="btn btn-primary">Más información</button>
                </a>
                @endif
            </div>

        </div>
        @endforeach
    </div>

</div>
@endsection