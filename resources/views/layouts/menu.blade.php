<li class="nav-item {{ Request::is('clinicas*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('clinicas.index') }}">
        <i class="fa fa-hospital-o" aria-hidden="true"></i>
        <span>Clínicas</span>
    </a>
</li>
<li class="nav-item {{ Request::is('doctores*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('doctores.index') }}">
        <i class="fa fa-id-card" aria-hidden="true"></i>
        <span>Doctores</span>
    </a>
</li>
<li class="nav-item {{ Request::is('pacientes*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('pacientes.index') }}">
        <i class="fa fa-users" aria-hidden="true"></i>
        <span>Pacientes</span>
    </a>
</li>
<li class="nav-item {{ Request::is('salas*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('salas.index') }}">
        <i class="fa fa-heart"></i>
        <span>Salas</span>
    </a>
</li>
<li class="nav-item {{ Request::is('citas*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('citas.index') }}">
        <i class="fa fa-calendar"></i>
        <span>Citas</span>
    </a>
</li>
