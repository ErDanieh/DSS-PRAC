<h1>Esta es la información del musculo {{$musculo->name}}</h1>
<h3>Pertenece al grupo muscular de: {{$musculo->grupoMuscular->name}}</h3>



@include('common.alert')
<div class="m-3 justify-content-center text-dark">
    <form action="{{ url('/admin/musculos',$musculo->id)}}" method="POST">
        @csrf
        {{ method_field('PUT') }}
        <div class="mb-3">
            <label for="name">Nombre del Musculo</label>
            <input type="text" name="name" id="name">

            <label for="grupo">Grupo Muscular al que pertenece</label>
            <textarea type="text" name="grupo" id="grupo"></textarea>
        </div>
        <div class="text-right">
            <button type="submit">Enviar</button>
        </div>
    </form>
</div>