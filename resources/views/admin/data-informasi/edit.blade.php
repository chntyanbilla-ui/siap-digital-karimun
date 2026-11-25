@extends('layouts.app')

@section('title', 'Edit Data Informasi')

@section('content')

<div class="dashboard-header mb-4">

    <h1 class="dashboard-title">
        Edit Data Informasi
    </h1>

    <p class="dashboard-subtitle">
        Perbarui data informasi Kabupaten Karimun.
    </p>

</div>


<div class="admin-form-card">

    <div class="admin-form-header">

        <h2>
            Form Edit Data Informasi
        </h2>

        <p>
            Periksa kembali data sebelum menyimpan perubahan.
        </p>

    </div>


    <form
        action="{{ route('data-informasi-admin.update', $dataInformasi->id) }}"
        method="POST"
        enctype="multipart/form-data"
    >

        @csrf

        @method('PUT')


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
                    value="{{ old('judul', $dataInformasi->judul) }}"
                    class="admin-input @error('judul') is-invalid @enderror"
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
                    value="{{ old('kategori', $dataInformasi->kategori) }}"
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
                >{{ old('deskripsi', $dataInformasi->deskripsi) }}</textarea>

                @error('deskripsi')

                    <div class="admin-form-error">
                        {{ $message }}
                    </div>

                @enderror

            </div>


            {{-- FILE --}}
            <div class="admin-form-group">

                <label for="file">
                    Ganti File
                </label>

                <input
                    type="file"
                    id="file"
                    name="file"
                    class="admin-input @error('file') is-invalid @enderror"
                >

                @if($dataInformasi->file)

                    <small class="admin-form-help">

                        File saat ini:

                        <strong>
                            {{ basename($dataInformasi->file) }}
                        </strong>

                    </small>

                @else

                    <small class="admin-form-help">
                        Belum ada file.
                    </small>

                @endif

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
                        {{ old('status', $dataInformasi->status) == 'aktif' ? 'selected' : '' }}
                    >
                        Aktif
                    </option>

                    <option
                        value="nonaktif"
                        {{ old('status', $dataInformasi->status) == 'nonaktif' ? 'selected' : '' }}
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