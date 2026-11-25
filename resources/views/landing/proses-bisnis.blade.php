@extends('layouts.landing')

@php
    use Illuminate\Support\Str;
@endphp

@section('content')



<!-- ================= HERO ================= -->

<section class="process-hero">

    <div class="container">

        <div class="row align-items-center">

            <div class="col-lg-7">

                <span class="badge bg-primary px-3 py-2 mb-3">

                    DOMAIN SPBE

                </span>

                <h1 class="fw-bold mb-4">

                    Proses Bisnis Pemerintah
                    Kabupaten Karimun

                </h1>

                <p class="lead">

                    Proses bisnis merupakan rangkaian aktivitas
                    yang dilakukan oleh setiap Organisasi
                    Perangkat Daerah (OPD) untuk memberikan
                    pelayanan kepada masyarakat secara
                    efektif, efisien, dan terintegrasi.

                </p>

            </div>

            <div class="col-lg-5 text-center">

                <img src="{{ asset('images/proses-bisnis.png') }}"
                     class="img-fluid">

            </div>

        </div>

    </div>

</section>


<!-- ================= STATISTIK ================= -->

<section class="py-5 bg-white">

    <div class="container">

        <div class="row g-4">

            <div class="col-md-3">

                <div class="card stat-card border-0 shadow">

                    <div class="card-body text-center">

                        <h2>32</h2>

                        <p>Proses Bisnis</p>

                    </div>

                </div>

            </div>

            <div class="col-md-3">

                <div class="card stat-card border-0 shadow">

                    <div class="card-body text-center">

                        <h2>27</h2>

                        <p>OPD</p>

                    </div>

                </div>

            </div>

            <div class="col-md-3">

                <div class="card stat-card border-0 shadow">

                    <div class="card-body text-center">

                        <h2>54</h2>

                        <p>Dokumen</p>

                    </div>

                </div>

            </div>

            <div class="col-md-3">

                <div class="card stat-card border-0 shadow">

                    <div class="card-body text-center">

                        <h2>100%</h2>

                        <p>Terintegrasi</p>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>




<!-- ================= PENJELASAN ================= -->

<section class="py-5">

    <div class="container">

        <div class="row">

            <div class="col-lg-8">

                <h2 class="fw-bold mb-4">

                    Apa itu Proses Bisnis?

                </h2>

                <p>

                    Proses bisnis merupakan serangkaian aktivitas
                    yang saling berhubungan untuk menghasilkan
                    layanan pemerintahan yang berkualitas.
                    Dalam SPBE, seluruh proses bisnis disusun
                    agar setiap OPD bekerja secara terintegrasi,
                    transparan, dan berbasis digital.

                </p>

            </div>

        </div>

    </div>

</section>

<!-- ================= DIAGRAM ================= -->

<section class="py-5 bg-light">

    <div class="container">

        <div class="text-center mb-5">

            <h2 class="fw-bold">

                Alur Proses Bisnis

            </h2>

            <p class="text-muted">

                Gambaran sederhana alur pelayanan pemerintahan berbasis elektronik.

            </p>

        </div>

        <div class="row justify-content-center">

            <div class="col-lg-10">

                <div class="process-flow">

                    <div class="flow-item">

                        <div class="flow-icon bg-primary">

                            <i class="bi bi-person"></i>

                        </div>

                        <h5>Masyarakat</h5>

                    </div>

                    <div class="flow-arrow">

                        <i class="bi bi-arrow-right"></i>

                    </div>

                    <div class="flow-item">

                        <div class="flow-icon bg-success">

                            <i class="bi bi-file-earmark-text"></i>

                        </div>

                        <h5>Permohonan</h5>

                    </div>

                    <div class="flow-arrow">

                        <i class="bi bi-arrow-right"></i>

                    </div>

                    <div class="flow-item">

                        <div class="flow-icon bg-warning">

                            <i class="bi bi-building"></i>

                        </div>

                        <h5>OPD</h5>

                    </div>

                    <div class="flow-arrow">

                        <i class="bi bi-arrow-right"></i>

                    </div>

                    <div class="flow-item">

                        <div class="flow-icon bg-danger">

                            <i class="bi bi-check-circle"></i>

                        </div>

                        <h5>Verifikasi</h5>

                    </div>

                    <div class="flow-arrow">

                        <i class="bi bi-arrow-right"></i>

                    </div>

                    <div class="flow-item">

                        <div class="flow-icon bg-info">

                            <i class="bi bi-award"></i>

                        </div>

                        <h5>Selesai</h5>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

<!-- ================= PENCARIAN ================= -->

<section class="py-5">

    <div class="container">

        <div class="row justify-content-center">

            <div class="col-lg-8">

                <form method="GET" action="{{ route('proses-bisnis') }}">

    <div class="search-box shadow-sm">

        <i class="bi bi-search"></i>

        <input
            type="text"
            name="search"
            class="form-control"
            placeholder="Cari proses bisnis..."
            value="{{ request('search') }}">

        <button class="btn btn-primary ms-3">

            Cari

        </button>

    </div>

</form>

            </div>

        </div>

    </div>

</section>

<!-- ================= DAFTAR PROSES BISNIS ================= -->

<section class="py-5">

    <div class="container">

        <div class="text-center mb-5">

            <h2 class="fw-bold">

                Daftar Proses Bisnis

            </h2>

            <p class="text-muted">

                Berikut beberapa proses bisnis yang telah diterapkan
                oleh Pemerintah Kabupaten Karimun.

            </p>

        </div>

        <div class="row g-4">

            @forelse($proses as $item)

                <div class="col-lg-6">

                    <div class="business-card">

                        <div class="business-header">

                        

                           @php
    // daftar kombinasi ikon + warna yang akan dirotasi
    $iconPalette = [
        ['icon' => 'bi-person-vcard-fill', 'color' => 'text-primary'],
        ['icon' => 'bi-building',          'color' => 'text-success'],
        ['icon' => 'bi-heart-pulse-fill',  'color' => 'text-danger'],
        ['icon' => 'bi-book-fill',         'color' => 'text-warning'],
        ['icon' => 'bi-people-fill',       'color' => 'text-info'],
        ['icon' => 'bi-diagram-3-fill',    'color' => 'text-secondary'],
        ['icon' => 'bi-clipboard-check-fill', 'color' => 'text-dark'],
        ['icon' => 'bi-shield-check',      'color' => 'text-primary'],
    ];
    $pick = $iconPalette[$loop->index % count($iconPalette)];
@endphp

<div class="business-icon">
    <i class="bi {{ $pick['icon'] }} {{ $pick['color'] }}"></i>
</div>

                            <div>

                                <h4>{{ $item->judul }}</h4>

                                <h5 class="text-danger">{{ $item->opd }}</h5>

                            </div>

                        </div>

                        <p>

                            {{ Str::limit($item->deskripsi,150) }}

                        </p>

                        <div class="d-flex justify-content-between align-items-center">

                            <span class="badge bg-success">

                                {{ $item->status }}

                            </span>

                            <div>

                                <a href="{{ route('proses-bisnis.detail',$item->id) }}"
                                   class="btn btn-outline-primary btn-sm">

                                    <i class="bi bi-eye"></i>

                                    Detail

                                </a>

                                @if($item->pdf)

                                    <a href="{{ asset('storage/'.$item->pdf) }}"
                                       target="_blank"
                                       class="btn btn-primary btn-sm">

                                        <i class="bi bi-download"></i>

                                        PDF

                                    </a>

                                @endif

                            </div>

                        </div>

                    </div>

                </div>

            @empty

                <div class="col-12">

                    <div class="alert alert-warning">

                        Belum ada data proses bisnis.

                    </div>

                </div>

            @endforelse

        </div>

    </div>

</section>

@endsection