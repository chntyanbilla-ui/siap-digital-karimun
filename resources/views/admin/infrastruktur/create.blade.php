@extends('layouts.app')

@section('title', 'Tambah Infrastruktur')

@section('content')

<div class="dashboard-header mb-4">

    <h1 class="dashboard-title">
        Tambah Infrastruktur
    </h1>

    <p class="dashboard-subtitle">
        Tambahkan data infrastruktur baru.
    </p>

</div>


<div class="admin-form-card">

    <div class="admin-form-header">

        <h2>
            Form Infrastruktur
        </h2>

        <p>
            Lengkapi informasi infrastruktur dengan benar.
        </p>

    </div>


    <form
        action="{{ route('infrastruktur-admin.store') }}"
        method="POST"
    >

        @csrf


        <div class="admin-form-body">


            {{-- NAMA --}}
            <div class="admin-form-group">

                <label for="nama">

                    Nama Infrastruktur

                    <span class="required">*</span>

                </label>

                <input
                    type="text"
                    id="nama"
                    name="nama"
                    value="{{ old('nama') }}"
                    class="admin-input @error('nama') is-invalid @enderror"
                    placeholder="Masukkan nama infrastruktur"
                    required
                >

                @error('nama')

                    <div class="admin-form-error">
                        {{ $message }}
                    </div>

                @enderror

            </div>


            {{-- JENIS --}}
            <div class="admin-form-group">

                <label for="jenis">

                    Jenis

                    <span class="required">*</span>

                </label>

                <input
                    type="text"
                    id="jenis"
                    name="jenis"
                    value="{{ old('jenis') }}"
                    class="admin-input @error('jenis') is-invalid @enderror"
                    placeholder="Contoh: Server, Jaringan, Data Center"
                    required
                >

                @error('jenis')

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
                    placeholder="Masukkan deskripsi infrastruktur"
                >{{ old('deskripsi') }}</textarea>

                @error('deskripsi')

                    <div class="admin-form-error">
                        {{ $message }}
                    </div>

                @enderror

            </div>


            {{-- LOKASI --}}
            <div class="admin-form-group">

                <label for="lokasi">

                    Lokasi

                    <span class="required">*</span>

                </label>

                <input
                    type="text"
                    id="lokasi"
                    name="lokasi"
                    value="{{ old('lokasi') }}"
                    class="admin-input @error('lokasi') is-invalid @enderror"
                    placeholder="Masukkan lokasi infrastruktur"
                    required
                >

                @error('lokasi')

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
                href="{{ route('infrastruktur-admin.index') }}"
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

                Simpan Infrastruktur

            </button>

        </div>

    </form>

</div>

@endsection