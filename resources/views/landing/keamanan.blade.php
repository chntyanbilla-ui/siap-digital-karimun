<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>
        Keamanan - SIAP Digital Kabupaten Karimun
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


        {{-- MOBILE BUTTON --}}
        <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSIAP"
            aria-controls="navbarSIAP"
            aria-expanded="false"
            aria-label="Menu"
        >

            <i class="bi bi-list"></i>

        </button>


        {{-- MENU --}}
        <div
            class="collapse navbar-collapse"
            id="navbarSIAP"
        >

            <ul class="navbar-nav ms-auto align-items-lg-center">


                <li class="nav-item">

                    <a
                        href="{{ route('home') }}"
                        class="nav-link"
                    >
                        Beranda
                    </a>

                </li>


                <li class="nav-item">

                    <a
                        href="{{ route('proses-bisnis') }}"
                        class="nav-link"
                    >
                        Proses Bisnis
                    </a>

                </li>


                <li class="nav-item">

                    <a
                        href="{{ route('layanan') }}"
                        class="nav-link"
                    >
                        Layanan
                    </a>

                </li>


                <li class="nav-item">

                    <a
                        href="{{ route('aplikasi') }}"
                        class="nav-link"
                    >
                        Aplikasi
                    </a>

                </li>


                <li class="nav-item">

                    <a
                        href="{{ route('data-informasi') }}"
                        class="nav-link"
                    >
                        Data Informasi
                    </a>

                </li>


                <li class="nav-item">

                    <a
                        href="{{ route('infrastruktur') }}"
                        class="nav-link"
                    >
                        Infrastruktur
                    </a>

                </li>


                <li class="nav-item">

                    <a
                        href="{{ route('keamanan') }}"
                        class="nav-link active"
                    >
                        Keamanan
                    </a>

                </li>


                <li class="nav-item">

                    <a
                        href="{{ route('home') }}#tentang"
                        class="nav-link"
                    >
                        Tentang
                    </a>

                </li>


                <li class="nav-item nav-login">

                    <a
                        href="{{ route('login') }}"
                        class="btn btn-outline-primary"
                    >
                        Login
                    </a>

                </li>


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

<section class="security-hero">

    <div class="security-circle security-circle-one"></div>

    <div class="security-circle security-circle-two"></div>


    <div class="container">

        <div class="security-hero-content">


            {{-- ICON --}}
            <div class="security-hero-icon">

                <i class="bi bi-shield-lock"></i>

            </div>


            {{-- BADGE --}}
            <span class="security-hero-badge">

                KEAMANAN DIGITAL

            </span>


            {{-- TITLE --}}
            <h1>

                Keamanan

                <span>
                    Digital Kabupaten Karimun
                </span>

            </h1>


            {{-- DESCRIPTION --}}
            <p>

                Informasi mengenai keamanan sistem,
                perlindungan jaringan, pencadangan data,
                dan keamanan layanan digital Pemerintah
                Kabupaten Karimun.

            </p>


        </div>

    </div>

</section>



{{-- =========================================================
     DAFTAR KEAMANAN
========================================================= --}}

<section class="security-list-section">

    <div class="container">


        {{-- HEADER --}}
        <div class="security-list-header">

            <div>

                <span class="security-section-label">

                    INFORMASI KEAMANAN

                </span>


                <h2>

                    Keamanan Digital

                </h2>


                <p>

                    Daftar informasi keamanan yang tersedia
                    pada sistem SIAP Digital Kabupaten Karimun.

                </p>

            </div>


            {{-- JUMLAH DATA --}}
            <div class="security-count">

                <i class="bi bi-shield-lock"></i>

                <span>

                    {{ $keamanans->count() }} Data Keamanan

                </span>

            </div>

        </div>



        {{-- =================================================
             CARD
        ================================================== --}}

        <div class="row g-4">


            @forelse($keamanans as $keamanan)


                <div class="col-xl-4 col-md-6">


                    <div class="security-card">


                        {{-- TOP CARD --}}
                        <div class="security-card-top">


                            {{-- =================================================
                                 ICON DINAMIS
                            ================================================= --}}

                            @php

                                $teksKeamanan = strtolower(
                                    ($keamanan->kategori ?? '') . ' ' .
                                    ($keamanan->nama ?? '') . ' ' .
                                    ($keamanan->deskripsi ?? '')
                                );


                                /*
                                |--------------------------------------------------------------------------
                                | KOMUNIKASI SANDI
                                |--------------------------------------------------------------------------
                                */
                                if (
                                    str_contains($teksKeamanan, 'komunikasi sandi') ||
                                    str_contains($teksKeamanan, 'jaring komunikasi') ||
                                    str_contains($teksKeamanan, 'komunikasi')
                                ) {

                                    $securityIcon = 'bi-broadcast-pin';
                                    $securityColor = 'cyan';

                                }


                                /*
                                |--------------------------------------------------------------------------
                                | DOKUMEN
                                |--------------------------------------------------------------------------
                                */
                                elseif (
                                    str_contains($teksKeamanan, 'dokumen digital') ||
                                    str_contains($teksKeamanan, 'keamanan dokumen') ||
                                    str_contains($teksKeamanan, 'dokumen')
                                ) {

                                    $securityIcon = 'bi-file-earmark-lock';
                                    $securityColor = 'red';

                                }


                                /*
                                |--------------------------------------------------------------------------
                                | RISIKO
                                |--------------------------------------------------------------------------
                                */
                                elseif (
                                    str_contains($teksKeamanan, 'risiko') ||
                                    str_contains($teksKeamanan, 'manajemen risiko')
                                ) {

                                    $securityIcon = 'bi-exclamation-triangle';
                                    $securityColor = 'orange';

                                }


                                /*
                                |--------------------------------------------------------------------------
                                | INSIDEN / SIBER
                                |--------------------------------------------------------------------------
                                */
                                elseif (
                                    str_contains($teksKeamanan, 'insiden') ||
                                    str_contains($teksKeamanan, 'incident') ||
                                    str_contains($teksKeamanan, 'siber')
                                ) {

                                    $securityIcon = 'bi-bug';
                                    $securityColor = 'purple';

                                }


                                /*
                                |--------------------------------------------------------------------------
                                | AUDIT
                                |--------------------------------------------------------------------------
                                */
                                elseif (
                                    str_contains($teksKeamanan, 'audit')
                                ) {

                                    $securityIcon = 'bi-clipboard2-check';
                                    $securityColor = 'green';

                                }


                                /*
                                |--------------------------------------------------------------------------
                                | BACKUP / RECOVERY
                                |--------------------------------------------------------------------------
                                */
                                elseif (
                                    str_contains($teksKeamanan, 'backup') ||
                                    str_contains($teksKeamanan, 'recovery') ||
                                    str_contains($teksKeamanan, 'pencadangan') ||
                                    str_contains($teksKeamanan, 'pemulihan')
                                ) {

                                    $securityIcon = 'bi-database-check';
                                    $securityColor = 'blue';

                                }


                                /*
                                |--------------------------------------------------------------------------
                                | AKSES / AUTENTIKASI
                                |--------------------------------------------------------------------------
                                */
                                elseif (
                                    str_contains($teksKeamanan, 'akses') ||
                                    str_contains($teksKeamanan, 'autentikasi') ||
                                    str_contains($teksKeamanan, 'identitas')
                                ) {

                                    $securityIcon = 'bi-person-lock';
                                    $securityColor = 'indigo';

                                }


                                /*
                                |--------------------------------------------------------------------------
                                | PERSANDIAN / ENKRIPSI
                                |--------------------------------------------------------------------------
                                */
                                elseif (
                                    str_contains($teksKeamanan, 'persandian') ||
                                    str_contains($teksKeamanan, 'enkripsi') ||
                                    str_contains($teksKeamanan, 'kriptografi')
                                ) {

                                    $securityIcon = 'bi-key';
                                    $securityColor = 'yellow';

                                }


                                /*
                                |--------------------------------------------------------------------------
                                | FIREWALL
                                |--------------------------------------------------------------------------
                                */
                                elseif (
                                    str_contains($teksKeamanan, 'firewall')
                                ) {

                                    $securityIcon = 'bi-router';
                                    $securityColor = 'blue';

                                }


                                /*
                                |--------------------------------------------------------------------------
                                | SSL / WEBSITE
                                |--------------------------------------------------------------------------
                                */
                                elseif (
                                    str_contains($teksKeamanan, 'ssl') ||
                                    str_contains($teksKeamanan, 'website') ||
                                    str_contains($teksKeamanan, 'sertifikat')
                                ) {

                                    $securityIcon = 'bi-globe-lock';
                                    $securityColor = 'teal';

                                }


                                /*
                                |--------------------------------------------------------------------------
                                | DATA / DATABASE
                                |--------------------------------------------------------------------------
                                */
                                elseif (
                                    str_contains($teksKeamanan, 'data') ||
                                    str_contains($teksKeamanan, 'database')
                                ) {

                                    $securityIcon = 'bi-database-lock';
                                    $securityColor = 'purple';

                                }


                                /*
                                |--------------------------------------------------------------------------
                                | JARINGAN
                                |--------------------------------------------------------------------------
                                */
                                elseif (
                                    str_contains($teksKeamanan, 'jaringan') ||
                                    str_contains($teksKeamanan, 'network')
                                ) {

                                    $securityIcon = 'bi-router';
                                    $securityColor = 'blue';

                                }


                                /*
                                |--------------------------------------------------------------------------
                                | MONITORING
                                |--------------------------------------------------------------------------
                                */
                                elseif (
                                    str_contains($teksKeamanan, 'monitor') ||
                                    str_contains($teksKeamanan, 'pemantauan')
                                ) {

                                    $securityIcon = 'bi-eye';
                                    $securityColor = 'cyan';

                                }


                                /*
                                |--------------------------------------------------------------------------
                                | SISTEM / APLIKASI
                                |--------------------------------------------------------------------------
                                */
                                elseif (
                                    str_contains($teksKeamanan, 'sistem') ||
                                    str_contains($teksKeamanan, 'aplikasi')
                                ) {

                                    $securityIcon = 'bi-shield-check';
                                    $securityColor = 'green';

                                }


                                /*
                                |--------------------------------------------------------------------------
                                | DEFAULT
                                |--------------------------------------------------------------------------
                                */
                                else {

                                    $securityIcon = 'bi-shield-lock';
                                    $securityColor = 'indigo';

                                }

                            @endphp


                            <div class="security-icon {{ $securityColor }}">

                                <i class="bi {{ $securityIcon }}"></i>

                            </div>


                            {{-- STATUS --}}
                            @if($keamanan->status)

                                <span class="security-status">

                                    <i class="bi bi-check-circle-fill"></i>

                                    {{ $keamanan->status }}

                                </span>

                            @endif


                        </div>



                        {{-- CONTENT --}}
                        <div class="security-card-content">


                            {{-- NAMA --}}
                            <h3>

                                {{ $keamanan->nama }}

                            </h3>


                            {{-- KATEGORI --}}
                            @if($keamanan->kategori)

                                <span class="security-category">

                                    <i class="bi bi-tag"></i>

                                    {{ $keamanan->kategori }}

                                </span>

                            @endif


                            {{-- DESKRIPSI --}}
                            <p>

                                {{ \Illuminate\Support\Str::limit(
                                    $keamanan->deskripsi ?? 'Tidak ada deskripsi.',
                                    150
                                ) }}

                            </p>


                        </div>



                        {{-- FOOTER --}}
                        <div class="security-card-footer">

                            <a
                                href="{{ route('keamanan.detail', $keamanan->id) }}"
                                class="security-detail-button"
                            >

                                Lihat Detail

                                <i class="bi bi-arrow-right"></i>

                            </a>

                        </div>


                    </div>

                </div>


            @empty


                {{-- EMPTY --}}
                <div class="col-12">

                    <div class="security-empty">


                        <div class="security-empty-icon">

                            <i class="bi bi-shield-x"></i>

                        </div>


                        <h3>

                            Belum Ada Data Keamanan

                        </h3>


                        <p>

                            Belum tersedia informasi keamanan
                            digital Kabupaten Karimun.

                        </p>


                    </div>

                </div>


            @endforelse


        </div>

    </div>

</section>



{{-- =========================================================
     INFORMASI KEAMANAN
========================================================= --}}

<section class="security-about">

    <div class="container">

        <div class="row align-items-center g-5">


            {{-- KIRI --}}
            <div class="col-lg-6">


                <span class="security-section-label">

                    TENTANG KEAMANAN

                </span>


                <h2>

                    Keamanan Digital

                    <span>
                        Kabupaten Karimun
                    </span>

                </h2>


                <p>

                    Keamanan digital merupakan bagian penting
                    dalam penyelenggaraan pemerintahan berbasis
                    elektronik.

                </p>


                <p>

                    Perlindungan terhadap sistem, jaringan,
                    dan data diperlukan untuk menjaga
                    keberlangsungan layanan digital pemerintah.

                </p>


            </div>



            {{-- KANAN --}}
            <div class="col-lg-6">


                {{-- BOX 1 --}}
                <div class="security-info-box">

                    <div class="security-info-icon">

                        <i class="bi bi-shield-check"></i>

                    </div>


                    <div>

                        <h4>

                            Perlindungan Sistem

                        </h4>


                        <p>

                            Mendukung perlindungan terhadap
                            sistem dan layanan digital pemerintah.

                        </p>

                    </div>

                </div>



                {{-- BOX 2 --}}
                <div class="security-info-box">

                    <div class="security-info-icon">

                        <i class="bi bi-lock"></i>

                    </div>


                    <div>

                        <h4>

                            Perlindungan Data

                        </h4>


                        <p>

                            Menjaga keamanan dan kerahasiaan
                            data dalam sistem pemerintahan.

                        </p>

                    </div>

                </div>



                {{-- BOX 3 --}}
                <div class="security-info-box">

                    <div class="security-info-icon">

                        <i class="bi bi-router"></i>

                    </div>


                    <div>

                        <h4>

                            Keamanan Jaringan

                        </h4>


                        <p>

                            Mendukung keamanan jaringan yang
                            digunakan dalam layanan pemerintahan.

                        </p>

                    </div>

                </div>


            </div>

        </div>

    </div>

</section>



{{-- =========================================================
     CTA
========================================================= --}}

<section class="security-cta">

    <div class="container">

        <div class="security-cta-content">


            <div class="security-cta-icon">

                <i class="bi bi-shield-check"></i>

            </div>


            <h2>

                Membangun Pemerintahan Digital yang Aman

            </h2>


            <p>

                Keamanan sistem dan data menjadi bagian penting
                dalam mewujudkan layanan digital Kabupaten Karimun
                yang terpercaya.

            </p>


            <a
                href="{{ route('home') }}"
                class="security-cta-button"
            >

                <i class="bi bi-house"></i>

                Kembali ke Beranda

            </a>


        </div>

    </div>

</section>



{{-- =========================================================
     FOOTER
========================================================= --}}

@include('components.footer')



<style>

/* =========================================================
   BODY
========================================================= */

body {

    font-family: 'Poppins', sans-serif;

    background: #f7f9fc;

}



/* =========================================================
   HERO
========================================================= */

.security-hero {

    position: relative;

    overflow: hidden;

    min-height: 390px;

    display: flex;

    align-items: center;

    background:
        linear-gradient(
            135deg,
            #075fe5 0%,
            #0878eb 45%,
            #08aee8 100%
        );

    color: #ffffff;

}


.security-circle {

    position: absolute;

    border-radius: 50%;

    pointer-events: none;

}


.security-circle-one {

    width: 500px;

    height: 500px;

    right: -150px;

    top: -260px;

    background: rgba(255,255,255,.08);

}


.security-circle-two {

    width: 350px;

    height: 350px;

    left: -170px;

    bottom: -250px;

    background: rgba(255,255,255,.06);

}


.security-hero-content {

    position: relative;

    z-index: 2;

    max-width: 850px;

    padding: 70px 0;

}


.security-hero-icon {

    width: 62px;

    height: 62px;

    margin-bottom: 17px;

    display: flex;

    align-items: center;

    justify-content: center;

    border-radius: 16px;

    background: rgba(255,255,255,.15);

    border: 1px solid rgba(255,255,255,.25);

    color: #ffffff;

    font-size: 27px;

}


.security-hero-badge {

    display: inline-flex;

    padding: 7px 14px;

    margin-bottom: 17px;

    border-radius: 20px;

    background: rgba(255,255,255,.13);

    border: 1px solid rgba(255,255,255,.25);

    color: #ffffff;

    font-size: 11px;

    font-weight: 700;

    letter-spacing: .8px;

}


.security-hero h1 {

    margin: 0;

    color: #ffffff;

    font-size: 48px;

    line-height: 1.2;

    font-weight: 800;

}


.security-hero h1 span {

    display: block;

    color: #dff4ff;

}


.security-hero p {

    max-width: 760px;

    margin: 20px 0 0;

    color: rgba(255,255,255,.93);

    font-size: 15px;

    line-height: 1.8;

}



/* =========================================================
   LIST
========================================================= */

.security-list-section {

    padding: 65px 0 85px;

    background: #f7f9fc;

}


.security-list-header {

    display: flex;

    align-items: flex-end;

    justify-content: space-between;

    gap: 25px;

    margin-bottom: 35px;

}


.security-section-label {

    display: inline-block;

    margin-bottom: 8px;

    color: #0d6efd;

    font-size: 11px;

    font-weight: 700;

    letter-spacing: 1px;

}


.security-list-header h2 {

    margin: 0 0 7px;

    color: #172033;

    font-size: 30px;

    font-weight: 700;

}


.security-list-header p {

    margin: 0;

    color: #667085;

    font-size: 14px;

}



/* =========================================================
   COUNT
========================================================= */

.security-count {

    display: flex;

    align-items: center;

    gap: 8px;

    padding: 10px 16px;

    background: #ffffff;

    border: 1px solid #dfe7f2;

    border-radius: 10px;

    color: #0d6efd;

    font-size: 12px;

    font-weight: 600;

    white-space: nowrap;

}



/* =========================================================
   CARD
========================================================= */

.security-card {

    height: 100%;

    min-height: 325px;

    padding: 25px;

    display: flex;

    flex-direction: column;

    background: #ffffff;

    border: 1px solid #e3e8ef;

    border-radius: 18px;

    box-shadow: 0 8px 25px rgba(15,23,42,.05);

    transition: all .25s ease;

}


.security-card:hover {

    transform: translateY(-6px);

    border-color: #bfd7fa;

    box-shadow: 0 15px 35px rgba(15,23,42,.09);

}



/* =========================================================
   CARD TOP
========================================================= */

.security-card-top {

    display: flex;

    align-items: flex-start;

    justify-content: space-between;

    gap: 12px;

    margin-bottom: 17px;

}



/* =========================================================
   ICON
========================================================= */

.security-icon {

    width: 58px;

    height: 58px;

    display: flex;

    align-items: center;

    justify-content: center;

    border-radius: 15px;

    font-size: 24px;

}


/* BIRU */
.security-icon.blue {

    background: #eaf3ff;

    color: #0d6efd;

}


/* HIJAU */
.security-icon.green {

    background: #e8f8ef;

    color: #198754;

}


/* UNGU */
.security-icon.purple {

    background: #f1eaff;

    color: #7c3aed;

}


/* MERAH */
.security-icon.red {

    background: #ffecec;

    color: #dc3545;

}


/* ORANGE */
.security-icon.orange {

    background: #fff3df;

    color: #f59e0b;

}


/* CYAN */
.security-icon.cyan {

    background: #e5f8fb;

    color: #0891b2;

}


/* INDIGO */
.security-icon.indigo {

    background: #eeedff;

    color: #4f46e5;

}


/* KUNING */
.security-icon.yellow {

    background: #fff8dc;

    color: #ca8a04;

}


/* TEAL */
.security-icon.teal {

    background: #e4f8f5;

    color: #0f766e;

}



/* =========================================================
   STATUS
========================================================= */

.security-status {

    display: inline-flex;

    align-items: center;

    gap: 5px;

    padding: 6px 10px;

    border-radius: 20px;

    background: #eaf8f0;

    color: #198754;

    font-size: 10px;

    font-weight: 700;

}


.security-status i {

    font-size: 9px;

}



/* =========================================================
   CONTENT
========================================================= */

.security-card-content {

    flex: 1;

}


.security-card-content h3 {

    margin: 0 0 11px;

    color: #172033;

    font-size: 19px;

    font-weight: 700;

    line-height: 1.45;

}


.security-card-content p {

    margin: 15px 0 0;

    color: #667085;

    font-size: 13px;

    line-height: 1.7;

}



/* =========================================================
   CATEGORY
========================================================= */

.security-category {

    display: inline-flex;

    align-items: center;

    gap: 5px;

    width: fit-content;

    padding: 5px 10px;

    border-radius: 20px;

    background: #edf5ff;

    color: #1763d1;

    font-size: 10px;

    font-weight: 700;

}



/* =========================================================
   FOOTER CARD
========================================================= */

.security-card-footer {

    padding-top: 20px;

    margin-top: auto;

    border-top: 1px solid #edf0f4;

}


.security-detail-button {

    display: inline-flex;

    align-items: center;

    gap: 7px;

    padding: 10px 16px;

    border-radius: 9px;

    background: #0d6efd;

    border: 1px solid #0d6efd;

    color: #ffffff !important;

    text-decoration: none;

    font-size: 12px;

    font-weight: 600;

    transition: all .2s ease;

}


.security-detail-button:hover {

    background: #0957d0;

    border-color: #0957d0;

    color: #ffffff !important;

    transform: translateX(3px);

}



/* =========================================================
   EMPTY
========================================================= */

.security-empty {

    padding: 65px 20px;

    text-align: center;

    background: #ffffff;

    border: 1px dashed #d4dce8;

    border-radius: 18px;

}


.security-empty-icon {

    width: 65px;

    height: 65px;

    margin: 0 auto 15px;

    display: flex;

    align-items: center;

    justify-content: center;

    border-radius: 16px;

    background: #edf5ff;

    color: #0d6efd;

    font-size: 28px;

}


.security-empty h3 {

    margin: 0 0 8px;

    color: #172033;

    font-size: 19px;

    font-weight: 700;

}


.security-empty p {

    margin: 0;

    color: #64748b;

    font-size: 13px;

}



/* =========================================================
   ABOUT
========================================================= */

.security-about {

    padding: 90px 0;

    background: #ffffff;

}


.security-about h2 {

    margin: 0 0 22px;

    color: #172033;

    font-size: 38px;

    line-height: 1.25;

    font-weight: 700;

}


.security-about h2 span {

    color: #0d6efd;

}


.security-about > .container p {

    max-width: 600px;

    color: #667085;

    font-size: 14px;

    line-height: 1.8;

}



/* =========================================================
   INFO BOX
========================================================= */

.security-info-box {

    display: flex;

    align-items: flex-start;

    gap: 17px;

    padding: 21px;

    margin-bottom: 17px;

    background: #f8fbff;

    border: 1px solid #e1ebf8;

    border-radius: 16px;

    transition: all .25s ease;

}


.security-info-box:hover {

    transform: translateX(5px);

    background: #f0f7ff;

}


.security-info-icon {

    width: 52px;

    height: 52px;

    min-width: 52px;

    display: flex;

    align-items: center;

    justify-content: center;

    border-radius: 14px;

    background: #0d6efd;

    color: #ffffff;

    font-size: 21px;

}


.security-info-box h4 {

    margin: 0 0 6px;

    color: #172033;

    font-size: 17px;

    font-weight: 700;

}


.security-info-box p {

    margin: 0;

    color: #667085;

    font-size: 13px;

    line-height: 1.7;

}



/* =========================================================
   CTA
========================================================= */

.security-cta {

    padding: 80px 0;

    text-align: center;

    background:
        linear-gradient(
            135deg,
            #075fe5,
            #08aee8
        );

    color: #ffffff;

}


.security-cta-content {

    max-width: 700px;

    margin: auto;

}


.security-cta-icon {

    width: 68px;

    height: 68px;

    margin: 0 auto 20px;

    display: flex;

    align-items: center;

    justify-content: center;

    border-radius: 18px;

    background: rgba(255,255,255,.15);

    border: 1px solid rgba(255,255,255,.25);

    font-size: 28px;

}


.security-cta h2 {

    margin-bottom: 14px;

    color: #ffffff;

    font-size: 33px;

    font-weight: 700;

}


.security-cta p {

    margin-bottom: 25px;

    color: rgba(255,255,255,.9);

    font-size: 14px;

    line-height: 1.8;

}


.security-cta-button {

    display: inline-flex;

    align-items: center;

    gap: 8px;

    padding: 11px 19px;

    border-radius: 9px;

    background: #ffffff;

    color: #0d6efd !important;

    text-decoration: none;

    font-size: 12px;

    font-weight: 600;

    transition: .2s ease;

}


.security-cta-button:hover {

    color: #0957d0 !important;

    transform: translateY(-3px);

    box-shadow: 0 10px 25px rgba(0,0,0,.15);

}



/* =========================================================
   RESPONSIVE
========================================================= */

@media (max-width: 991px) {

    .security-hero {

        min-height: 360px;

    }


    .security-hero h1 {

        font-size: 40px;

    }


    .security-list-header {

        align-items: flex-start;

        flex-direction: column;

    }

}


@media (max-width: 767px) {

    .security-hero {

        min-height: 330px;

    }


    .security-hero-content {

        padding: 55px 15px;

    }


    .security-hero h1 {

        font-size: 34px;

    }


    .security-hero p {

        font-size: 13px;

    }


    .security-list-section {

        padding: 50px 0 65px;

    }


    .security-about {

        padding: 65px 0;

    }


    .security-about h2 {

        font-size: 30px;

    }


    .security-cta {

        padding: 65px 15px;

    }


    .security-cta h2 {

        font-size: 27px;

    }

}


@media (max-width: 576px) {

    .security-hero h1 {

        font-size: 30px;

    }


    .security-card {

        min-height: 300px;

        padding: 22px;

    }


    .security-detail-button {

        width: 100%;

        justify-content: center;

    }

}

</style>


</body>

</html>