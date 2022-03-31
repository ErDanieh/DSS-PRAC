@extends('layouts.admin')

@section('content')
<h1>Esta es la lista de Entrenamientos</h1>
@endsection


@section('tabla-contenido')
<!--Para cada entrenamiento se mostrará su nombre si se clicka se mostrará en detalle-->
@foreach($entrenamientos as $entrenamiento)
<tr style="cursor: pointer;" class="card bg-dark mb-1 text-white" onclick="redirigirDetalleEntrenamiento({{$entrenamiento->id}})">
    <td class="text-primary">{{$entrenamiento->name }}</td>
</tr>
@endforeach

<script src="js/entrenamientos.js"></script>
@endsection