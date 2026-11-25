@extends('layouts.app')

@section('title', 'Tambah Data Informasi')

@section('content')

<div class="dashboard-header mb-4">

    <h1 class="dashboard-title">
        Tambah Data Informasi
    </h1>

    <p class="dashboard-subtitle">
        Tambahkan data informasi baru ke dalam sistem.
    </p>

</div>


<div class="admin-form-card">

    <div class="admin-form-header">

        <h2>
            Form Data Informasi
        </h2>

        <p>
            Lengkapi informasi data dengan benar.
        </p>

    </div>


    <form
        action="{{ route('data-informasi-admin.store') }}"
        method="POST"
        enctype="multipart/form-data"
    >

        @csrf


        <div class="admin-form-body">


            {{-- JUDUL --}}
            <div class="admin-form-group">

                <label for="judul">

                    Judul

                    <span class="required">*</span>

                </label>

                <input
                    type="text"
                    id="judul"
                    name="judul"
                    value="{{ old('judul') }}"
                    class="admin-input @error('judul') is-invalid @enderror"
                    placeholder="Masukkan judul informasi"
                    required
                >

                @error('judul')

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
                    placeholder="Contoh: Pemerintahan"
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
                    placeholder="Masukkan deskripsi informasi"
                >{{ old('deskripsi') }}</textarea>

                @error('deskripsi')

                    <div class="admin-form-error">
                        {{ $message }}
                    </div>

                @enderror

            </div>


            {{-- FILE --}}
            <div class="admin-form-group">

                <label for="file">
                    File
                </label>

                <input
                    type="file"
                    id="file"
                    name="file"
                    class="admin-input @error('file') is-invalid @enderror"
                >

                <small class="admin-form-help">
                    Upload file informasi yang diperlukan.
                </small>

                @error('file')

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


        <div class="admin-form-footer">

            <a
                href="{{ route('data-informasi-admin.index') }}"
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

                Simpan Data

            </button>

        </div>

    </form>

</div>

@endsection