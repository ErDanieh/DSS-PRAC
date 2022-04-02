<h1>{{$grupo->name}}</h1>

<h3>{{$grupo->descripcion}}</h3>


<div class="m-3 justify-content-center text-dark">
    <form action="{{ url('/admin/gruposMusculares',$grupo->id)}}" method="POST">
        @csrf
        {{ method_field('PUT') }}
        <div class="mb-3">
            <label for="name">Nombre del grupo</label>
            <input type="text" name="name" id="name">

            <label for="descripcion">Descripción del grupo</label>
            <textarea type="text" name="descripcion" id="descripcion"></textarea>
        </div>
        <div class="text-right">
            <button type="submit">Enviar</button>
        </div>
    </form>
</div>

@foreach($grupo->musculos as $musculo)
<div>
    <tr style="cursor: pointer;" class="card bg-dark mb-1 text-white">
        <td class="text-primary" onclick="showProfile({{$grupo->id}})">{{$musculo->name }}</td>
    </tr>
</div>
@endforeach