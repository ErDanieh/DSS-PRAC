<h1>Esta es la lista de musculos</h1>


<!--Para cada usuario se mostrará el nombre y el correo-->
@foreach($musculos as $musculo)
<div style="cursor: pointer;" class="card bg-dark mb-1 text-white">
    <h5 class="card-header">
        <span class="text-primary">{{$musculo->name}}</span>
    </h5>
</div>
@endforeach


<div class="m-3 justify-content-center text-dark">
    <form action="{{ url('/musculos') }}" method="POST/GET" class="form-group">
        @csrf
        <div class="mb-3">
            <input type="text" name="nombre" id="name">
            <input type="text" name="nombre" id="nombreGrupo">
        </div>
        <div class="text-right">
            <button type="submit">Enviar</button>
        </div>
    </form>
</div>