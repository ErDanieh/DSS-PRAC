@extends('layouts.admin')



@section('tabla-contenido')
<!--Para cada usuario se mostrará el nombre y el correo-->
@foreach($users as $user)
<tr style="cursor: pointer;" class="card bg-dark mb-1 text-white">
    <td class="text-primary" onclick="showProfile({{$user->id}})">{{$user->name}}</td>
    <td class="text-primary" onclick="showProfile({{$user->id}})">{{$user->email}}</td>
    @if($user->is_admin == '1')
    <span class="text-warning"> ADMINISTRADOR</span>
    @endif
    @if($user->is_trainer == '1')
    <span class="text-primary"> ENTRENADOR</span>
    @endif

    <td>
        <form action="{{url('/usuarios', $user->id)}}" class="mr-4" method="POST">
            @csrf
            {{ method_field('DELETE') }}
            <button class="btn btn-danger m-3" style="width: 100%;" type="submit">Delete</button>
        </form>
    </td>

</tr>
@endforeach
@endsection

<!--Metodo para mostrar los perfiles una vez clickado el usuario -->
<script>
    function showProfile(id) {
        window.location.href = `{{url('/profile/')}}/${id}`;
    }
</script>


@section('content')
<h1>Esta es la lista de usuarios</h1>
<!-- Buscador por nombre o correo, redirige a nueva página-->
<form action="{{ url('/usuarios') }}" method="POST" class="form-group">
    @csrf
    <label for="search"> Buscar por nombre o email. </label>
    <div class="mb-3">
        <input class="form-control" name="search" type="text" id="search" autofocus></input>
        <button hidden type="submit" class="btn btn-primary">Buscar</button>
    </div>
</form>

</div>
<div class="text-center d-flex justify-content-center m-5">
    {{ $users->links() }}
</div>
@endsection