@extends('layouts.admin')



@section('content')
<script src="../js/users.js"> </script>
<div>
    <h1>Editar musculo.</h1>
    <h3>Nombre: {{$musculo->name}}</h3>
    <h3>Grupo muscular: {{$musculo->grupoMuscular->name}}</h3>

    @include('common.alert')
    <div class="" style="margin-top: 20px;">
        <form action="{{ url('/admin/musculos',$musculo->id)}}" method="POST">
            @csrf
            {{ method_field('PUT') }}
            <div class="form-group">
                <label for="name">Nombre del Musculo</label>
                <input class="form-control" placeholder="Nombre del músculo..." required type="text" name="name" id="name">
            </div>
            <div class="form-group">
                <label for="grupo">Grupo Muscular al que pertenece</label>
                <select name="grupo" class="form-select">
                    {{ App\Http\Controllers\MusculosController::seleccionableGruposMusculares();}}
                </select>
            </div>
            <div class="text-right">
                <button class="btn btn-primary" type="submit" style="margin-top: 20px;">Editar Musculo</button>
            </div>
        </form>
    </div>
</div>
@endsection