@extends('home')
@section('content')
<h1>Trainer Zone</h1>
<!--Se mostrarán todos los entrenamientos que haya creado un entrenador!-->
<div class="container">

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