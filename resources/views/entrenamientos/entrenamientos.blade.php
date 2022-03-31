<h1>Esta es la lista de Entrenamientos</h1>


<!--Para cada entrenamiento se mostrará su nombre si se clicka se mostrará en detalle-->
@foreach($entrenamientos as $entrenamiento)
<div style="cursor: pointer;" class="card bg-dark mb-1 text-white" onclick="mostrarDetalle({{$entrenamiento->id}})">
    <h5 class="card-header">
        <span class="text-primary">{{$entrenamiento->name }}</span> 
    </h5>
</div>
@endforeach


@include('common.alert')
<div class="m-3 justify-content-center text-dark">
    <form action="{{ url('/entrenamientos') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name">Nombre entrenamiento</label>
            <input required type="text" name="name" id="name">

            <label for="descripcion">Descripción del entrenamiento</label>
            <textarea required type="text" name="descripcion" id="descripcion"></textarea>

            <label for="urlImagen">Imagen del entrenamiento</label>
            <textarea required type="text" name="urlImagen" id="urlImagen"></textarea>
        </div>
        <div class="text-right">
            <button type="submit">Enviar</button>
        </div>
    </form>
</div>

<script>
    function mostrarDetalle(id) {
        window.location.href = `{{url('/entrenamientoDetalle/')}}/${id}`;
    }
</script>
