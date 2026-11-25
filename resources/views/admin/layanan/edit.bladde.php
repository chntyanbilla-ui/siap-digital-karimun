@extends('layouts.app')

@section('title', 'Edit Layanan')

@section('content')

<div class="dashboard-header mb-4">

    <h1 class="dashboard-title">
        Edit Layanan
    </h1>

    <p class="dashboard-subtitle">
        Perbarui data layanan digital Kabupaten Karimun.
    </p>

</div>


<div class="admin-form-card">

    <div class="admin-form-header">

        <h2>
            Form Edit Layanan
        </h2>

        <p>
            Periksa kembali data sebelum menyimpan perubahan.
        </p>

    </div>


    <form
        action="{{ route('layanan-admin.update', $layanan->id) }}"
        method="POST"
    >

        @csrf

        @method('PUT')


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
                    value="{{ old('nama', $layanan->nama) }}"
                    class="admin-input @error('nama') is-invalid @enderror"
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
                    value="{{ old('opd', $layanan->opd) }}"
                    class="admin-input @error('opd') is-invalid @enderror"
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
                    value="{{ old('kategori', $layanan->kategori) }}"
                    class="admin-input @error('kategori') is-invalid @enderror"
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
                >{{ old('deskripsi', $layanan->deskripsi) }}</textarea>

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

                Batal

            </a>


            <button
                type="submit"
                class="idds-button"
            >

                <i class="bi bi-check-lg"></i>

                Simpan Perubahan

            </button>

        </div>

    </form>

</div>

@endsection