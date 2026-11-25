<nav class="admin-navbar">

    {{-- Judul Halaman --}}
    <div class="admin-navbar-title">

        <h3>
            {{ $title }}
        </h3>

    </div>


    {{-- Profil Admin --}}
    <div class="admin-profile">

        <div class="admin-profile-icon">

            <i class="bi bi-person"></i>

        </div>

        <div class="admin-profile-info">

            <span class="admin-profile-label">
                Admin
            </span>

            <span class="admin-profile-name">
                {{ Auth::user()->name }}
            </span>

        </div>

    </div>

</nav>