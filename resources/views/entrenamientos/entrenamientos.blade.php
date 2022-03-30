<h1>Esta es la lista de Entrenamientos</h1>


<!--Para cada entrenamiento se mostrará su nombre si se clicka se mostrará en detalle-->
@foreach($entrenamientos as $entrenamiento)
<div style="cursor: pointer;" class="card bg-dark mb-1 text-white" onclick="mostrarDetalle({{$entrenamiento->id}})">
    <h5 class="card-header">
        <span class="text-primary">{{$entrenamiento->name }}</span> 
    </h5>
</div>
@endforeach

<script>
    function mostrarDetalle(id) {
        window.location.href = `{{url('/entrenamientoDetalle/')}}/${id}`;
    }
</script>
