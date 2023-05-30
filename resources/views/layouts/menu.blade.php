<!-- <li class="nav-item {{ Request::is('empleados*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('empleados.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Empleados</span>
    </a>
</li>
<li class="nav-item {{ Request::is('empresas*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('empresas.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Empresas</span>
    </a>
</li>
<li class="nav-item {{ Request::is('precios*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('precios.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Precios</span>
    </a>
</li>
<li class="nav-item {{ Request::is('clientes*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('clientes.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Clientes</span>
    </a>
</li>
<li class="nav-item {{ Request::is('proveedors*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('proveedors.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Proveedores</span>
    </a>
</li>
<li class="nav-item {{ Request::is('vehiculos*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('vehiculos.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Vehiculos</span>
    </a>
</li>
<li class="nav-item {{ Request::is('usuarios*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('usuarios.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Usuarios</span>
    </a>
</li>
<li class="nav-item {{ Request::is('inventarios*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('inventarios.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Inventarios</span>
    </a>
</li> -->
<li class="nav-item {{ Request::is('clinicas*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('clinicas.index') }}">
        <i class="fa fa-hospital-o" aria-hidden="true"></i>
        <span>Clinicas</span>
    </a>
</li>
<li class="nav-item {{ Request::is('doctores*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('doctores.index') }}">
        <i class="fa fa-id-card" aria-hidden="true"></i>
        <span>Doctores</span>
    </a>
</li>
