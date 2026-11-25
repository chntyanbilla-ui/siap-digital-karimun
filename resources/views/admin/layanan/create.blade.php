@extends('layouts.app')

@section('title', 'Tambah Layanan')

@section('content')

<div class="dashboard-header mb-4">

    <h1 class="dashboard-title">
        Tambah Layanan
    </h1>

    <p class="dashboard-subtitle">
        Tambahkan data layanan digital Kabupaten Karimun.
    </p>

</div>


<div class="admin-form-card">

    <div class="admin-form-header">

        <h2>
            Form Layanan
        </h2>

        <p>
            Lengkapi informasi layanan dengan benar.
        </p>

    </div>


    <form
        action="{{ route('layanan-admin.store') }}"
        method="POST"
    >

        @csrf


        <div class="admin-form-body">


            {{-- NAMA --}}
            <div class="admin-form-group">

                <label for="nama">

                    Nama Layanan

                    <span class="required">*</span>

                </label>

                <input
                    type="text"
                    id="nama"
                    name="nama"
                    value="{{ old('nama') }}"
                    class="admin-input @error('nama') is-invalid @enderror"
                    placeholder="Masukkan nama layanan"
                    required
                >

                @error('nama')

                    <div class="admin-form-error">
                        {{ $message }}
                    </div>

                @enderror

            </div>


            {{-- OPD --}}
            <div class="admin-form-group">

                <label for="opd">

                    OPD

                    <span class="required">*</span>

                </label>

                <input
                    type="text"
                    id="opd"
                    name="opd"
                    value="{{ old('opd') }}"
                    class="admin-input @error('opd') is-invalid @enderror"
                    placeholder="Masukkan nama OPD"
                    required
                >

                @error('opd')

                    <div class="admin-form-error">
                        {{ $message }}
                    </div>

                @enderror

            </div>


            {{-- KATEGORI --}}
            <div class="admin-form-group">

                <label for="kategori">

                    Kategori

                    <span class="required">*</span>

                </label>

                <input
                    type="text"
                    id="kategori"
                    name="kategori"
                    value="{{ old('kategori') }}"
                    class="admin-input @error('kategori') is-invalid @enderror"
                    placeholder="Masukkan kategori layanan"
                    required
                >

                @error('kategori')

                    <div class="admin-form-error">
                        {{ $message }}
                    </div>

                @enderror

            </div>


            {{-- DESKRIPSI --}}
            <div class="admin-form-group">

                <label for="deskripsi">
                    Deskripsi
                </label>

                <textarea
                    id="deskripsi"
                    name="deskripsi"
                    rows="5"
                    class="admin-input @error('deskripsi') is-invalid @enderror"
                    placeholder="Masukkan deskripsi layanan"
                >{{ old('deskripsi') }}</textarea>

                @error('deskripsi')

                    <div class="admin-form-error">
                        {{ $message }}
                    </div>

                @enderror

            </div>

        </div>


        {{-- FOOTER --}}
        <div class="admin-form-footer">

            <a
                href="{{ route('layanan-admin.index') }}"
                class="admin-button-secondary"
            >

                <i class="bi bi-arrow-left"></i>

                Kembali

            </a>


            <button
                type="submit"
                class="idds-button"
            >

                <i class="bi bi-check-lg"></i>

                Simpan Layanan

            </button>

        </div>

    </form>

</div>

@endsection