@extends('layouts.landing')

@section('title', ($data->judul ?? 'Detail Data Informasi') . ' - SIAP Digital Kabupaten Karimun')

@section('content')

{{-- =========================================================
     HERO DETAIL
========================================================= --}}

<section class="detail-data-hero">

    <div class="detail-circle detail-circle-one"></div>
    <div class="detail-circle detail-circle-two"></div>

    <div class="container">

        <div class="detail-hero-content">

            {{-- KEMBALI --}}
            <a
                href="{{ route('data-informasi') }}"
                class="detail-back"
            >
                <i class="bi bi-arrow-left"></i>
                Kembali ke Data Informasi
            </a>


            {{-- ICON --}}
            <div class="detail-hero-icon">

                @php

                    $kategori = strtolower(
                        trim($data->kategori ?? '')
                    );

                    if (
                        str_contains($kategori, 'pendidikan') ||
                        str_contains($kategori, 'sekolah')
                    ) {

                        $icon = 'bi-mortarboard-fill';

                    } elseif (
                        str_contains($kategori, 'kesehatan')
                    ) {

                        $icon = 'bi-heart-pulse-fill';

                    } elseif (
                        str_contains($kategori, 'keuangan') ||
                        str_contains($kategori, 'ekonomi') ||
                        str_contains($kategori, 'pajak')
                    ) {

                        $icon = 'bi-bar-chart-fill';

                    } elseif (
                        str_contains($kategori, 'kependudukan') ||
                        str_contains($kategori, 'penduduk')
                    ) {

                        $icon = 'bi-people-fill';

                    } elseif (
                        str_contains($kategori, 'pemerintahan') ||
                        str_contains($kategori, 'administrasi')
                    ) {

                        $icon = 'bi-building-fill';

                    } elseif (
                        str_contains($kategori, 'lingkungan')
                    ) {

                        $icon = 'bi-tree-fill';

                    } elseif (
                        str_contains($kategori, 'sosial')
                    ) {

                        $icon = 'bi-person-hearts';

                    } elseif (
                        str_contains($kategori, 'geografis') ||
                        str_contains($kategori, 'geografi') ||
                        str_contains($kategori, 'peta')
                    ) {

                        $icon = 'bi-geo-alt-fill';

                    } elseif (
                        str_contains($kategori, 'statistik')
                    ) {

                        $icon = 'bi-graph-up';

                    } elseif (
                        str_contains($kategori, 'pertanian') ||
                        str_contains($kategori, 'perkebunan')
                    ) {

                        $icon = 'bi-flower1';

                    } elseif (
                        str_contains($kategori, 'perikanan') ||
                        str_contains($kategori, 'kelautan')
                    ) {

                        $icon = 'bi-water';

                    } elseif (
                        str_contains($kategori, 'pariwisata')
                    ) {

                        $icon = 'bi-camera-fill';

                    } else {

                        $icon = 'bi-file-earmark-text-fill';

                    }

                @endphp


                <i class="bi {{ $icon }}"></i>

            </div>


            {{-- BADGE --}}

            <span class="detail-badge">

                <i class="bi bi-database"></i>

                DATA INFORMASI

            </span>


            {{-- KATEGORI --}}

            <div class="detail-category">

                <i class="bi bi-tag"></i>

                {{ $data->kategori ?? 'Data Publik' }}

            </div>


            {{-- JUDUL --}}

            <h1>

                {{ $data->judul ?? 'Data Informasi Kabupaten Karimun' }}

            </h1>


        </div>

    </div>

</section>



{{-- =========================================================
     DETAIL CONTENT
========================================================= --}}

<section class="detail-data-section">

    <div class="container">

        <div class="row g-4">


            {{-- =================================================
                 KONTEN UTAMA
            ================================================== --}}

            <div class="col-lg-8">

                <div class="detail-card">


                    {{-- HEADER --}}

                    <div class="detail-card-header">

                        <div class="detail-info-icon">

                            <i class="bi bi-info-circle"></i>

                        </div>

                        <div>

                            <span>
                                INFORMASI DATA
                            </span>

                            <h2>
                                Tentang Data
                            </h2>

                        </div>

                    </div>


                    <div class="detail-divider"></div>


                    {{-- DESKRIPSI --}}

                    <div class="detail-description">

                        <p>
                            {{ $data->deskripsi ?? 'Informasi dan data publik Kabupaten Karimun.' }}
                        </p>

                    </div>


                    {{-- FILE DATA --}}

                    @if($data->file)

                        <div class="data-file-box">

                            <div class="data-file-icon">

                                <i class="bi bi-file-earmark-text"></i>

                            </div>


                            <div class="data-file-info">

                                <h4>
                                    Dokumen Data
                                </h4>

                                <p>
                                    Dokumen atau data tersedia untuk dilihat.
                                </p>

                            </div>


                            <a
                                href="{{ asset('storage/' . $data->file) }}"
                                target="_blank"
                                rel="noopener noreferrer"
                                class="data-file-button"
                            >

                                <i class="bi bi-eye"></i>

                                Lihat Data

                            </a>

                        </div>

                    @else

                        <div class="data-no-file">

                            <i class="bi bi-info-circle"></i>

                            <div>

                                <strong>
                                    Data belum memiliki dokumen
                                </strong>

                                <p>
                                    Dokumen atau file data belum tersedia.
                                </p>

                            </div>

                        </div>

                    @endif


                </div>

            </div>



            {{-- =================================================
                 INFORMASI SAMPING
            ================================================== --}}

            <div class="col-lg-4">

                <div class="detail-side-card">

                    <h3>
                        Informasi
                    </h3>


                    {{-- KATEGORI --}}

                    <div class="detail-item">

                        <div class="detail-item-icon purple">

                            <i class="bi bi-grid"></i>

                        </div>

                        <div>

                            <small>
                                Kategori
                            </small>

                            <strong>
                                {{ $data->kategori ?? 'Data Publik' }}
                            </strong>

                        </div>

                    </div>


                    {{-- STATUS --}}

                    <div class="detail-item">

                        <div class="detail-item-icon green">

                            <i class="bi bi-check-circle"></i>

                        </div>

                        <div>

                            <small>
                                Status
                            </small>

                            <strong class="status-active">

                                {{ ucfirst($data->status ?? 'Aktif') }}

                            </strong>

                        </div>

                    </div>


                    {{-- OPD --}}

                    <div class="detail-item">

                        <div class="detail-item-icon blue">

                            <i class="bi bi-building"></i>

                        </div>

                        <div>

                            <small>
                                OPD
                            </small>

                            <strong>

                                {{ $data->opd ?? '-' }}

                            </strong>

                        </div>

                    </div>


                    {{-- TANGGAL --}}

                    @if($data->created_at)

                        <div class="detail-item">

                            <div class="detail-item-icon orange">

                                <i class="bi bi-calendar3"></i>

                            </div>

                            <div>

                                <small>
                                    Ditambahkan
                                </small>

                                <strong>

                                    {{ $data->created_at->format('d M Y') }}

                                </strong>

                            </div>

                        </div>

                    @endif


                </div>

            </div>

        </div>


        {{-- =================================================
             BUTTON KEMBALI
        ================================================== --}}

        <div class="detail-bottom">

            <a
                href="{{ route('data-informasi') }}"
                class="detail-back-button"
            >

                <i class="bi bi-arrow-left"></i>

                Kembali ke Daftar Data

            </a>

        </div>

    </div>

</section>



{{-- =========================================================
     CTA
========================================================= --}}

<section class="detail-data-cta">

    <div class="container">

        <div class="detail-cta-content">

            <div class="detail-cta-icon">

                <i class="bi bi-globe2"></i>

            </div>


            <h2>
                Informasi Digital Kabupaten Karimun
            </h2>


            <p>
                Akses berbagai data dan informasi Pemerintah
                Kabupaten Karimun melalui SIAP Digital.
            </p>


            <a
                href="{{ route('data-informasi') }}"
                class="detail-cta-button"
            >

                <i class="bi bi-database"></i>

                Lihat Data Lainnya

            </a>

        </div>

    </div>

</section>



{{-- =========================================================
     STYLE
========================================================= --}}

<style>

body {
    font-family: 'Poppins', sans-serif;
    background: #f7f9fc;
}


/* =========================================================
   HERO
========================================================= */

.detail-data-hero {

    position: relative;

    overflow: hidden;

    min-height: 330px;

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


.detail-circle {

    position: absolute;

    border-radius: 50%;

    pointer-events: none;

}


.detail-circle-one {

    width: 480px;
    height: 480px;

    right: -170px;
    top: -270px;

    background: rgba(255,255,255,.08);

}


.detail-circle-two {

    width: 300px;
    height: 300px;

    left: -150px;
    bottom: -230px;

    background: rgba(255,255,255,.06);

}


.detail-hero-content {

    position: relative;

    z-index: 2;

    padding: 55px 0;

}


.detail-back {

    display: inline-flex;

    align-items: center;

    gap: 7px;

    margin-bottom: 28px;

    color: #ffffff;

    text-decoration: none;

    font-size: 12px;

    font-weight: 600;

}


.detail-back:hover {

    color: #ffffff;

    opacity: .8;

}


.detail-hero-icon {

    width: 62px;
    height: 62px;

    margin-bottom: 17px;

    display: flex;

    align-items: center;
    justify-content: center;

    border-radius: 16px;

    background: rgba(255,255,255,.15);

    border: 1px solid rgba(255,255,255,.25);

    font-size: 26px;

}


.detail-badge {

    display: inline-flex;

    align-items: center;

    gap: 6px;

    padding: 6px 12px;

    margin-bottom: 12px;

    border-radius: 20px;

    background: rgba(255,255,255,.13);

    border: 1px solid rgba(255,255,255,.25);

    font-size: 10px;

    font-weight: 700;

}


.detail-category {

    display: flex;

    align-items: center;

    gap: 6px;

    margin-bottom: 8px;

    color: rgba(255,255,255,.9);

    font-size: 12px;

}


.detail-data-hero h1 {

    max-width: 850px;

    margin: 0;

    color: #ffffff;

    font-size: 42px;

    line-height: 1.25;

    font-weight: 800;

}



/* =========================================================
   CONTENT
========================================================= */

.detail-data-section {

    padding: 65px 0 80px;

    background: #f7f9fc;

}


.detail-card {

    padding: 30px;

    background: #ffffff;

    border: 1px solid #e2e8f0;

    border-radius: 18px;

    box-shadow: 0 8px 25px rgba(15,23,42,.05);

}


.detail-card-header {

    display: flex;

    align-items: center;

    gap: 15px;

}


.detail-info-icon {

    width: 50px;
    height: 50px;

    display: flex;

    align-items: center;
    justify-content: center;

    border-radius: 14px;

    background: #eaf3ff;

    color: #0d6efd;

    font-size: 22px;

}


.detail-card-header span {

    display: block;

    margin-bottom: 3px;

    color: #0d6efd;

    font-size: 10px;

    font-weight: 700;

    letter-spacing: .7px;

}


.detail-card-header h2 {

    margin: 0;

    color: #172033;

    font-size: 25px;

    font-weight: 700;

}


.detail-divider {

    height: 1px;

    margin: 22px 0;

    background: #e5eaf0;

}


.detail-description p {

    margin: 0;

    color: #667085;

    font-size: 14px;

    line-height: 1.9;

}



/* =========================================================
   FILE
========================================================= */

.data-file-box {

    display: flex;

    align-items: center;

    gap: 15px;

    margin-top: 30px;

    padding: 18px;

    background: #f7faff;

    border: 1px solid #dce8f8;

    border-radius: 14px;

}


.data-file-icon {

    width: 48px;
    height: 48px;

    min-width: 48px;

    display: flex;

    align-items: center;
    justify-content: center;

    border-radius: 12px;

    background: #eaf3ff;

    color: #0d6efd;

    font-size: 21px;

}


.data-file-info {

    flex: 1;

}


.data-file-info h4 {

    margin: 0 0 4px;

    color: #172033;

    font-size: 15px;

    font-weight: 700;

}


.data-file-info p {

    margin: 0;

    color: #667085;

    font-size: 12px;

}


.data-file-button {

    display: inline-flex;

    align-items: center;

    gap: 7px;

    padding: 10px 15px;

    border-radius: 8px;

    background: #0d6efd;

    color: #ffffff !important;

    text-decoration: none;

    font-size: 12px;

    font-weight: 600;

}


.data-file-button:hover {

    background: #0957d0;

    color: #ffffff !important;

}


.data-no-file {

    display: flex;

    align-items: center;

    gap: 12px;

    margin-top: 30px;

    padding: 15px;

    border-radius: 12px;

    background: #fff8e8;

    border: 1px solid #ffe2a8;

}


.data-no-file > i {

    color: #f59e0b;

    font-size: 20px;

}


.data-no-file strong {

    display: block;

    margin-bottom: 3px;

    color: #6b4c00;

    font-size: 13px;

}


.data-no-file p {

    margin: 0;

    color: #8a6a19;

    font-size: 11px;

}



/* =========================================================
   SIDE CARD
========================================================= */

.detail-side-card {

    padding: 28px;

    background: #ffffff;

    border: 1px solid #e2e8f0;

    border-radius: 18px;

    box-shadow: 0 8px 25px rgba(15,23,42,.05);

}


.detail-side-card h3 {

    margin: 0 0 22px;

    color: #172033;

    font-size: 20px;

    font-weight: 700;

}


.detail-item {

    display: flex;

    align-items: center;

    gap: 13px;

    padding: 15px 0;

    border-bottom: 1px solid #e9edf2;

}


.detail-item:last-child {

    border-bottom: none;

}


.detail-item-icon {

    width: 40px;
    height: 40px;

    min-width: 40px;

    display: flex;

    align-items: center;
    justify-content: center;

    border-radius: 10px;

    font-size: 17px;

}


.detail-item-icon.purple {

    background: #f2eaff;

    color: #7c3aed;

}


.detail-item-icon.green {

    background: #e8f8ef;

    color: #159957;

}


.detail-item-icon.blue {

    background: #eaf3ff;

    color: #1264e8;

}


.detail-item-icon.orange {

    background: #fff3e5;

    color: #f59e0b;

}


.detail-item small {

    display: block;

    margin-bottom: 3px;

    color: #98a2b3;

    font-size: 10px;

}


.detail-item strong {

    display: block;

    color: #172033;

    font-size: 12px;

}


.detail-item .status-active {

    color: #159957;

}



/* =========================================================
   BOTTOM
========================================================= */

.detail-bottom {

    margin-top: 25px;

}


.detail-back-button {

    display: inline-flex;

    align-items: center;

    gap: 7px;

    padding: 11px 17px;

    border: 1px solid #dce3eb;

    border-radius: 9px;

    background: #ffffff;

    color: #344054;

    text-decoration: none;

    font-size: 12px;

    font-weight: 600;

}


.detail-back-button:hover {

    background: #f5f8fc;

    color: #0d6efd;

}



/* =========================================================
   CTA
========================================================= */

.detail-data-cta {

    padding: 70px 0;

    text-align: center;

    background:
        linear-gradient(
            135deg,
            #075fe5,
            #08aee8
        );

    color: #ffffff;

}


.detail-cta-content {

    max-width: 700px;

    margin: auto;

}


.detail-cta-icon {

    width: 65px;
    height: 65px;

    margin: 0 auto 18px;

    display: flex;

    align-items: center;
    justify-content: center;

    border-radius: 17px;

    background: rgba(255,255,255,.15);

    border: 1px solid rgba(255,255,255,.25);

    font-size: 27px;

}


.detail-data-cta h2 {

    margin: 0 0 12px;

    color: #ffffff;

    font-size: 30px;

    font-weight: 700;

}


.detail-data-cta p {

    margin: 0 0 25px;

    color: rgba(255,255,255,.9);

    font-size: 14px;

    line-height: 1.8;

}


.detail-cta-button {

    display: inline-flex;

    align-items: center;

    gap: 7px;

    padding: 11px 18px;

    border-radius: 9px;

    background: #ffffff;

    color: #0d6efd !important;

    text-decoration: none;

    font-size: 12px;

    font-weight: 600;

}


.detail-cta-button:hover {

    color: #0957d0 !important;

    transform: translateY(-2px);

}



/* =========================================================
   RESPONSIVE
========================================================= */

@media (max-width: 991px) {

    .detail-data-hero h1 {

        font-size: 36px;

    }

}


@media (max-width: 767px) {

    .detail-hero-content {

        padding: 45px 15px;

    }

    .detail-data-hero h1 {

        font-size: 30px;

    }

    .detail-card {

        padding: 22px;

    }

    .data-file-box {

        align-items: flex-start;

        flex-wrap: wrap;

    }

    .data-file-button {

        width: 100%;

        justify-content: center;

    }

}


@media (max-width: 576px) {

    .detail-data-hero h1 {

        font-size: 27px;

    }

    .detail-data-section {

        padding: 45px 0 60px;

    }

}

</style>

@endsection