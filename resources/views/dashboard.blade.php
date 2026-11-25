@extends('layouts.app')

@section('title', 'Dashboard Admin')

@section('content')

{{-- =========================================================
     HEADER DASHBOARD
========================================================= --}}

<div class="dashboard-header mb-4">

    <h1 class="dashboard-title">
        Dashboard Admin
    </h1>

    <p class="dashboard-subtitle">
        Ringkasan data dan layanan digital Kabupaten Karimun.
    </p>

</div>


{{-- =========================================================
     STATISTIK UTAMA
========================================================= --}}

<div class="row g-4">

    {{-- TOTAL OPD --}}
    <div class="col-xl-3 col-md-6">

        <div class="admin-card">

            <div class="admin-card-content">

                <div class="admin-card-info">

                    <span class="admin-card-label">
                        Total OPD
                    </span>

                    <h2 class="admin-card-number">
                        {{ $totalOpd }}
                    </h2>

                </div>

                <div class="icon-circle">
                    <i class="bi bi-building"></i>
                </div>

            </div>

        </div>

    </div>


    {{-- PROSES BISNIS --}}
    <div class="col-xl-3 col-md-6">

        <div class="admin-card">

            <div class="admin-card-content">

                <div class="admin-card-info">

                    <span class="admin-card-label">
                        Proses Bisnis
                    </span>

                    <h2 class="admin-card-number">
                        {{ $totalProsesBisnis }}
                    </h2>

                </div>

                <div class="icon-circle">
                    <i class="bi bi-diagram-3"></i>
                </div>

            </div>

        </div>

    </div>


    {{-- LAYANAN --}}
    <div class="col-xl-3 col-md-6">

        <div class="admin-card">

            <div class="admin-card-content">

                <div class="admin-card-info">

                    <span class="admin-card-label">
                        Layanan
                    </span>

                    <h2 class="admin-card-number">
                        {{ $totalLayanan }}
                    </h2>

                </div>

                <div class="icon-circle">
                    <i class="bi bi-list-check"></i>
                </div>

            </div>

        </div>

    </div>


    {{-- APLIKASI --}}
    <div class="col-xl-3 col-md-6">

        <div class="admin-card">

            <div class="admin-card-content">

                <div class="admin-card-info">

                    <span class="admin-card-label">
                        Aplikasi
                    </span>

                    <h2 class="admin-card-number">
                        {{ $totalAplikasi }}
                    </h2>

                </div>

                <div class="icon-circle">
                    <i class="bi bi-window"></i>
                </div>

            </div>

        </div>

    </div>

</div>


{{-- =========================================================
     STATISTIK TAMBAHAN
========================================================= --}}

<div class="row g-4 mt-1">

    {{-- DATA INFORMASI --}}
    <div class="col-lg-4">

        <div class="admin-card">

            <div class="admin-card-content">

                <div class="admin-card-info">

                    <span class="admin-card-label">
                        Data Informasi
                    </span>

                    <h2 class="admin-card-number">
                        {{ $totalDataInformasi }}
                    </h2>

                </div>

                <div class="icon-circle">
                    <i class="bi bi-database"></i>
                </div>

            </div>

        </div>

    </div>


    {{-- INFRASTRUKTUR --}}
    <div class="col-lg-4">

        <div class="admin-card">

            <div class="admin-card-content">

                <div class="admin-card-info">

                    <span class="admin-card-label">
                        Infrastruktur
                    </span>

                    <h2 class="admin-card-number">
                        {{ $totalInfrastruktur }}
                    </h2>

                </div>

                <div class="icon-circle">
                    <i class="bi bi-hdd-network"></i>
                </div>

            </div>

        </div>

    </div>


    {{-- KEAMANAN --}}
    <div class="col-lg-4">

        <div class="admin-card">

            <div class="admin-card-content">

                <div class="admin-card-info">

                    <span class="admin-card-label">
                        Keamanan
                    </span>

                    <h2 class="admin-card-number">
                        {{ $totalKeamanan }}
                    </h2>

                </div>

                <div class="icon-circle">
                    <i class="bi bi-shield-lock"></i>
                </div>

            </div>

        </div>

    </div>

</div>


{{-- =========================================================
     INFORMASI DASHBOARD
========================================================= --}}

<div class="info-card mt-4">

    <div class="info-card-content">

        <div class="info-icon">
            <i class="bi bi-info-circle"></i>
        </div>

        <div>

            <h3 class="info-card-title">
                Informasi Dashboard
            </h3>

            <p class="info-card-text">
                Dashboard ini menampilkan ringkasan data
                Sistem Informasi Administrasi dan Digital
                Kabupaten Karimun.
            </p>

        </div>

    </div>

</div>

@endsection