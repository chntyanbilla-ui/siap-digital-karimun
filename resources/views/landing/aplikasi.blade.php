@extends('layouts.landing')

@section('content')

{{-- =========================================================
     HERO APLIKASI
========================================================= --}}

<section class="application-hero">

    <div class="container">

        <div class="application-hero-inner">

            <div class="application-hero-icon">

                <i class="bi bi-window-stack"></i>

            </div>


            <div class="application-hero-content">

                <span class="application-hero-label">

                    <i class="bi bi-stars"></i>

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
                    untuk mendukung penyelenggaraan pemerintahan
                    dan pelayanan publik di Kabupaten Karimun.

                </p>

            </div>

        </div>

    </div>

</section>



{{-- =========================================================
     DAFTAR APLIKASI
========================================================= --}}

<section class="application-list-section">

    <div class="container">


        {{-- =================================================
             HEADER
        ================================================== --}}

        <div class="application-list-header">

            <div>

                <span class="section-label">

                    <i class="bi bi-grid-fill"></i>

                    APLIKASI DIGITAL

                </span>


                <h2>

                    Daftar Aplikasi

                </h2>


                <p>

                    Berbagai aplikasi digital yang digunakan
                    oleh Pemerintah Kabupaten Karimun.

                </p>

            </div>


            <div class="application-total">

                <i class="bi bi-window-stack"></i>

                {{ $aplikasis->count() }} Aplikasi

            </div>

        </div>



        {{-- =================================================
             GRID
        ================================================== --}}

        <div class="row g-4">


            @forelse($aplikasis as $aplikasi)


                @php

                    /*
                    |--------------------------------------------------------------------------
                    | ICON DAN WARNA BERDASARKAN NAMA APLIKASI
                    |--------------------------------------------------------------------------
                    */

                    $nama = strtolower(
                        trim($aplikasi->nama ?? '')
                    );


                    if (
                        str_contains($nama, 'siap') ||
                        str_contains($nama, 'digital')
                    ) {

                        $icon = 'bi-globe2';
                        $iconColor = 'blue';

                    }

                    elseif (
                        str_contains($nama, 'lapor') ||
                        str_contains($nama, 'pengaduan')
                    ) {

                        $icon = 'bi-megaphone-fill';
                        $iconColor = 'orange';

                    }

                    elseif (
                        str_contains($nama, 'srikandi') ||
                        str_contains($nama, 'arsip')
                    ) {

                        $icon = 'bi-folder2-open';
                        $iconColor = 'purple';

                    }

                    elseif (
                        str_contains($nama, 'kesehatan') ||
                        str_contains($nama, 'rumah sakit') ||
                        str_contains($nama, 'rsud')
                    ) {

                        $icon = 'bi-heart-pulse-fill';
                        $iconColor = 'red';

                    }

                    elseif (
                        str_contains($nama, 'pendidikan') ||
                        str_contains($nama, 'sekolah') ||
                        str_contains($nama, 'akademik')
                    ) {

                        $icon = 'bi-mortarboard-fill';
                        $iconColor = 'indigo';

                    }

                    elseif (
                        str_contains($nama, 'keuangan') ||
                        str_contains($nama, 'pajak')
                    ) {

                        $icon = 'bi-cash-stack';
                        $iconColor = 'green';

                    }

                    elseif (
                        str_contains($nama, 'kependudukan') ||
                        str_contains($nama, 'dukcapil')
                    ) {

                        $icon = 'bi-person-vcard-fill';
                        $iconColor = 'cyan';

                    }

                    elseif (
                        str_contains($nama, 'perizinan') ||
                        str_contains($nama, 'izin')
                    ) {

                        $icon = 'bi-file-earmark-check-fill';
                        $iconColor = 'teal';

                    }

                    elseif (
                        str_contains($nama, 'kepegawaian') ||
                        str_contains($nama, 'pegawai')
                    ) {

                        $icon = 'bi-people-fill';
                        $iconColor = 'pink';

                    }

                    else {

                        $icon = 'bi-window-stack';
                        $iconColor = 'blue';

                    }

                @endphp



                {{-- =================================================
                     CARD
                ================================================== --}}

                <div class="col-xl-4 col-lg-4 col-md-6">

                    <article class="application-card">


                        {{-- ICON --}}

                        <div class="application-icon {{ $iconColor }}">

                            <i class="bi {{ $icon }}"></i>

                        </div>



                        {{-- OPD --}}

                        @if($aplikasi->opd)

                            <span class="application-opd">

                                <i class="bi bi-building"></i>

                                {{ $aplikasi->opd }}

                            </span>

                        @endif



                        {{-- NAMA --}}

                        <h3>

                            {{ $aplikasi->nama }}

                        </h3>



                        {{-- DESKRIPSI --}}

                        <p class="application-description">

                            {{ \Illuminate\Support\Str::limit(
                                $aplikasi->deskripsi
                                    ?: 'Tidak ada deskripsi aplikasi.',
                                135
                            ) }}

                        </p>



                        {{-- STATUS --}}

                        <div class="application-status-row">

                            @if($aplikasi->status)

                                @if(
                                    strtolower($aplikasi->status) === 'aktif'
                                    ||
                                    strtolower($aplikasi->status) === 'active'
                                )

                                    <span class="application-status active">

                                        <i class="bi bi-check-circle-fill"></i>

                                        Aktif

                                    </span>

                                @else

                                    <span class="application-status">

                                        <i class="bi bi-info-circle"></i>

                                        {{ $aplikasi->status }}

                                    </span>

                                @endif

                            @else

                                <span class="application-status active">

                                    <i class="bi bi-check-circle-fill"></i>

                                    Aktif

                                </span>

                            @endif

                        </div>



                        {{-- FOOTER --}}

                        <div class="application-footer">

                            <a
                                href="{{ route(
                                    'aplikasi.detail',
                                    $aplikasi->id
                                ) }}"
                                class="application-detail-button"
                            >

                                Lihat Detail

                                <i class="bi bi-arrow-right"></i>

                            </a>


                            @if($aplikasi->link)

                                <a
                                    href="{{ $aplikasi->link }}"
                                    target="_blank"
                                    rel="noopener noreferrer"
                                    class="application-open-button"
                                    title="Buka Aplikasi"
                                >

                                    <i class="bi bi-box-arrow-up-right"></i>

                                </a>

                            @endif

                        </div>


                    </article>

                </div>


            @empty


                {{-- =================================================
                     EMPTY
                ================================================== --}}

                <div class="col-12">

                    <div class="application-empty">

                        <div class="application-empty-icon">

                            <i class="bi bi-window-stack"></i>

                        </div>


                        <h3>

                            Belum Ada Aplikasi

                        </h3>


                        <p>

                            Data aplikasi digital belum tersedia
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

.application-hero,
.application-list-section {

    font-family: 'Poppins', sans-serif;

}


/* =========================================================
   HERO BIRU
========================================================= */

.application-hero {

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


.application-hero::before {

    content: "";

    position: absolute;

    width: 300px;
    height: 300px;

    right: -90px;
    top: -140px;

    border-radius: 50%;

    background: rgba(255,255,255,.08);

}


.application-hero::after {

    content: "";

    position: absolute;

    width: 230px;
    height: 230px;

    left: -110px;
    bottom: -140px;

    border-radius: 50%;

    background: rgba(255,255,255,.06);

}


.application-hero-inner {

    position: relative;

    z-index: 2;

    display: flex;

    align-items: center;

    justify-content: center;

    gap: 22px;

    max-width: 900px;

    margin: auto;

}


.application-hero-icon {

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


.application-hero-label {

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


.application-hero h1 {

    margin: 0 0 10px;

    color: white;

    font-size: 37px;

    font-weight: 700;

    line-height: 1.3;

}


.application-hero h1 span {

    display: block;

    color: #dceaff;

}


.application-hero p {

    max-width: 700px;

    margin: 0;

    color: rgba(255,255,255,.9);

    font-size: 13px;

    line-height: 1.8;

}


/* =========================================================
   LIST SECTION
========================================================= */

.application-list-section {

    min-height: 500px;

    padding: 55px 0 85px;

    background: #f7f9fc;

}


/* =========================================================
   HEADER
========================================================= */

.application-list-header {

    display: flex;

    align-items: flex-end;

    justify-content: space-between;

    gap: 20px;

    margin-bottom: 32px;

}


.section-label {

    display: inline-flex;

    align-items: center;

    gap: 6px;

    color: #1264e8;

    font-size: 10px;

    font-weight: 700;

    letter-spacing: .8px;

}


.application-list-header h2 {

    margin: 7px 0 5px;

    color: #17233a;

    font-size: 28px;

    font-weight: 700;

}


.application-list-header p {

    margin: 0;

    color: #7b8798;

    font-size: 12px;

}


.application-total {

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


/* =========================================================
   CARD
========================================================= */

.application-card {

    height: 100%;

    min-height: 325px;

    padding: 25px;

    display: flex;

    flex-direction: column;

    background: white;

    border: 1px solid #e3e8ef;

    border-radius: 17px;

    box-shadow: 0 7px 25px rgba(15,23,42,.055);

    transition:
        transform .25s ease,
        box-shadow .25s ease,
        border-color .25s ease;

}


.application-card:hover {

    transform: translateY(-5px);

    border-color: #cbdcf7;

    box-shadow:
        0 15px 35px rgba(18,100,232,.11);

}


/* =========================================================
   ICON
========================================================= */

.application-icon {

    width: 56px;
    height: 56px;

    margin-bottom: 15px;

    display: flex;

    align-items: center;

    justify-content: center;

    border-radius: 14px;

    font-size: 23px;

    transition: transform .25s ease;

}


.application-card:hover .application-icon {

    transform: translateY(-3px);

}


/* =========================================================
   ICON COLORS
========================================================= */

.application-icon.blue {

    background: #eaf3ff;

    color: #1264e8;

}


.application-icon.orange {

    background: #fff3e5;

    color: #f59e0b;

}


.application-icon.purple {

    background: #f2eaff;

    color: #7c3aed;

}


.application-icon.red {

    background: #ffeded;

    color: #dc3545;

}


.application-icon.indigo {

    background: #eeedff;

    color: #4f46e5;

}


.application-icon.green {

    background: #e8f8ef;

    color: #159957;

}


.application-icon.cyan {

    background: #e6f9fc;

    color: #0891b2;

}


.application-icon.teal {

    background: #e6f8f5;

    color: #0f9f8f;

}


.application-icon.pink {

    background: #ffeaf2;

    color: #db2777;

}


/* =========================================================
   OPD
========================================================= */

.application-opd {

    width: fit-content;

    display: inline-flex;

    align-items: center;

    gap: 5px;

    margin-bottom: 9px;

    padding: 5px 9px;

    border-radius: 20px;

    background: #f1f6fc;

    color: #64748b;

    font-size: 9px;

    font-weight: 600;

}


.application-opd i {

    color: #1264e8;

}


/* =========================================================
   TITLE
========================================================= */

.application-card h3 {

    margin: 0 0 10px;

    color: #202a3b;

    font-size: 18px;

    font-weight: 700;

    line-height: 1.45;

}


/* =========================================================
   DESCRIPTION
========================================================= */

.application-description {

    margin: 0;

    color: #69778b;

    font-size: 12px;

    line-height: 1.75;

}


/* =========================================================
   STATUS
========================================================= */

.application-status-row {

    margin-top: 16px;

}


.application-status {

    display: inline-flex;

    align-items: center;

    gap: 5px;

    padding: 6px 10px;

    border-radius: 20px;

    background: #f1f4f7;

    color: #6c757d;

    font-size: 9px;

    font-weight: 700;

}


.application-status.active {

    background: #e8f8ef;

    color: #198754;

}


/* =========================================================
   FOOTER
========================================================= */

.application-footer {

    margin-top: auto;

    padding-top: 20px;

    display: flex;

    align-items: center;

    justify-content: space-between;

    gap: 8px;

    border-top: 1px solid #edf0f4;

}


/* =========================================================
   DETAIL BUTTON
========================================================= */

.application-detail-button {

    display: inline-flex;

    align-items: center;

    gap: 7px;

    padding: 9px 14px;

    border-radius: 8px;

    background: #1264e8;

    color: white;

    text-decoration: none;

    font-size: 10.5px;

    font-weight: 600;

    transition: .2s ease;

}


.application-detail-button:hover {

    background: #0d55c8;

    color: white;

    transform: translateX(2px);

}


/* =========================================================
   OPEN BUTTON
========================================================= */

.application-open-button {

    width: 36px;

    height: 36px;

    display: flex;

    align-items: center;

    justify-content: center;

    border-radius: 8px;

    background: #edf5ff;

    color: #1264e8;

    text-decoration: none;

    font-size: 14px;

    transition: .2s ease;

}


.application-open-button:hover {

    background: #1264e8;

    color: white;

}


/* =========================================================
   EMPTY
========================================================= */

.application-empty {

    padding: 65px 20px;

    text-align: center;

    background: white;

    border: 1px dashed #d6dee8;

    border-radius: 17px;

}


.application-empty-icon {

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


.application-empty h3 {

    margin: 0 0 7px;

    color: #26344b;

    font-size: 18px;

    font-weight: 700;

}


.application-empty p {

    margin: 0;

    color: #8490a0;

    font-size: 12px;

}


/* =========================================================
   RESPONSIVE
========================================================= */

@media (max-width: 991px) {

    .application-hero {

        padding: 52px 0 58px;

    }


    .application-hero h1 {

        font-size: 33px;

    }


    .application-card {

        min-height: 310px;

    }

}


@media (max-width: 768px) {

    .application-hero {

        padding: 45px 0 52px;

    }


    .application-hero-inner {

        flex-direction: column;

        text-align: center;

    }


    .application-hero-icon {

        width: 64px;
        height: 64px;

        font-size: 27px;

    }


    .application-hero h1 {

        font-size: 29px;

    }


    .application-hero h1 span {

        display: inline;

    }


    .application-hero p {

        font-size: 12px;

    }


    .application-list-section {

        padding: 42px 0 60px;

    }


    .application-list-header {

        align-items: flex-start;

        flex-direction: column;

    }


    .application-card {

        min-height: 300px;

    }

}


@media (max-width: 480px) {

    .application-hero h1 {

        font-size: 25px;

    }


    .application-card {

        padding: 21px;

    }


    .application-card h3 {

        font-size: 17px;

    }


    .application-description {

        font-size: 11.5px;

    }

}

</style>

@endsection