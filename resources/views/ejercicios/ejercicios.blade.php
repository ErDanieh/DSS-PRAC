<h1>Esta es la lista de Ejercicios</h1>


<!--Para cada usuario se mostrará el nombre y el correo-->
@foreach($ejercicios as $ejercicio)
<div style="cursor: pointer;" class="card bg-dark mb-1 text-white">
    <h5 class="card-header">
        <span class="text-primary">{{$ejercicio->name }}</span> 
    </h5>
</div>
@endforeach


@include('common.alert')
<div class="m-3 justify-content-center text-dark">
    <form action="{{ url('/ejercicios') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name">Ejercicio</label>
            <input required type="text" name="name" id="name">

            <label for="descripcion">Descripción del ejercicio</label>
            <textarea required type="text" name="descripcion" id="descripcion"></textarea>

            <label for="urlImagen">Imagen del ejercicio</label>
            <textarea required type="text" name="urlImagen" id="urlImagen"></textarea>
        </div>
        <div class="text-right">
            <button type="submit">Enviar</button>
        </div>
    </form>
</div>

<div class="m-3 justify-content-center text-dark">
    <form action="{{ url('/ejercicios') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="delname">Ejercicio a borrar</label>
            <input required type="text" name="delname" id="delname">
        </div>
        @csrf
        {{ method_field('DELETE') }}
        <div class="text-right">
            <button type="submit">Enviar</button>
        </div>
    </form>
</div>