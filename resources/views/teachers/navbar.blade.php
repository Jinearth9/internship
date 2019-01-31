<li class="nav-item {{ Route::currentRouteNamed('teacher.pupilsView') ? 'active' : '' }}">
    <a href="{{ route('teacher.pupilsView') }}" class="nav-link">Pupils</a>
</li>
<li class="nav-item {{ Route::currentRouteNamed('teacher.profileView') ? 'active' : '' }}">
    <a href="{{ route('teacher.profileView') }}" class="nav-link">Profile</a>
</li>
