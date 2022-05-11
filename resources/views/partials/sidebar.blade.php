<div class="col-md-3 col-xl-2 px-sm-2 px-0 " style="position: fixed; font-size: larger; width: auto; max-width: 20%; background: linear-gradient(45deg, #2937f0, #9f1ae2) !important;">
    <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
        @if(auth::user()->is_trainer == '1' && auth::user()->is_admin == '1')
        <a href="/admin" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
            <span class="d-none d-sm-inline" style="font-weight: bold; font-size: 2rem; ">Administración</span>
        </a>
        @elseif (auth::user()->is_trainer == '1' && auth::user()->is_admin == '0')
        <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
            <span class="d-none d-sm-inline" style="font-weight: bold; font-size: 2rem; ">Entrenamientos</span>
        </a>
        @else
        <script> window.location.replace("/"); </script>
        @endif
        <div class="dropdown-divider" style="color: white;">

        </div>
        <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu" style="color: white;">


            <li class="nav-item" style="color: white">
                <a href="/admin/entrenamientos" class="nav-link align-middle px-0" style="color: white;">
                    <i class="fas fa-dumbbell" style="color: white;"></i> <span style="color: white;" class="ms-1 d-none d-sm-inline" style="color: white;">Entrenamientos</span>
                </a>
            </li>
            @if(auth::user()->is_admin == '1')
            <li class="nav-item">
                <a href="/admin/ejercicios" class="nav-link align-middle px-0" style="color: white;">
                    <i class="fa-solid fa-person-running" style="color: white;"></i> <span class="ms-1 d-none d-sm-inline" style="color: white;">Ejercicios</span>
                </a>
            </li>

            <li class="nav-item" style="color: white;">
                <a href="/admin/gruposMusculares" style="color: white;" class="nav-link align-middle px-0">
                    <i class="bi bi-graph-up" style="color: white;"></i> <span style="color: white;" class="ms-1 d-none d-sm-inline">Grupos musculares</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="/admin/musculos" class="nav-link align-middle px-0" style="color: white;">
                    <i class="fa-solid fa-person-running" style="color: white;"></i> <span class="ms-1 d-none d-sm-inline" style="color: white;">Músculos</span>
                </a>
            </li>

            <li class="nav-item">
                <a href="/admin/usuarios" class="nav-link align-middle px-0">
                    <i class="bi bi-people-fill" style="color: white;"></i> <span class="ms-1 d-none d-sm-inline" style="color: white;">Usuarios</span>
                </a>
            </li>
            @endif

        </ul>
        <hr>
        <div class="dropdown pb-4" style="cursor: pointer;">
            <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="https://github.com/mdo.png" alt="hugenerd" width="30" height="30" class="rounded-circle">
                <span class="d-none d-sm-inline mx-1">{{auth::user()->name }}</span>
            </a>
            <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                <li><a class="dropdown-item disabled" href="#">Ajustes</a></li>
                <li><a class="dropdown-item disabled" href="#">Perfil</a></li>
                <li>
                    <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Cerrar sesión</a></li>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </ul>
        </div>
    </div>
</div>