@extends('home')

@section('content')
<div>
    <h1>{{$entrenamiento->name}}</h1>
    <p>{{$entrenamiento->descripcion}}</p>

    <img src={{$entrenamiento->url_img}}>

    @foreach($entrenamiento->ejercicios as $ejercicio)
        <div>
            <h2>
                {{$ejercicio->name}}
            </h2>
        </div>
    @endforeach

    <button>Añadir a mis entrenamientos</button>

</div>
@endsection