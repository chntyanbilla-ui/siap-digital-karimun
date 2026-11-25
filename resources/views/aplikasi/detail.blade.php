@extends('layouts.landing')

@section('content')

@php

    /* =========================================================
       MENENTUKAN ICON DAN WARNA BERDASARKAN NAMA APLIKASI
    ========================================================= */

    $namaAplikasi = strtolower($aplikasi->nama ?? '');

    if (str_contains($namaAplikasi, 'siap digital')) {

        $icon = 'bi-globe2';
        $color = 'blue';

    } elseif (str_contains($namaAplikasi, 'lapor')) {

        $icon = 'bi-megaphone-fill';
        $color = 'orange';

    } elseif (str_contains($namaAplikasi, 'srikandi')) {

        $icon = 'bi-folder2-open';
        $color = 'purple';

    } elseif (str_contains($namaAplikasi, 'puskesmas')) {

        $icon = 'bi-hospital';
        $color = 'red';

    } elseif (str_contains($namaAplikasi, 'pendidikan')) {

        $icon = 'bi-mortarboard-fill';
        $color = 'green';

    } elseif (str_contains($namaAplikasi, 'infrastruktur')) {

        $icon = 'bi-database-fill';
        $color = 'cyan';

    } else {

        $icon = 'bi-grid-1x2-fill';
        $color = 'cyan';

    }

@endphp


{{-- =========================================================
     HERO DETAIL
========================================================= --}}

<section class="application-detail-hero">

    <div class="detail-decoration detail-decoration-1"></div>

    <div class="detail-decoration detail-decoration-2"></div>


    <div class="container">

        <div class="detail-hero-content">


            {{-- KEMBALI --}}
            <a
                href="{{ route('aplikasi') }}"
                class="detail-back"
            >

                <i class="bi bi-arrow-left"></i>

                Kembali ke Aplikasi

            </a>



            {{-- HERO MAIN --}}
            <div class="detail-hero-main">


                {{-- ICON --}}
                <div class="detail-hero-icon {{ $color }}">

                    <i class="bi {{ $icon }}"></i>

                </div>



                <div>

                    {{-- BADGE --}}
                    <span class="detail-badge">

                        <i class="bi bi-window"></i>

                        APLIKASI DIGITAL

                    </span>


                    {{-- NAMA --}}
                    <h1>

                        {{ $aplikasi->nama }}

                    </h1>


                    {{-- OPD --}}
                    @if($aplikasi->opd)

                        <p class="detail-hero-opd">

                            <i class="bi bi-building"></i>

                            {{ $aplikasi->opd }}

                        </p>

                    @endif

                </div>

            </div>

        </div>

    </div>

</section>



{{-- =========================================================
     DETAIL CONTENT
========================================================= --}}

<section class="application-detail-section">

    <div class="container">

        <div class="row g-4">


            {{-- =================================================
                 KONTEN UTAMA
            ================================================== --}}

            <div class="col-lg-8">

                <div class="detail-content-card">


                    {{-- HEADING --}}
                    <div class="content-heading">

                        <div class="content-icon {{ $color }}">

                            <i class="bi bi-info-circle"></i>

                        </div>


                        <div>

                            <span>
                                INFORMASI APLIKASI
                            </span>

                            <h2>
                                Tentang Aplikasi
                            </h2>

                        </div>

                    </div>



                    {{-- DIVIDER --}}
                    <div class="content-divider"></div>



                    {{-- DESKRIPSI --}}
                    <p class="detail-description">

                        {{ $aplikasi->deskripsi ?: 'Tidak ada deskripsi aplikasi.' }}

                    </p>



                    {{-- =================================================
                         BUKA APLIKASI
                    ================================================== --}}

                    @if(!empty($aplikasi->link))

                        <div class="application-link-box">

                            <div class="application-link-info">

                                <div class="application-link-icon">

                                    <i class="bi bi-globe2"></i>

                                </div>


                                <div>

                                    <strong>
                                        Akses Aplikasi
                                    </strong>

                                    <small>
                                        Buka aplikasi melalui situs resminya.
                                    </small>

                                </div>

                            </div>


                            <a
                                href="{{ $aplikasi->link }}"
                                target="_blank"
                                rel="noopener noreferrer"
                                class="application-open-button"
                            >

                                <i class="bi bi-box-arrow-up-right"></i>

                                Buka Aplikasi

                            </a>

                        </div>

                    @else

                        {{-- JIKA LINK BELUM ADA --}}
                        <div class="application-no-link">

                            <i class="bi bi-info-circle"></i>

                            <span>
                                Link aplikasi belum tersedia.
                            </span>

                        </div>

                    @endif


                </div>

            </div>



            {{-- =================================================
                 INFORMASI SAMPING
            ================================================== --}}

            <div class="col-lg-4">

                <div class="detail-info-card">


                    <h3>
                        Informasi
                    </h3>



                    {{-- OPD --}}
                    <div class="detail-info-item">

                        <div class="detail-info-icon blue">

                            <i class="bi bi-building"></i>

                        </div>


                        <div>

                            <span>
                                Perangkat Daerah
                            </span>

                            <strong>
                                {{ $aplikasi->opd ?: '-' }}
                            </strong>

                        </div>

                    </div>



                    {{-- STATUS --}}
                    <div class="detail-info-item">

                        <div class="detail-info-icon green">

                            <i class="bi bi-check-circle"></i>

                        </div>


                        <div>

                            <span>
                                Status
                            </span>

                            @if(
                                strtolower($aplikasi->status ?? '') === 'aktif'
                                ||
                                strtolower($aplikasi->status ?? '') === 'active'
                            )

                                <strong class="status-active">

                                    Aktif

                                </strong>

                            @else

                                <strong class="status-inactive">

                                    {{ ucfirst($aplikasi->status ?? 'Tidak diketahui') }}

                                </strong>

                            @endif

                        </div>

                    </div>



                    {{-- JENIS --}}
                    <div class="detail-info-item">

                        <div class="detail-info-icon purple">

                            <i class="bi bi-grid"></i>

                        </div>


                        <div>

                            <span>
                                Jenis
                            </span>

                            <strong>
                                Aplikasi SPBE
                            </strong>

                        </div>

                    </div>



                    {{-- LINK --}}
                    <div class="detail-info-item">

                        <div class="detail-info-icon cyan">

                            <i class="bi bi-link-45deg"></i>

                        </div>


                        <div>

                            <span>
                                Link Aplikasi
                            </span>


                            @if(!empty($aplikasi->link))

                                <strong class="link-available">

                                    Tersedia

                                </strong>

                            @else

                                <strong class="link-unavailable">

                                    Belum tersedia

                                </strong>

                            @endif

                        </div>

                    </div>


                </div>

            </div>

        </div>



        {{-- =================================================
             BUTTON BAWAH
        ================================================== --}}

        <div class="detail-bottom">


            {{-- BUKA APLIKASI --}}
            @if(!empty($aplikasi->link))

                <a
                    href="{{ $aplikasi->link }}"
                    target="_blank"
                    rel="noopener noreferrer"
                    class="detail-open-button"
                >

                    <i class="bi bi-box-arrow-up-right"></i>

                    Buka Aplikasi

                </a>

            @endif



            {{-- LIHAT SEMUA --}}
            <a
                href="{{ route('aplikasi') }}"
                class="detail-all-button"
            >

                <i class="bi bi-grid-3x3-gap"></i>

                Lihat Semua Aplikasi

                <i class="bi bi-arrow-right"></i>

            </a>

        </div>

    </div>

</section>



{{-- =========================================================
     STYLE
========================================================= --}}

<style>

/* =========================================================
   HERO
========================================================= */

.application-detail-hero {

    position: relative;

    padding: 55px 0 65px;

    background:
        linear-gradient(
            135deg,
            #0969e8 0%,
            #078ce8 50%,
            #08b5e8 100%
        );

    color: #ffffff;

    overflow: hidden;

}


/* =========================================================
   DECORATION
========================================================= */

.detail-decoration {

    position: absolute;

    border-radius: 50%;

    pointer-events: none;

}


.detail-decoration-1 {

    width: 430px;

    height: 430px;

    top: -260px;

    right: -90px;

    background:
        rgba(255,255,255,.07);

}


.detail-decoration-2 {

    width: 280px;

    height: 280px;

    bottom: -210px;

    left: 15%;

    border: 1px solid
        rgba(255,255,255,.15);

}


/* =========================================================
   HERO CONTENT
========================================================= */

.detail-hero-content {

    position: relative;

    z-index: 2;

}


/* =========================================================
   BACK
========================================================= */

.detail-back {

    display: inline-flex;

    align-items: center;

    gap: 8px;

    margin-bottom: 35px;

    color: rgba(255,255,255,.9);

    text-decoration: none;

    font-size: 13px;

    font-weight: 600;

    transition: .2s ease;

}


.detail-back:hover {

    color: #ffffff;

    transform: translateX(-3px);

}


/* =========================================================
   HERO MAIN
========================================================= */

.detail-hero-main {

    display: flex;

    align-items: center;

    gap: 25px;

}


/* =========================================================
   HERO ICON
========================================================= */

.detail-hero-icon {

    width: 88px;

    height: 88px;

    flex-shrink: 0;

    display: flex;

    align-items: center;

    justify-content: center;

    border-radius: 22px;

    background:
        rgba(255,255,255,.15);

    border:
        1px solid rgba(255,255,255,.3);

    color: #ffffff;

    font-size: 37px;

    box-shadow:
        0 12px 30px
        rgba(0,0,0,.12);

}


.detail-hero-icon.blue,
.detail-hero-icon.orange,
.detail-hero-icon.purple,
.detail-hero-icon.red,
.detail-hero-icon.green,
.detail-hero-icon.cyan {

    background:
        rgba(255,255,255,.15);

    color: #ffffff;

}


/* =========================================================
   BADGE
========================================================= */

.detail-badge {

    display: inline-flex;

    align-items: center;

    gap: 7px;

    padding: 7px 13px;

    margin-bottom: 12px;

    border:
        1px solid rgba(255,255,255,.3);

    border-radius: 30px;

    background:
        rgba(255,255,255,.10);

    color: #ffffff;

    font-size: 10px;

    font-weight: 700;

}


/* =========================================================
   TITLE
========================================================= */

.application-detail-hero h1 {

    margin: 0 0 9px;

    color: #ffffff;

    font-size: 40px;

    line-height: 1.2;

    font-weight: 700;

}


/* =========================================================
   OPD HERO
========================================================= */

.detail-hero-opd {

    display: flex;

    align-items: center;

    gap: 7px;

    margin: 0;

    color:
        rgba(255,255,255,.88);

    font-size: 14px;

}


.detail-hero-opd i {

    font-size: 15px;

}


/* =========================================================
   DETAIL SECTION
========================================================= */

.application-detail-section {

    padding: 65px 0 80px;

    background: #f7f9fc;

}


/* =========================================================
   CONTENT CARD
========================================================= */

.detail-content-card {

    height: 100%;

    padding: 32px;

    background: #ffffff;

    border:
        1px solid #e3e9f1;

    border-radius: 18px;

    box-shadow:
        0 8px 28px
        rgba(15,23,42,.055);

}


/* =========================================================
   CONTENT HEADING
========================================================= */

.content-heading {

    display: flex;

    align-items: center;

    gap: 15px;

}


.content-icon {

    width: 50px;

    height: 50px;

    flex-shrink: 0;

    display: flex;

    align-items: center;

    justify-content: center;

    border-radius: 13px;

    font-size: 21px;

}


/* WARNA ICON */

.content-icon.blue {

    background: #eaf3ff;

    color: #1264e8;

}


.content-icon.orange {

    background: #fff4df;

    color: #f59e0b;

}


.content-icon.purple {

    background: #f2eaff;

    color: #7c3aed;

}


.content-icon.red {

    background: #ffeded;

    color: #ef4444;

}


.content-icon.green {

    background: #e9f8ef;

    color: #16a34a;

}


.content-icon.cyan {

    background: #e5f8fb;

    color: #0891b2;

}


.content-heading span {

    display: block;

    margin-bottom: 4px;

    color: #1264e8;

    font-size: 10px;

    font-weight: 700;

    letter-spacing: .4px;

}


.content-heading h2 {

    margin: 0;

    color: #172033;

    font-size: 22px;

    font-weight: 700;

}


/* =========================================================
   DIVIDER
========================================================= */

.content-divider {

    height: 1px;

    margin: 25px 0;

    background: #edf0f4;

}


/* =========================================================
   DESCRIPTION
========================================================= */

.detail-description {

    margin: 0;

    color: #687386;

    font-size: 15px;

    line-height: 1.9;

}


/* =========================================================
   LINK APLIKASI
========================================================= */

.application-link-box {

    margin-top: 28px;

    padding: 18px 20px;

    display: flex;

    align-items: center;

    justify-content: space-between;

    gap: 20px;

    background: #f7faff;

    border: 1px solid #dce9ff;

    border-radius: 14px;

}


.application-link-info {

    display: flex;

    align-items: center;

    gap: 13px;

}


.application-link-icon {

    width: 46px;

    height: 46px;

    flex-shrink: 0;

    display: flex;

    align-items: center;

    justify-content: center;

    border-radius: 12px;

    background: #e8f1ff;

    color: #1264e8;

    font-size: 20px;

}


.application-link-info strong {

    display: block;

    margin-bottom: 3px;

    color: #172033;

    font-size: 14px;

}


.application-link-info small {

    display: block;

    color: #718096;

    font-size: 12px;

    line-height: 1.5;

}


/* =========================================================
   TOMBOL BUKA APLIKASI
========================================================= */

.application-open-button {

    display: inline-flex;

    align-items: center;

    justify-content: center;

    gap: 8px;

    padding: 11px 17px;

    flex-shrink: 0;

    border-radius: 9px;

    background: #1264e8;

    color: white;

    text-decoration: none;

    font-size: 12px;

    font-weight: 600;

    white-space: nowrap;

    transition: .2s ease;

}


.application-open-button:hover {

    background: #0d55c8;

    color: white;

    transform: translateY(-2px);

}


/* =========================================================
   JIKA LINK TIDAK ADA
========================================================= */

.application-no-link {

    margin-top: 25px;

    padding: 13px 15px;

    display: flex;

    align-items: center;

    gap: 9px;

    border-radius: 10px;

    background: #f8f9fa;

    border: 1px solid #e6e9ed;

    color: #7b8491;

    font-size: 12px;

}


.application-no-link i {

    color: #1264e8;

    font-size: 15px;

}


/* =========================================================
   INFO CARD
========================================================= */

.detail-info-card {

    height: 100%;

    padding: 28px;

    background: #ffffff;

    border:
        1px solid #e3e9f1;

    border-radius: 18px;

    box-shadow:
        0 8px 28px
        rgba(15,23,42,.055);

}


.detail-info-card h3 {

    margin: 0 0 22px;

    color: #172033;

    font-size: 20px;

    font-weight: 700;

}


/* =========================================================
   INFO ITEM
========================================================= */

.detail-info-item {

    display: flex;

    align-items: center;

    gap: 12px;

    padding: 14px 0;

    border-bottom:
        1px solid #edf0f4;

}


.detail-info-item:last-child {

    border-bottom: 0;

    padding-bottom: 0;

}


.detail-info-icon {

    width: 43px;

    height: 43px;

    flex-shrink: 0;

    display: flex;

    align-items: center;

    justify-content: center;

    border-radius: 11px;

    font-size: 18px;

}


/* ICON INFO COLORS */

.detail-info-icon.blue {

    background: #eaf3ff;

    color: #1264e8;

}


.detail-info-icon.green {

    background: #e9f8ef;

    color: #16a34a;

}


.detail-info-icon.purple {

    background: #f2eaff;

    color: #7c3aed;

}


.detail-info-icon.cyan {

    background: #e5f8fb;

    color: #0891b2;

}


.detail-info-item div:last-child {

    display: flex;

    flex-direction: column;

    gap: 4px;

}


.detail-info-item span {

    color: #8791a1;

    font-size: 10px;

}


.detail-info-item strong {

    color: #252a31;

    font-size: 12px;

    line-height: 1.5;

}


.status-active {

    color: #16a34a !important;

}


.status-inactive {

    color: #6b7280 !important;

}


.link-available {

    color: #1264e8 !important;

}


.link-unavailable {

    color: #9ca3af !important;

}


/* =========================================================
   BOTTOM BUTTON
========================================================= */

.detail-bottom {

    margin-top: 35px;

    display: flex;

    align-items: center;

    justify-content: center;

    flex-wrap: wrap;

    gap: 12px;

}


/* =========================================================
   BUTTON BUKA APLIKASI
========================================================= */

.detail-open-button {

    display: inline-flex;

    align-items: center;

    justify-content: center;

    gap: 9px;

    padding: 12px 20px;

    border-radius: 10px;

    background: #16a34a;

    color: #ffffff;

    text-decoration: none;

    font-size: 13px;

    font-weight: 600;

    box-shadow:
        0 7px 18px
        rgba(22,163,74,.18);

    transition: .2s ease;

}


.detail-open-button:hover {

    color: #ffffff;

    background: #15803d;

    transform: translateY(-2px);

}


/* =========================================================
   BUTTON SEMUA APLIKASI
========================================================= */

.detail-all-button {

    display: inline-flex;

    align-items: center;

    justify-content: center;

    gap: 9px;

    padding: 12px 20px;

    border-radius: 10px;

    background: #1264e8;

    color: #ffffff;

    text-decoration: none;

    font-size: 13px;

    font-weight: 600;

    box-shadow:
        0 7px 18px
        rgba(18,100,232,.18);

    transition: .2s ease;

}


.detail-all-button:hover {

    color: #ffffff;

    background: #0d55c8;

    transform: translateY(-2px);

}


/* =========================================================
   TABLET
========================================================= */

@media (max-width: 991px) {

    .application-detail-hero {

        padding: 50px 0 60px;

    }


    .application-detail-hero h1 {

        font-size: 34px;

    }

}


/* =========================================================
   MOBILE
========================================================= */

@media (max-width: 576px) {

    .application-detail-hero {

        padding: 40px 0 50px;

    }


    .detail-back {

        margin-bottom: 25px;

    }


    .detail-hero-main {

        align-items: flex-start;

        gap: 16px;

    }


    .detail-hero-icon {

        width: 65px;

        height: 65px;

        border-radius: 16px;

        font-size: 27px;

    }


    .application-detail-hero h1 {

        font-size: 26px;

    }


    .detail-hero-opd {

        font-size: 12px;

    }


    .application-detail-section {

        padding: 45px 0 60px;

    }


    .detail-content-card,
    .detail-info-card {

        padding: 23px;

    }


    .content-heading h2 {

        font-size: 19px;

    }


    .detail-description {

        font-size: 14px;

    }


    /* LINK DI HP */

    .application-link-box {

        align-items: flex-start;

        flex-direction: column;

    }


    .application-open-button {

        width: 100%;

    }


    /* BUTTON BAWAH */

    .detail-bottom {

        flex-direction: column;

    }


    .detail-open-button,
    .detail-all-button {

        width: 100%;

    }

}

</style>

@endsection