<h1>Esta es la lista de usuarios</h1>


<!--Para cada usuario se mostrará el nombre y el correo-->
@foreach($users as $user)
<div style="cursor: pointer;" class="card bg-dark mb-1 text-white" onclick="showProfile({{$user->id}})">
    <h5 class="card-header">
        <span class="text-primary">{{ $user->name }}</span> (<span class="text-info">{{ $user->email }}</span>) 
        @if($user->is_admin == '1')
            <span class="text-warning"> ADMINISTRADOR</span>
        @endif
        @if($user->is_trainer == '1')
            <span class="text-primary"> ENTRENADOR</span>
        @endif
    </h5>
</div>
@endforeach


<!-- Buscador por nombre o correo, redirige a nueva página-->
<form action="{{ url('/users/search') }}" method="POST" class="form-group" onclick="showProfile({{$user->id}})">
    @csrf
    <label for="search"> Search by name or email. </label>
    <div class="mb-3">
        <input class="form-control" name="search" type="text" id="search" autofocus></input>
        <button hidden type="submit" class="btn btn-primary">Search</button>
    </div>
</form>

</div>
<div class="text-center d-flex justify-content-center m-5">
    {{ $users->links() }}
</div>


<!--Metodo para mostrar los perfiles una vez clickado el usuario -->
<script>
    function showProfile(id) {
        window.location.href = `{{url('/profile/')}}/${id}`;
    }
</script>