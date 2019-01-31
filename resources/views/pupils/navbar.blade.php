<li class="nav-item {{ Route::currentRouteNamed('pupil.searchView') ? 'active' : '' }}">
    <a href="{{ route('pupil.searchView') }}" class="nav-link">Search</a>
</li>
<li class="nav-item" {{ Route::currentRouteNamed('pupil.companyView') ? 'active' : '' }}>
    <a href="{{ route('pupil.companyView') }}" class="nav-link">Joined company</a>
</li>
<li class="nav-item" {{ Route::currentRouteNamed('pupil.profileView') ? 'active' : '' }}>
    <a href="{{ route('pupil.profileView') }}" class="nav-link">Profile</a>
</li>
