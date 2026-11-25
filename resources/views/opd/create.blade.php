@extends('layouts.app')

@section('title', 'Tambah OPD')

@section('content')

<div class="container-fluid">

    {{-- HEADER --}}
    <div class="d-flex justify-content-between align-items-center mb-4">

        <div>
            <h2 class="fw-bold mb-1">
                Tambah OPD
            </h2>

            <p class="text-muted mb-0">
                Tambahkan data Organisasi Perangkat Daerah
            </p>
        </div>

        <a href="{{ route('opd.index') }}"
           class="btn btn-outline-secondary">

            <i class="bi bi-arrow-left me-1"></i>

            Kembali

        </a>

    </div>


    {{-- ERROR --}}
    @if($errors->any())

        <div class="alert alert-danger">

            <strong>
                Data belum dapat disimpan.
            </strong>

            <ul class="mb-0 mt-2">

                @foreach($errors->all() as $error)

                    <li>
                        {{ $error }}
                    </li>

                @endforeach

            </ul>

        </div>

    @endif


    {{-- FORM --}}
    <div class="card border-0 shadow-sm">

        <div class="card-header bg-primary text-white">

            <h5 class="mb-0">

                <i class="bi bi-building me-2"></i>

                Form Tambah OPD

            </h5>

        </div>


        <div class="card-body p-4">

            <form action="{{ route('opd.store') }}"
                  method="POST">

                @csrf


                {{-- KODE OPD --}}
                <div class="mb-3">

                    <label for="kode_opd"
                           class="form-label fw-semibold">

                        Kode OPD
                        <span class="text-danger">*</span>

                    </label>

                    <input
                        type="text"
                        name="kode_opd"
                        id="kode_opd"
                        class="form-control @error('kode_opd') is-invalid @enderror"
                        value="{{ old('kode_opd') }}"
                        placeholder="Contoh: OPD-001"
                        required
                    >

                    @error('kode_opd')

                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>

                    @enderror

                </div>


                {{-- NAMA OPD --}}
                <div class="mb-3">

                    <label for="nama_opd"
                           class="form-label fw-semibold">

                        Nama OPD
                        <span class="text-danger">*</span>

                    </label>

                    <input
                        type="text"
                        name="nama_opd"
                        id="nama_opd"
                        class="form-control @error('nama_opd') is-invalid @enderror"
                        value="{{ old('nama_opd') }}"
                        placeholder="Contoh: Dinas Kesehatan Kabupaten Karimun"
                        required
                    >

                    @error('nama_opd')

                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>

                    @enderror

                </div>


                {{-- KEPALA OPD --}}
                <div class="mb-3">

                    <label for="kepala_opd"
                           class="form-label fw-semibold">

                        Kepala OPD

                    </label>

                    <input
                        type="text"
                        name="kepala_opd"
                        id="kepala_opd"
                        class="form-control @error('kepala_opd') is-invalid @enderror"
                        value="{{ old('kepala_opd') }}"
                        placeholder="Contoh: Dr. Nama, S.E., M.Si."
                    >

                    @error('kepala_opd')

                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>

                    @enderror

                </div>


                {{-- EMAIL --}}
                <div class="mb-3">

                    <label for="email"
                           class="form-label fw-semibold">

                        Email

                    </label>

                    <input
                        type="email"
                        name="email"
                        id="email"
                        class="form-control @error('email') is-invalid @enderror"
                        value="{{ old('email') }}"
                        placeholder="Contoh: dinas@karimunkab.go.id"
                    >

                    @error('email')

                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>

                    @enderror

                </div>


                {{-- TELEPON --}}
                <div class="mb-4">

                    <label for="telepon"
                           class="form-label fw-semibold">

                        Telepon

                    </label>

                    <input
                        type="text"
                        name="telepon"
                        id="telepon"
                        class="form-control @error('telepon') is-invalid @enderror"
                        value="{{ old('telepon') }}"
                        placeholder="Contoh: 0777-123456"
                    >

                    @error('telepon')

                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>

                    @enderror

                </div>


                {{-- BUTTON --}}
                <div class="d-flex justify-content-end gap-2">

                    <a href="{{ route('opd.index') }}"
                       class="btn btn-secondary">

                        <i class="bi bi-x-circle me-1"></i>

                        Batal

                    </a>

                    <button
                        type="submit"
                        class="btn btn-primary"
                    >

                        <i class="bi bi-save me-1"></i>

                        Simpan OPD

                    </button>

                </div>

            </form>

        </div>

    </div>

</div>

@endsection