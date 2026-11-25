<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>
        SIAP Digital Kabupaten Karimun
    </title>

    @vite([
        'resources/css/app.css',
        'resources/js/app.js'
    ])

    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet"
    >

    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
    >

</head>


<body>


{{-- =====================================================
     NAVBAR
===================================================== --}}

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



        {{-- MOBILE BUTTON --}}

        <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbar"
            aria-controls="navbar"
            aria-expanded="false"
            aria-label="Toggle navigation"
        >

            <i class="bi bi-list"></i>

        </button>



        {{-- MENU --}}

        <div
            class="collapse navbar-collapse"
            id="navbar"
        >

            <ul class="navbar-nav ms-auto align-items-lg-center">


                {{-- BERANDA --}}

                <li class="nav-item">

                    <a
                        class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}"
                        href="{{ route('home') }}"
                    >

                        Beranda

                    </a>

                </li>



                {{-- PROSES BISNIS --}}

                <li class="nav-item">

                    <a
                        class="nav-link {{ request()->routeIs('proses-bisnis') ? 'active' : '' }}"
                        href="{{ route('proses-bisnis') }}"
                    >

                        Proses Bisnis

                    </a>

                </li>



                {{-- LAYANAN --}}

                <li class="nav-item">

                    <a
                        class="nav-link {{ request()->routeIs('layanan') ? 'active' : '' }}"
                        href="{{ route('layanan') }}"
                    >

                        Layanan

                    </a>

                </li>



                {{-- APLIKASI --}}

                <li class="nav-item">

                    <a
                        class="nav-link {{ request()->routeIs('aplikasi') ? 'active' : '' }}"
                        href="{{ route('aplikasi') }}"
                    >

                        Aplikasi

                    </a>

                </li>



                {{-- DATA INFORMASI --}}

                <li class="nav-item">

                    <a
                        class="nav-link"
                        href="{{ route('data-informasi') }}"
                    >

                        Data Informasi

                    </a>

                </li>



                {{-- INFRASTRUKTUR --}}

                <li class="nav-item">

                    <a
                        class="nav-link"
                        href="{{ route('infrastruktur') }}"
                    >

                        Infrastruktur

                    </a>

                </li>



                {{-- KEAMANAN --}}

                <li class="nav-item">

                    <a
                        class="nav-link"
                        href="{{ route('keamanan') }}"
                    >

                        Keamanan

                    </a>

                </li>



                {{-- TENTANG --}}

                <li class="nav-item">

                    <a
                        class="nav-link"
                        href="#tentang"
                    >

                        Tentang

                    </a>

                </li>



                {{-- LOGIN REGISTER --}}

                <li class="nav-item ms-lg-3 mt-3 mt-lg-0">

                    <a
                        href="{{ route('login') }}"
                        class="btn btn-outline-primary me-2"
                    >

                        Login

                    </a>


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



{{-- =====================================================
     HERO
===================================================== --}}

@include('components.hero')



{{-- =====================================================
     STATISTIK
===================================================== --}}

@include('components.statistik')



{{-- =====================================================
     DOMAIN / LAYANAN DIGITAL
===================================================== --}}

@include('components.domain')



{{-- =====================================================
     VISI
===================================================== --}}

@include('components.visi')



{{-- =====================================================
     TENTANG
===================================================== --}}

@include('components.tentang')



{{-- =====================================================
     FOOTER
===================================================== --}}

@include('components.footer')


</body>

</html>