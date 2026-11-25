@extends('layouts.landing')

@php
    use Illuminate\Support\Str;
@endphp

@section('content')

{{-- =========================================================
     HERO
========================================================= --}}

<section class="process-hero">

    <div class="container">

        <div class="row align-items-center">

            <div class="col-lg-7">

                <span class="process-badge">
                    <i class="bi bi-diagram-3"></i>
                    DOMAIN SPBE
                </span>

                <h1 class="process-title">
                    Proses Bisnis
                    <span>Kabupaten Karimun</span>
                </h1>

                <p class="process-description">
                    Informasi mengenai proses bisnis dan alur
                    penyelenggaraan layanan Pemerintah Kabupaten
                    Karimun dalam mendukung transformasi digital.
                </p>

            </div>

            <div class="col-lg-5 d-none d-lg-block">

                <div class="hero-decoration">

                    <div class="hero-circle circle-one"></div>
                    <div class="hero-circle circle-two"></div>

                    <i class="bi bi-diagram-3 hero-main-icon"></i>

                </div>

            </div>

        </div>

    </div>

</section>



{{-- =========================================================
     STATISTIK
========================================================= --}}

<section class="process-stat-section">

    <div class="container">

        <div class="row g-4">

            <div class="col-lg-3 col-md-6">

                <div class="stat-card">

                    <div class="stat-icon blue">
                        <i class="bi bi-diagram-3"></i>
                    </div>

                    <div>
                        <h2>32</h2>
                        <p>Proses Bisnis</p>
                    </div>

                </div>

            </div>


            <div class="col-lg-3 col-md-6">

                <div class="stat-card">

                    <div class="stat-icon green">
                        <i class="bi bi-building"></i>
                    </div>

                    <div>
                        <h2>27</h2>
                        <p>OPD</p>
                    </div>

                </div>

            </div>


            <div class="col-lg-3 col-md-6">

                <div class="stat-card">

                    <div class="stat-icon orange">
                        <i class="bi bi-file-earmark-text"></i>
                    </div>

                    <div>
                        <h2>54</h2>
                        <p>Dokumen</p>
                    </div>

                </div>

            </div>


            <div class="col-lg-3 col-md-6">

                <div class="stat-card">

                    <div class="stat-icon cyan">
                        <i class="bi bi-check-circle"></i>
                    </div>

                    <div>
                        <h2>100%</h2>
                        <p>Terintegrasi</p>
                    </div>

                </div>

            </div>

        </div>

    </div>

</section>



{{-- =========================================================
     PENJELASAN
========================================================= --}}

<section class="process-info-section">

    <div class="container">

        <div class="info-card">

            <div class="info-icon">

                <i class="bi bi-diagram-3"></i>

            </div>

            <div>

                <span class="info-label">
                    TENTANG PROSES BISNIS
                </span>

                <h2>
                    Apa itu Proses Bisnis?
                </h2>

                <p>
                    Proses bisnis merupakan serangkaian aktivitas
                    atau tahapan yang dilakukan secara terstruktur
                    untuk mencapai tujuan tertentu dalam
                    penyelenggaraan pemerintahan dan pelayanan
                    kepada masyarakat.
                </p>

                <p>
                    Dalam Pemerintah Kabupaten Karimun, proses bisnis
                    menggambarkan alur kerja antar perangkat daerah
                    dalam memberikan pelayanan kepada masyarakat,
                    mulai dari pengajuan hingga penyelesaian layanan.
                </p>

            </div>

        </div>

    </div>

</section>



{{-- =========================================================
     ALUR PROSES BISNIS
========================================================= --}}

<section class="process-flow-section">

    <div class="container">

        <div class="section-heading text-center">

            <span>
                ALUR PELAYANAN
            </span>

            <h2>
                Alur Proses Bisnis Pelayanan
            </h2>

            <p>
                Gambaran sederhana alur pelayanan pemerintahan
                berbasis elektronik.
            </p>

        </div>


        <div class="flow-card">

            <div class="process-flow">

                <div class="flow-item">

                    <div class="flow-icon blue">
                        <i class="bi bi-person"></i>
                    </div>

                    <h5>
                        Masyarakat
                    </h5>

                    <small>
                        Mengajukan
                    </small>

                </div>


                <div class="flow-arrow">
                    <i class="bi bi-arrow-right"></i>
                </div>


                <div class="flow-item">

                    <div class="flow-icon green">
                        <i class="bi bi-inbox"></i>
                    </div>

                    <h5>
                        Petugas
                    </h5>

                    <small>
                        Menerima
                    </small>

                </div>


                <div class="flow-arrow">
                    <i class="bi bi-arrow-right"></i>
                </div>


                <div class="flow-item">

                    <div class="flow-icon orange">
                        <i class="bi bi-search"></i>
                    </div>

                    <h5>
                        Verifikasi
                    </h5>

                    <small>
                        Pemeriksaan
                    </small>

                </div>


                <div class="flow-arrow">
                    <i class="bi bi-arrow-right"></i>
                </div>


                <div class="flow-item">

                    <div class="flow-icon cyan">
                        <i class="bi bi-patch-check"></i>
                    </div>

                    <h5>
                        Persetujuan
                    </h5>

                    <small>
                        Validasi
                    </small>

                </div>


                <div class="flow-arrow">
                    <i class="bi bi-arrow-right"></i>
                </div>


                <div class="flow-item">

                    <div class="flow-icon red">
                        <i class="bi bi-check-circle"></i>
                    </div>

                    <h5>
                        Selesai
                    </h5>

                    <small>
                        Layanan
                    </small>

                </div>

            </div>

        </div>

    </div>

</section>



{{-- =========================================================
     PENCARIAN
========================================================= --}}

<section class="process-search-section">

    <div class="container">

        <div class="search-wrapper">

            <div class="search-heading">

                <span>
                    <i class="bi bi-search"></i>
                </span>

                <div>

                    <h3>
                        Cari Proses Bisnis
                    </h3>

                    <p>
                        Cari berdasarkan judul, OPD, atau kategori.
                    </p>

                </div>

            </div>


            <form
                method="GET"
                action="{{ route('proses-bisnis') }}"
            >

                <div class="search-box">

                    <i class="bi bi-search"></i>

                    <input
                        type="text"
                        name="search"
                        placeholder="Cari proses bisnis..."
                        value="{{ request('search') }}"
                    >

                    @if(request('search'))

                        <a
                            href="{{ route('proses-bisnis') }}"
                            class="clear-search"
                            title="Hapus pencarian"
                        >
                            <i class="bi bi-x-circle"></i>
                        </a>

                    @endif

                    <button type="submit">

                        <i class="bi bi-search"></i>

                        Cari

                    </button>

                </div>

            </form>

        </div>

    </div>

</section>



{{-- =========================================================
     DAFTAR PROSES BISNIS
========================================================= --}}

<section class="business-list-section">

    <div class="container">

        <div class="list-heading">

            <div>

                <span class="list-label">
                    DATA SPBE
                </span>

                <h2>
                    Daftar Proses Bisnis
                </h2>

                <p>
                    Berikut proses bisnis yang telah diterapkan
                    oleh Pemerintah Kabupaten Karimun.
                </p>

            </div>


            @if($proses)

                <div class="total-data">

                    <i class="bi bi-database"></i>

                    {{ $proses->total() }} Data

                </div>

            @endif

        </div>



        {{-- CARD DATA --}}

        <div class="row g-4">

            @forelse($proses as $item)

                <div class="col-lg-6">

                    <div class="business-card">

                        {{-- HEADER --}}

                        <div class="business-header">

                            @php

                                $iconPalette = [

                                    [
                                        'icon' => 'bi-person-vcard-fill',
                                        'class' => 'blue'
                                    ],

                                    [
                                        'icon' => 'bi-building',
                                        'class' => 'green'
                                    ],

                                    [
                                        'icon' => 'bi-heart-pulse-fill',
                                        'class' => 'red'
                                    ],

                                    [
                                        'icon' => 'bi-book-fill',
                                        'class' => 'orange'
                                    ],

                                    [
                                        'icon' => 'bi-people-fill',
                                        'class' => 'cyan'
                                    ],

                                    [
                                        'icon' => 'bi-diagram-3-fill',
                                        'class' => 'purple'
                                    ],

                                    [
                                        'icon' => 'bi-clipboard-check-fill',
                                        'class' => 'dark'
                                    ],

                                    [
                                        'icon' => 'bi-shield-check',
                                        'class' => 'blue'
                                    ],

                                ];

                                $pick =
                                    $iconPalette[
                                        $loop->index
                                        % count($iconPalette)
                                    ];

                            @endphp


                            <div class="business-icon {{ $pick['class'] }}">

                                <i class="bi {{ $pick['icon'] }}"></i>

                            </div>


                            <div class="business-title">

                                <h3>
                                    {{ $item->judul }}
                                </h3>

                                <span>
                                    <i class="bi bi-building"></i>

                                    {{ $item->opd }}
                                </span>

                            </div>

                        </div>



                        {{-- DESCRIPTION --}}

                        <p class="business-description">

                            {{ Str::limit(
                                $item->deskripsi ?: 'Tidak ada deskripsi.',
                                150
                            ) }}

                        </p>



                        {{-- FOOTER --}}

                        <div class="business-footer">


                            @if($item->status)

                                <span class="status-badge">

                                    <i class="bi bi-check-circle-fill"></i>

                                    {{ $item->status }}

                                </span>

                            @else

                                <span class="status-badge">

                                    <i class="bi bi-check-circle-fill"></i>

                                    Aktif

                                </span>

                            @endif



                            <div class="business-actions">

                                <a
                                    href="{{ route(
                                        'proses-bisnis.detail',
                                        $item->id
                                    ) }}"
                                    class="detail-button"
                                >

                                    <i class="bi bi-eye"></i>

                                    Lihat Detail

                                    <i class="bi bi-arrow-right"></i>

                                </a>


                                @if($item->pdf)

                                    <a
                                        href="{{ asset(
                                            'storage/' . $item->pdf
                                        ) }}"
                                        target="_blank"
                                        class="pdf-button"
                                    >

                                        <i class="bi bi-file-earmark-pdf"></i>

                                        PDF

                                    </a>

                                @endif

                            </div>

                        </div>

                    </div>

                </div>

            @empty

                <div class="col-12">

                    <div class="empty-business">

                        <div class="empty-icon">

                            <i class="bi bi-search"></i>

                        </div>

                        <h3>
                            Data Tidak Ditemukan
                        </h3>

                        <p>
                            Belum ada proses bisnis yang sesuai
                            dengan pencarian.
                        </p>

                        <a
                            href="{{ route('proses-bisnis') }}"
                            class="reset-button"
                        >

                            <i class="bi bi-arrow-clockwise"></i>

                            Tampilkan Semua Data

                        </a>

                    </div>

                </div>

            @endforelse

        </div>



        {{-- =================================================
             PAGINATION
        ================================================== --}}

        @if($proses->hasPages())

            <div class="custom-pagination">

                {{-- PREVIOUS --}}

                @if($proses->onFirstPage())

                    <span class="page-button disabled">

                        <i class="bi bi-chevron-left"></i>

                        Sebelumnya

                    </span>

                @else

                    <a
                        href="{{ $proses->previousPageUrl() }}"
                        class="page-button"
                    >

                        <i class="bi bi-chevron-left"></i>

                        Sebelumnya

                    </a>

                @endif



                {{-- NOMOR HALAMAN --}}

                <div class="page-numbers">

                    @foreach($proses->getUrlRange(
                        max(1, $proses->currentPage() - 2),
                        min(
                            $proses->lastPage(),
                            $proses->currentPage() + 2
                        )
                    ) as $page => $url)

                        @if($page == $proses->currentPage())

                            <span class="page-number active">
                                {{ $page }}
                            </span>

                        @else

                            <a
                                href="{{ $url }}"
                                class="page-number"
                            >
                                {{ $page }}
                            </a>

                        @endif

                    @endforeach

                </div>



                {{-- NEXT --}}

                @if($proses->hasMorePages())

                    <a
                        href="{{ $proses->nextPageUrl() }}"
                        class="page-button"
                    >

                        Selanjutnya

                        <i class="bi bi-chevron-right"></i>

                    </a>

                @else

                    <span class="page-button disabled">

                        Selanjutnya

                        <i class="bi bi-chevron-right"></i>

                    </span>

                @endif

            </div>


            <div class="pagination-info">

                Menampilkan

                <strong>
                    {{ $proses->firstItem() }}
                </strong>

                sampai

                <strong>
                    {{ $proses->lastItem() }}
                </strong>

                dari

                <strong>
                    {{ $proses->total() }}
                </strong>

                proses bisnis

            </div>

        @endif

    </div>

</section>



<style>

/* =========================================================
   GLOBAL
========================================================= */

.process-hero,
.process-stat-section,
.process-info-section,
.process-flow-section,
.process-search-section,
.business-list-section {

    font-family: 'Poppins', sans-serif;

}


/* =========================================================
   HERO
========================================================= */

.process-hero {

    position: relative;

    overflow: hidden;

    padding: 75px 0 80px;

    background:
        linear-gradient(
            110deg,
            #0878f9 0%,
            #078be9 48%,
            #0ca0bd 100%
        );

    color: white;

}


.process-hero::before {

    content: '';

    position: absolute;

    width: 420px;

    height: 420px;

    border-radius: 50%;

    background: rgba(255,255,255,.08);

    right: -100px;

    top: -180px;

}


.process-hero::after {

    content: '';

    position: absolute;

    width: 260px;

    height: 260px;

    border-radius: 50%;

    background: rgba(255,255,255,.05);

    left: -120px;

    bottom: -160px;

}


.process-badge {

    display: inline-flex;

    align-items: center;

    gap: 8px;

    padding: 9px 17px;

    margin-bottom: 25px;

    border: 1px solid rgba(255,255,255,.4);

    border-radius: 30px;

    background: rgba(255,255,255,.10);

    font-size: 12px;

    font-weight: 700;

    letter-spacing: .5px;

}


.process-title {

    margin: 0 0 22px;

    font-size: 48px;

    line-height: 1.15;

    font-weight: 700;

}


.process-title span {

    display: block;

    color: #dff4ff;

}


.process-description {

    max-width: 760px;

    margin: 0;

    font-size: 16px;

    line-height: 1.9;

    color: rgba(255,255,255,.95);

}


/* =========================================================
   HERO DECORATION
========================================================= */

.hero-decoration {

    position: relative;

    height: 280px;

}


.hero-circle {

    position: absolute;

    border-radius: 50%;

    background: rgba(255,255,255,.10);

}


.circle-one {

    width: 280px;

    height: 280px;

    right: 20px;

    top: -30px;

}


.circle-two {

    width: 130px;

    height: 130px;

    left: 20px;

    bottom: 10px;

    background: rgba(255,255,255,.08);

}


.hero-main-icon {

    position: absolute;

    top: 90px;

    right: 125px;

    font-size: 100px;

    color: rgba(255,255,255,.9);

}


/* =========================================================
   STATISTICS
========================================================= */

.process-stat-section {

    padding: 40px 0;

    background: #f7f9fc;

}


.stat-card {

    height: 100%;

    display: flex;

    align-items: center;

    gap: 18px;

    padding: 24px;

    background: white;

    border: 1px solid #e6ebf2;

    border-radius: 16px;

    box-shadow: 0 7px 25px rgba(20,45,80,.06);

}


.stat-icon {

    width: 58px;

    height: 58px;

    flex-shrink: 0;

    display: flex;

    align-items: center;

    justify-content: center;

    border-radius: 14px;

    color: white;

    font-size: 22px;

}


.stat-icon.blue,
.flow-icon.blue,
.business-icon.blue {

    background: #1264e8;

}


.stat-icon.green,
.flow-icon.green,
.business-icon.green {

    background: #159957;

}


.stat-icon.orange,
.flow-icon.orange,
.business-icon.orange {

    background: #f59e0b;

}


.stat-icon.cyan,
.flow-icon.cyan,
.business-icon.cyan {

    background: #12a8c7;

}


.stat-icon.red,
.flow-icon.red,
.business-icon.red {

    background: #e63946;

}


.stat-icon.purple,
.business-icon.purple {

    background: #7c3aed;

}


.stat-icon.dark,
.business-icon.dark {

    background: #1e293b;

}


.stat-card h2 {

    margin: 0;

    color: #14213d;

    font-size: 27px;

    font-weight: 700;

}


.stat-card p {

    margin: 2px 0 0;

    color: #718096;

    font-size: 12px;

}


/* =========================================================
   INFORMATION
========================================================= */

.process-info-section {

    padding: 65px 0;

    background: #fff;

}


.info-card {

    display: flex;

    gap: 28px;

    padding: 34px;

    background: white;

    border: 1px solid #e5eaf1;

    border-radius: 20px;

    box-shadow: 0 8px 30px rgba(30,50,80,.06);

}


.info-icon {

    width: 62px;

    height: 62px;

    flex-shrink: 0;

    display: flex;

    align-items: center;

    justify-content: center;

    border-radius: 15px;

    background: #eaf3ff;

    color: #1264e8;

    font-size: 26px;

}


.info-label {

    color: #1264e8;

    font-size: 11px;

    font-weight: 700;

    letter-spacing: .8px;

}


.info-card h2 {

    margin: 7px 0 12px;

    color: #14213d;

    font-size: 27px;

    font-weight: 700;

}


.info-card p {

    margin: 0 0 12px;

    color: #68768b;

    font-size: 14px;

    line-height: 1.9;

}


.info-card p:last-child {

    margin-bottom: 0;

}


/* =========================================================
   FLOW
========================================================= */

.process-flow-section {

    padding: 70px 0;

    background: #f7f9fc;

}


.section-heading {

    margin-bottom: 35px;

}


.section-heading > span {

    color: #1264e8;

    font-size: 11px;

    font-weight: 700;

    letter-spacing: 1px;

}


.section-heading h2 {

    margin: 8px 0;

    color: #14213d;

    font-size: 29px;

    font-weight: 700;

}


.section-heading p {

    margin: 0;

    color: #718096;

    font-size: 13px;

}


.flow-card {

    padding: 35px 25px;

    background: white;

    border: 1px solid #e4e9f0;

    border-radius: 20px;

    box-shadow: 0 8px 30px rgba(20,40,70,.05);

}


.process-flow {

    display: flex;

    align-items: center;

    justify-content: center;

    gap: 22px;

}


.flow-item {

    min-width: 105px;

    text-align: center;

}


.flow-icon {

    width: 52px;

    height: 52px;

    margin: 0 auto 10px;

    display: flex;

    align-items: center;

    justify-content: center;

    border-radius: 50%;

    color: white;

    font-size: 19px;

    box-shadow: 0 7px 18px rgba(0,0,0,.12);

}


.flow-item h5 {

    margin: 0;

    color: #253047;

    font-size: 12px;

    font-weight: 700;

}


.flow-item small {

    color: #8792a3;

    font-size: 10px;

}


.flow-arrow {

    color: #aab4c3;

    font-size: 20px;

}


/* =========================================================
   SEARCH
========================================================= */

.process-search-section {

    padding: 65px 0 35px;

    background: white;

}


.search-wrapper {

    max-width: 850px;

    margin: auto;

    padding: 25px;

    background: #f8fafc;

    border: 1px solid #e5eaf1;

    border-radius: 18px;

}


.search-heading {

    display: flex;

    align-items: center;

    gap: 14px;

    margin-bottom: 18px;

}


.search-heading > span {

    width: 44px;

    height: 44px;

    display: flex;

    align-items: center;

    justify-content: center;

    border-radius: 12px;

    background: #eaf3ff;

    color: #1264e8;

}


.search-heading h3 {

    margin: 0;

    color: #1d2939;

    font-size: 18px;

    font-weight: 700;

}


.search-heading p {

    margin: 2px 0 0;

    color: #7a8698;

    font-size: 11px;

}


.search-box {

    display: flex;

    align-items: center;

    gap: 10px;

    padding: 6px 7px 6px 17px;

    background: white;

    border: 1px solid #dfe5ed;

    border-radius: 11px;

}


.search-box > i {

    color: #7d8a9c;

}


.search-box input {

    flex: 1;

    min-width: 0;

    border: none;

    outline: none;

    background: transparent;

    color: #253047;

    font-size: 13px;

}


.search-box input::placeholder {

    color: #a1aab7;

}


.clear-search {

    color: #9aa5b4;

    text-decoration: none;

}


.clear-search:hover {

    color: #1264e8;

}


.search-box button {

    border: none;

    padding: 10px 19px;

    border-radius: 8px;

    background: #1264e8;

    color: white;

    font-size: 12px;

    font-weight: 600;

}


.search-box button:hover {

    background: #0d55c8;

}


/* =========================================================
   BUSINESS LIST
========================================================= */

.business-list-section {

    padding: 30px 0 80px;

    background: white;

}


.list-heading {

    display: flex;

    align-items: flex-end;

    justify-content: space-between;

    gap: 20px;

    margin-bottom: 30px;

}


.list-label {

    color: #1264e8;

    font-size: 10px;

    font-weight: 700;

    letter-spacing: 1px;

}


.list-heading h2 {

    margin: 6px 0;

    color: #14213d;

    font-size: 29px;

    font-weight: 700;

}


.list-heading p {

    margin: 0;

    color: #788599;

    font-size: 13px;

}


.total-data {

    display: inline-flex;

    align-items: center;

    gap: 7px;

    padding: 9px 14px;

    border: 1px solid #dce5f0;

    border-radius: 9px;

    color: #1264e8;

    background: #f8fbff;

    font-size: 11px;

    font-weight: 600;

}


/* =========================================================
   BUSINESS CARD
========================================================= */

.business-card {

    height: 100%;

    min-height: 245px;

    padding: 25px;

    display: flex;

    flex-direction: column;

    background: white;

    border: 1px solid #e1e7ef;

    border-radius: 18px;

    box-shadow: 0 7px 25px rgba(30,50,80,.055);

    transition: .25s ease;

}


.business-card:hover {

    transform: translateY(-4px);

    border-color: #c9ddfa;

    box-shadow: 0 13px 32px rgba(30,70,120,.10);

}


.business-header {

    display: flex;

    align-items: flex-start;

    gap: 16px;

}


.business-icon {

    width: 54px;

    height: 54px;

    flex-shrink: 0;

    display: flex;

    align-items: center;

    justify-content: center;

    border-radius: 14px;

    color: white;

    font-size: 21px;

}


.business-title h3 {

    margin: 2px 0 7px;

    color: #18243a;

    font-size: 17px;

    font-weight: 700;

    line-height: 1.4;

}


.business-title span {

    display: flex;

    align-items: center;

    gap: 5px;

    color: #68778d;

    font-size: 11px;

}


.business-description {

    margin: 20px 0;

    color: #6c7a8e;

    font-size: 12.5px;

    line-height: 1.8;

}


.business-footer {

    margin-top: auto;

    padding-top: 18px;

    display: flex;

    align-items: center;

    justify-content: space-between;

    gap: 12px;

    border-top: 1px solid #edf0f4;

}


.status-badge {

    display: inline-flex;

    align-items: center;

    gap: 5px;

    padding: 6px 10px;

    border-radius: 20px;

    background: #e9f8f0;

    color: #198754;

    font-size: 10px;

    font-weight: 700;

}


.business-actions {

    display: flex;

    align-items: center;

    gap: 7px;

}


.detail-button,
.pdf-button {

    display: inline-flex;

    align-items: center;

    gap: 6px;

    padding: 8px 12px;

    border-radius: 8px;

    text-decoration: none;

    font-size: 10.5px;

    font-weight: 600;

    transition: .2s ease;

}


.detail-button {

    background: #1264e8;

    color: white;

}


.detail-button:hover {

    background: #0d55c8;

    color: white;

}


.pdf-button {

    background: #fff1f1;

    color: #dc3545;

    border: 1px solid #ffd6d6;

}


.pdf-button:hover {

    background: #dc3545;

    color: white;

}


/* =========================================================
   EMPTY
========================================================= */

.empty-business {

    padding: 60px 20px;

    text-align: center;

    border: 1px dashed #d8e0ea;

    border-radius: 18px;

    background: #fafcff;

}


.empty-icon {

    width: 60px;

    height: 60px;

    margin: 0 auto 15px;

    display: flex;

    align-items: center;

    justify-content: center;

    border-radius: 50%;

    background: #eaf3ff;

    color: #1264e8;

    font-size: 23px;

}


.empty-business h3 {

    margin-bottom: 7px;

    color: #253047;

    font-size: 18px;

}


.empty-business p {

    margin-bottom: 20px;

    color: #7c8797;

    font-size: 12px;

}


.reset-button {

    display: inline-flex;

    align-items: center;

    gap: 7px;

    padding: 9px 15px;

    border-radius: 8px;

    background: #1264e8;

    color: white;

    text-decoration: none;

    font-size: 11px;

    font-weight: 600;

}


/* =========================================================
   PAGINATION
========================================================= */

.custom-pagination {

    display: flex;

    align-items: center;

    justify-content: center;

    gap: 8px;

    margin-top: 45px;

}


.page-button {

    min-height: 38px;

    display: inline-flex;

    align-items: center;

    justify-content: center;

    gap: 7px;

    padding: 0 15px;

    border: 1px solid #dce3ec;

    border-radius: 8px;

    background: white;

    color: #41516a;

    text-decoration: none;

    font-size: 12px;

    font-weight: 600;

    transition: .2s ease;

}


.page-button:hover {

    border-color: #1264e8;

    background: #1264e8;

    color: white;

}


.page-button.disabled {

    color: #b4bdc9;

    background: #f7f9fb;

    cursor: not-allowed;

}


.page-numbers {

    display: flex;

    align-items: center;

    gap: 5px;

}


.page-number {

    width: 38px;

    height: 38px;

    display: inline-flex;

    align-items: center;

    justify-content: center;

    border: 1px solid #dce3ec;

    border-radius: 8px;

    background: white;

    color: #53627a;

    text-decoration: none;

    font-size: 12px;

    font-weight: 600;

    transition: .2s ease;

}


.page-number:hover {

    border-color: #1264e8;

    color: #1264e8;

}


.page-number.active {

    border-color: #1264e8;

    background: #1264e8;

    color: white;

}


.pagination-info {

    margin-top: 14px;

    text-align: center;

    color: #8994a4;

    font-size: 11px;

}


.pagination-info strong {

    color: #43516a;

    font-weight: 600;

}


/* =========================================================
   RESPONSIVE
========================================================= */

@media (max-width: 991px) {

    .process-title {

        font-size: 40px;

    }

    .process-flow {

        flex-wrap: wrap;

    }

    .flow-arrow {

        display: none;

    }

}


@media (max-width: 768px) {

    .process-hero {

        padding: 55px 0 60px;

    }

    .process-title {

        font-size: 34px;

    }

    .process-description {

        font-size: 14px;

    }

    .info-card {

        flex-direction: column;

        padding: 25px;

    }

    .list-heading {

        align-items: flex-start;

        flex-direction: column;

    }

    .business-footer {

        align-items: flex-start;

        flex-direction: column;

    }

    .business-actions {

        width: 100%;

    }

    .detail-button,
    .pdf-button {

        justify-content: center;

    }

    .custom-pagination {

        flex-wrap: wrap;

    }

}


@media (max-width: 480px) {

    .process-title {

        font-size: 29px;

    }

    .search-box {

        flex-wrap: wrap;

        padding: 10px;

    }

    .search-box input {

        width: calc(100% - 35px);

        flex: none;

    }

    .search-box button {

        width: 100%;

    }

    .page-button {

        padding: 0 11px;

        font-size: 11px;

    }

}

</style>

@endsection