@extends('layouts.landing')

@section('content')

<section class="process-detail-page">

    <div class="container">

        {{-- =====================================================
             TOMBOL KEMBALI
        ====================================================== --}}

        <div class="detail-back-wrapper">

            <a
                href="{{ route('proses-bisnis') }}"
                class="detail-back"
            >

                <i class="bi bi-arrow-left"></i>

                Kembali ke Proses Bisnis

            </a>

        </div>


        {{-- =====================================================
             DETAIL CARD
        ====================================================== --}}

        <div class="detail-card">

            {{-- HEADER --}}

            <div class="detail-header">

                <div class="detail-icon">

                    <i class="bi bi-diagram-3-fill"></i>

                </div>


                <div class="detail-heading">

                    <div class="detail-badges">

                        <span class="category-badge">

                            <i class="bi bi-folder"></i>

                            {{ $proses->kategori ?? 'Umum' }}

                        </span>


                        <span class="status-badge-detail
                            {{ $proses->status == 'Aktif'
                                ? 'active'
                                : 'inactive' }}">

                            <i class="bi bi-check-circle-fill"></i>

                            {{ $proses->status ?? 'Aktif' }}

                        </span>

                    </div>


                    <h1>
                        {{ $proses->judul }}
                    </h1>


                    <div class="detail-opd">

                        <i class="bi bi-building"></i>

                        {{ $proses->opd }}

                    </div>

                </div>

            </div>



            {{-- GARIS --}}

            <div class="detail-divider"></div>



            {{-- =================================================
                 DESKRIPSI
            ================================================== --}}

            <div class="detail-description">

                <span class="detail-section-label">
                    TENTANG PROSES BISNIS
                </span>

                <h2>
                    Deskripsi
                </h2>

                <p>
                    {{ $proses->deskripsi ?: 'Tidak ada deskripsi untuk proses bisnis ini.' }}
                </p>

            </div>



            {{-- =================================================
                 DOKUMEN
            ================================================== --}}

            @if($proses->pdf)

                <div class="document-box">

                    <div class="document-left">

                        <div class="document-icon">

                            <i class="bi bi-file-earmark-pdf-fill"></i>

                        </div>

                        <div>

                            <h4>
                                Dokumen SOP
                            </h4>

                            <p>
                                Dokumen pendukung proses bisnis
                            </p>

                        </div>

                    </div>


                    <a
                        href="{{ asset('storage/'.$proses->pdf) }}"
                        target="_blank"
                        class="document-button"
                    >

                        <i class="bi bi-download"></i>

                        Unduh Dokumen

                    </a>

                </div>

            @endif



            {{-- =================================================
                 ALUR PROSES
            ================================================== --}}

            <div class="detail-flow-section">

                <div class="detail-section-heading">

                    <span>
                        <i class="bi bi-diagram-3"></i>
                        ALUR PROSES
                    </span>

                    <h2>
                        Alur Proses Bisnis
                    </h2>

                    <p>
                        Gambaran umum tahapan proses bisnis
                        dari pengajuan hingga pelaporan.
                    </p>

                </div>


                <div class="detail-flow-card">

                    <div class="detail-flow">

                        {{-- PENGAJUAN --}}

                        <div class="detail-flow-item">

                            <div class="detail-flow-icon blue">

                                <i class="bi bi-file-earmark-plus"></i>

                            </div>

                            <h5>
                                Pengajuan
                            </h5>

                            <small>
                                Permohonan
                            </small>

                        </div>


                        <div class="detail-flow-arrow">

                            <i class="bi bi-chevron-right"></i>

                        </div>


                        {{-- VERIFIKASI --}}

                        <div class="detail-flow-item">

                            <div class="detail-flow-icon orange">

                                <i class="bi bi-search"></i>

                            </div>

                            <h5>
                                Verifikasi
                            </h5>

                            <small>
                                Pemeriksaan
                            </small>

                        </div>


                        <div class="detail-flow-arrow">

                            <i class="bi bi-chevron-right"></i>

                        </div>


                        {{-- PERSETUJUAN --}}

                        <div class="detail-flow-item">

                            <div class="detail-flow-icon cyan">

                                <i class="bi bi-patch-check"></i>

                            </div>

                            <h5>
                                Persetujuan
                            </h5>

                            <small>
                                Validasi
                            </small>

                        </div>


                        <div class="detail-flow-arrow">

                            <i class="bi bi-chevron-right"></i>

                        </div>


                        {{-- PENYELESAIAN --}}

                        <div class="detail-flow-item">

                            <div class="detail-flow-icon green">

                                <i class="bi bi-check-circle"></i>

                            </div>

                            <h5>
                                Penyelesaian
                            </h5>

                            <small>
                                Penyelesaian
                            </small>

                        </div>


                        <div class="detail-flow-arrow">

                            <i class="bi bi-chevron-right"></i>

                        </div>


                        {{-- PELAPORAN --}}

                        <div class="detail-flow-item">

                            <div class="detail-flow-icon red">

                                <i class="bi bi-clipboard-data"></i>

                            </div>

                            <h5>
                                Pelaporan
                            </h5>

                            <small>
                                Dokumentasi
                            </small>

                        </div>

                    </div>

                </div>

            </div>



            {{-- =================================================
                 CATATAN
            ================================================== --}}

            <div class="detail-note">

                <div class="note-icon">

                    <i class="bi bi-info-circle"></i>

                </div>

                <div>

                    <strong>
                        Catatan
                    </strong>

                    <p>
                        Alur di atas merupakan gambaran umum
                        proses bisnis. Untuk SOP rinci per langkah
                        kerja, silakan unduh dokumen pendukung
                        apabila tersedia.
                    </p>

                </div>

            </div>



            {{-- =================================================
                 BUTTON BAWAH
            ================================================== --}}

            <div class="detail-bottom">

                <a
                    href="{{ route('proses-bisnis') }}"
                    class="back-list-button"
                >

                    <i class="bi bi-arrow-left"></i>

                    Kembali ke Daftar

                </a>


                @if($proses->pdf)

                    <a
                        href="{{ asset('storage/'.$proses->pdf) }}"
                        target="_blank"
                        class="download-button"
                    >

                        <i class="bi bi-file-earmark-pdf"></i>

                        Lihat Dokumen SOP

                    </a>

                @endif

            </div>

        </div>

    </div>

</section>



<style>

/* =========================================================
   PAGE
========================================================= */

.process-detail-page {

    min-height: calc(100vh - 160px);

    padding: 55px 0 85px;

    background: #f7f9fc;

    font-family: 'Poppins', sans-serif;

}


/* =========================================================
   BACK
========================================================= */

.detail-back-wrapper {

    margin-bottom: 22px;

}


.detail-back {

    display: inline-flex;

    align-items: center;

    gap: 8px;

    color: #1264e8;

    text-decoration: none;

    font-size: 13px;

    font-weight: 600;

    transition: .2s ease;

}


.detail-back:hover {

    color: #0d55c8;

    transform: translateX(-2px);

}


/* =========================================================
   CARD
========================================================= */

.detail-card {

    max-width: 1000px;

    margin: 0 auto;

    padding: 38px;

    background: white;

    border: 1px solid #e2e8f0;

    border-radius: 20px;

    box-shadow: 0 10px 35px rgba(20,45,80,.07);

}


/* =========================================================
   HEADER
========================================================= */

.detail-header {

    display: flex;

    align-items: flex-start;

    gap: 22px;

}


.detail-icon {

    width: 68px;

    height: 68px;

    flex-shrink: 0;

    display: flex;

    align-items: center;

    justify-content: center;

    border-radius: 17px;

    background: #1264e8;

    color: white;

    font-size: 28px;

    box-shadow: 0 8px 20px rgba(18,100,232,.22);

}


.detail-heading {

    flex: 1;

}


.detail-badges {

    display: flex;

    align-items: center;

    gap: 8px;

    flex-wrap: wrap;

    margin-bottom: 10px;

}


.category-badge,
.status-badge-detail {

    display: inline-flex;

    align-items: center;

    gap: 5px;

    padding: 6px 11px;

    border-radius: 20px;

    font-size: 10px;

    font-weight: 700;

}


.category-badge {

    background: #eaf3ff;

    color: #1264e8;

}


.status-badge-detail.active {

    background: #e8f7ef;

    color: #198754;

}


.status-badge-detail.inactive {

    background: #eef1f4;

    color: #6c757d;

}


.detail-heading h1 {

    margin: 0 0 9px;

    color: #14213d;

    font-size: 31px;

    line-height: 1.35;

    font-weight: 700;

}


.detail-opd {

    display: flex;

    align-items: center;

    gap: 6px;

    color: #68778d;

    font-size: 12px;

}


.detail-opd i {

    color: #1264e8;

}


/* =========================================================
   DIVIDER
========================================================= */

.detail-divider {

    height: 1px;

    margin: 30px 0;

    background: #e9edf2;

}


/* =========================================================
   DESCRIPTION
========================================================= */

.detail-description {

    margin-bottom: 35px;

}


.detail-section-label {

    color: #1264e8;

    font-size: 10px;

    font-weight: 700;

    letter-spacing: 1px;

}


.detail-description h2 {

    margin: 7px 0 12px;

    color: #17233a;

    font-size: 23px;

    font-weight: 700;

}


.detail-description p {

    margin: 0;

    color: #68778d;

    font-size: 14px;

    line-height: 1.9;

}


/* =========================================================
   DOCUMENT
========================================================= */

.document-box {

    display: flex;

    align-items: center;

    justify-content: space-between;

    gap: 20px;

    padding: 18px;

    margin-bottom: 40px;

    background: #f8fbff;

    border: 1px solid #dce9f9;

    border-radius: 14px;

}


.document-left {

    display: flex;

    align-items: center;

    gap: 13px;

}


.document-icon {

    width: 48px;

    height: 48px;

    display: flex;

    align-items: center;

    justify-content: center;

    border-radius: 12px;

    background: #fff0f0;

    color: #dc3545;

    font-size: 21px;

}


.document-left h4 {

    margin: 0 0 3px;

    color: #253047;

    font-size: 14px;

    font-weight: 700;

}


.document-left p {

    margin: 0;

    color: #8994a4;

    font-size: 11px;

}


.document-button {

    display: inline-flex;

    align-items: center;

    gap: 7px;

    padding: 10px 15px;

    border-radius: 8px;

    background: #1264e8;

    color: white;

    text-decoration: none;

    font-size: 11px;

    font-weight: 600;

    transition: .2s ease;

}


.document-button:hover {

    background: #0d55c8;

    color: white;

}


/* =========================================================
   FLOW SECTION
========================================================= */

.detail-flow-section {

    margin-top: 10px;

}


.detail-section-heading {

    margin-bottom: 20px;

}


.detail-section-heading > span {

    display: inline-flex;

    align-items: center;

    gap: 6px;

    color: #1264e8;

    font-size: 10px;

    font-weight: 700;

    letter-spacing: .8px;

}


.detail-section-heading h2 {

    margin: 7px 0 5px;

    color: #17233a;

    font-size: 23px;

    font-weight: 700;

}


.detail-section-heading p {

    margin: 0;

    color: #7a8799;

    font-size: 12px;

}


/* =========================================================
   FLOW CARD
========================================================= */

.detail-flow-card {

    padding: 30px 20px;

    background: #f8fafc;

    border: 1px solid #e5eaf0;

    border-radius: 16px;

}


.detail-flow {

    display: flex;

    align-items: center;

    justify-content: center;

    gap: 18px;

}


.detail-flow-item {

    min-width: 105px;

    text-align: center;

}


.detail-flow-icon {

    width: 52px;

    height: 52px;

    margin: 0 auto 9px;

    display: flex;

    align-items: center;

    justify-content: center;

    border-radius: 50%;

    color: white;

    font-size: 19px;

    box-shadow: 0 6px 15px rgba(0,0,0,.12);

}


.detail-flow-icon.blue {

    background: #1264e8;

}


.detail-flow-icon.orange {

    background: #f59e0b;

}


.detail-flow-icon.cyan {

    background: #12a8c7;

}


.detail-flow-icon.green {

    background: #159957;

}


.detail-flow-icon.red {

    background: #e63946;

}


.detail-flow-item h5 {

    margin: 0 0 2px;

    color: #26344b;

    font-size: 11px;

    font-weight: 700;

}


.detail-flow-item small {

    color: #8994a4;

    font-size: 9px;

}


.detail-flow-arrow {

    color: #aeb8c6;

    font-size: 17px;

}


/* =========================================================
   NOTE
========================================================= */

.detail-note {

    display: flex;

    align-items: flex-start;

    gap: 13px;

    margin-top: 30px;

    padding: 17px;

    background: #f8fbff;

    border: 1px solid #dce9f9;

    border-radius: 13px;

}


.note-icon {

    width: 38px;

    height: 38px;

    flex-shrink: 0;

    display: flex;

    align-items: center;

    justify-content: center;

    border-radius: 10px;

    background: #eaf3ff;

    color: #1264e8;

    font-size: 17px;

}


.detail-note strong {

    display: block;

    margin-bottom: 3px;

    color: #26344b;

    font-size: 12px;

}


.detail-note p {

    margin: 0;

    color: #788599;

    font-size: 11px;

    line-height: 1.7;

}


/* =========================================================
   BOTTOM BUTTON
========================================================= */

.detail-bottom {

    display: flex;

    justify-content: space-between;

    align-items: center;

    gap: 12px;

    margin-top: 30px;

    padding-top: 25px;

    border-top: 1px solid #edf0f4;

}


.back-list-button,
.download-button {

    display: inline-flex;

    align-items: center;

    gap: 7px;

    padding: 10px 16px;

    border-radius: 8px;

    text-decoration: none;

    font-size: 11px;

    font-weight: 600;

    transition: .2s ease;

}


.back-list-button {

    background: #f1f5f9;

    color: #526176;

    border: 1px solid #e1e7ef;

}


.back-list-button:hover {

    background: #e7edf5;

    color: #26344b;

}


.download-button {

    background: #1264e8;

    color: white;

}


.download-button:hover {

    background: #0d55c8;

    color: white;

}


/* =========================================================
   RESPONSIVE
========================================================= */

@media (max-width: 900px) {

    .detail-flow {

        flex-wrap: wrap;

    }

    .detail-flow-arrow {

        display: none;

    }

}


@media (max-width: 768px) {

    .process-detail-page {

        padding: 40px 0 60px;

    }


    .detail-card {

        padding: 25px;

        border-radius: 16px;

    }


    .detail-header {

        flex-direction: column;

    }


    .detail-heading h1 {

        font-size: 25px;

    }


    .document-box {

        align-items: flex-start;

        flex-direction: column;

    }


    .document-button {

        width: 100%;

        justify-content: center;

    }


    .detail-bottom {

        align-items: stretch;

        flex-direction: column;

    }


    .back-list-button,
    .download-button {

        justify-content: center;

    }

}


@media (max-width: 480px) {

    .detail-card {

        padding: 20px;

    }


    .detail-heading h1 {

        font-size: 22px;

    }


    .detail-flow-card {

        padding: 25px 10px;

    }


    .detail-flow-item {

        min-width: 85px;

    }

}

</style>

@endsection