@extends('layouts.app')

@section('title', $infrastruktur->nama)

@section('content')

<style>

/* =====================================================
   DETAIL INFRASTRUKTUR
===================================================== */

.infrastructure-detail-page {
    background: #f7f9fc;
    min-height: 100vh;
    padding: 45px 0 70px;
}


/* =====================================================
   CONTAINER
===================================================== */

.infrastructure-detail-container {
    width: 100%;
    max-width: 1180px;
    margin: 0 auto;
    padding: 0 25px;
}


/* =====================================================
   BACK BUTTON
===================================================== */

.infrastructure-back {
    display: inline-flex;
    align-items: center;
    gap: 8px;

    margin-bottom: 25px;

    padding: 10px 16px;

    border: 1px solid #0d6efd;
    border-radius: 9px;

    background: #ffffff;

    color: #0d6efd !important;

    text-decoration: none;

    font-size: 13px;
    font-weight: 600;

    transition: all .2s ease;
}

.infrastructure-back:hover {
    background: #0d6efd;
    color: #ffffff !important;
    transform: translateX(-2px);
}


/* =====================================================
   MAIN CARD
===================================================== */

.infrastructure-detail-card {
    background: #ffffff;

    border: 1px solid #e3e8ef;

    border-radius: 18px;

    overflow: hidden;

    box-shadow:
        0 10px 35px rgba(15, 23, 42, .07);
}


/* =====================================================
   HEADER
===================================================== */

.infrastructure-detail-header {

    position: relative;

    padding: 45px 50px;

    background:
        linear-gradient(
            135deg,
            #0969e8 0%,
            #078fe8 55%,
            #08b5e8 100%
        );

    color: #ffffff;

    overflow: hidden;
}


/* dekorasi */

.infrastructure-detail-header::before {

    content: "";

    position: absolute;

    width: 350px;
    height: 350px;

    right: -130px;
    top: -190px;

    border-radius: 50%;

    background: rgba(255,255,255,.08);
}


.infrastructure-detail-header::after {

    content: "";

    position: absolute;

    width: 250px;
    height: 250px;

    left: -150px;
    bottom: -190px;

    border-radius: 50%;

    border: 1px solid rgba(255,255,255,.12);
}


/* =====================================================
   HEADER CONTENT
===================================================== */

.infrastructure-header-content {

    position: relative;

    z-index: 2;

    display: flex;

    align-items: center;

    gap: 22px;
}


/* =====================================================
   ICON
===================================================== */

.infrastructure-detail-icon {

    width: 72px;
    height: 72px;

    flex-shrink: 0;

    display: flex;

    align-items: center;
    justify-content: center;

    border-radius: 18px;

    background: rgba(255,255,255,.16);

    border: 1px solid rgba(255,255,255,.3);

    color: #ffffff;

    font-size: 30px;
}


/* =====================================================
   HEADER TEXT
===================================================== */

.infrastructure-detail-header h1 {

    margin: 0 0 12px;

    color: #ffffff !important;

    font-size: 34px;

    line-height: 1.25;

    font-weight: 800;
}


.infrastructure-detail-category {

    display: inline-flex;

    align-items: center;

    gap: 6px;

    padding: 6px 12px;

    margin-bottom: 12px;

    border-radius: 20px;

    background: rgba(255,255,255,.15);

    border: 1px solid rgba(255,255,255,.25);

    color: #ffffff;

    font-size: 11px;

    font-weight: 700;
}


/* =====================================================
   BODY
===================================================== */

.infrastructure-detail-body {

    padding: 40px 50px;
}


/* =====================================================
   GRID
===================================================== */

.infrastructure-detail-grid {

    display: grid;

    grid-template-columns: 1fr 320px;

    gap: 30px;

    align-items: start;
}


/* =====================================================
   ABOUT CARD
===================================================== */

.infrastructure-about {

    padding: 30px;

    background: #ffffff;

    border: 1px solid #e5eaf0;

    border-radius: 15px;
}


.infrastructure-section-label {

    display: block;

    margin-bottom: 7px;

    color: #0d6efd;

    font-size: 10px;

    font-weight: 800;

    letter-spacing: .8px;

    text-transform: uppercase;
}


.infrastructure-about h2 {

    margin: 0 0 18px;

    color: #172033;

    font-size: 23px;

    font-weight: 700;
}


.infrastructure-about p {

    margin: 0;

    color: #64748b;

    font-size: 14px;

    line-height: 1.8;
}


/* =====================================================
   INFORMATION CARD
===================================================== */

.infrastructure-info {

    padding: 27px;

    background: #ffffff;

    border: 1px solid #e5eaf0;

    border-radius: 15px;
}


.infrastructure-info h3 {

    margin: 0 0 22px;

    color: #172033;

    font-size: 20px;

    font-weight: 700;
}


/* =====================================================
   INFO ITEM
===================================================== */

.infrastructure-info-item {

    display: flex;

    align-items: flex-start;

    gap: 13px;

    padding: 16px 0;

    border-bottom: 1px solid #edf0f4;
}


.infrastructure-info-item:last-child {

    border-bottom: none;

    padding-bottom: 0;
}


.infrastructure-info-icon {

    width: 40px;
    height: 40px;

    flex-shrink: 0;

    display: flex;

    align-items: center;
    justify-content: center;

    border-radius: 10px;

    background: #edf5ff;

    color: #0d6efd;

    font-size: 17px;
}


.infrastructure-info-label {

    margin-bottom: 4px;

    color: #94a3b8;

    font-size: 10px;

    font-weight: 500;
}


.infrastructure-info-value {

    color: #172033;

    font-size: 13px;

    font-weight: 600;

    line-height: 1.5;
}


/* =====================================================
   STATUS
===================================================== */

.infrastructure-status {

    display: inline-flex;

    align-items: center;

    gap: 5px;

    padding: 5px 9px;

    border-radius: 20px;

    background: #e9f9ef;

    color: #16a34a;

    font-size: 11px;

    font-weight: 700;
}


.infrastructure-status i {

    font-size: 9px;
}


/* =====================================================
   LOCATION
===================================================== */

.infrastructure-location {

    margin-top: 25px;

    padding: 20px;

    border-radius: 13px;

    background: #f7faff;

    border: 1px solid #e2edfc;
}


.infrastructure-location-title {

    display: flex;

    align-items: center;

    gap: 8px;

    margin-bottom: 8px;

    color: #172033;

    font-size: 13px;

    font-weight: 700;
}


.infrastructure-location-title i {

    color: #0d6efd;
}


.infrastructure-location p {

    margin: 0;

    color: #64748b;

    font-size: 13px;

    line-height: 1.6;
}


/* =====================================================
   FOOTER ACTION
===================================================== */

.infrastructure-detail-footer {

    display: flex;

    align-items: center;

    justify-content: space-between;

    gap: 20px;

    margin-top: 30px;

    padding-top: 25px;

    border-top: 1px solid #e8edf2;
}


.infrastructure-footer-back {

    display: inline-flex;

    align-items: center;

    gap: 7px;

    padding: 10px 15px;

    border: 1px solid #dce3eb;

    border-radius: 9px;

    background: #ffffff;

    color: #475569 !important;

    text-decoration: none;

    font-size: 12px;

    font-weight: 600;
}


.infrastructure-footer-back:hover {

    background: #f8fafc;

    color: #0d6efd !important;
}


/* =====================================================
   RESPONSIVE
===================================================== */

@media (max-width: 991px) {

    .infrastructure-detail-grid {

        grid-template-columns: 1fr;

    }

    .infrastructure-info {

        width: 100%;

    }

}


@media (max-width: 767px) {

    .infrastructure-detail-page {

        padding: 30px 0 50px;

    }

    .infrastructure-detail-container {

        padding: 0 15px;

    }

    .infrastructure-detail-header {

        padding: 32px 25px;

    }

    .infrastructure-header-content {

        align-items: flex-start;

    }

    .infrastructure-detail-icon {

        width: 58px;
        height: 58px;

        font-size: 24px;

    }

    .infrastructure-detail-header h1 {

        font-size: 27px;

    }

    .infrastructure-detail-body {

        padding: 25px;

    }

    .infrastructure-about {

        padding: 23px;

    }

}


@media (max-width: 575px) {

    .infrastructure-header-content {

        flex-direction: column;

    }

    .infrastructure-detail-header h1 {

        font-size: 24px;

    }

    .infrastructure-detail-footer {

        align-items: stretch;

        flex-direction: column;

    }

    .infrastructure-footer-back {

        justify-content: center;

    }

}

</style>


{{-- =====================================================
     CONTENT
===================================================== --}}

<div class="infrastructure-detail-page">

    <div class="infrastructure-detail-container">


        {{-- KEMBALI --}}

        <a
            href="{{ route('infrastruktur') }}"
            class="infrastructure-back"
        >

            <i class="bi bi-arrow-left"></i>

            Kembali

        </a>



        {{-- CARD UTAMA --}}

        <div class="infrastructure-detail-card">


            {{-- =================================================
                 HEADER
            ================================================== --}}

            <div class="infrastructure-detail-header">

                <div class="infrastructure-header-content">


                    <div class="infrastructure-detail-icon">

                        <i class="bi bi-diagram-3-fill"></i>

                    </div>


                    <div>


                        @if(!empty($infrastruktur->kategori))

                            <div class="infrastructure-detail-category">

                                <i class="bi bi-grid"></i>

                                {{ $infrastruktur->kategori }}

                            </div>

                        @endif


                        <h1>

                            {{ $infrastruktur->nama }}

                        </h1>


                    </div>

                </div>

            </div>



            {{-- =================================================
                 BODY
            ================================================== --}}

            <div class="infrastructure-detail-body">


                <div class="infrastructure-detail-grid">


                    {{-- =========================================
                         DESKRIPSI
                    ========================================== --}}

                    <div>


                        <div class="infrastructure-about">

                            <span class="infrastructure-section-label">

                                Informasi Infrastruktur

                            </span>


                            <h2>

                                Tentang Infrastruktur

                            </h2>


                            <p>

                                {{ $infrastruktur->deskripsi }}

                            </p>


                            {{-- LOKASI --}}

                            @if(!empty($infrastruktur->lokasi))

                                <div class="infrastructure-location">

                                    <div class="infrastructure-location-title">

                                        <i class="bi bi-geo-alt-fill"></i>

                                        Lokasi

                                    </div>


                                    <p>

                                        {{ $infrastruktur->lokasi }}

                                    </p>

                                </div>

                            @endif


                        </div>


                    </div>



                    {{-- =========================================
                         INFORMASI
                    ========================================== --}}

                    <div class="infrastructure-info">

                        <h3>

                            Informasi

                        </h3>


                        {{-- KATEGORI --}}

                        <div class="infrastructure-info-item">

                            <div class="infrastructure-info-icon">

                                <i class="bi bi-grid-3x3-gap"></i>

                            </div>


                            <div>

                                <div class="infrastructure-info-label">

                                    Kategori

                                </div>


                                <div class="infrastructure-info-value">

                                    {{ $infrastruktur->kategori ?? '-' }}

                                </div>

                            </div>

                        </div>



                        {{-- STATUS --}}

                        <div class="infrastructure-info-item">

                            <div class="infrastructure-info-icon">

                                <i class="bi bi-check-circle"></i>

                            </div>


                            <div>

                                <div class="infrastructure-info-label">

                                    Status

                                </div>


                                <div>

                                    <span class="infrastructure-status">

                                        <i class="bi bi-circle-fill"></i>

                                        {{ ucfirst($infrastruktur->status ?? 'Aktif') }}

                                    </span>

                                </div>

                            </div>

                        </div>



                        {{-- LOKASI --}}

                        <div class="infrastructure-info-item">

                            <div class="infrastructure-info-icon">

                                <i class="bi bi-geo-alt"></i>

                            </div>


                            <div>

                                <div class="infrastructure-info-label">

                                    Lokasi

                                </div>


                                <div class="infrastructure-info-value">

                                    {{ $infrastruktur->lokasi ?? 'Kabupaten Karimun' }}

                                </div>

                            </div>

                        </div>


                    </div>

                </div>



                {{-- FOOTER --}}

                <div class="infrastructure-detail-footer">

                    <a
                        href="{{ route('infrastruktur') }}"
                        class="infrastructure-footer-back"
                    >

                        <i class="bi bi-arrow-left"></i>

                        Kembali ke Daftar Infrastruktur

                    </a>

                </div>


            </div>

        </div>

    </div>

</div>

@endsection