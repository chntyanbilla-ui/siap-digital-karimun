@extends('layouts.landing')

@section('content')

{{-- =========================================================
     HERO INFRASTRUKTUR
========================================================= --}}

<section class="infrastructure-hero">

    <div class="infrastructure-circle infrastructure-circle-one"></div>
    <div class="infrastructure-circle infrastructure-circle-two"></div>

    <div class="container">

        <div class="infrastructure-hero-content">

            {{-- ICON --}}
            <div class="infrastructure-hero-icon">

                <i class="bi bi-hdd-network"></i>

            </div>


            {{-- BADGE --}}
            <span class="infrastructure-hero-badge">

                <i class="bi bi-stars"></i>

                DOMAIN SPBE

            </span>


            {{-- TITLE --}}
            <h1>

                Infrastruktur

                <span>
                    Kabupaten Karimun
                </span>

            </h1>


            {{-- DESCRIPTION --}}
            <p>

                Infrastruktur pendukung Sistem Pemerintahan
                Berbasis Elektronik Kabupaten Karimun untuk
                menunjang penyelenggaraan pemerintahan digital.

            </p>

        </div>

    </div>

</section>



{{-- =========================================================
     DAFTAR INFRASTRUKTUR
========================================================= --}}

<section class="infrastructure-list">

    <div class="container">


        {{-- HEADER --}}

        <div class="infrastructure-header">

            <div>

                <span class="infrastructure-section-label">

                    <i class="bi bi-grid-fill"></i>

                    INFRASTRUKTUR DIGITAL

                </span>


                <h2>

                    Infrastruktur SPBE

                </h2>


                <p>

                    Daftar infrastruktur yang mendukung
                    sistem pemerintahan digital Kabupaten Karimun.

                </p>

            </div>


            {{-- JUMLAH DATA --}}

            <div class="infrastructure-count">

                <i class="bi bi-hdd-network"></i>

                <span>

                    {{ $infrastruktur->count() }}

                    Infrastruktur

                </span>

            </div>

        </div>



        {{-- =================================================
             CARD INFRASTRUKTUR
        ================================================== --}}

        <div class="row g-4">

            @forelse($infrastruktur as $item)

                @php

                    /*
                    |--------------------------------------------------------------------------
                    | ICON DAN WARNA BERDASARKAN JENIS
                    |--------------------------------------------------------------------------
                    */

                    $jenis = strtolower(
                        trim($item->jenis ?? '')
                    );


                    if (
                        str_contains($jenis, 'jaringan') ||
                        str_contains($jenis, 'network')
                    ) {

                        $icon = 'bi-diagram-3-fill';
                        $iconColor = 'blue';

                    }

                    elseif (
                        str_contains($jenis, 'server')
                    ) {

                        $icon = 'bi-server';
                        $iconColor = 'purple';

                    }

                    elseif (
                        str_contains($jenis, 'data') ||
                        str_contains($jenis, 'database')
                    ) {

                        $icon = 'bi-database-fill';
                        $iconColor = 'green';

                    }

                    elseif (
                        str_contains($jenis, 'internet') ||
                        str_contains($jenis, 'wifi')
                    ) {

                        $icon = 'bi-wifi';
                        $iconColor = 'orange';

                    }

                    elseif (
                        str_contains($jenis, 'keamanan') ||
                        str_contains($jenis, 'security')
                    ) {

                        $icon = 'bi-shield-lock-fill';
                        $iconColor = 'red';

                    }

                    elseif (
                        str_contains($jenis, 'cloud') ||
                        str_contains($jenis, 'awan')
                    ) {

                        $icon = 'bi-cloud-fill';
                        $iconColor = 'cyan';

                    }

                    elseif (
                        str_contains($jenis, 'komputer') ||
                        str_contains($jenis, 'perangkat')
                    ) {

                        $icon = 'bi-pc-display';
                        $iconColor = 'indigo';

                    }

                    elseif (
                        str_contains($jenis, 'telekomunikasi') ||
                        str_contains($jenis, 'komunikasi')
                    ) {

                        $icon = 'bi-broadcast-pin';
                        $iconColor = 'pink';

                    }

                    else {

                        $icon = 'bi-hdd-network-fill';
                        $iconColor = 'teal';

                    }

                @endphp


                <div class="col-xl-4 col-md-6">

                    <div class="infrastructure-card">


                        {{-- ICON --}}

                        <div class="infrastructure-icon {{ $iconColor }}">

                            <i class="bi {{ $icon }}"></i>

                        </div>



                        {{-- JENIS --}}

                        <span class="infrastructure-category">

                            {{ $item->jenis ?? 'Infrastruktur' }}

                        </span>



                        {{-- CONTENT --}}

                        <div class="infrastructure-content">


                            {{-- NAMA --}}

                            <h3>

                                {{ $item->nama }}

                            </h3>



                            {{-- DESKRIPSI --}}

                            <p>

                                {{ \Illuminate\Support\Str::limit(
                                    $item->deskripsi
                                    ?? 'Tidak ada deskripsi.',
                                    120
                                ) }}

                            </p>



                            {{-- LOKASI --}}

                            @if($item->lokasi)

                                <div class="infrastructure-location">

                                    <i class="bi bi-geo-alt-fill"></i>

                                    <span>

                                        {{ $item->lokasi }}

                                    </span>

                                </div>

                            @endif



                            {{-- BUTTON --}}

                            <a
                                href="{{ route(
                                    'infrastruktur.detail',
                                    $item->id
                                ) }}"
                                class="infrastructure-button"
                            >

                                <i class="bi bi-eye"></i>

                                Lihat Detail

                                <i class="bi bi-arrow-right"></i>

                            </a>


                        </div>


                    </div>

                </div>


            @empty


                {{-- DATA KOSONG --}}

                <div class="col-12">

                    <div class="infrastructure-empty">


                        <div class="infrastructure-empty-icon">

                            <i class="bi bi-hdd-network"></i>

                        </div>


                        <h3>

                            Belum Ada Data

                        </h3>


                        <p>

                            Data infrastruktur SPBE
                            belum tersedia saat ini.

                        </p>


                    </div>

                </div>


            @endforelse


        </div>

    </div>

</section>



{{-- =========================================================
     INFORMASI INFRASTRUKTUR
========================================================= --}}

<section class="infrastructure-about">

    <div class="container">

        <div class="row align-items-center g-5">


            {{-- KIRI --}}

            <div class="col-lg-6">

                <span class="infrastructure-section-label">

                    <i class="bi bi-info-circle"></i>

                    TENTANG INFRASTRUKTUR

                </span>


                <h2>

                    Infrastruktur Digital

                    <span>
                        Kabupaten Karimun
                    </span>

                </h2>


                <p>

                    Infrastruktur merupakan salah satu komponen
                    penting dalam mendukung penerapan Sistem
                    Pemerintahan Berbasis Elektronik.

                </p>


                <p>

                    Infrastruktur teknologi informasi yang memadai
                    membantu pemerintah dalam menyediakan layanan
                    digital yang cepat, aman, dan terintegrasi.

                </p>

            </div>



            {{-- KANAN --}}

            <div class="col-lg-6">


                {{-- BOX 1 --}}

                <div class="infrastructure-info-box">

                    <div class="infrastructure-info-icon blue">

                        <i class="bi bi-hdd-network"></i>

                    </div>


                    <div>

                        <h4>

                            Infrastruktur Terintegrasi

                        </h4>


                        <p>

                            Mendukung konektivitas dan integrasi
                            sistem pemerintahan digital.

                        </p>

                    </div>

                </div>



                {{-- BOX 2 --}}

                <div class="infrastructure-info-box">

                    <div class="infrastructure-info-icon orange">

                        <i class="bi bi-wifi"></i>

                    </div>


                    <div>

                        <h4>

                            Konektivitas Digital

                        </h4>


                        <p>

                            Mendukung akses jaringan dan komunikasi
                            digital antar perangkat daerah.

                        </p>

                    </div>

                </div>



                {{-- BOX 3 --}}

                <div class="infrastructure-info-box">

                    <div class="infrastructure-info-icon purple">

                        <i class="bi bi-server"></i>

                    </div>


                    <div>

                        <h4>

                            Pusat Infrastruktur

                        </h4>


                        <p>

                            Mendukung penyimpanan dan pengelolaan
                            sistem serta data pemerintahan.

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

<section class="infrastructure-cta">

    <div class="container">

        <div class="infrastructure-cta-content">


            <div class="infrastructure-cta-icon">

                <i class="bi bi-hdd-network"></i>

            </div>


            <h2>

                Infrastruktur Pemerintahan Digital

            </h2>


            <p>

                Membangun infrastruktur teknologi yang
                mendukung pemerintahan digital Kabupaten Karimun.

            </p>


            <a
                href="{{ route('home') }}"
                class="infrastructure-cta-button"
            >

                <i class="bi bi-house"></i>

                Kembali ke Beranda

            </a>


        </div>

    </div>

</section>



<style>

/* =========================================================
   HERO
========================================================= */

.infrastructure-hero {

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


.infrastructure-circle {

    position: absolute;

    border-radius: 50%;

    pointer-events: none;

}


.infrastructure-circle-one {

    width: 500px;

    height: 500px;

    right: -150px;

    top: -260px;

    background: rgba(255,255,255,.08);

}


.infrastructure-circle-two {

    width: 350px;

    height: 350px;

    left: -170px;

    bottom: -250px;

    background: rgba(255,255,255,.06);

}


.infrastructure-hero-content {

    position: relative;

    z-index: 2;

    max-width: 850px;

    padding: 70px 0;

}


.infrastructure-hero-icon {

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


.infrastructure-hero-badge {

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


.infrastructure-hero h1 {

    margin: 0;

    color: #ffffff;

    font-size: 48px;

    line-height: 1.2;

    font-weight: 800;

}


.infrastructure-hero h1 span {

    display: block;

    color: #dff4ff;

}


.infrastructure-hero p {

    max-width: 760px;

    margin: 20px 0 0;

    color: rgba(255,255,255,.93);

    font-size: 15px;

    line-height: 1.8;

}



/* =========================================================
   LIST
========================================================= */

.infrastructure-list {

    padding: 65px 0 85px;

    background: #f7f9fc;

}


.infrastructure-header {

    display: flex;

    align-items: flex-end;

    justify-content: space-between;

    gap: 25px;

    margin-bottom: 35px;

}


.infrastructure-section-label {

    display: inline-flex;

    align-items: center;

    gap: 6px;

    margin-bottom: 8px;

    color: #0d6efd;

    font-size: 11px;

    font-weight: 700;

    letter-spacing: 1px;

}


.infrastructure-header h2 {

    margin: 0 0 7px;

    color: #172033;

    font-size: 30px;

    font-weight: 700;

}


.infrastructure-header p {

    margin: 0;

    color: #667085;

    font-size: 14px;

}


.infrastructure-count {

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

.infrastructure-card {

    height: 100%;

    min-height: 325px;

    padding: 26px;

    display: flex;

    flex-direction: column;

    background: #ffffff;

    border: 1px solid #e3e8ef;

    border-radius: 18px;

    box-shadow: 0 8px 25px rgba(15,23,42,.05);

    transition: all .25s ease;

}


.infrastructure-card:hover {

    transform: translateY(-6px);

    border-color: #bfd7fa;

    box-shadow: 0 15px 35px rgba(15,23,42,.09);

}



/* =========================================================
   ICON
========================================================= */

.infrastructure-icon {

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


.infrastructure-card:hover .infrastructure-icon {

    transform: translateY(-3px);

}


/* BLUE */

.infrastructure-icon.blue {

    background: #eaf3ff;

    color: #1264e8;

}


/* PURPLE */

.infrastructure-icon.purple {

    background: #f2eaff;

    color: #7c3aed;

}


/* GREEN */

.infrastructure-icon.green {

    background: #e8f8ef;

    color: #159957;

}


/* ORANGE */

.infrastructure-icon.orange {

    background: #fff3e5;

    color: #f59e0b;

}


/* RED */

.infrastructure-icon.red {

    background: #ffeded;

    color: #dc3545;

}


/* CYAN */

.infrastructure-icon.cyan {

    background: #e6f9fc;

    color: #0891b2;

}


/* INDIGO */

.infrastructure-icon.indigo {

    background: #eeedff;

    color: #4f46e5;

}


/* PINK */

.infrastructure-icon.pink {

    background: #ffeaf2;

    color: #db2777;

}


/* TEAL */

.infrastructure-icon.teal {

    background: #e6f8f5;

    color: #0f9f8f;

}



/* =========================================================
   CATEGORY
========================================================= */

.infrastructure-category {

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

.infrastructure-content {

    height: 100%;

    display: flex;

    flex-direction: column;

}


.infrastructure-content h3 {

    margin: 0 0 10px;

    color: #172033;

    font-size: 19px;

    font-weight: 700;

    line-height: 1.45;

}


.infrastructure-content p {

    margin: 0;

    color: #667085;

    font-size: 13px;

    line-height: 1.7;

}



/* =========================================================
   LOCATION
========================================================= */

.infrastructure-location {

    display: flex;

    align-items: center;

    gap: 7px;

    margin-top: 17px;

    padding: 9px 11px;

    background: #f8fafc;

    border-radius: 9px;

    color: #667085;

    font-size: 11px;

}


.infrastructure-location i {

    color: #0d6efd;

    font-size: 13px;

}



/* =========================================================
   BUTTON
========================================================= */

.infrastructure-button {

    width: fit-content;

    margin-top: auto;

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


.infrastructure-button:hover {

    background: #0957d0;

    border-color: #0957d0;

    color: #ffffff !important;

    transform: translateX(3px);

}



/* =========================================================
   EMPTY
========================================================= */

.infrastructure-empty {

    padding: 65px 20px;

    text-align: center;

    background: #ffffff;

    border: 1px dashed #d4dce8;

    border-radius: 18px;

}


.infrastructure-empty-icon {

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


.infrastructure-empty h3 {

    margin: 0 0 8px;

    color: #172033;

    font-size: 19px;

    font-weight: 700;

}


.infrastructure-empty p {

    margin: 0;

    color: #64748b;

    font-size: 13px;

}



/* =========================================================
   ABOUT
========================================================= */

.infrastructure-about {

    padding: 90px 0;

    background: #ffffff;

}


.infrastructure-about h2 {

    margin: 0 0 22px;

    color: #172033;

    font-size: 38px;

    line-height: 1.25;

    font-weight: 700;

}


.infrastructure-about h2 span {

    display: block;

    color: #0d6efd;

}


.infrastructure-about > .container p {

    max-width: 600px;

    color: #667085;

    font-size: 14px;

    line-height: 1.8;

}



/* =========================================================
   INFO BOX
========================================================= */

.infrastructure-info-box {

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


.infrastructure-info-box:hover {

    transform: translateX(5px);

    background: #f0f7ff;

}


.infrastructure-info-icon {

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


.infrastructure-info-icon.blue {

    background: #0d6efd;

}


.infrastructure-info-icon.orange {

    background: #f59e0b;

}


.infrastructure-info-icon.purple {

    background: #7c3aed;

}


.infrastructure-info-box h4 {

    margin: 0 0 6px;

    color: #172033;

    font-size: 17px;

    font-weight: 700;

}


.infrastructure-info-box p {

    margin: 0;

    color: #667085;

    font-size: 13px;

    line-height: 1.7;

}



/* =========================================================
   CTA
========================================================= */

.infrastructure-cta {

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


.infrastructure-cta-content {

    max-width: 700px;

    margin: auto;

}


.infrastructure-cta-icon {

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


.infrastructure-cta h2 {

    margin-bottom: 14px;

    color: #ffffff;

    font-size: 33px;

    font-weight: 700;

}


.infrastructure-cta p {

    margin-bottom: 25px;

    color: rgba(255,255,255,.9);

    font-size: 14px;

    line-height: 1.8;

}


.infrastructure-cta-button {

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


.infrastructure-cta-button:hover {

    color: #0957d0 !important;

    transform: translateY(-3px);

    box-shadow: 0 10px 25px rgba(0,0,0,.15);

}



/* =========================================================
   RESPONSIVE
========================================================= */

@media (max-width: 991px) {

    .infrastructure-hero {

        min-height: 360px;

    }


    .infrastructure-hero h1 {

        font-size: 40px;

    }


    .infrastructure-header {

        align-items: flex-start;

        flex-direction: column;

    }

}


@media (max-width: 767px) {

    .infrastructure-hero {

        min-height: 330px;

    }


    .infrastructure-hero-content {

        padding: 55px 15px;

    }


    .infrastructure-hero h1 {

        font-size: 34px;

    }


    .infrastructure-hero p {

        font-size: 13px;

    }


    .infrastructure-list {

        padding: 50px 0 65px;

    }


    .infrastructure-about {

        padding: 65px 0;

    }


    .infrastructure-about h2 {

        font-size: 30px;

    }


    .infrastructure-cta {

        padding: 65px 15px;

    }


    .infrastructure-cta h2 {

        font-size: 27px;

    }

}


@media (max-width: 576px) {

    .infrastructure-hero h1 {

        font-size: 30px;

    }


    .infrastructure-card {

        min-height: 300px;

        padding: 22px;

    }


    .infrastructure-button {

        width: 100%;

        justify-content: center;

    }

}

</style>

@endsection