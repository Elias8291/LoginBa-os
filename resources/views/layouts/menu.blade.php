@if(auth()->user()->canAny(['ver-rol', 'crear-rol', 'editar-rol', 'borrar-rol', 'ver-estudiante', 'crear-estudiante', 'editar-estudiante', 'borrar-estudiante', 'ver-grupos', 'ver-materias']))
<li class="side-menus {{ Request::is('*') ? 'active' : '' }} bg-white shadow-sm">
    @canany(['ver-rol', 'crear-rol', 'editar-rol', 'borrar-rol'])
    <li class="{{ Request::is('home*') ? 'active' : '' }}">
        <a class="nav-link d-flex align-items-center" href="/home">
            <i class="fas fa-building text-primary mr-2"></i><span class="menu-text">Dashboard</span>
        </a>
    </li>
    <li class="{{ Request::is('usuarios*') ? 'active' : '' }}">
        <a class="nav-link d-flex align-items-center" href="/usuarios">
            <i class="fas fa-users text-success mr-2"></i><span class="menu-text">Usuarios</span>
        </a>
    </li>
    <li class="{{ Request::is('roles*') ? 'active' : '' }}">
        <a class="nav-link d-flex align-items-center" href="/roles">
            <i class="fas fa-user-lock text-warning mr-2"></i><span class="menu-text">Roles</span>
        </a>
    </li>
    @endcanany
    
</ul>
@endif