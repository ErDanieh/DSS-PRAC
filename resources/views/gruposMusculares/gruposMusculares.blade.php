<h1>Esta es la lista de Grupos Musculares</h1>


<!--Para cada usuario se mostrará el nombre y el correo-->
@foreach($gruposMusculares as $grupo)
<div style="cursor: pointer;" class="card bg-dark mb-1 text-white">
    <h5 class="card-header">
        <span class="text-primary">{{$grupo->name }}</span> 
    </h5>
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