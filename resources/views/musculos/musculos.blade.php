@extends('layouts.admin')

@section('content')

<div>

    <h1>Músculos</h1>

    @include('common.alert')

    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr style="font-size: 1.2rem;">
                    <th scope="col">Nombre</th>
                    <th scope="col">Grupo Muscular</th>
                    <th scope="col" style="width: min-content;">Editar</th>
                    <th scope="col" style="width: min-content;">Eliminar</th>
                </tr>
            </thead>
            <tbody>
                @foreach($musculos as $musculo)
                <tr>
                    <td style="font-size: 1.2rem; font-weight: 400; margin-right: 5rem;"> {{$musculo->name}} </td>
                    <td style="font-size: 1.2rem; font-weight: 100; margin-right: 5rem;">
                        {{$musculo->grupoMuscular->name}}
                    </td>
                    <td style="width: 50px;">
                        <button class="btn btn-success" type="submit" style="font-size: 1rem;">Editar</button>
                    </td>
                    <td style="width: 50px; margin-right: 50px;">
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


    <select class="form-select" aria-label="Default select example">
        <option selected>Grupo Muscular</option>
        <option value="1">Abdominales</option>
        <option value="2">Espalda</option>
        <option value="3">Brazo</option>
        <option value="3">Brazo</option>
    </select>


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