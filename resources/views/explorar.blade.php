@extends('home')

@section('content')
<script src="../js/utils.js"> </script>
    <div style="width: 900px; margin: auto;">
        <h1>Pagina de explorar</h1>

        <div class="container">
            @foreach($entrenamientos->chunk(2) as $subentrenamiento)
            <div class="row">
                @foreach($subentrenamiento as $entrenamiento)
                    <div class="col card" style="margin: 10px; max-width: 46%;">
                        <img class="card-img-top" src="{{$entrenamiento->url_img}}" alt="Card image cap" style="height: 200px; width: 350px; object-fit:cover; border-radius: 10px;">
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
    </div>
@endsection