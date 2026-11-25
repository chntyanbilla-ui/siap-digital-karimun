<aside class="main-sidebar sidebar-dark-primary elevation-4">

    <a href="/dashboard" class="brand-link">

        <span class="brand-text fw-bold">

            SIAP DIGITAL

        </span>

    </a>

    <div class="sidebar">

        <nav class="mt-3">

            <ul class="nav nav-pills nav-sidebar flex-column">

                <li class="nav-item">
                    <a href="{{ route('dashboard') }}"
   class="nav-link {{ request()->routeIs('dashboard') ? 'active' : '' }}">
                        <i class="nav-icon bi bi-speedometer2"></i>
                        <p>Dashboard</p>
                    </a>
                </li>

               <li class="nav-item">
    <a href="{{ route('opd.index') }}"
   class="nav-link {{ request()->routeIs('opd.*') ? 'active' : '' }}">
        <i class="bi bi-building"></i>
        <p>OPD</p>
    </a>
</li>

               <li class="nav-item">
   <a href="{{ route('proses-bisnis') }}"
   class="nav-link {{ request()->routeIs('proses-bisnis') ? 'active' : '' }}">
        <i class="bi bi-diagram-3"></i>
        <p>Proses Bisnis</p>
    </a>
</li>

                <li class="nav-item">
    <a href="#" class="nav-link">
    <i class="bi bi-list-check"></i>
    <p>Layanan</p>
</a>
</li>

<li class="nav-item">

    <a href="{{ route('layanan-admin.index') }}"
       class="nav-link">

        <i class="nav-icon bi bi-list-check"></i>

        <p>

            Layanan

        </p>

    </a>

</li>

<li class="nav-item">

    <a href="{{ route('data-informasi-admin.index') }}"
       class="nav-link {{ request()->routeIs('data-informasi-admin.*') ? 'active' : '' }}">

        <i class="nav-icon bi bi-database"></i>

        <p>Data & Informasi</p>

    </a>

</li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon bi bi-database"></i>
                        <p>Data Informasi</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('aplikasi-admin.index') }}"
   class="nav-link {{ request()->routeIs('aplikasi-admin.*') ? 'active' : '' }}">
                        <i class="nav-icon bi bi-window"></i>
                        <p>Aplikasi</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon bi bi-hdd-network"></i>
                        <p>Infrastruktur</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon bi bi-shield-lock"></i>
                        <p>Keamanan</p>
                    </a>
                </li>

            </ul>

        </nav>

    </div>

</aside>