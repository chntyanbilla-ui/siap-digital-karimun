<nav class="navbar navbar-expand-lg bg-white shadow-sm sticky-top">

    <div class="container">

        <a class="navbar-brand d-flex align-items-center" href="{{ url('/') }}">

            <img src="{{ asset('images/logo-karimun.png') }}"
                 width="45"
                 class="me-2">

            <div>

                <h5 class="m-0 fw-bold text-primary">
                    SIAP DIGITAL
                </h5>

                <small class="text-dark">
                    Kabupaten Karimun
                </small>

            </div>

        </a>

        <button class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarMenu">

            <span class="navbar-toggler-icon"></span>

        </button>

        <div class="collapse navbar-collapse" id="navbarMenu">

          <ul class="navbar-nav ms-auto">

    <li class="nav-item">
        <a class="nav-link" href="{{ route('home') }}">
            Beranda
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('proses-bisnis') }}">
            Proses Bisnis
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('layanan') }}">
            Layanan
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('aplikasi') }}">
            Aplikasi
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="#tentang">
            Tentang
        </a>
    </li>

    <li class="nav-item ms-3">

        <a href="{{ route('login') }}"
           class="btn btn-primary">

            <i class="bi bi-box-arrow-in-right"></i>

            Login

        </a>

    </li>

</ul>
        </div>

    </div>

</nav>