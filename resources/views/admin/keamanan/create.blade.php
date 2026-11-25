@extends('layouts.app')

@section('title', 'Tambah Keamanan')

@section('content')

<div class="dashboard-header mb-4">

    <h1 class="dashboard-title">
        Tambah Keamanan
    </h1>

    <p class="dashboard-subtitle">
        Tambahkan data keamanan digital baru.
    </p>

</div>


<div class="admin-form-card">

    <div class="admin-form-header">

        <h2>
            Form Keamanan
        </h2>

        <p>
            Lengkapi informasi keamanan dengan benar.
        </p>

    </div>


    <form
        action="{{ route('keamanan-admin.store') }}"
        method="POST"
    >

        @csrf


        <div class="admin-form-body">


            {{-- NAMA --}}
            <div class="admin-form-group">

                <label for="nama">

                    Nama Keamanan

                    <span class="required">*</span>

                </label>

                <input
                    type="text"
                    id="nama"
                    name="nama"
                    value="{{ old('nama') }}"
                    class="admin-input @error('nama') is-invalid @enderror"
                    placeholder="Masukkan nama keamanan"
                    required
                >

                @error('nama')

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
                    placeholder="Contoh: Keamanan Jaringan"
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
                    placeholder="Masukkan deskripsi keamanan"
                >{{ old('deskripsi') }}</textarea>

                @error('deskripsi')

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
                href="{{ route('keamanan-admin.index') }}"
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

                Simpan Keamanan

            </button>

        </div>

    </form>

</div>

@endsection