<aside class="admin-sidebar">

    {{-- Logo / Identitas --}}
    <div class="admin-logo">

        <div class="admin-logo-mark">
            <i class="bi bi-grid-1x2-fill"></i>
        </div>

        <div>
            <h3>SIAP DIGITAL</h3>
            <p>Kabupaten Karimun</p>
        </div>

    </div>


    {{-- Menu --}}
    <nav class="admin-menu">

        {{-- Dashboard --}}
        <a href="{{ route('dashboard') }}"
           class="nav-link {{ request()->routeIs('dashboard') ? 'active' : '' }}">

            <i class="bi bi-speedometer2"></i>

            <span>Dashboard</span>

        </a>


        {{-- OPD --}}
        <a href="{{ route('opd.index') }}"
           class="nav-link {{ request()->routeIs('opd.*') ? 'active' : '' }}">

            <i class="bi bi-building"></i>

            <span>OPD</span>

        </a>


        {{-- Proses Bisnis --}}
        <a href="{{ route('proses-bisnis-admin.index') }}"
           class="nav-link {{ request()->routeIs('proses-bisnis-admin.*') ? 'active' : '' }}">

            <i class="bi bi-diagram-3"></i>

            <span>Proses Bisnis</span>

        </a>


        {{-- Layanan --}}
        <a href="{{ route('layanan-admin.index') }}"
           class="nav-link {{ request()->routeIs('layanan-admin.*') ? 'active' : '' }}">

            <i class="bi bi-list-check"></i>

            <span>Layanan</span>

        </a>


        {{-- Aplikasi --}}
        <a href="{{ route('aplikasi-admin.index') }}"
           class="nav-link {{ request()->routeIs('aplikasi-admin.*') ? 'active' : '' }}">

            <i class="bi bi-window"></i>

            <span>Aplikasi</span>

        </a>


        {{-- Data Informasi --}}
        <a href="{{ route('data-informasi-admin.index') }}"
           class="nav-link {{ request()->routeIs('data-informasi-admin.*') ? 'active' : '' }}">

            <i class="bi bi-database"></i>

            <span>Data Informasi</span>

        </a>


        {{-- Infrastruktur --}}
        <a href="{{ route('infrastruktur-admin.index') }}"
           class="nav-link {{ request()->routeIs('infrastruktur-admin.*') ? 'active' : '' }}">

            <i class="bi bi-hdd-network"></i>

            <span>Infrastruktur</span>

        </a>


        {{-- Keamanan --}}
        <a href="{{ route('keamanan-admin.index') }}"
           class="nav-link {{ request()->routeIs('keamanan-admin.*') ? 'active' : '' }}">

            <i class="bi bi-shield-lock"></i>

            <span>Keamanan</span>

        </a>

    </nav>


    {{-- Logout --}}
    <div class="admin-sidebar-footer">

        <form method="POST" action="{{ route('logout') }}">

            @csrf

            <button type="submit" class="admin-logout">

                <i class="bi bi-box-arrow-right"></i>

                <span>Keluar</span>

            </button>

        </form>

    </div>

</aside>