@extends('layouts.admin')

@section('content')
<div>

    <h1>Esta es la lista de Grupos Musculares</h1>



    <div class="col py-3">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Nombre</th>
                </tr>
            </thead>
            <tbody>
                @foreach($gruposMusculares as $grupo)
                <tr style="cursor: pointer;" class="card bg-dark mb-1 text-white">
                    <td class="text-primary">{{$grupo->name }}
                        <form action="{{url('/admin/gruposMusculares', $grupo->id)}}" class="mr-4" method="POST">
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
        <form action="{{ url('/admin/gruposMusculares') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name">Grupo Muscular</label>
                <input required type="text" name="name" id="name">
                <label for="descripcion">Descripción de grupo muscular</label>
                <textarea required type="text" name="descripcion" id="descripcion"></textarea>
            </div>
            <div class="text-right">
                <button type="submit">Enviar</button>
            </div>
        </form>
    </div>

</div>

@endsection

<!--Para cada usuario se mostrará el nombre y el correo-->


<!--
<div class="m-3 justify-content-center text-dark">
    <form action="{{ url('/gruposMusculares') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="delname">Grupo muscular a borrar</label>
            <input required type="text" name="delname" id="delname">
        </div>
        @csrf
        {{ method_field('DELETE') }}
        <div class="text-right">
            <button type="submit">Enviar</button>
        </div>
    </form>
</div>
-->