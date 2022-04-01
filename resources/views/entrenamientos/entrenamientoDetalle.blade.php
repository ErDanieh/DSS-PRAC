<h1>Este perfil es de {{$entrenamiento->name}}</h1>

@include('common.alert')

<div class="m-3 justify-content-center text-dark">
    <form action="{{ url('/entrenamientos',$entrenamiento->id)}}" method="POST">
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