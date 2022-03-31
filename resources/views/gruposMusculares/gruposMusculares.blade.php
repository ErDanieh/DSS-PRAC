<h1>Esta es la lista de Grupos Musculares</h1>


<!--Para cada usuario se mostrará el nombre y el correo-->
@foreach($gruposMusculares as $grupo)
<div style="cursor: pointer;" class="card bg-dark mb-1 text-white">
    <td class="text-primary">{{$grupo->name }}
        <form action="{{url('/gruposMusculares', $grupo->id)}}" class="mr-4" method="POST">
            @csrf
            {{ method_field('DELETE') }}
            <button class="btn btn-danger m-3" style="width: 100%;" type="submit">Delete</button>
        </form>
    </td>
</div>
@endforeach

@include('common.alert')
<div class="m-3 justify-content-center text-dark">
    <form action="{{ url('/gruposMusculares') }}" method="POST">
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