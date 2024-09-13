<!-- Sidenav -->
<div id="sidenav-1" class="sidenav" role="navigation" data-hidden="false" data-accordion="true">
    <a class="ripple d-flex justify-content-center py-4" href="#!" data-ripple-color="primary">
        <img id="MDB-logo" src="{{ URL::asset('img/logo/logo.png') }}" alt="Swati carries Logo" draggable="false" style="width: 100px; height:100px;"/>
    </a>

    <ul class="sidenav-menu">
        <li class="sidenav-item">
            <a class="sidenav-link {{ Route::currentRouteName() == 'dashboard' ? 'active' : '' }}" href="{{ route('admin.dashboard') }}">
                <i class="fas fa-chart-area pr-3"></i><span>Dashboard</span>
            </a>
        </li>
        <li class="sidenav-item">
            <a class="sidenav-link"><i class="fas fa-cogs pr-3"></i><span>Services</span></a>
            <ul class="sidenav-collapse">
                <li class="sidenav-item">
                    <a class="sidenav-link {{ Route::currentRouteName() == 'services' ? 'active' : '' }}" href="{{ route('admin.services') }}">
                        <i class="bi bi-list-ul pr-3"></i><span>Services</span>
                    </a>
                </li>
                <li class="sidenav-item">
                    <a class="sidenav-link"><i class="bi bi-journal-text pr-3"></i><span>Booked Services</span></a>
                </li>
            </ul>
        </li>
        <li class="sidenav-item">
            <a class="sidenav-link"><i class="fas fa-lock pr-3"></i><span>Password</span></a>
            <ul class="sidenav-collapse">
                <li class="sidenav-item">
                    <a class="sidenav-link">Request password</a>
                </li>
                <li class="sidenav-item">
                    <a class="sidenav-link">Reset password</a>
                </li>
            </ul>
        </li>
    </ul>
</div>
<!-- Sidenav -->
