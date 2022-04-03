@extends('layouts.admin')

@section('content')
<script src="../js/users.js"> </script>

<div>

    <h1>Esta es la lista de Musculos</h1>

    <div class="col py-3">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Nombre</th>
                </tr>
            </thead>
            <tbody>
                @foreach($musculos as $musculo)
                <tr style="cursor: pointer;" class="card bg-dark mb-1 text-white">

                    <td class="text-primary" onclick="showProfile({{$musculo->id}})">{{$musculo->name}}
                        <form action="{{url('/admin/musculos', $musculo->id)}}" class="mr-4" method="POST">
                            @csrf
                            {{ method_field('DELETE') }}
                            <button class="btn btn-danger m-3" style="width: 100%;" type="submit">Delete</button>
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