@extends('layouts.admin')

@section('content')
<script src="../js/users.js"> </script>
<div>

    <h1>Músculos</h1>

    <div class="" style="margin: 50px auto;">
        <h2>Añadir musculo</h2>
        <form action="{{ url('/admin/musculos') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Musculo</label>
                <input class="form-control" placeholder="Nombre del músculo..." required type="text" name="name" id="name">
            </div>
            <div class="form-group" style="margin-top: 10px;">
                <label for="nombreGrupo">Nombre Grupo Muscular</label>
                <select name="grupo" class="form-select">
                    {{ App\Http\Controllers\MusculosController::seleccionableGruposMusculares();}}
                </select>
            </div>
            <button class="btn btn-primary" type="submit" style="margin-top: 20px;">Añadir Musculo</button>
        </form>
    </div>

    @include('common.alert')

    <h2>Listado de musuculos</h2>
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Grupo Muscular</th>
                    <th scope="col">Editar</th>
                    <th scope="col">Eliminar</th>
                </tr>
            </thead>
            <tbody>
                @foreach($musculos as $musculo)
                <tr>
                    <td> {{$musculo->name}} </td>
                    <td>
                        {{$musculo->grupoMuscular->name}}
                    </td>
                    <td>
                        <button class="btn btn-success" type="submit" onclick="showProfile({{$musculo->id}})">Editar</button>
                    </td>
                    <td>
                        <form action="{{url('/admin/musculos', $musculo->id)}}" class="mr-4" method="POST">
                            @csrf
                            {{ method_field('DELETE') }}
                            <button class="btn btn-danger" type="submit">Eliminar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="text-center d-flex justify-content-center m-5">
            {{ $musculos->links() }}

        </div>

    </div>




</div>
@endsection