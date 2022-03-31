@extends('layouts.admin')




@section('tabla-contenido')
<!--Para cada usuario se mostrará el nombre y el correo-->
@foreach($ejercicios as $ejercicio)
<tr style="cursor: pointer;" class="card bg-dark mb-1 text-white">
    <td class="text-primary">{{$ejercicio->name }}</td> 
</tr>
@endforeach
@endsection