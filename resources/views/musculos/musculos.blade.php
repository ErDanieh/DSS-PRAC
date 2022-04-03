@extends('layouts.admin')

@section('content')
<script src="../js/users.js"> </script>
<div>

    <h1>Músculos</h1>

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
    </div>

    @include('common.alert')
    <div class="m-3 justify-content-center text-dark">
        <form action="{{ url('/admin/musculos') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name">Musculo</label>
                <input required type="text" name="name" id="name">
                <label for="nombreGrupo">Nombre Grupo Muscular</label>
                <input required type="text" name="grupo" id="grupo">
                <script>
                    console.log('Console: esto funciona');
                </script>
            </div>
            <div class="text-right">
                <button type="submit">Enviar</button>
            </div>
        </form>
    </div>

</div>
@endsection