<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">Stisla</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">St</a>
        </div>
        <ul class="sidebar-menu">

            <li class="menu-header">Dashboard</li>
            <li class="{{ Request::is('home') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('home ') }}"><i class="fas fas fa-fire">
                    </i> <span>Dashboard</span>
                </a>
            </li>

            <li class="menu-header">Master Data</li>
            <li class="{{ Request::is('users') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('users ') }}"><i class="far fa-user">
                    </i> <span>Users</span>
                </a>
            </li>

            <li class="{{ Request::is('companies/1') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('companies.show', 1) }}"><i class="fas fa-columns">
                    </i> <span>Companies</span>
                </a>
            </li>

            <li class="{{ Request::is('attendances') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('attendances.index') }}"><i class="fas fa-columns">
                    </i> <span>Companies</span>
                </a>
            </li>
    </aside>
</div>
