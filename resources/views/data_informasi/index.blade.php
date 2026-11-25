@extends('layouts.app')

@section('content')

{{-- =========================================================
     HERO DATA INFORMASI
========================================================= --}}

<section class="data-hero">

    <div class="data-hero-circle data-hero-circle-one"></div>
    <div class="data-hero-circle data-hero-circle-two"></div>

    <div class="container">

        <div class="data-hero-content">

            {{-- BADGE --}}
            <div class="data-hero-badge">

                <i class="bi bi-database"></i>

                DATA INFORMASI

            </div>


            {{-- JUDUL --}}
            <h1>

                Data Informasi

                <span>
                    Kabupaten Karimun
                </span>

            </h1>


            {{-- DESKRIPSI --}}
            <p>

                Informasi dan data digital Kabupaten Karimun
                yang dapat digunakan sebagai sumber informasi publik
                dalam mendukung transparansi dan transformasi digital
                Pemerintah Kabupaten Karimun.

            </p>

        </div>

    </div>

</section>



{{-- =========================================================
     DAFTAR DATA
========================================================= --}}

<section class="public-data-section">

    <div class="container">


        {{-- HEADER --}}
        <div class="public-data-header">

            <div>

                <span class="public-section-label">
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
            <div class="public-data-total">

                <i class="bi bi-database"></i>

                <span>
                    {{ $dataInformasis->count() }} Data
                </span>

            </div>

        </div>



        {{-- =================================================
             CARD DATA
        ================================================== --}}

        <div class="row g-4">

            @forelse($dataInformasis as $item)

                @php

                    /*
                    |--------------------------------------------------------------------------
                    | KATEGORI
                    |--------------------------------------------------------------------------
                    */

                    $kategori = strtolower(
                        trim($item->kategori ?? '')
                    );


                    /*
                    |--------------------------------------------------------------------------
                    | ICON DAN WARNA BERDASARKAN KATEGORI
                    |--------------------------------------------------------------------------
                    */

                    $icon = 'bi-file-earmark-text-fill';

                    $iconClass = 'icon-default';


                    if (str_contains($kategori, 'statistik')) {

                        $icon = 'bi-bar-chart-fill';
                        $iconClass = 'icon-statistik';

                    }

                    elseif (str_contains($kategori, 'pendidikan')) {

                        $icon = 'bi-mortarboard-fill';
                        $iconClass = 'icon-pendidikan';

                    }

                    elseif (str_contains($kategori, 'kesehatan')) {

                        $icon = 'bi-heart-pulse-fill';
                        $iconClass = 'icon-kesehatan';

                    }

                    elseif (
                        str_contains($kategori, 'keuangan')
                        || str_contains($kategori, 'apbd')
                    ) {

                        $icon = 'bi-cash-stack';
                        $iconClass = 'icon-keuangan';

                    }

                    elseif (
                        str_contains($kategori, 'perencanaan')
                        || str_contains($kategori, 'pembangunan')
                    ) {

                        $icon = 'bi-graph-up-arrow';
                        $iconClass = 'icon-perencanaan';

                    }

                    elseif (
                        str_contains($kategori, 'pemerintahan')
                        || str_contains($kategori, 'pemerintah')
                    ) {

                        $icon = 'bi-building-fill';
                        $iconClass = 'icon-pemerintahan';

                    }

                    elseif (
                        str_contains($kategori, 'kependudukan')
                        || str_contains($kategori, 'penduduk')
                    ) {

                        $icon = 'bi-people-fill';
                        $iconClass = 'icon-kependudukan';

                    }

                    elseif (
                        str_contains($kategori, 'geografis')
                        || str_contains($kategori, 'geografi')
                        || str_contains($kategori, 'wilayah')
                    ) {

                        $icon = 'bi-geo-alt-fill';
                        $iconClass = 'icon-geografis';

                    }

                    elseif (
                        str_contains($kategori, 'sektoral')
                        || str_contains($kategori, 'data sektoral')
                    ) {

                        $icon = 'bi-database-fill';
                        $iconClass = 'icon-sektoral';

                    }

                    elseif (
                        str_contains($kategori, 'digital')
                        || str_contains($kategori, 'teknologi')
                    ) {

                        $icon = 'bi-pc-display';
                        $iconClass = 'icon-digital';

                    }

                    elseif (
                        str_contains($kategori, 'informasi')
                        || str_contains($kategori, 'publik')
                    ) {

                        $icon = 'bi-info-circle-fill';
                        $iconClass = 'icon-informasi';

                    }

                    elseif (
                        str_contains($kategori, 'peraturan')
                        || str_contains($kategori, 'hukum')
                    ) {

                        $icon = 'bi-file-earmark-text-fill';
                        $iconClass = 'icon-peraturan';

                    }

                    elseif (
                        str_contains($kategori, 'dokumen')
                        || str_contains($kategori, 'laporan')
                    ) {

                        $icon = 'bi-journal-text';
                        $iconClass = 'icon-dokumen';

                    }

                @endphp


                <div class="col-lg-4 col-md-6">

                    <div class="public-data-card">


                        {{-- =================================================
                             ICON
                        ================================================== --}}

                        <div class="public-data-icon {{ $iconClass }}">

                            <i class="bi {{ $icon }}"></i>

                        </div>



                        {{-- =================================================
                             KATEGORI
                        ================================================== --}}

                        @if(!empty($item->kategori))

                            <span class="public-category">

                                {{ $item->kategori }}

                            </span>

                        @else

                            <span class="public-category">

                                Data Publik

                            </span>

                        @endif



                        {{-- =================================================
                             CONTENT
                        ================================================== --}}

                        <div class="public-data-content">


                            {{-- JUDUL --}}

                            <h3>

                                @if(!empty($item->nama))

                                    {{ $item->nama }}

                                @elseif(!empty($item->judul))

                                    {{ $item->judul }}

                                @elseif(!empty($item->nama_data))

                                    {{ $item->nama_data }}

                                @else

                                    Data Informasi Kabupaten Karimun

                                @endif

                            </h3>



                            {{-- DESKRIPSI --}}

                            <p>

                                @if(!empty($item->deskripsi))

                                    {{ $item->deskripsi }}

                                @elseif(!empty($item->keterangan))

                                    {{ $item->keterangan }}

                                @else

                                    Informasi dan data publik
                                    Kabupaten Karimun.

                                @endif

                            </p>



                            {{-- BUTTON --}}

                            <a
                                href="{{ route('data-informasi.detail', $item->id) }}"
                                class="public-data-button"
                            >

                                <i class="bi bi-eye"></i>

                                Lihat Detail

                                <i class="bi bi-arrow-right"></i>

                            </a>


                        </div>


                    </div>

                </div>


            @empty


                {{-- =================================================
                     DATA KOSONG
                ================================================== --}}

                <div class="col-12">

                    <div class="public-empty">

                        <div class="public-empty-icon">

                            <i class="bi bi-database-x"></i>

                        </div>


                        <h3>
                            Data Belum Tersedia
                        </h3>


                        <p>

                            Belum ada data informasi
                            yang tersedia saat ini.

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

<section class="data-information-section">

    <div class="container">

        <div class="row align-items-center g-5">


            {{-- BAGIAN KIRI --}}

            <div class="col-lg-6">

                <span class="public-section-label">

                    TENTANG DATA

                </span>


                <h2 class="data-information-title">

                    Informasi Digital

                    <br>

                    Kabupaten Karimun

                </h2>


                <p class="data-information-text">

                    Data informasi merupakan bagian penting
                    dalam mendukung penyelenggaraan pemerintahan
                    berbasis digital.

                </p>


                <p class="data-information-text">

                    Melalui SIAP Digital, masyarakat dapat memperoleh
                    informasi secara lebih mudah, cepat, dan terstruktur.

                </p>

            </div>



            {{-- BAGIAN KANAN --}}

            <div class="col-lg-6">


                {{-- BOX 1 --}}

                <div class="data-information-box">

                    <div class="data-information-box-icon">

                        <i class="bi bi-bar-chart-line"></i>

                    </div>

                    <div>

                        <h4>
                            Data Terintegrasi
                        </h4>

                        <p>

                            Data dan informasi pemerintahan disajikan
                            secara terstruktur agar lebih mudah
                            diakses dan dipahami.

                        </p>

                    </div>

                </div>



                {{-- BOX 2 --}}

                <div class="data-information-box">

                    <div class="data-information-box-icon">

                        <i class="bi bi-shield-check"></i>

                    </div>

                    <div>

                        <h4>
                            Informasi Publik
                        </h4>

                        <p>

                            Mendukung keterbukaan informasi dan
                            transparansi Pemerintah Kabupaten Karimun.

                        </p>

                    </div>

                </div>



                {{-- BOX 3 --}}

                <div class="data-information-box">

                    <div class="data-information-box-icon">

                        <i class="bi bi-people"></i>

                    </div>

                    <div>

                        <h4>
                            Mudah Diakses
                        </h4>

                        <p>

                            Masyarakat dapat memperoleh informasi
                            digital dengan lebih cepat dan mudah.

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



{{-- =========================================================
     CSS
========================================================= --}}

<style>


/* =========================================================
   HERO
========================================================= */

.data-hero {

    position: relative;

    overflow: hidden;

    min-height: 395px;

    display: flex;

    align-items: center;

    background:
        linear-gradient(
            135deg,
            #0969e8 0%,
            #078ce8 50%,
            #08b5e8 100%
        ) !important;

    color: #ffffff;

}


/* =========================================================
   DEKORASI
========================================================= */

.data-hero-circle {

    position: absolute;

    border-radius: 50%;

    pointer-events: none;

}


.data-hero-circle-one {

    width: 480px;

    height: 480px;

    right: -130px;

    top: -220px;

    background: rgba(255,255,255,.08);

}


.data-hero-circle-two {

    width: 320px;

    height: 320px;

    left: -150px;

    bottom: -230px;

    background: rgba(255,255,255,.05);

}


/* =========================================================
   CONTENT
========================================================= */

.data-hero-content {

    position: relative;

    z-index: 5;

    max-width: 850px;

    padding: 75px 0;

}


/* =========================================================
   BADGE
========================================================= */

.data-hero-badge {

    display: inline-flex;

    align-items: center;

    gap: 8px;

    padding: 9px 17px;

    margin-bottom: 24px;

    border: 1px solid rgba(255,255,255,.35);

    border-radius: 30px;

    background: rgba(255,255,255,.12);

    color: #ffffff;

    font-size: 12px;

    font-weight: 700;

}


.data-hero-badge i {

    color: #ffffff;

}


/* =========================================================
   TITLE
========================================================= */

.data-hero h1 {

    margin: 0;

    color: #ffffff !important;

    font-size: 50px;

    line-height: 1.15;

    font-weight: 800;

}


.data-hero h1 span {

    display: block;

    color: #e4f4ff !important;

}


/* =========================================================
   DESCRIPTION
========================================================= */

.data-hero p {

    max-width: 800px;

    margin: 24px 0 0;

    color: rgba(255,255,255,.92) !important;

    font-size: 16px;

    line-height: 1.8;

}


/* =========================================================
   DATA SECTION
========================================================= */

.public-data-section {

    padding: 65px 0 85px;

    background: #f7f9fc;

}


/* =========================================================
   HEADER
========================================================= */

.public-data-header {

    display: flex;

    align-items: flex-end;

    justify-content: space-between;

    gap: 30px;

    margin-bottom: 35px;

}


.public-section-label {

    display: inline-block;

    margin-bottom: 8px;

    color: #0d6efd;

    font-size: 11px;

    font-weight: 700;

    letter-spacing: 1px;

}


.public-data-header h2 {

    margin: 0 0 8px;

    color: #172033;

    font-size: 30px;

    font-weight: 700;

}


.public-data-header p {

    margin: 0;

    color: #64748b;

    font-size: 14px;

}


/* =========================================================
   JUMLAH DATA
========================================================= */

.public-data-total {

    display: inline-flex;

    align-items: center;

    gap: 8px;

    padding: 10px 16px;

    background: #ffffff;

    border: 1px solid #e1e7ef;

    border-radius: 10px;

    color: #0d6efd;

    font-size: 12px;

    font-weight: 600;

    white-space: nowrap;

}


/* =========================================================
   CARD
========================================================= */

.public-data-card {

    height: 100%;

    min-height: 300px;

    padding: 26px;

    display: flex;

    flex-direction: column;

    background: #ffffff;

    border: 1px solid #e5eaf0;

    border-radius: 18px;

    box-shadow:
        0 8px 25px rgba(15,23,42,.05);

    transition: all .25s ease;

}


.public-data-card:hover {

    transform: translateY(-6px);

    border-color: #c9dcf7;

    box-shadow:
        0 16px 35px rgba(15,23,42,.09);

}


/* =========================================================
   ICON DASAR
========================================================= */

.public-data-icon {

    width: 56px;

    height: 56px;

    margin-bottom: 18px;

    display: flex;

    align-items: center;

    justify-content: center;

    border-radius: 14px;

    font-size: 23px;

    transition: .25s ease;

}


.public-data-card:hover .public-data-icon {

    transform: scale(1.08);

}


/* =========================================================
   WARNA ICON STATISTIK
========================================================= */

.icon-statistik {

    background: #e8f1ff;

    color: #0d6efd;

}


/* =========================================================
   WARNA ICON PENDIDIKAN
========================================================= */

.icon-pendidikan {

    background: #f0eaff;

    color: #7c3aed;

}


/* =========================================================
   WARNA ICON KESEHATAN
========================================================= */

.icon-kesehatan {

    background: #ffe8ed;

    color: #e11d48;

}


/* =========================================================
   WARNA ICON KEUANGAN
========================================================= */

.icon-keuangan {

    background: #fff4d6;

    color: #d97706;

}


/* =========================================================
   WARNA ICON PERENCANAAN
========================================================= */

.icon-perencanaan {

    background: #e5f8ee;

    color: #16a34a;

}


/* =========================================================
   WARNA ICON PEMERINTAHAN
========================================================= */

.icon-pemerintahan {

    background: #e6f4ff;

    color: #0284c7;

}


/* =========================================================
   WARNA ICON KEPENDUDUKAN
========================================================= */

.icon-kependudukan {

    background: #fff0e6;

    color: #ea580c;

}


/* =========================================================
   WARNA ICON GEOGRAFIS
========================================================= */

.icon-geografis {

    background: #e8f8ee;

    color: #059669;

}


/* =========================================================
   WARNA ICON SEKTORAL
========================================================= */

.icon-sektoral {

    background: #e9f8f8;

    color: #0891b2;

}


/* =========================================================
   WARNA ICON DIGITAL
========================================================= */

.icon-digital {

    background: #e9eaff;

    color: #4f46e5;

}


/* =========================================================
   WARNA ICON INFORMASI
========================================================= */

.icon-informasi {

    background: #e8f4ff;

    color: #2563eb;

}


/* =========================================================
   WARNA ICON PERATURAN
========================================================= */

.icon-peraturan {

    background: #f4eaff;

    color: #9333ea;

}


/* =========================================================
   WARNA ICON DOKUMEN
========================================================= */

.icon-dokumen {

    background: #e6f7f5;

    color: #0f766e;

}


/* =========================================================
   DEFAULT
========================================================= */

.icon-default {

    background: #edf5ff;

    color: #0d6efd;

}


/* =========================================================
   CATEGORY
========================================================= */

.public-category {

    width: fit-content;

    display: inline-flex;

    padding: 5px 10px;

    margin-bottom: 10px;

    border-radius: 20px;

    background: #edf5ff;

    color: #175cd3;

    font-size: 10px;

    font-weight: 700;

}


/* =========================================================
   CONTENT
========================================================= */

.public-data-content {

    display: flex;

    flex-direction: column;

    height: 100%;

}


.public-data-content h3 {

    margin: 0 0 10px;

    color: #172033;

    font-size: 19px;

    font-weight: 700;

    line-height: 1.4;

}


.public-data-content p {

    margin: 0;

    color: #667085;

    font-size: 13px;

    line-height: 1.7;

}


/* =========================================================
   BUTTON
========================================================= */

.public-data-button {

    display: inline-flex;

    align-items: center;

    justify-content: center;

    gap: 8px;

    width: fit-content;

    margin-top: auto;

    padding: 10px 16px;

    border-radius: 9px;

    background: #0d6efd;

    border: 1px solid #0d6efd;

    color: #ffffff !important;

    text-decoration: none;

    font-size: 12px;

    font-weight: 600;

    transition: .2s ease;

}


.public-data-button:hover {

    background: #0957d0;

    border-color: #0957d0;

    color: #ffffff !important;

    transform: translateX(2px);

}


/* =========================================================
   EMPTY
========================================================= */

.public-empty {

    padding: 70px 20px;

    text-align: center;

    background: #ffffff;

    border: 1px dashed #d6dee9;

    border-radius: 18px;

}


.public-empty-icon {

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


.public-empty h3 {

    margin: 0 0 8px;

    color: #172033;

    font-size: 19px;

    font-weight: 700;

}


.public-empty p {

    margin: 0;

    color: #64748b;

    font-size: 13px;

}


/* =========================================================
   INFORMATION TAMBAHAN
========================================================= */

.data-information-section {

    padding: 90px 0;

    background: #ffffff;

}


.data-information-title {

    margin: 0 0 22px;

    color: #172033;

    font-size: 38px;

    line-height: 1.25;

    font-weight: 700;

}


.data-information-text {

    max-width: 600px;

    margin-bottom: 15px;

    color: #667085;

    font-size: 15px;

    line-height: 1.8;

}


/* =========================================================
   INFORMATION BOX
========================================================= */

.data-information-box {

    display: flex;

    align-items: flex-start;

    gap: 18px;

    padding: 22px;

    margin-bottom: 18px;

    background: #f8fbff;

    border: 1px solid #e3edf9;

    border-radius: 16px;

    transition: .25s ease;

}


.data-information-box:hover {

    transform: translateX(5px);

    background: #f0f7ff;

}


.data-information-box-icon {

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


.data-information-box h4 {

    margin: 0 0 6px;

    color: #172033;

    font-size: 17px;

    font-weight: 700;

}


.data-information-box p {

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

    background:
        linear-gradient(
            135deg,
            #0969e8,
            #08aeea
        );

    color: #ffffff;

    text-align: center;

}


.data-cta-content {

    max-width: 700px;

    margin: auto;

}


.data-cta-icon {

    width: 70px;

    height: 70px;

    margin: 0 auto 20px;

    display: flex;

    align-items: center;

    justify-content: center;

    border-radius: 20px;

    background: rgba(255,255,255,.15);

    border: 1px solid rgba(255,255,255,.25);

    font-size: 29px;

}


.data-cta h2 {

    margin-bottom: 15px;

    color: #ffffff;

    font-size: 34px;

    font-weight: 700;

}


.data-cta p {

    margin-bottom: 25px;

    color: rgba(255,255,255,.9);

    font-size: 15px;

    line-height: 1.8;

}


.data-cta-button {

    display: inline-flex;

    align-items: center;

    gap: 8px;

    padding: 12px 20px;

    background: #ffffff;

    border-radius: 10px;

    color: #0d6efd !important;

    text-decoration: none;

    font-size: 13px;

    font-weight: 600;

    transition: .25s ease;

}


.data-cta-button:hover {

    transform: translateY(-3px);

    color: #0957d0 !important;

    box-shadow:
        0 10px 25px rgba(0,0,0,.15);

}


/* =========================================================
   RESPONSIVE
========================================================= */

@media (max-width: 991px) {

    .data-hero {

        min-height: 380px;

    }


    .data-hero-content {

        padding: 60px 0;

    }


    .data-hero h1 {

        font-size: 40px;

    }


    .public-data-header {

        align-items: flex-start;

        flex-direction: column;

    }


    .data-information-title {

        font-size: 34px;

    }

}


@media (max-width: 767px) {

    .data-hero {

        min-height: 350px;

    }


    .data-hero-content {

        padding: 55px 20px;

    }


    .data-hero h1 {

        font-size: 34px;

    }


    .data-hero p {

        font-size: 14px;

    }


    .public-data-section {

        padding: 55px 0 65px;

    }


    .data-information-section {

        padding: 65px 0;

    }


    .data-information-title {

        font-size: 30px;

    }


    .data-cta {

        padding: 65px 20px;

    }


    .data-cta h2 {

        font-size: 28px;

    }

}


@media (max-width: 576px) {

    .data-hero {

        min-height: 330px;

    }


    .data-hero-content {

        padding: 45px 15px;

    }


    .data-hero h1 {

        font-size: 30px;

    }


    .data-hero p {

        font-size: 13px;

    }


    .data-hero-badge {

        padding: 8px 13px;

        font-size: 10px;

    }


    .public-data-card {

        min-height: 280px;

        padding: 21px;

    }


    .public-data-button {

        width: 100%;

    }


    .data-information-box {

        padding: 18px;

    }


    .data-information-box-icon {

        width: 45px;

        height: 45px;

        min-width: 45px;

        font-size: 19px;

    }


    .data-cta h2 {

        font-size: 25px;

    }

}

</style>

@endsection