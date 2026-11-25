@extends('layouts.landing')

@section('title', $layanan->nama)

@section('content')

<div class="container py-5">

    {{-- KEMBALI --}}
    <a
        href="{{ route('layanan') }}"
        class="text-decoration-none fw-semibold"
    >
        <i class="bi bi-arrow-left"></i>
        Kembali ke Layanan
    </a>


    {{-- DETAIL CARD --}}
    <div class="card border-0 shadow-sm rounded-4 mt-4">

        <div class="card-body p-5">

            {{-- KATEGORI --}}
            <span
                class="badge rounded-pill px-3 py-2 mb-3"
                style="
                    background:#fff2cc;
                    color:#8a6500;
                "
            >
                {{ $layanan->kategori }}
            </span>


            {{-- NAMA --}}
            <h1 class="fw-bold mb-3">

                {{ $layanan->nama }}

            </h1>


            {{-- OPD --}}
            <div class="mb-4">

                <h6 class="fw-bold">

                    <i class="bi bi-building text-primary"></i>

                    OPD Pelaksana

                </h6>

                <p class="text-muted">

                    {{ $layanan->opd }}

                </p>

            </div>


            <hr>


            {{-- DESKRIPSI --}}
            <div class="mt-4">

                <h5 class="fw-bold mb-3">
                    Deskripsi Layanan
                </h5>

                <p class="text-muted lh-lg">

                    {{ $layanan->deskripsi }}

                </p>

            </div>

        </div>

    </div>

</div>

@endsection