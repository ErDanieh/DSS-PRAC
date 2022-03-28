<h1>Esta es la lista de Ejercicios</h1>


<!--Para cada usuario se mostrará el nombre y el correo-->
@foreach($ejercicios as $ejercicio)
<div style="cursor: pointer;" class="card bg-dark mb-1 text-white">
    <h5 class="card-header">
        <span class="text-primary">{{$ejercicio->name }}</span> 
    </h5>
</div>
@endforeach