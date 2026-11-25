<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>
        Aplikasi Digital - SIAP Digital Kabupaten Karimun
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


                {{-- BERANDA --}}

                <li class="nav-item">

                    <a
                        href="{{ route('home') }}"
                        class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}"
                    >
                        Beranda
                    </a>

                </li>


                {{-- PROSES BISNIS --}}

                <li class="nav-item">

                    <a
                        href="{{ route('proses-bisnis') }}"
                        class="nav-link {{ request()->routeIs('proses-bisnis') ? 'active' : '' }}"
                    >
                        Proses Bisnis
                    </a>

                </li>


                {{-- LAYANAN --}}

                <li class="nav-item">

                    <a
                        href="{{ route('layanan') }}"
                        class="nav-link {{ request()->routeIs('layanan') ? 'active' : '' }}"
                    >
                        Layanan
                    </a>

                </li>


                {{-- APLIKASI --}}

                <li class="nav-item">

                    <a
                        href="{{ route('aplikasi') }}"
                        class="nav-link {{ request()->routeIs('aplikasi') ? 'active' : '' }}"
                    >
                        Aplikasi
                    </a>

                </li>


                {{-- DATA INFORMASI --}}

                <li class="nav-item">

                    <a
                        href="{{ route('data-informasi') }}"
                        class="nav-link {{ request()->routeIs('data-informasi') ? 'active' : '' }}"
                    >
                        Data Informasi
                    </a>

                </li>


                {{-- INFRASTRUKTUR --}}

                <li class="nav-item">

                    <a
                        href="{{ route('infrastruktur') }}"
                        class="nav-link {{ request()->routeIs('infrastruktur') ? 'active' : '' }}"
                    >
                        Infrastruktur
                    </a>

                </li>


                {{-- KEAMANAN --}}

                <li class="nav-item">

                    <a
                        href="{{ route('keamanan') }}"
                        class="nav-link {{ request()->routeIs('keamanan') ? 'active' : '' }}"
                    >
                        Keamanan
                    </a>

                </li>


                {{-- TENTANG --}}

                <li class="nav-item">

                    <a
                        href="{{ route('home') }}#tentang"
                        class="nav-link"
                    >
                        Tentang
                    </a>

                </li>


                {{-- LOGIN --}}

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



{{-- =========================================================
     HERO APLIKASI
========================================================= --}}

<section class="application-hero">

    <div class="container">

        <div class="application-hero-content">

            <span class="application-badge">

                <i class="bi bi-window"></i>

                DOMAIN SPBE

            </span>


            <h1>

                Aplikasi Digital

                <span>
                    Kabupaten Karimun
                </span>

            </h1>


            <p>

                Daftar aplikasi digital yang digunakan
                di lingkungan Pemerintah Kabupaten Karimun
                untuk mendukung pelayanan dan pemerintahan digital.

            </p>

        </div>

    </div>

</section>



{{-- =========================================================
     DAFTAR APLIKASI
========================================================= --}}

<section class="application-section">

    <div class="container">


        {{-- HEADER --}}

        <div class="application-list-header">

            <div>

                <span class="section-label">

                    <i class="bi bi-grid-3x3-gap"></i>

                    APLIKASI DIGITAL

                </span>


                <h2>
                    Daftar Aplikasi
                </h2>


                <p>
                    Berbagai aplikasi digital Pemerintah Kabupaten Karimun.
                </p>

            </div>


            {{-- JUMLAH APLIKASI --}}

            <div class="application-count">

                <i class="bi bi-grid"></i>

                {{ $aplikasis->count() }} Aplikasi

            </div>

        </div>



        {{-- =================================================
             KARTU APLIKASI
        ================================================== --}}

        <div class="row g-4">


            @forelse($aplikasis as $aplikasi)


                @php

                    /*
                    |--------------------------------------------------------------------------
                    | MENENTUKAN ICON BERDASARKAN NAMA APLIKASI
                    |--------------------------------------------------------------------------
                    */

                    $namaAplikasi = strtolower(
                        $aplikasi->nama ?? ''
                    );


                    if (str_contains($namaAplikasi, 'siap digital')) {

                        $icon = 'bi-globe2';
                        $iconColor = 'blue';


                    } elseif (str_contains($namaAplikasi, 'lapor')) {

                        $icon = 'bi-megaphone-fill';
                        $iconColor = 'orange';


                    } elseif (str_contains($namaAplikasi, 'srikandi')) {

                        $icon = 'bi-folder2-open';
                        $iconColor = 'purple';


                    } elseif (str_contains($namaAplikasi, 'tatang')) {

                        $icon = 'bi-building';
                        $iconColor = 'red';


                    } elseif (str_contains($namaAplikasi, 'simkar')) {

                        $icon = 'bi-bar-chart-line';
                        $iconColor = 'cyan';


                    } elseif (str_contains($namaAplikasi, 'lantik')) {

                        $icon = 'bi-person-badge';
                        $iconColor = 'pink';


                    } elseif (str_contains($namaAplikasi, 'arahkan')) {

                        $icon = 'bi-water';
                        $iconColor = 'teal';


                    } elseif (str_contains($namaAplikasi, 'simardi')) {

                        $icon = 'bi-book';
                        $iconColor = 'green';


                    } elseif (str_contains($namaAplikasi, 'simda')) {

                        $icon = 'bi-building-gear';
                        $iconColor = 'indigo';


                    } elseif (str_contains($namaAplikasi, 'sismiop')) {

                        $icon = 'bi-cash-stack';
                        $iconColor = 'yellow';


                    } elseif (
                        str_contains($namaAplikasi, 'pbb')
                    ) {

                        $icon = 'bi-house';
                        $iconColor = 'brown';


                    } elseif (
                        str_contains($namaAplikasi, 'ikon pari')
                    ) {

                        $icon = 'bi-bank';
                        $iconColor = 'navy';


                    } elseif (
                        str_contains($namaAplikasi, 'infrastruktur')
                    ) {

                        $icon = 'bi-hdd-network';
                        $iconColor = 'teal';


                    } else {

                        $icon = 'bi-grid-1x2-fill';
                        $iconColor = 'blue';

                    }

                @endphp



                {{-- =================================================
                     CARD
                ================================================== --}}

                <div class="col-lg-4 col-md-6">


                    <div class="application-card">


                        {{-- ICON --}}

                        <div class="application-icon {{ $iconColor }}">

                            <i class="bi {{ $icon }}"></i>

                        </div>



                        {{-- OPD --}}

                        @if($aplikasi->opd)

                            <span class="application-opd">

                                {{ $aplikasi->opd }}

                            </span>

                        @endif



                        {{-- NAMA --}}

                        <h3 class="application-name">

                            {{ $aplikasi->nama }}

                        </h3>



                        {{-- DESKRIPSI --}}

                        <p class="application-description">

                            {{ $aplikasi->deskripsi ?: 'Belum ada deskripsi aplikasi.' }}

                        </p>



                        {{-- STATUS --}}

                        @if(
                            strtolower($aplikasi->status ?? '') === 'aktif'
                            ||
                            strtolower($aplikasi->status ?? '') === 'active'
                        )

                            <span class="application-status active">

                                <i class="bi bi-check-circle-fill"></i>

                                Aktif

                            </span>

                        @else

                            <span class="application-status inactive">

                                <i class="bi bi-x-circle-fill"></i>

                                {{ ucfirst($aplikasi->status ?? 'Nonaktif') }}

                            </span>

                        @endif



                        {{-- TOMBOL DETAIL --}}

                        <a
                            href="{{ url('/aplikasi/'.$aplikasi->id) }}"
                            class="application-button"
                        >

                            Lihat Detail

                            <i class="bi bi-arrow-right"></i>

                        </a>


                    </div>

                </div>


            @empty


                {{-- =================================================
                     JIKA BELUM ADA DATA
                ================================================== --}}

                <div class="col-12">

                    <div class="application-empty">

                        <div class="application-empty-icon">

                            <i class="bi bi-window-x"></i>

                        </div>


                        <h3>
                            Belum Ada Aplikasi
                        </h3>


                        <p>
                            Data aplikasi digital Kabupaten Karimun
                            belum tersedia.
                        </p>

                    </div>

                </div>


            @endforelse


        </div>

    </div>

</section>



{{-- =========================================================
     FOOTER
========================================================= --}}

@include('components.footer')



{{-- =========================================================
     STYLE
========================================================= --}}

<style>

/* =========================================================
   GENERAL
========================================================= */

body {

    font-family: 'Poppins', sans-serif;

    background: #f7f9fc;

}


/* =========================================================
   HERO
========================================================= */

.application-hero {

    position: relative;

    overflow: hidden;

    padding: 70px 0 80px;

    background:
        linear-gradient(
            135deg,
            #0878f9 0%,
            #108ee8 50%,
            #08a9d9 100%
        );

    color: white;

}


.application-hero::before {

    content: "";

    position: absolute;

    width: 350px;

    height: 350px;

    right: -120px;

    top: -180px;

    border-radius: 50%;

    background:
        rgba(255,255,255,.08);

}


.application-hero::after {

    content: "";

    position: absolute;

    width: 220px;

    height: 220px;

    left: -100px;

    bottom: -150px;

    border-radius: 50%;

    border: 1px solid
        rgba(255,255,255,.15);

}


.application-hero-content {

    position: relative;

    z-index: 2;

    max-width: 800px;

}


.application-badge {

    display: inline-flex;

    align-items: center;

    gap: 7px;

    padding: 8px 14px;

    margin-bottom: 20px;

    border: 1px solid
        rgba(255,255,255,.4);

    border-radius: 30px;

    background:
        rgba(255,255,255,.08);

    font-size: 12px;

    font-weight: 600;

}


.application-hero h1 {

    margin: 0;

    font-size: 48px;

    line-height: 1.15;

    font-weight: 800;

}


.application-hero h1 span {

    display: block;

    color: #dff5ff;

}


.application-hero p {

    max-width: 700px;

    margin-top: 22px;

    margin-bottom: 0;

    color:
        rgba(255,255,255,.92);

    font-size: 15px;

    line-height: 1.8;

}


/* =========================================================
   APPLICATION SECTION
========================================================= */

.application-section {

    padding: 55px 0 80px;

    background: #f7f9fc;

}


/* =========================================================
   HEADER
========================================================= */

.application-list-header {

    display: flex;

    justify-content: space-between;

    align-items: flex-end;

    gap: 20px;

    margin-bottom: 28px;

}


.section-label {

    display: inline-flex;

    align-items: center;

    gap: 7px;

    padding: 7px 12px;

    border-radius: 8px;

    background: #eef5ff;

    color: #0d6efd;

    font-size: 11px;

    font-weight: 700;

}


.application-list-header h2 {

    margin: 10px 0 3px;

    color: #0b1f3a;

    font-size: 28px;

    font-weight: 800;

}


.application-list-header p {

    margin: 0;

    color: #718096;

    font-size: 13px;

}


.application-count {

    display: inline-flex;

    align-items: center;

    gap: 7px;

    padding: 9px 13px;

    border: 1px solid #dbe4f0;

    border-radius: 10px;

    background: white;

    color: #1769e0;

    font-size: 12px;

    font-weight: 600;

    white-space: nowrap;

}


/* =========================================================
   CARD
========================================================= */

.application-card {

    height: 100%;

    min-height: 300px;

    display: flex;

    flex-direction: column;

    padding: 20px;

    border: 1px solid #e1e7ef;

    border-radius: 15px;

    background: white;

    box-shadow:
        0 8px 25px rgba(15, 40, 80, .05);

    transition:
        transform .25s ease,
        box-shadow .25s ease;

}


.application-card:hover {

    transform: translateY(-5px);

    box-shadow:
        0 15px 35px rgba(15, 40, 80, .10);

}


/* =========================================================
   ICON
========================================================= */

.application-icon {

    width: 44px;

    height: 44px;

    display: flex;

    align-items: center;

    justify-content: center;

    margin-bottom: 13px;

    border-radius: 11px;

    color: white;

    font-size: 20px;

}


/* WARNA ICON */

.application-icon.blue {

    background: #0d6efd;

}


.application-icon.orange {

    background: #f59e0b;

}


.application-icon.purple {

    background: #7c3aed;

}


.application-icon.red {

    background: #ef4444;

}


.application-icon.cyan {

    background: #06b6d4;

}


.application-icon.pink {

    background: #ec4899;

}


.application-icon.teal {

    background: #0d9488;

}


.application-icon.green {

    background: #16a34a;

}


.application-icon.indigo {

    background: #4f46e5;

}


.application-icon.yellow {

    background: #eab308;

}


.application-icon.brown {

    background: #92400e;

}


.application-icon.navy {

    background: #1e3a8a;

}


/* =========================================================
   OPD
========================================================= */

.application-opd {

    display: inline-block;

    width: fit-content;

    max-width: 100%;

    margin-bottom: 8px;

    padding: 5px 9px;

    border-radius: 20px;

    background: #edf4ff;

    color: #1261d6;

    font-size: 9px;

    font-weight: 600;

}


/* =========================================================
   NAMA
========================================================= */

.application-name {

    margin: 0 0 9px;

    color: #0b1f3a;

    font-size: 16px;

    font-weight: 700;

}


/* =========================================================
   DESKRIPSI
========================================================= */

.application-description {

    min-height: 70px;

    margin: 0 0 12px;

    color: #64748b;

    font-size: 12px;

    line-height: 1.7;

}


/* =========================================================
   STATUS
========================================================= */

.application-status {

    width: fit-content;

    display: inline-flex;

    align-items: center;

    gap: 5px;

    margin-bottom: 15px;

    font-size: 10px;

    font-weight: 600;

}


.application-status.active {

    color: #16a34a;

}


.application-status.inactive {

    color: #64748b;

}


/* =========================================================
   BUTTON
========================================================= */

.application-button {

    width: fit-content;

    display: inline-flex;

    align-items: center;

    gap: 7px;

    margin-top: auto;

    padding: 9px 14px;

    border-radius: 7px;

    background: #0d6efd;

    color: white;

    text-decoration: none;

    font-size: 11px;

    font-weight: 600;

    transition: .2s ease;

}


.application-button:hover {

    background: #095dcc;

    color: white;

    transform: translateX(2px);

}


/* =========================================================
   EMPTY
========================================================= */

.application-empty {

    padding: 60px 20px;

    text-align: center;

    border: 1px solid #e1e7ef;

    border-radius: 15px;

    background: white;

}


.application-empty-icon {

    width: 65px;

    height: 65px;

    display: flex;

    align-items: center;

    justify-content: center;

    margin: 0 auto 15px;

    border-radius: 50%;

    background: #eef5ff;

    color: #0d6efd;

    font-size: 27px;

}


.application-empty h3 {

    margin-bottom: 7px;

    color: #0b1f3a;

    font-size: 20px;

    font-weight: 700;

}


.application-empty p {

    margin: 0;

    color: #718096;

    font-size: 13px;

}


/* =========================================================
   RESPONSIVE
========================================================= */

@media (max-width: 991px) {

    .application-hero {

        padding: 60px 0 65px;

    }


    .application-hero h1 {

        font-size: 40px;

    }


    .application-list-header {

        align-items: flex-start;

        flex-direction: column;

    }

}


@media (max-width: 576px) {

    .application-hero {

        padding: 50px 0 55px;

    }


    .application-hero h1 {

        font-size: 34px;

    }


    .application-hero p {

        font-size: 13px;

    }


    .application-section {

        padding: 40px 0 60px;

    }


    .application-list-header h2 {

        font-size: 24px;

    }


    .application-card {

        min-height: 280px;

    }

}

</style>


</body>

</html>