<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>
        SIAP Digital Kabupaten Karimun
    </title>

    @vite([
        'resources/css/app.css',
        'resources/js/app.js'
    ])

    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet"
    >

    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
    >

</head>


<body>


{{-- =========================================================
     NAVBAR
========================================================= --}}

<nav class="navbar navbar-expand-lg navbar-custom sticky-top">

    <div class="container">

        {{-- LOGO --}}

        <a
            class="navbar-brand d-flex align-items-center"
            href="{{ route('home') }}"
        >

            <img
                src="{{ asset('images/logo-karimun.png') }}"
                width="50"
                height="50"
                class="me-3"
                alt="Logo Kabupaten Karimun"
            >

            <div>

                <h5 class="m-0 fw-bold text-primary">
                    SIAP DIGITAL
                </h5>

                <small class="kabupaten">
                    Kabupaten Karimun
                </small>

            </div>

        </a>


        {{-- MOBILE MENU --}}

        <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSIAP"
            aria-controls="navbarSIAP"
            aria-expanded="false"
            aria-label="Buka menu"
        >

            <i class="bi bi-list"></i>

        </button>


        {{-- NAVIGATION --}}

        <div
            class="collapse navbar-collapse"
            id="navbarSIAP"
        >

            <ul class="navbar-nav ms-auto align-items-lg-center">

                <li class="nav-item">

                    <a
                        href="{{ route('home') }}"
                        class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}"
                    >
                        Beranda
                    </a>

                </li>


                <li class="nav-item">

                    <a
                        href="{{ route('proses-bisnis') }}"
                        class="nav-link {{ request()->routeIs('proses-bisnis') ? 'active' : '' }}"
                    >
                        Proses Bisnis
                    </a>

                </li>


                <li class="nav-item">

                    <a
                        href="{{ route('layanan') }}"
                        class="nav-link {{ request()->routeIs('layanan') ? 'active' : '' }}"
                    >
                        Layanan
                    </a>

                </li>


                <li class="nav-item">

                    <a
                        href="{{ route('aplikasi') }}"
                        class="nav-link {{ request()->routeIs('aplikasi') ? 'active' : '' }}"
                    >
                        Aplikasi
                    </a>

                </li>


                <li class="nav-item">

                    <a
                        href="{{ route('data-informasi') }}"
                        class="nav-link {{ request()->routeIs('data-informasi') ? 'active' : '' }}"
                    >
                        Data Informasi
                    </a>

                </li>


                <li class="nav-item">

                    <a
                        href="{{ route('infrastruktur') }}"
                        class="nav-link {{ request()->routeIs('infrastruktur') ? 'active' : '' }}"
                    >
                        Infrastruktur
                    </a>

                </li>


                <li class="nav-item">

                    <a
                        href="{{ route('keamanan') }}"
                        class="nav-link {{ request()->routeIs('keamanan') ? 'active' : '' }}"
                    >
                        Keamanan
                    </a>

                </li>


                <li class="nav-item">

                    <a
                        href="#tentang"
                        class="nav-link"
                    >
                        Tentang
                    </a>

                </li>


                {{-- LOGIN --}}

                <li class="nav-item nav-login">

                    <a
                        href="{{ route('login') }}"
                        class="btn btn-outline-primary"
                    >
                        Login
                    </a>

                </li>


                {{-- REGISTER --}}

                <li class="nav-item nav-register">

                    <a
                        href="{{ route('register') }}"
                        class="btn btn-primary"
                    >
                        Register
                    </a>

                </li>

            </ul>

        </div>

    </div>

</nav>



{{-- =========================================================
     HERO
========================================================= --}}

@include('components.hero')



{{-- =========================================================
     STATISTIK
========================================================= --}}

@include('components.statistik')



{{-- =========================================================
     INFORMASI DIGITAL
========================================================= --}}

@include('components.domain')



{{-- =========================================================
     VISI
========================================================= --}}

@include('components.visi')



{{-- =========================================================
     TENTANG
========================================================= --}}

@include('components.tentang')



{{-- =========================================================
     FOOTER
========================================================= --}}

@include('components.footer')


</body>

</html>