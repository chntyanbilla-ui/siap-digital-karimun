@extends('layouts.app')

@section('title', 'Tambah Layanan')

@section('content')

<div class="mb-4">

    <h1 class="dashboard-title">
        Tambah Layanan
    </h1>

    <p class="dashboard-subtitle">
        Tambahkan layanan digital Kabupaten Karimun.
    </p>

</div>


<div class="admin-form-card">

    <div class="admin-form-header">

        <h2>
            Form Layanan
        </h2>

        <p>
            Isi informasi layanan yang akan ditampilkan
            pada website SIAP Digital.
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

                <label>
                    Nama Layanan
                    <span class="required">*</span>
                </label>

                <input
                    type="text"
                    name="nama"
                    class="admin-input @error('nama') is-invalid @enderror"
                    value="{{ old('nama') }}"
                    placeholder="Contoh: Pelayanan Administrasi Kependudukan"
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

                <label>
                    OPD
                    <span class="required">*</span>
                </label>

                <input
                    type="text"
                    name="opd"
                    class="admin-input @error('opd') is-invalid @enderror"
                    value="{{ old('opd') }}"
                    placeholder="Contoh: Dinas Kependudukan dan Pencatatan Sipil"
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

                <label>
                    Kategori
                </label>

                <input
                    type="text"
                    name="kategori"
                    class="admin-input @error('kategori') is-invalid @enderror"
                    value="{{ old('kategori') }}"
                    placeholder="Contoh: Administrasi"
                >

                @error('kategori')

                    <div class="admin-form-error">
                        {{ $message }}
                    </div>

                @enderror

            </div>


            {{-- DESKRIPSI --}}

            <div class="admin-form-group">

                <label>
                    Deskripsi
                    <span class="required">*</span>
                </label>

                <textarea
                    name="deskripsi"
                    class="admin-input @error('deskripsi') is-invalid @enderror"
                    placeholder="Masukkan deskripsi layanan..."
                    required
                >{{ old('deskripsi') }}</textarea>

                @error('deskripsi')

                    <div class="admin-form-error">
                        {{ $message }}
                    </div>

                @enderror

            </div>


            {{-- LINK --}}

            <div class="admin-form-group">

                <label>
                    Link Layanan
                </label>

                <input
                    type="url"
                    name="link"
                    class="admin-input @error('link') is-invalid @enderror"
                    value="{{ old('link') }}"
                    placeholder="https://contoh.karimunkab.go.id"
                >

                <small class="admin-form-help">
                    Masukkan alamat website atau aplikasi
                    yang digunakan untuk mengakses layanan.
                </small>

                @error('link')

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

                <i class="bi bi-save"></i>

                Simpan Layanan

            </button>

        </div>

    </form>

</div>

@endsection