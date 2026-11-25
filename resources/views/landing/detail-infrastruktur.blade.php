@extends('layouts.landing')

@section('content')

<style>

/* =====================================================
   DETAIL INFRASTRUKTUR
===================================================== */

.infrastructure-detail-page {
    min-height: 100vh;
    background: #f6f9fd;
    padding: 45px 0 70px;
}


/* =====================================================
   CONTAINER
===================================================== */

.infrastructure-container {
    max-width: 1150px;
    margin: 0 auto;
    padding: 0 20px;
}


/* =====================================================
   BACK BUTTON
===================================================== */

.infrastructure-back {
    display: inline-flex;
    align-items: center;
    gap: 8px;

    padding: 10px 17px;

    margin-bottom: 25px;

    border: 1px solid #0d6efd;
    border-radius: 9px;

    background: #fff;

    color: #0d6efd !important;

    text-decoration: none;

    font-size: 13px;
    font-weight: 600;

    transition: all .2s ease;
}

.infrastructure-back:hover {
    background: #0d6efd;
    color: #fff !important;
    transform: translateX(-2px);
}


/* =====================================================
   MAIN CARD
===================================================== */

.infrastructure-card {
    overflow: hidden;

    background: #fff;

    border: 1px solid #e2e8f0;

    border-radius: 18px;

    box-shadow:
        0 12px 35px rgba(15, 23, 42, .07);
}


/* =====================================================
   BLUE HEADER
===================================================== */

.infrastructure-header {

    position: relative;

    overflow: hidden;

    padding: 42px 48px;

    background:
        linear-gradient(
            135deg,
            #0878f9 0%,
            #1094e8 55%,
            #08b5d9 100%
        );

    color: #fff;
}


/* dekorasi kanan */

.infrastructure-header::before {

    content: "";

    position: absolute;

    width: 360px;
    height: 360px;

    right: -150px;
    top: -230px;

    border-radius: 50%;

    background: rgba(255,255,255,.08);
}


/* dekorasi kiri */

.infrastructure-header::after {

    content: "";

    position: absolute;

    width: 230px;
    height: 230px;

    left: -130px;
    bottom: -170px;

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

.infrastructure-icon {

    width: 72px;
    height: 72px;

    flex-shrink: 0;

    display: flex;

    align-items: center;
    justify-content: center;

    border-radius: 17px;

    background: rgba(255,255,255,.15);

    border: 1px solid rgba(255,255,255,.35);

    color: #fff;

    font-size: 30px;
}


/* =====================================================
   CATEGORY
===================================================== */

.infrastructure-category {

    display: inline-flex;

    align-items: center;

    gap: 6px;

    margin-bottom: 10px;

    padding: 6px 12px;

    border-radius: 20px;

    background: rgba(255,255,255,.15);

    border: 1px solid rgba(255,255,255,.25);

    color: #fff;

    font-size: 11px;

    font-weight: 600;
}


/* =====================================================
   TITLE
===================================================== */

.infrastructure-title {

    margin: 0;

    color: #fff !important;

    font-size: 34px;

    line-height: 1.25;

    font-weight: 800;
}


/* =====================================================
   BODY
===================================================== */

.infrastructure-body {

    padding: 40px 48px;
}


/* =====================================================
   GRID
===================================================== */

.infrastructure-grid {

    display: grid;

    grid-template-columns: minmax(0, 1fr) 310px;

    gap: 30px;

    align-items: start;
}


/* =====================================================
   DESCRIPTION CARD
===================================================== */

.infrastructure-description {

    padding: 30px;

    border: 1px solid #e3e8ef;

    border-radius: 15px;

    background: #fff;
}


.infrastructure-label {

    display: block;

    margin-bottom: 7px;

    color: #0d6efd;

    font-size: 10px;

    font-weight: 800;

    letter-spacing: .8px;

    text-transform: uppercase;
}


.infrastructure-description h2 {

    margin: 0 0 20px;

    color: #172033;

    font-size: 23px;

    font-weight: 700;
}


.infrastructure-description p {

    margin: 0;

    color: #64748b;

    font-size: 14px;

    line-height: 1.8;
}


/* =====================================================
   LOCATION BOX
===================================================== */

.infrastructure-location {

    display: flex;

    align-items: flex-start;

    gap: 12px;

    margin-top: 25px;

    padding: 17px;

    border: 1px solid #dceaff;

    border-radius: 12px;

    background: #f5f9ff;
}


.infrastructure-location-icon {

    width: 38px;
    height: 38px;

    flex-shrink: 0;

    display: flex;

    align-items: center;
    justify-content: center;

    border-radius: 9px;

    background: #e7f0ff;

    color: #0d6efd;
}


.infrastructure-location-content strong {

    display: block;

    margin-bottom: 4px;

    color: #172033;

    font-size: 13px;
}


.infrastructure-location-content span {

    color: #64748b;

    font-size: 13px;

    line-height: 1.6;
}


/* =====================================================
   INFORMATION CARD
===================================================== */

.infrastructure-information {

    padding: 27px;

    border: 1px solid #e3e8ef;

    border-radius: 15px;

    background: #fff;
}


.infrastructure-information h3 {

    margin: 0 0 20px;

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

    gap: 12px;

    padding: 15px 0;

    border-bottom: 1px solid #edf0f4;
}


.infrastructure-info-item:last-child {

    border-bottom: none;

}


.infrastructure-info-icon {

    width: 38px;
    height: 38px;

    flex-shrink: 0;

    display: flex;

    align-items: center;
    justify-content: center;

    border-radius: 9px;

    background: #eef5ff;

    color: #0d6efd;

    font-size: 16px;
}


.infrastructure-info-label {

    margin-bottom: 4px;

    color: #94a3b8;

    font-size: 10px;
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

    font-size: 7px;

}


/* =====================================================
   BOTTOM
===================================================== */

.infrastructure-bottom {

    display: flex;

    justify-content: space-between;

    align-items: center;

    margin-top: 30px;

    padding-top: 25px;

    border-top: 1px solid #e8edf2;
}


.infrastructure-bottom a {

    display: inline-flex;

    align-items: center;

    gap: 7px;

    padding: 10px 15px;

    border: 1px solid #dce3eb;

    border-radius: 9px;

    background: #fff;

    color: #475569 !important;

    text-decoration: none;

    font-size: 12px;

    font-weight: 600;

    transition: .2s ease;
}


.infrastructure-bottom a:hover {

    border-color: #0d6efd;

    color: #0d6efd !important;

}


/* =====================================================
   RESPONSIVE
===================================================== */

@media (max-width: 991px) {

    .infrastructure-grid {

        grid-template-columns: 1fr;

    }

}


@media (max-width: 767px) {

    .infrastructure-detail-page {

        padding: 30px 0 50px;

    }

    .infrastructure-header {

        padding: 32px 25px;

    }

    .infrastructure-body {

        padding: 25px;

    }

    .infrastructure-header-content {

        align-items: flex-start;

    }

    .infrastructure-title {

        font-size: 27px;

    }

}


@media (max-width: 575px) {

    .infrastructure-header-content {

        flex-direction: column;

    }

    .infrastructure-title {

        font-size: 24px;

    }

    .infrastructure-icon {

        width: 60px;
        height: 60px;

        font-size: 25px;

    }

    .infrastructure-bottom {

        align-items: stretch;

        flex-direction: column;

    }

    .infrastructure-bottom a {

        justify-content: center;

    }

}

</style>


<div class="infrastructure-detail-page">

    <div class="infrastructure-container">


        {{-- =================================================
             KEMBALI
        ================================================== --}}

        <a
            href="{{ route('infrastruktur') }}"
            class="infrastructure-back"
        >

            <i class="bi bi-arrow-left"></i>

            Kembali ke Infrastruktur

        </a>



        {{-- =================================================
             CARD UTAMA
        ================================================== --}}

        <div class="infrastructure-card">


            {{-- =================================================
                 HEADER
            ================================================== --}}

            <div class="infrastructure-header">

                <div class="infrastructure-header-content">


                    {{-- ICON --}}

                    <div class="infrastructure-icon">

                        <i class="bi bi-diagram-3-fill"></i>

                    </div>


                    <div>


                        {{-- JENIS --}}

                        <div class="infrastructure-category">

                            <i class="bi bi-grid"></i>

                            {{ $infrastruktur->jenis }}

                        </div>


                        {{-- NAMA --}}

                        <h1 class="infrastructure-title">

                            {{ $infrastruktur->nama }}

                        </h1>


                    </div>

                </div>

            </div>



            {{-- =================================================
                 BODY
            ================================================== --}}

            <div class="infrastructure-body">


                <div class="infrastructure-grid">


                    {{-- =================================================
                         DESKRIPSI
                    ================================================== --}}

                    <div class="infrastructure-description">

                        <span class="infrastructure-label">

                            Informasi Infrastruktur

                        </span>


                        <h2>

                            Tentang Infrastruktur

                        </h2>


                        <p>

                            {{ $infrastruktur->deskripsi }}

                        </p>


                        {{-- LOKASI --}}

                        <div class="infrastructure-location">

                            <div class="infrastructure-location-icon">

                                <i class="bi bi-geo-alt-fill"></i>

                            </div>


                            <div class="infrastructure-location-content">

                                <strong>

                                    Lokasi

                                </strong>


                                <span>

                                    {{ $infrastruktur->lokasi }}

                                </span>

                            </div>

                        </div>

                    </div>



                    {{-- =================================================
                         INFORMASI
                    ================================================== --}}

                    <div class="infrastructure-information">

                        <h3>

                            Informasi

                        </h3>


                        {{-- JENIS --}}

                        <div class="infrastructure-info-item">

                            <div class="infrastructure-info-icon">

                                <i class="bi bi-grid-3x3-gap"></i>

                            </div>


                            <div>

                                <div class="infrastructure-info-label">

                                    Jenis

                                </div>


                                <div class="infrastructure-info-value">

                                    {{ $infrastruktur->jenis }}

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

                                    {{ $infrastruktur->lokasi }}

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


                                <span class="infrastructure-status">

                                    <i class="bi bi-circle-fill"></i>

                                    {{ ucfirst($infrastruktur->status) }}

                                </span>

                            </div>

                        </div>

                    </div>

                </div>



                {{-- =================================================
                     BOTTOM
                ================================================== --}}

                <div class="infrastructure-bottom">

                    <a
                        href="{{ route('infrastruktur') }}"
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