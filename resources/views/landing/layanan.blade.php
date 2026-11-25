@extends('layouts.landing')

@section('content')

{{-- =========================================================
     HERO LAYANAN
========================================================= --}}

<section class="service-hero">

    <div class="container">

        <div class="service-hero-inner">

            <div class="service-hero-icon">

                <i class="bi bi-grid-1x2-fill"></i>

            </div>


            <div class="service-hero-content">

                <span class="service-hero-label">

                    <i class="bi bi-stars"></i>

                    DOMAIN SPBE

                </span>


                <h1>

                    Layanan Digital

                    <span>
                        Kabupaten Karimun
                    </span>

                </h1>


                <p>

                    Temukan berbagai layanan digital Pemerintah
                    Kabupaten Karimun yang dapat diakses secara
                    mudah, cepat, dan terintegrasi.

                </p>

            </div>

        </div>

    </div>

</section>



{{-- =========================================================
     DAFTAR LAYANAN
========================================================= --}}

<section class="service-list-section">

    <div class="container">


        {{-- =================================================
             HEADER
        ================================================== --}}

        <div class="service-list-header">

            <div>

                <span class="section-label">

                    <i class="bi bi-grid-fill"></i>

                    LAYANAN DIGITAL

                </span>


                <h2>

                    Daftar Layanan

                </h2>


                <p>

                    Berbagai layanan digital yang tersedia
                    untuk masyarakat Kabupaten Karimun.

                </p>

            </div>


            <div class="service-total">

                <i class="bi bi-list-check"></i>

                <span>

                    {{ $layanans->count() }} Layanan

                </span>

            </div>

        </div>



        {{-- =================================================
             GRID LAYANAN
        ================================================== --}}

        <div class="row g-4">


            @forelse($layanans as $layanan)


                @php

                    /*
                    |--------------------------------------------------------------------------
                    | ICON DAN WARNA BERDASARKAN KATEGORI
                    |--------------------------------------------------------------------------
                    */

                    $kategori = strtolower(
                        trim($layanan->kategori ?? '')
                    );


                    if (
                        str_contains($kategori, 'pendidikan')
                    ) {

                        $icon = 'bi-mortarboard-fill';
                        $iconColor = 'purple';

                    }

                    elseif (
                        str_contains($kategori, 'kependudukan') ||
                        str_contains($kategori, 'administrasi')
                    ) {

                        $icon = 'bi-person-vcard-fill';
                        $iconColor = 'blue';

                    }

                    elseif (
                        str_contains($kategori, 'keuangan') ||
                        str_contains($kategori, 'pajak') ||
                        str_contains($kategori, 'transaksi')
                    ) {

                        $icon = 'bi-cash-stack';
                        $iconColor = 'green';

                    }

                    elseif (
                        str_contains($kategori, 'kesehatan')
                    ) {

                        $icon = 'bi-heart-pulse-fill';
                        $iconColor = 'red';

                    }

                    elseif (
                        str_contains($kategori, 'perikanan') ||
                        str_contains($kategori, 'produktivitas')
                    ) {

                        $icon = 'bi-water';
                        $iconColor = 'cyan';

                    }

                    elseif (
                        str_contains($kategori, 'tenaga kerja') ||
                        str_contains($kategori, 'ketenagakerjaan')
                    ) {

                        $icon = 'bi-briefcase-fill';
                        $iconColor = 'orange';

                    }

                    elseif (
                        str_contains($kategori, 'informasi')
                    ) {

                        $icon = 'bi-info-circle-fill';
                        $iconColor = 'indigo';

                    }

                    elseif (
                        str_contains($kategori, 'perizinan')
                    ) {

                        $icon = 'bi-file-earmark-check-fill';
                        $iconColor = 'teal';

                    }

                    elseif (
                        str_contains($kategori, 'sosial')
                    ) {

                        $icon = 'bi-people-fill';
                        $iconColor = 'pink';

                    }

                    elseif (
                        str_contains($kategori, 'lingkungan')
                    ) {

                        $icon = 'bi-tree-fill';
                        $iconColor = 'green';

                    }

                    elseif (
                        str_contains($kategori, 'pariwisata')
                    ) {

                        $icon = 'bi-camera-fill';
                        $iconColor = 'orange';

                    }

                    else {

                        $icon = 'bi-grid-fill';
                        $iconColor = 'blue';

                    }

                @endphp



                {{-- =================================================
                     CARD
                ================================================== --}}

                <div class="col-xl-4 col-lg-4 col-md-6">

                    <article class="service-card">


                        {{-- ICON --}}

                        <div class="service-icon {{ $iconColor }}">

                            <i class="bi {{ $icon }}"></i>

                        </div>



                        {{-- KATEGORI --}}

                        @if($layanan->kategori)

                            <span class="service-category">

                                {{ $layanan->kategori }}

                            </span>

                        @endif



                        {{-- NAMA LAYANAN --}}

                        <h3>

                            {{ $layanan->nama }}

                        </h3>



                        {{-- OPD --}}

                        <div class="service-opd">

                            <i class="bi bi-building"></i>

                            <span>

                                {{ $layanan->opd ?: 'Pemerintah Kabupaten Karimun' }}

                            </span>

                        </div>



                        {{-- DESKRIPSI --}}

                        <p class="service-description">

                            {{ \Illuminate\Support\Str::limit(
                                $layanan->deskripsi ?: 'Belum ada deskripsi layanan.',
                                130
                            ) }}

                        </p>



                        {{-- FOOTER --}}

                        <div class="service-footer">

                            @if(!empty($layanan->link))

                                <a
                                    href="{{ $layanan->link }}"
                                    target="_blank"
                                    rel="noopener noreferrer"
                                    class="service-button"
                                >

                                    Buka Layanan

                                    <i class="bi bi-arrow-up-right"></i>

                                </a>

                            @else

                                <span class="service-button disabled">

                                    <i class="bi bi-link-45deg"></i>

                                    Link Belum Tersedia

                                </span>

                            @endif

                        </div>


                    </article>

                </div>


            @empty


                {{-- =================================================
                     DATA KOSONG
                ================================================== --}}

                <div class="col-12">

                    <div class="service-empty">


                        <div class="service-empty-icon">

                            <i class="bi bi-inbox"></i>

                        </div>


                        <h3>

                            Belum Ada Layanan

                        </h3>


                        <p>

                            Data layanan digital belum tersedia
                            saat ini.

                        </p>


                    </div>

                </div>


            @endforelse


        </div>

    </div>

</section>



<style>

/* =========================================================
   GLOBAL
========================================================= */

.service-hero,
.service-list-section {

    font-family: 'Poppins', sans-serif;

}


/* =========================================================
   HERO / LAYER BIRU
========================================================= */

.service-hero {

    position: relative;

    overflow: hidden;

    padding: 62px 0 68px;

    background:
        linear-gradient(
            135deg,
            #0d6efd 0%,
            #1264e8 55%,
            #0754c9 100%
        );

    color: white;

}


/* DEKORASI BULAT */

.service-hero::before {

    content: "";

    position: absolute;

    width: 300px;
    height: 300px;

    right: -90px;
    top: -140px;

    border-radius: 50%;

    background: rgba(255,255,255,.08);

}


.service-hero::after {

    content: "";

    position: absolute;

    width: 230px;
    height: 230px;

    left: -110px;
    bottom: -140px;

    border-radius: 50%;

    background: rgba(255,255,255,.06);

}


/* HERO CONTENT */

.service-hero-inner {

    position: relative;

    z-index: 2;

    display: flex;

    align-items: center;

    justify-content: center;

    gap: 22px;

    max-width: 900px;

    margin: auto;

}


/* HERO ICON */

.service-hero-icon {

    width: 72px;
    height: 72px;

    flex-shrink: 0;

    display: flex;

    align-items: center;

    justify-content: center;

    border-radius: 18px;

    background: rgba(255,255,255,.15);

    border: 1px solid rgba(255,255,255,.25);

    color: white;

    font-size: 30px;

}


/* HERO LABEL */

.service-hero-label {

    display: inline-flex;

    align-items: center;

    gap: 6px;

    margin-bottom: 10px;

    padding: 6px 12px;

    border-radius: 20px;

    background: rgba(255,255,255,.14);

    border: 1px solid rgba(255,255,255,.22);

    color: white;

    font-size: 10px;

    font-weight: 700;

    letter-spacing: .8px;

}


/* HERO TITLE */

.service-hero h1 {

    margin: 0 0 10px;

    color: white;

    font-size: 37px;

    font-weight: 700;

    line-height: 1.3;

}


.service-hero h1 span {

    display: block;

    color: #dceaff;

}


/* HERO DESCRIPTION */

.service-hero p {

    max-width: 700px;

    margin: 0;

    color: rgba(255,255,255,.9);

    font-size: 13px;

    line-height: 1.8;

}


/* =========================================================
   LIST SECTION
========================================================= */

.service-list-section {

    min-height: 500px;

    padding: 55px 0 85px;

    background: #f7f9fc;

}


/* =========================================================
   LIST HEADER
========================================================= */

.service-list-header {

    display: flex;

    align-items: flex-end;

    justify-content: space-between;

    gap: 20px;

    margin-bottom: 32px;

}


/* LABEL */

.section-label {

    display: inline-flex;

    align-items: center;

    gap: 6px;

    color: #1264e8;

    font-size: 10px;

    font-weight: 700;

    letter-spacing: .8px;

}


/* TITLE */

.service-list-header h2 {

    margin: 7px 0 5px;

    color: #17233a;

    font-size: 28px;

    font-weight: 700;

}


/* DESCRIPTION */

.service-list-header p {

    margin: 0;

    color: #7b8798;

    font-size: 12px;

}


/* TOTAL */

.service-total {

    display: inline-flex;

    align-items: center;

    gap: 7px;

    padding: 9px 14px;

    border: 1px solid #d7e5f8;

    border-radius: 10px;

    background: #eaf3ff;

    color: #1264e8;

    font-size: 11px;

    font-weight: 700;

    white-space: nowrap;

}


.service-total i {

    font-size: 15px;

}


/* =========================================================
   SERVICE CARD
========================================================= */

.service-card {

    position: relative;

    height: 100%;

    min-height: 325px;

    padding: 25px;

    display: flex;

    flex-direction: column;

    overflow: hidden;

    background: #ffffff;

    border: 1px solid #e3e8ef;

    border-radius: 17px;

    box-shadow: 0 7px 25px rgba(15,23,42,.055);

    transition:
        transform .25s ease,
        box-shadow .25s ease,
        border-color .25s ease;

}


/* CARD HOVER */

.service-card:hover {

    transform: translateY(-5px);

    border-color: #cbdcf7;

    box-shadow:
        0 15px 35px rgba(18,100,232,.11);

}


/* =========================================================
   ICON
========================================================= */

.service-icon {

    width: 56px;
    height: 56px;

    margin-bottom: 16px;

    display: flex;

    align-items: center;

    justify-content: center;

    border-radius: 14px;

    font-size: 23px;

    transition: transform .25s ease;

}


.service-card:hover .service-icon {

    transform: translateY(-3px);

}


/* =========================================================
   ICON - BLUE
========================================================= */

.service-icon.blue {

    background: #eaf3ff;

    color: #1264e8;

}


/* =========================================================
   ICON - PURPLE
========================================================= */

.service-icon.purple {

    background: #f2eaff;

    color: #7c3aed;

}


/* =========================================================
   ICON - GREEN
========================================================= */

.service-icon.green {

    background: #e8f8ef;

    color: #159957;

}


/* =========================================================
   ICON - RED
========================================================= */

.service-icon.red {

    background: #ffeded;

    color: #dc3545;

}


/* =========================================================
   ICON - CYAN
========================================================= */

.service-icon.cyan {

    background: #e6f9fc;

    color: #0891b2;

}


/* =========================================================
   ICON - ORANGE
========================================================= */

.service-icon.orange {

    background: #fff3e5;

    color: #f59e0b;

}


/* =========================================================
   ICON - INDIGO
========================================================= */

.service-icon.indigo {

    background: #eeedff;

    color: #4f46e5;

}


/* =========================================================
   ICON - TEAL
========================================================= */

.service-icon.teal {

    background: #e6f8f5;

    color: #0f9f8f;

}


/* =========================================================
   ICON - PINK
========================================================= */

.service-icon.pink {

    background: #ffeaf2;

    color: #db2777;

}


/* =========================================================
   CATEGORY
========================================================= */

.service-category {

    width: fit-content;

    margin-bottom: 8px;

    padding: 5px 10px;

    border-radius: 20px;

    background: #edf5ff;

    color: #1264e8;

    font-size: 9px;

    font-weight: 700;

    line-height: 1.3;

}


/* =========================================================
   TITLE
========================================================= */

.service-card h3 {

    margin: 0 0 9px;

    color: #202a3b;

    font-size: 18px;

    font-weight: 700;

    line-height: 1.45;

}


/* =========================================================
   OPD
========================================================= */

.service-opd {

    display: flex;

    align-items: center;

    gap: 6px;

    margin-bottom: 13px;

    color: #788598;

    font-size: 10px;

    line-height: 1.4;

}


.service-opd i {

    flex-shrink: 0;

    color: #1264e8;

    font-size: 12px;

}


/* =========================================================
   DESCRIPTION
========================================================= */

.service-description {

    margin: 0;

    color: #69778b;

    font-size: 12px;

    line-height: 1.75;

}


/* =========================================================
   FOOTER CARD
========================================================= */

.service-footer {

    margin-top: auto;

    padding-top: 20px;

}


/* =========================================================
   BUTTON
========================================================= */

.service-button {

    display: inline-flex;

    align-items: center;

    justify-content: center;

    gap: 7px;

    padding: 9px 15px;

    border-radius: 8px;

    background: #1264e8;

    color: white;

    text-decoration: none;

    font-size: 11px;

    font-weight: 600;

    transition: all .2s ease;

}


.service-button:hover {

    background: #0d55c8;

    color: white;

    transform: translateX(2px);

}


/* =========================================================
   BUTTON DISABLED
========================================================= */

.service-button.disabled {

    background: #edf0f4;

    color: #8a95a5;

    cursor: not-allowed;

}


.service-button.disabled:hover {

    transform: none;

    background: #edf0f4;

    color: #8a95a5;

}


/* =========================================================
   EMPTY
========================================================= */

.service-empty {

    padding: 65px 20px;

    text-align: center;

    background: white;

    border: 1px dashed #d6dee8;

    border-radius: 17px;

}


.service-empty-icon {

    width: 62px;
    height: 62px;

    margin: 0 auto 15px;

    display: flex;

    align-items: center;

    justify-content: center;

    border-radius: 15px;

    background: #eaf3ff;

    color: #1264e8;

    font-size: 25px;

}


.service-empty h3 {

    margin: 0 0 7px;

    color: #26344b;

    font-size: 18px;

    font-weight: 700;

}


.service-empty p {

    margin: 0;

    color: #8490a0;

    font-size: 12px;

}


/* =========================================================
   RESPONSIVE - TABLET
========================================================= */

@media (max-width: 991px) {

    .service-hero {

        padding: 52px 0 58px;

    }


    .service-hero h1 {

        font-size: 33px;

    }


    .service-card {

        min-height: 310px;

    }

}


/* =========================================================
   RESPONSIVE - MOBILE
========================================================= */

@media (max-width: 768px) {

    .service-hero {

        padding: 45px 0 52px;

    }


    .service-hero-inner {

        flex-direction: column;

        text-align: center;

    }


    .service-hero-icon {

        width: 64px;
        height: 64px;

        font-size: 27px;

    }


    .service-hero h1 {

        font-size: 29px;

    }


    .service-hero h1 span {

        display: inline;

    }


    .service-hero p {

        font-size: 12px;

    }


    .service-list-section {

        padding: 42px 0 60px;

    }


    .service-list-header {

        align-items: flex-start;

        flex-direction: column;

    }


    .service-total {

        align-self: flex-start;

    }


    .service-card {

        min-height: 300px;

    }

}


/* =========================================================
   RESPONSIVE - HP KECIL
========================================================= */

@media (max-width: 480px) {

    .service-hero h1 {

        font-size: 25px;

    }


    .service-hero-label {

        font-size: 9px;

    }


    .service-card {

        padding: 21px;

    }


    .service-card h3 {

        font-size: 17px;

    }


    .service-description {

        font-size: 11.5px;

    }


    .service-button {

        font-size: 10.5px;

    }

}

</style>

@endsection