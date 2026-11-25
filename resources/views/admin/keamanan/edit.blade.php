@extends('layouts.app')

@section('title', 'Edit Keamanan')

@section('content')

<div class="dashboard-header mb-4">

    <h1 class="dashboard-title">
        Edit Keamanan
    </h1>

    <p class="dashboard-subtitle">
        Perbarui data keamanan digital Kabupaten Karimun.
    </p>

</div>


<div class="admin-form-card">

    <div class="admin-form-header">

        <h2>
            Form Edit Keamanan
        </h2>

        <p>
            Periksa kembali data sebelum menyimpan perubahan.
        </p>

    </div>


    <form
        action="{{ route('keamanan-admin.update', $keamanan->id) }}"
        method="POST"
    >

        @csrf

        @method('PUT')


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
                    value="{{ old('nama', $keamanan->nama) }}"
                    class="admin-input @error('nama') is-invalid @enderror"
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
                    value="{{ old('kategori', $keamanan->kategori) }}"
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
                >{{ old('deskripsi', $keamanan->deskripsi) }}</textarea>

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
                        {{ old('status', $keamanan->status) == 'aktif' ? 'selected' : '' }}
                    >
                        Aktif
                    </option>

                    <option
                        value="nonaktif"
                        {{ old('status', $keamanan->status) == 'nonaktif' ? 'selected' : '' }}
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