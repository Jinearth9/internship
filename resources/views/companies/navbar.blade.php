<li class="nav-item {{ Route::currentRouteNamed('company.requestsView') ? 'active' : '' }}">
    <a href="{{ route('company.requestsView') }}" class="nav-link">Requests</a>
</li>
<li class="nav-item {{ Route::currentRouteNamed('company.hoursView') ? 'active' : '' }}">
    <a href="{{ route('company.hoursView') }}" class="nav-link">Hours</a>
</li>
<li class="nav-item {{ Route::currentRouteNamed('company.pupilsView') ? 'active' : '' }}">
    <a href="{{ route('company.pupilsView') }}" class="nav-link">Pupils</a>
</li>
<li class="nav-item {{ Route::currentRouteNamed('company.profileView') ? 'active' : '' }}">
    <a href="{{ route('company.profileView') }}" class="nav-link">Profile</a>
</li>
