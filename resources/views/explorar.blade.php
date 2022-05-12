@extends('home')

@section('content')
    <div style="width: 900px; margin: auto;">
        <h1>Pagina de explorar</h1>

        @foreach($entrenamientos as $entrenamiento)
            <div>{{$entrenamiento->name}}</div>
        @endforeach
    </div>
@endsection