<li class="menu-header">Dashboard</li>
<li class="{{ request()->is('app/dashboard*') ? 'active' : '' }}"><a class="nav-link" href="credits.html"><i
            class="fas fa-fire"></i> <span>Dashboard</span></a></li>
<li class="menu-header">Master</li>
<li class="nav-item dropdown {{ request()->is('app/master/majors*') ? 'active' : '' }}">
    <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>{{ __('menu.major') }}</span></a>
    <ul class="dropdown-menu">
        <li><a class="nav-link" href="{{ route('majors.index') }}">Semua Data</a></li>
        <li><a class="nav-link" href="index.html">Tempat Sampah</a></li>
    </ul>
</li>
