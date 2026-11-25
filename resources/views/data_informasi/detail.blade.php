@extends('layouts.landing')

@section('content')

<style>
    .detail-page {
        background: #f5f8fc;
        min-height: calc(100vh - 160px);
        padding: 55px 20px 80px;
    }

    .detail-container {
        max-width: 1000px;
        margin: auto;
    }

    .back-button {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        color: #1264e8;
        text-decoration: none;
        font-size: 14px;
        font-weight: 600;
        margin-bottom: 25px;
    }

    .back-button:hover {
        color: #0d52c5;
    }

    .detail-card {
        background: #ffffff;
        border: 1px solid #e5eaf0;
        border-radius: 20px;
        padding: 40px;
        box-shadow: 0 8px 30px rgba(0, 0, 0, .05);
    }

    .detail-category {
        display: inline-block;
        background: #fff2c9;
        color: #916a00;
        padding: 8px 15px;
        border-radius: 25px;
        font-size: 12px;
        font-weight: 700;
        text-transform: uppercase;
        margin-bottom: 18px;
    }

    .detail-card h1 {
        color: #172033;
        font-size: 34px;
        font-weight: 700;
        margin: 0 0 20px;
    }

    .detail-line {
        height: 1px;
        background: #e5eaf0;
        margin-bottom: 28px;
    }

    .detail-title {
        font-size: 17px;
        font-weight: 700;
        color: #172033;
        margin-bottom: 10px;
    }

    .detail-description {
        color: #687386;
        font-size: 15px;
        line-height: 1.8;
        white-space: pre-line;
    }

    .file-button {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        background: #1264e8;
        color: #ffffff;
        text-decoration: none;
        padding: 11px 18px;
        border-radius: 8px;
        font-size: 14px;
        font-weight: 600;
        margin-top: 25px;
    }

    .file-button:hover {
        background: #0d52c5;
        color: #ffffff;
    }

    @media (max-width: 768px) {

        .detail-page {
            padding: 35px 15px 60px;
        }

        .detail-card {
            padding: 25px;
        }

        .detail-card h1 {
            font-size: 27px;
        }
    }
</style>


<div class="detail-page">

    <div class="detail-container">

        {{-- KEMBALI --}}
        <a href="{{ route('data-informasi') }}"
           class="back-button">

            <i class="bi bi-arrow-left"></i>

            Kembali ke Data & Informasi

        </a>


        {{-- DETAIL --}}
        <div class="detail-card">

            {{-- KATEGORI --}}
            <span class="detail-category">

                {{ $data->kategori }}

            </span>


            {{-- JUDUL --}}
            <h1>

                {{ $data->judul }}

            </h1>


            <div class="detail-line"></div>


            {{-- DESKRIPSI --}}
            <div class="detail-title">

                Deskripsi

            </div>

            <div class="detail-description">

                {{ $data->deskripsi }}

            </div>


            {{-- FILE --}}
            @if(!empty($data->file))

                <a href="{{ asset($data->file) }}"
                   target="_blank"
                   class="file-button">

                    <i class="bi bi-file-earmark-arrow-down"></i>

                    Lihat / Download File

                </a>

            @endif

        </div>

    </div>

</div>

@endsection