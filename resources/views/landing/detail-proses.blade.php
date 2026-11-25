@extends('layouts.landing')

@section('content')

<section class="py-5 bg-light">

    <div class="container">

        <a href="{{ route('proses-bisnis') }}"
           class="btn btn-outline-primary mb-4">

            <i class="bi bi-arrow-left"></i>
            Kembali

        </a>

        <div class="card border-0 shadow-lg rounded-4">

            <div class="card-body p-5">

                <!-- Status -->

                <span class="badge bg-success px-3 py-2">

                    {{ $proses->status }}

                </span>

                <!-- Judul -->

                <h1 class="fw-bold mt-3">

                    {{ $proses->judul }}

                </h1>

                <!-- OPD -->

                <h5 class="text-muted">

                    {{ $proses->opd }}

                </h5>

                <!-- Informasi -->

                <div class="row mt-4">

                    <div class="col-md-4">

                        <div class="info-box">

                            <i class="bi bi-building text-primary"></i>

                            <div>

                                <small>Organisasi</small>

                                <h6>{{ $proses->opd }}</h6>

                            </div>

                        </div>

                    </div>

                    <div class="col-md-4">

                        <div class="info-box">

                            <i class="bi bi-check-circle-fill text-success"></i>

                            <div>

                                <small>Status</small>

                                <h6>{{ $proses->status }}</h6>

                            </div>

                        </div>

                    </div>

                    <div class="col-md-4">

                        <div class="info-box">

                            <i class="bi bi-calendar-event text-warning"></i>

                            <div>

                                <small>Tanggal Dibuat</small>

                                <h6>{{ $proses->created_at->format('d M Y') }}</h6>

                            </div>

                        </div>

                    </div>

                </div>

                <hr class="my-4">

                <!-- Deskripsi -->

                <h3 class="fw-bold mb-3">

                    Deskripsi

                </h3>

                <div class="bg-light rounded-4 p-4 mb-5">

                    <p class="mb-0">

                        {{ $proses->deskripsi }}

                    </p>

                </div>

                <!-- Diagram -->

                <h3 class="fw-bold mb-3">

                    Diagram Proses Bisnis

                </h3>

                @if($proses->gambar)

                    <img src="{{ asset('storage/'.$proses->gambar) }}"
                         class="img-fluid rounded shadow">

                @else

                    <div class="text-center p-5 bg-white rounded shadow-sm">

                        <i class="bi bi-image text-secondary"
                           style="font-size:70px;"></i>

                        <h5 class="mt-3">

                            Belum Ada Diagram

                        </h5>

                        <p class="text-muted">

                            Diagram proses bisnis belum diunggah.

                        </p>

                    </div>

                @endif

                <!-- PDF -->

                <div class="mt-5">

                    @if($proses->pdf)

                        <a href="{{ asset('storage/'.$proses->pdf) }}"
                           target="_blank"
                           class="btn btn-primary btn-lg">

                            <i class="bi bi-download"></i>

                            Download PDF

                        </a>

                    @else

                        <button class="btn btn-secondary btn-lg" disabled>

                            <i class="bi bi-file-earmark"></i>

                            PDF Belum Tersedia

                        </button>

                    @endif

                </div>

            </div>

        </div>

    </div>

</section>

@endsection