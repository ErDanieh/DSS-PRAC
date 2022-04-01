@extends('layouts.admin')


@section('content')

<!--Metodo para mostrar los perfiles una vez clickado el usuario -->
<script src="../js/users.js"> </script>

<div>

    <h1>Esta es la lista de Usuarios</h1>

    <div class="col py-3">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Nombre</th>
                </tr>
            </thead>
            <tbody>
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
                        <form action="{{url('/admin/usuarios', $user->id)}}" class="mr-4" method="POST">
                            @csrf
                            {{ method_field('DELETE') }}
                            <button class="btn btn-danger m-3" style="width: 100%;" type="submit">Delete</button>
                        </form>
                    </td>

                </tr>
                @endforeach
            </tbody>
        </table>
    </div>


    @include('common.alert')
    <form action="{{ url('/admin/usuarios') }}" method="POST" class="form-group">
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


</div>

@endsection