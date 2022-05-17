@extends('home')

@section('content')
<div style="width: 900px; margin: auto; margin-bottom: 35vh;">
    <h1>Mi perfil</h1>

    <div style="margin-top: 50px; display: flex; flex-direction: row; justify-content: space-between;">
        <img src={{Auth::user()->picture}} style="height: 300px; width: 250px; object-fit:cover; border-radius: 10px;" />

        <div style="display: flex; flex-direction: column; margin-right: min(100px); justify-content: center;">
            <label>Email:</label>
            <h3>{{Auth::user()->email}}</h3>
            <label>Nombre:</label>
            <h3>{{Auth::user()->name}}</h3>
            <label>Te uniste el:</label>
            <h3>{{Auth::user()->created_at}}</h3>
        </div>

    </div>

    <h2 style="margin-top: 50px;">Mis entrenamientos:</h2>
    @foreach($misEntrenamientos as $entrenamineto)
    <div>{{$entrenamineto->name}}</div>
    @endforeach

    @include('common.alert')
    <form action="{{url('/perfil')}}" method="POST">
        @csrf
        {{ method_field('PUT') }}
        <div class="form-group">
            <label for="name">Url de la imagen</label>
            <input class="form-control" name="picture" id="picture">
        </div>
        <button class="btn btn-primary" type="submit" style="margin-top: 20px; font-size: 1.2rem;">
            Cambiar
        </button>
    </form>

    <div>
        <form action="{{url('/perfil')}}" class="mr-4" method="POST">
            @csrf
            {{ method_field('DELETE') }}
            <button class="btn btn-danger m-3" type="submit">Eliminar mi cuenta</button>
        </form>
    </div>


</div>
@endsection