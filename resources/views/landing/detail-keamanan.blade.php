@extends('layouts.landing')

@section('content')

<section class="security-detail-page">

    <div class="container">

        {{-- TOMBOL KEMBALI --}}
        <div class="detail-top">

            <a href="{{ route('keamanan') }}"
               class="back-button">

                <i class="bi bi-arrow-left"></i>

                Kembali

            </a>

        </div>


        {{-- DETAIL CARD --}}
        <div class="security-detail-card">

            {{-- ICON --}}
            @php

                $kategori = strtolower($keamanan->kategori ?? '');

                if (str_contains($kategori, 'jaringan')) {

                    $icon = 'bi-shield-fill-check';
                    $color = 'blue';

                } elseif (str_contains($kategori, 'data')) {

                    $icon = 'bi-database-fill-check';
                    $color = 'green';

                } elseif (str_contains($kategori, 'website')) {

                    $icon = 'bi-globe2';
                    $color = 'purple';

                } else {

                    $icon = 'bi-shield-lock-fill';
                    $color = 'orange';

                }

            @endphp


            <div class="detail-icon {{ $color }}">

                <i class="bi {{ $icon }}"></i>

            </div>


            {{-- KATEGORI --}}
            <span class="detail-category">

                {{ $keamanan->kategori }}

            </span>


            {{-- JUDUL --}}
            <h1>

                {{ $keamanan->judul }}

            </h1>


            {{-- GARIS --}}
            <div class="detail-line"></div>


            {{-- DESKRIPSI --}}
            <div class="description-box">

                <div class="description-title">

                    <i class="bi bi-info-circle"></i>

                    <span>
                        Informasi
                    </span>

                </div>

                <p>

                    {{ $keamanan->deskripsi }}

                </p>

            </div>


            {{-- STATUS --}}
            <div class="status-box">

                <div class="status-icon">

                    <i class="bi bi-check-circle-fill"></i>

                </div>

                <div>

                    <span>Status</span>

                    <strong>
                        {{ $keamanan->status ?? 'Aktif' }}
                    </strong>

                </div>

            </div>


        </div>

    </div>

</section>


<style>

/* =====================================================
   PAGE
===================================================== */

.security-detail-page {

    min-height: calc(100vh - 160px);

    padding: 40px 0 65px;

    background: #f7f9fc;

}


/* =====================================================
   TOP
===================================================== */

.detail-top {

    max-width: 820px;

    margin: 0 auto 20px;

}


/* =====================================================
   BACK BUTTON
===================================================== */

.back-button {

    display: inline-flex;

    align-items: center;

    gap: 7px;

    padding: 9px 15px;

    border: 1px solid #cbd3dd;

    border-radius: 8px;

    background: white;

    color: #526071;

    text-decoration: none;

    font-size: 13px;

    font-weight: 500;

    transition: .2s ease;

}

.back-button:hover {

    border-color: #1264e8;

    color: #1264e8;

    background: #f8fbff;

}


/* =====================================================
   CARD
===================================================== */

.security-detail-card {

    max-width: 820px;

    margin: 0 auto;

    padding: 32px 36px;

    background: #ffffff;

    border: 1px solid #e4e9ef;

    border-radius: 16px;

    box-shadow: 0 8px 25px rgba(0,0,0,.06);

}


/* =====================================================
   ICON
===================================================== */

.detail-icon {

    width: 58px;

    height: 58px;

    margin-bottom: 15px;

    display: flex;

    align-items: center;

    justify-content: center;

    border-radius: 13px;

    color: white;

    font-size: 23px;

}

.detail-icon.blue {

    background: #1264e8;

}

.detail-icon.green {

    background: #198754;

}

.detail-icon.purple {

    background: #7c3aed;

}

.detail-icon.orange {

    background: #f59e0b;

}


/* =====================================================
   CATEGORY
===================================================== */

.detail-category {

    display: inline-block;

    margin-bottom: 7px;

    padding: 5px 10px;

    border-radius: 20px;

    background: #eef2f7;

    color: #596575;

    font-size: 10px;

    font-weight: 700;

    text-transform: uppercase;

}


/* =====================================================
   TITLE
===================================================== */

.security-detail-card h1 {

    margin: 5px 0 16px;

    color: #172033;

    font-size: 28px;

    font-weight: 700;

    line-height: 1.3;

}


/* =====================================================
   LINE
===================================================== */

.detail-line {

    height: 1px;

    margin-bottom: 20px;

    background: #e8ecf1;

}


/* =====================================================
   DESCRIPTION
===================================================== */

.description-box {

    padding: 17px 19px;

    background: #f8fafc;

    border: 1px solid #e8edf2;

    border-radius: 10px;

}

.description-title {

    display: flex;

    align-items: center;

    gap: 7px;

    margin-bottom: 8px;

    color: #172033;

    font-size: 13px;

    font-weight: 700;

}

.description-title i {

    color: #1264e8;

}

.description-box p {

    margin: 0;

    color: #687386;

    font-size: 14px;

    line-height: 1.7;

}


/* =====================================================
   STATUS
===================================================== */

.status-box {

    display: flex;

    align-items: center;

    gap: 12px;

    margin-top: 16px;

    padding: 13px 16px;

    border: 1px solid #e8edf2;

    border-radius: 10px;

    background: #ffffff;

}

.status-icon {

    width: 36px;

    height: 36px;

    display: flex;

    align-items: center;

    justify-content: center;

    border-radius: 9px;

    background: #e8f7ef;

    color: #198754;

    font-size: 16px;

}

.status-box div:last-child {

    display: flex;

    flex-direction: column;

    gap: 2px;

}

.status-box span {

    color: #7b8491;

    font-size: 11px;

}

.status-box strong {

    color: #198754;

    font-size: 13px;

}


/* =====================================================
   RESPONSIVE
===================================================== */

@media (max-width: 768px) {

    .security-detail-page {

        padding: 30px 0 50px;

    }

    .security-detail-card {

        padding: 25px;

    }

    .security-detail-card h1 {

        font-size: 24px;

    }

}

</style>

@endsection