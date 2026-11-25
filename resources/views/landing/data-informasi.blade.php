@extends('layouts.landing')

@section('content')

{{-- =========================================================
     HERO / HEADER BIRU
========================================================= --}}

<section class="data-page-hero">

    <div class="hero-circle hero-circle-one"></div>
    <div class="hero-circle hero-circle-two"></div>

    <div class="container">

        <div class="data-hero-content">

            {{-- ICON --}}
            <div class="data-hero-icon">
                <i class="bi bi-database"></i>
            </div>

            {{-- BADGE --}}
            <span class="data-hero-badge">
                <i class="bi bi-stars"></i>
                DOMAIN SPBE
            </span>

            {{-- TITLE --}}
            <h1>
                Data Informasi
                <span>
                    Kabupaten Karimun
                </span>
            </h1>

            {{-- DESCRIPTION --}}
            <p>
                Informasi dan data digital Kabupaten Karimun
                sebagai sumber informasi publik dalam mendukung
                transparansi dan transformasi digital Pemerintah
                Kabupaten Karimun.
            </p>

        </div>

    </div>

</section>



{{-- =========================================================
     DAFTAR DATA
========================================================= --}}

<section class="data-list-section">

    <div class="container">

        {{-- HEADER --}}

        <div class="data-list-header">

            <div>

                <span class="section-label">

                    <i class="bi bi-grid-fill"></i>

                    INFORMASI PUBLIK

                </span>

                <h2>
                    Data Kabupaten Karimun
                </h2>

                <p>
                    Jelajahi berbagai data dan informasi
                    yang tersedia.
                </p>

            </div>


            {{-- JUMLAH DATA --}}

            <div class="data-count">

                <i class="bi bi-database"></i>

                <span>

                    {{ $dataInformasis->count() }}

                    Data

                </span>

            </div>

        </div>



        {{-- =================================================
             CARD DATA
        ================================================== --}}

        <div class="row g-4">

            @forelse($dataInformasis as $data)

                @php

                    /*
                    |--------------------------------------------------------------------------
                    | ICON DAN WARNA BERDASARKAN KATEGORI
                    |--------------------------------------------------------------------------
                    */

                    $kategori = strtolower(
                        trim($data->kategori ?? '')
                    );


                    if (
                        str_contains($kategori, 'pendidikan') ||
                        str_contains($kategori, 'sekolah')
                    ) {

                        $dataIcon = 'bi-mortarboard-fill';
                        $dataColor = 'purple';

                    }

                    elseif (
                        str_contains($kategori, 'kesehatan')
                    ) {

                        $dataIcon = 'bi-heart-pulse-fill';
                        $dataColor = 'red';

                    }

                    elseif (
                        str_contains($kategori, 'keuangan') ||
                        str_contains($kategori, 'ekonomi') ||
                        str_contains($kategori, 'pajak')
                    ) {

                        $dataIcon = 'bi-bar-chart-fill';
                        $dataColor = 'green';

                    }

                    elseif (
                        str_contains($kategori, 'kependudukan') ||
                        str_contains($kategori, 'penduduk')
                    ) {

                        $dataIcon = 'bi-people-fill';
                        $dataColor = 'cyan';

                    }

                    elseif (
                        str_contains($kategori, 'pemerintahan') ||
                        str_contains($kategori, 'administrasi')
                    ) {

                        $dataIcon = 'bi-building-fill';
                        $dataColor = 'blue';

                    }

                    elseif (
                        str_contains($kategori, 'lingkungan')
                    ) {

                        $dataIcon = 'bi-tree-fill';
                        $dataColor = 'green';

                    }

                    elseif (
                        str_contains($kategori, 'sosial')
                    ) {

                        $dataIcon = 'bi-person-hearts';
                        $dataColor = 'pink';

                    }

                    elseif (
                        str_contains($kategori, 'geografis') ||
                        str_contains($kategori, 'geografi') ||
                        str_contains($kategori, 'peta')
                    ) {

                        $dataIcon = 'bi-geo-alt-fill';
                        $dataColor = 'orange';

                    }

                    elseif (
                        str_contains($kategori, 'statistik')
                    ) {

                        $dataIcon = 'bi-graph-up';
                        $dataColor = 'indigo';

                    }

                    elseif (
                        str_contains($kategori, 'pertanian') ||
                        str_contains($kategori, 'perkebunan')
                    ) {

                        $dataIcon = 'bi-flower1';
                        $dataColor = 'teal';

                    }

                    elseif (
                        str_contains($kategori, 'perikanan') ||
                        str_contains($kategori, 'kelautan')
                    ) {

                        $dataIcon = 'bi-water';
                        $dataColor = 'cyan';

                    }

                    elseif (
                        str_contains($kategori, 'pariwisata')
                    ) {

                        $dataIcon = 'bi-camera-fill';
                        $dataColor = 'orange';

                    }

                    else {

                        $dataIcon = 'bi-file-earmark-text-fill';
                        $dataColor = 'teal';

                    }

                @endphp


                <div class="col-xl-4 col-lg-4 col-md-6">

                    <article class="data-card">


                        {{-- ICON --}}

                        <div class="data-card-icon {{ $dataColor }}">

                            <i class="bi {{ $dataIcon }}"></i>

                        </div>



                        {{-- KATEGORI --}}

                        <span class="data-category">

                            {{ $data->kategori ?? 'Data Publik' }}

                        </span>



                        {{-- CONTENT --}}

                        <div class="data-card-content">


                            {{-- JUDUL --}}

                            <h3>

                                {{ $data->judul ?? 'Data Informasi Kabupaten Karimun' }}

                            </h3>



                            {{-- DESKRIPSI --}}

                            <p>

                                {{ \Illuminate\Support\Str::limit(
                                    $data->deskripsi
                                    ?? 'Informasi dan data publik Kabupaten Karimun.',
                                    120
                                ) }}

                            </p>



                            {{-- BUTTON --}}

                            <div class="data-button-wrapper">

                                @if($data->file)

                                    <a
                                        href="{{ asset('storage/' . $data->file) }}"
                                        target="_blank"
                                        rel="noopener noreferrer"
                                        class="data-detail-button"
                                    >

                                        <i class="bi bi-file-earmark-arrow-down"></i>

                                        Lihat Data

                                        <i class="bi bi-arrow-right"></i>

                                    </a>

                                @else

                                    <a
                                        href="{{ route(
                                            'data-informasi.detail',
                                            $data->id
                                        ) }}"
                                        class="data-detail-button"
                                    >

                                        <i class="bi bi-eye"></i>

                                        Lihat Detail

                                        <i class="bi bi-arrow-right"></i>

                                    </a>

                                @endif

                            </div>


                        </div>

                    </article>

                </div>


            @empty


                {{-- DATA KOSONG --}}

                <div class="col-12">

                    <div class="data-empty">

                        <div class="data-empty-icon">

                            <i class="bi bi-database-x"></i>

                        </div>

                        <h3>
                            Belum Ada Data
                        </h3>

                        <p>
                            Data informasi belum tersedia
                            saat ini.
                        </p>

                    </div>

                </div>


            @endforelse

        </div>

    </div>

</section>



{{-- =========================================================
     INFORMASI TAMBAHAN
========================================================= --}}

<section class="data-about-section">

    <div class="container">

        <div class="row align-items-center g-5">


            {{-- KIRI --}}

            <div class="col-lg-6">

                <span class="section-label">

                    <i class="bi bi-info-circle"></i>

                    TENTANG DATA

                </span>


                <h2>

                    Informasi Digital

                    <span>
                        Kabupaten Karimun
                    </span>

                </h2>


                <p>

                    Data informasi merupakan bagian penting
                    dalam mendukung penyelenggaraan pemerintahan
                    berbasis digital.

                </p>


                <p>

                    Melalui SIAP Digital, masyarakat dapat
                    memperoleh informasi secara lebih mudah,
                    cepat, dan terstruktur.

                </p>

            </div>



            {{-- KANAN --}}

            <div class="col-lg-6">


                {{-- BOX 1 --}}

                <div class="about-box">

                    <div class="about-icon blue">

                        <i class="bi bi-bar-chart-line"></i>

                    </div>

                    <div>

                        <h4>
                            Data Terintegrasi
                        </h4>

                        <p>

                            Data dan informasi pemerintahan
                            disajikan secara terstruktur agar
                            mudah diakses dan dipahami.

                        </p>

                    </div>

                </div>



                {{-- BOX 2 --}}

                <div class="about-box">

                    <div class="about-icon green">

                        <i class="bi bi-shield-check"></i>

                    </div>

                    <div>

                        <h4>
                            Informasi Publik
                        </h4>

                        <p>

                            Mendukung keterbukaan informasi
                            dan transparansi Pemerintah
                            Kabupaten Karimun.

                        </p>

                    </div>

                </div>



                {{-- BOX 3 --}}

                <div class="about-box">

                    <div class="about-icon purple">

                        <i class="bi bi-people"></i>

                    </div>

                    <div>

                        <h4>
                            Mudah Diakses
                        </h4>

                        <p>

                            Masyarakat dapat memperoleh
                            informasi digital dengan lebih
                            cepat dan mudah.

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

<section class="data-cta">

    <div class="container">

        <div class="data-cta-content">

            <div class="data-cta-icon">

                <i class="bi bi-globe2"></i>

            </div>


            <h2>
                Menuju Pemerintahan Digital
            </h2>


            <p>

                Bersama SIAP Digital Kabupaten Karimun,
                wujudkan layanan pemerintahan yang lebih
                transparan, efektif, dan mudah diakses.

            </p>


            <a
                href="{{ route('home') }}"
                class="data-cta-button"
            >

                <i class="bi bi-house"></i>

                Kembali ke Beranda

            </a>

        </div>

    </div>

</section>



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

.data-page-hero {

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


.hero-circle {

    position: absolute;

    border-radius: 50%;

    pointer-events: none;

}


.hero-circle-one {

    width: 500px;
    height: 500px;

    right: -150px;
    top: -260px;

    background: rgba(255,255,255,.08);

}


.hero-circle-two {

    width: 350px;
    height: 350px;

    left: -170px;
    bottom: -250px;

    background: rgba(255,255,255,.06);

}


.data-hero-content {

    position: relative;

    z-index: 2;

    max-width: 850px;

    padding: 70px 0;

}


.data-hero-icon {

    width: 62px;
    height: 62px;

    margin-bottom: 18px;

    display: flex;

    align-items: center;
    justify-content: center;

    border-radius: 16px;

    background: rgba(255,255,255,.15);

    border: 1px solid rgba(255,255,255,.25);

    color: #ffffff;

    font-size: 27px;

}


.data-hero-badge {

    display: inline-flex;

    align-items: center;

    gap: 6px;

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


.data-page-hero h1 {

    margin: 0;

    color: #ffffff;

    font-size: 48px;

    line-height: 1.2;

    font-weight: 800;

}


.data-page-hero h1 span {

    display: block;

    color: #dff4ff;

}


.data-page-hero p {

    max-width: 760px;

    margin: 20px 0 0;

    color: rgba(255,255,255,.93);

    font-size: 15px;

    line-height: 1.8;

}


/* =========================================================
   DATA LIST
========================================================= */

.data-list-section {

    padding: 65px 0 85px;

    background: #f7f9fc;

}


.data-list-header {

    display: flex;

    align-items: flex-end;

    justify-content: space-between;

    gap: 25px;

    margin-bottom: 35px;

}


.section-label {

    display: inline-flex;

    align-items: center;

    gap: 6px;

    margin-bottom: 8px;

    color: #0d6efd;

    font-size: 11px;

    font-weight: 700;

    letter-spacing: 1px;

}


.data-list-header h2 {

    margin: 0 0 7px;

    color: #172033;

    font-size: 30px;

    font-weight: 700;

}


.data-list-header p {

    margin: 0;

    color: #667085;

    font-size: 14px;

}


.data-count {

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

.data-card {

    height: 100%;

    min-height: 300px;

    padding: 26px;

    display: flex;

    flex-direction: column;

    background: #ffffff;

    border: 1px solid #e3e8ef;

    border-radius: 18px;

    box-shadow: 0 8px 25px rgba(15,23,42,.05);

    transition: all .25s ease;

}


.data-card:hover {

    transform: translateY(-6px);

    border-color: #bfd7fa;

    box-shadow:
        0 15px 35px rgba(15,23,42,.09);

}


/* =========================================================
   ICON DATA - DASAR
========================================================= */

.data-card-icon {

    width: 58px;
    height: 58px;

    margin-bottom: 17px;

    display: flex;

    align-items: center;
    justify-content: center;

    border-radius: 15px;

    font-size: 24px;

    transition: .25s ease;

}


.data-card:hover .data-card-icon {

    transform: translateY(-3px);

}


/* =========================================================
   ICON BIRU
========================================================= */

.data-card-icon.blue {

    background: #eaf3ff;

    color: #1264e8;

}


/* =========================================================
   ICON UNGU
========================================================= */

.data-card-icon.purple {

    background: #f2eaff;

    color: #7c3aed;

}


/* =========================================================
   ICON MERAH
========================================================= */

.data-card-icon.red {

    background: #ffeded;

    color: #dc3545;

}


/* =========================================================
   ICON HIJAU
========================================================= */

.data-card-icon.green {

    background: #e8f8ef;

    color: #159957;

}


/* =========================================================
   ICON CYAN
========================================================= */

.data-card-icon.cyan {

    background: #e6f9fc;

    color: #0891b2;

}


/* =========================================================
   ICON ORANGE
========================================================= */

.data-card-icon.orange {

    background: #fff3e5;

    color: #f59e0b;

}


/* =========================================================
   ICON INDIGO
========================================================= */

.data-card-icon.indigo {

    background: #eeedff;

    color: #4f46e5;

}


/* =========================================================
   ICON TEAL
========================================================= */

.data-card-icon.teal {

    background: #e6f8f5;

    color: #0f9f8f;

}


/* =========================================================
   ICON PINK
========================================================= */

.data-card-icon.pink {

    background: #ffeaf2;

    color: #db2777;

}


/* =========================================================
   CATEGORY
========================================================= */

.data-category {

    width: fit-content;

    margin-bottom: 10px;

    padding: 5px 10px;

    border-radius: 20px;

    background: #edf5ff;

    color: #1763d1;

    font-size: 10px;

    font-weight: 700;

}


/* =========================================================
   CONTENT
========================================================= */

.data-card-content {

    height: 100%;

    display: flex;

    flex-direction: column;

}


.data-card h3 {

    margin: 0 0 10px;

    color: #172033;

    font-size: 19px;

    font-weight: 700;

    line-height: 1.45;

}


.data-card p {

    margin: 0;

    color: #667085;

    font-size: 13px;

    line-height: 1.7;

}


/* =========================================================
   BUTTON WRAPPER
========================================================= */

.data-button-wrapper {

    margin-top: auto;

    padding-top: 22px;

}


/* =========================================================
   BUTTON
========================================================= */

.data-detail-button {

    width: fit-content;

    padding: 10px 16px;

    display: inline-flex;

    align-items: center;

    gap: 7px;

    border-radius: 9px;

    background: #0d6efd;

    border: 1px solid #0d6efd;

    color: #ffffff !important;

    text-decoration: none;

    font-size: 12px;

    font-weight: 600;

    transition: all .2s ease;

}


.data-detail-button:hover {

    background: #0957d0;

    border-color: #0957d0;

    color: #ffffff !important;

    transform: translateX(3px);

}


/* =========================================================
   EMPTY
========================================================= */

.data-empty {

    padding: 65px 20px;

    text-align: center;

    background: #ffffff;

    border: 1px dashed #d4dce8;

    border-radius: 18px;

}


.data-empty-icon {

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


.data-empty h3 {

    margin: 0 0 8px;

    color: #172033;

    font-size: 19px;

    font-weight: 700;

}


.data-empty p {

    margin: 0;

    color: #667085;

    font-size: 13px;

}


/* =========================================================
   ABOUT
========================================================= */

.data-about-section {

    padding: 90px 0;

    background: #ffffff;

}


.data-about-section h2 {

    margin: 0 0 22px;

    color: #172033;

    font-size: 38px;

    line-height: 1.25;

    font-weight: 700;

}


.data-about-section h2 span {

    display: block;

    color: #0d6efd;

}


.data-about-section > .container p {

    max-width: 600px;

    color: #667085;

    font-size: 14px;

    line-height: 1.8;

}


/* =========================================================
   ABOUT BOX
========================================================= */

.about-box {

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


.about-box:hover {

    transform: translateX(5px);

    background: #f0f7ff;

}


.about-icon {

    width: 52px;
    height: 52px;

    min-width: 52px;

    display: flex;

    align-items: center;
    justify-content: center;

    border-radius: 14px;

    color: #ffffff;

    font-size: 21px;

}


.about-icon.blue {

    background: #0d6efd;

}


.about-icon.green {

    background: #198754;

}


.about-icon.purple {

    background: #7c3aed;

}


.about-box h4 {

    margin: 0 0 6px;

    color: #172033;

    font-size: 17px;

    font-weight: 700;

}


.about-box p {

    margin: 0;

    color: #667085;

    font-size: 13px;

    line-height: 1.7;

}


/* =========================================================
   CTA
========================================================= */

.data-cta {

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


.data-cta-content {

    max-width: 700px;

    margin: auto;

}


.data-cta-icon {

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


.data-cta h2 {

    margin-bottom: 14px;

    color: #ffffff;

    font-size: 33px;

    font-weight: 700;

}


.data-cta p {

    margin-bottom: 25px;

    color: rgba(255,255,255,.9);

    font-size: 14px;

    line-height: 1.8;

}


.data-cta-button {

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


.data-cta-button:hover {

    color: #0957d0 !important;

    transform: translateY(-3px);

    box-shadow: 0 10px 25px rgba(0,0,0,.15);

}


/* =========================================================
   RESPONSIVE
========================================================= */

@media (max-width: 991px) {

    .data-page-hero {

        min-height: 360px;

    }


    .data-page-hero h1 {

        font-size: 40px;

    }


    .data-list-header {

        align-items: flex-start;

        flex-direction: column;

    }

}


@media (max-width: 767px) {

    .data-page-hero {

        min-height: 330px;

    }


    .data-hero-content {

        padding: 55px 15px;

    }


    .data-page-hero h1 {

        font-size: 34px;

    }


    .data-page-hero p {

        font-size: 13px;

    }


    .data-list-section {

        padding: 50px 0 65px;

    }


    .data-about-section {

        padding: 65px 0;

    }


    .data-about-section h2 {

        font-size: 30px;

    }


    .data-cta {

        padding: 65px 15px;

    }


    .data-cta h2 {

        font-size: 27px;

    }

}


@media (max-width: 576px) {

    .data-page-hero h1 {

        font-size: 30px;

    }


    .data-card {

        min-height: 280px;

        padding: 22px;

    }


    .data-detail-button {

        width: 100%;

        justify-content: center;

    }

}

</style>

@endsection