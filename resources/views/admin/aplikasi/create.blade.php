@extends('layouts.app')

@section('title', 'Tambah Aplikasi')

@section('content')

<div class="dashboard-header mb-4">

    <h1 class="dashboard-title">
        Tambah Aplikasi
    </h1>

    <p class="dashboard-subtitle">
        Tambahkan aplikasi digital baru ke dalam SIAP Digital Kabupaten Karimun.
    </p>

</div>


<div class="admin-form-card">

    {{-- HEADER FORM --}}
    <div class="admin-form-header">

        <h2>
            Form Aplikasi
        </h2>

        <p>
            Lengkapi informasi aplikasi dengan benar.
        </p>

    </div>


    {{-- FORM --}}
    <form
        action="{{ route('aplikasi-admin.store') }}"
        method="POST"
    >

        @csrf


        <div class="admin-form-body">


            {{-- NAMA APLIKASI --}}
            <div class="admin-form-group">

                <label for="nama">

                    Nama Aplikasi

                    <span class="required">*</span>

                </label>

                <input
                    type="text"
                    id="nama"
                    name="nama"
                    value="{{ old('nama') }}"
                    class="admin-input @error('nama') is-invalid @enderror"
                    placeholder="Contoh: SIAP Digital Karimun"
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
                    placeholder="Contoh: Dinas Komunikasi dan Informatika Kabupaten Karimun"
                    required
                >

                @error('opd')
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
                    placeholder="Jelaskan fungsi dan kegunaan aplikasi..."
                >{{ old('deskripsi') }}</textarea>

                @error('deskripsi')
                    <div class="admin-form-error">
                        {{ $message }}
                    </div>
                @enderror

            </div>


            {{-- LINK --}}
            <div class="admin-form-group">

                <label for="link">
                    Link Aplikasi
                </label>

                <input
                    type="url"
                    id="link"
                    name="link"
                    value="{{ old('link') }}"
                    class="admin-input @error('link') is-invalid @enderror"
                    placeholder="https://contoh.karimunkab.go.id"
                >

                <small class="admin-form-help">

                    Masukkan link aplikasi jika tersedia.
                    Kosongkan jika aplikasi hanya digunakan secara internal.

                </small>

                @error('link')
                    <div class="admin-form-error">
                        {{ $message }}
                    </div>
                @enderror

            </div>


            {{-- STATUS --}}
            <div class="admin-form-group">

                <label for="status">

                    Status

                    <span class="required">*</span>

                </label>

                <select
                    id="status"
                    name="status"
                    class="admin-input @error('status') is-invalid @enderror"
                    required
                >

                    <option value="">
                        Pilih Status
                    </option>

                    <option
                        value="aktif"
                        {{ old('status') == 'aktif' ? 'selected' : '' }}
                    >
                        Aktif
                    </option>

                    <option
                        value="nonaktif"
                        {{ old('status') == 'nonaktif' ? 'selected' : '' }}
                    >
                        Nonaktif
                    </option>

                </select>

                @error('status')
                    <div class="admin-form-error">
                        {{ $message }}
                    </div>
                @enderror

            </div>


        </div>


        {{-- FOOTER FORM --}}
        <div class="admin-form-footer">

            <a
                href="{{ route('aplikasi-admin.index') }}"
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

                Simpan Aplikasi

            </button>

        </div>

    </form>

</div>

@endsection