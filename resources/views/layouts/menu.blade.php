<!-- need to remove -->
<li class="nav-item">
    <a href="{{ route('home') }}" class="nav-link {{ Request::routeIs('home') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Главная</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('cars.index') }}" class="nav-link {{ Request::routeIs('cars.index') || Request::routeIs('cars.edit') || Request::routeIs('cars.create') ? 'active' : '' }}">
        <i class="nav-icon fas fa-car"></i>
        <p>Машины</p>
    </a>
</li>
