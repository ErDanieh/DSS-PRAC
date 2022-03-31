@extends('layouts.admin')




@section('tabla-contenido')
<!--Para cada usuario se mostrará el nombre y el correo-->
@foreach($ejercicios as $ejercicio)
<tr style="cursor: pointer;" class="card bg-dark mb-1 text-white">
    <td class="text-primary">{{$ejercicio->name }}</td> 
</tr>
@endforeach
@endsection

@section('content')
@include('common.alert')
<div class="m-3 justify-content-center text-dark">
    <form action="{{ url('/ejercicios') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name">Ejercicio</label>
            <input required type="text" name="name" id="name">

            <label for="descripcion">Descripción del ejercicio</label>
            <textarea required type="text" name="descripcion" id="descripcion"></textarea>

            <label for="urlImagen">Imagen del ejercicio</label>
            <textarea required type="text" name="urlImagen" id="urlImagen"></textarea>
        </div>
        <div class="text-right">
            <button type="submit">Enviar</button>
        </div>
    </form>
</div>
@endsection