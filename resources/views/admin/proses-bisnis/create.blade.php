@extends('layouts.app')

@section('title', 'Tambah Proses Bisnis')

@section('content')

<div class="dashboard-header mb-4">

    <h1 class="dashboard-title">
        Tambah Proses Bisnis
    </h1>

    <p class="dashboard-subtitle">
        Tambahkan data proses bisnis Kabupaten Karimun.
    </p>

</div>


<div class="admin-form-card">

    <div class="admin-form-header">

        <h2>
            Form Proses Bisnis
        </h2>

        <p>
            Lengkapi informasi proses bisnis di bawah ini.
        </p>

    </div>


    <form
        action="{{ route('proses-bisnis-admin.store') }}"
        method="POST"
        enctype="multipart/form-data"
    >

        @csrf


        <div class="admin-form-body">

            {{-- JUDUL --}}
            <div class="admin-form-group">

                <label for="judul">
                    Judul Proses Bisnis
                    <span class="required">*</span>
                </label>

                <input
                    type="text"
                    id="judul"
                    name="judul"
                    value="{{ old('judul') }}"
                    class="admin-input @error('judul') is-invalid @enderror"
                    placeholder="Masukkan judul proses bisnis"
                    required
                >

                @error('judul')
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
                    placeholder="Masukkan kategori proses bisnis"
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
                    placeholder="Masukkan deskripsi proses bisnis"
                >{{ old('deskripsi') }}</textarea>

                @error('deskripsi')
                    <div class="admin-form-error">
                        {{ $message }}
                    </div>
                @enderror

            </div>


            {{-- GAMBAR --}}
            <div class="admin-form-group">

                <label for="gambar">
                    Gambar
                </label>

                <input
                    type="file"
                    id="gambar"
                    name="gambar"
                    accept="image/*"
                    class="admin-input @error('gambar') is-invalid @enderror"
                >

                <small class="admin-form-help">
                    Format JPG, JPEG, atau PNG.
                </small>

                @error('gambar')
                    <div class="admin-form-error">
                        {{ $message }}
                    </div>
                @enderror

            </div>


            {{-- PDF --}}
            <div class="admin-form-group">

                <label for="pdf">
                    File PDF
                </label>

                <input
                    type="file"
                    id="pdf"
                    name="pdf"
                    accept=".pdf"
                    class="admin-input @error('pdf') is-invalid @enderror"
                >

                <small class="admin-form-help">
                    Upload dokumen proses bisnis dalam format PDF.
                </small>

                @error('pdf')
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


        {{-- FOOTER --}}
        <div class="admin-form-footer">

            <a
                href="{{ route('proses-bisnis-admin.index') }}"
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

                Simpan Proses Bisnis

            </button>

        </div>

    </form>

</div>

@endsection