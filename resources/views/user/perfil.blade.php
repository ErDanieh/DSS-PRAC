@extends('home')

@section('content')
<div style="width: 900px; margin: auto; margin-bottom: 35vh;">
    <h1>Mi perfil</h1>

    <div style="margin-top: 50px; display: flex; flex-direction: row; justify-content: space-between;">
        <img src="https://www.protibest.es/wp-content/uploads/2021/10/jacked-factory-cbum-phone-line.jpg" 
        style="height: 300px; width: 250px; object-fit:cover; border-radius: 10px;"
        />

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


</div>
@endsection