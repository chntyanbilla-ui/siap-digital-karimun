@extends('layouts.app')

@section('title', 'Edit Aplikasi')

@section('content')

<div class="dashboard-header mb-4">

    <h1 class="dashboard-title">
        Edit Aplikasi
    </h1>

    <p class="dashboard-subtitle">
        Perbarui data aplikasi digital.
    </p>

</div>


<div class="admin-form-card">

    <div class="admin-form-header">

        <h2>
            Form Edit Aplikasi
        </h2>

        <p>
            Periksa kembali data sebelum menyimpan perubahan.
        </p>

    </div>


    <form
        action="{{ route('aplikasi-admin.update', $aplikasi->id) }}"
        method="POST"
    >

        @csrf

        @method('PUT')


        <div class="admin-form-body">


            {{-- NAMA --}}
            <div class="admin-form-group">

                <label for="nama">

                    Nama Aplikasi

                    <span class="required">*</span>

                </label>

                <input
                    type="text"
                    id="nama"
                    name="nama"
                    value="{{ old('nama', $aplikasi->nama) }}"
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
                    value="{{ old('opd', $aplikasi->opd) }}"
                    class="admin-input @error('opd') is-invalid @enderror"
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
                >{{ old('deskripsi', $aplikasi->deskripsi) }}</textarea>

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
                    value="{{ old('link', $aplikasi->link) }}"
                    class="admin-input @error('link') is-invalid @enderror"
                >

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
                        {{ old('status', $aplikasi->status) == 'aktif' ? 'selected' : '' }}
                    >
                        Aktif
                    </option>

                    <option
                        value="nonaktif"
                        {{ old('status', $aplikasi->status) == 'nonaktif' ? 'selected' : '' }}
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
                href="{{ route('aplikasi-admin.index') }}"
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