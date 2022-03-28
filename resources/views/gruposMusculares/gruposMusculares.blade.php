<h1>Esta es la lista de Grupos Musculares</h1>


<!--Para cada usuario se mostrará el nombre y el correo-->
@foreach($gruposMusculares as $grupo)
<div style="cursor: pointer;" class="card bg-dark mb-1 text-white">
    <h5 class="card-header">
        <span class="text-primary">{{$grupo->name }}</span> 
    </h5>
</div>
@endforeach