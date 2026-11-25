@extends('layouts.app')

@section('title', 'Edit OPD')

@section('content')

<div class="dashboard-header mb-4">

    <h1 class="dashboard-title">
        Edit OPD
    </h1>

    <p class="dashboard-subtitle">
        Perbarui data Organisasi Perangkat Daerah Kabupaten Karimun.
    </p>

</div>


<div class="admin-form-card">

    <div class="admin-form-header">

        <h2>
            Form Edit OPD
        </h2>

        <p>
            Periksa kembali data sebelum menyimpan perubahan.
        </p>

    </div>


    <form
        action="{{ route('opd.update', $opd->id) }}"
        method="POST"
    >

        @csrf

        @method('PUT')


        <div class="admin-form-body">

            {{-- Nama OPD --}}
            <div class="admin-form-group">

                <label for="nama_opd">

                    Nama OPD

                    <span class="required">*</span>

                </label>


                <input
                    type="text"
                    id="nama_opd"
                    name="nama_opd"
                    value="{{ old('nama_opd', $opd->nama_opd) }}"
                    class="admin-input @error('nama_opd') is-invalid @enderror"
                    placeholder="Contoh: Dinas Komunikasi dan Informatika"
                    required
                >


                @error('nama_opd')

                    <div class="admin-form-error">
                        {{ $message }}
                    </div>

                @enderror

            </div>


            {{-- Keterangan --}}
            <div class="admin-form-group">

                <label for="keterangan">
                    Keterangan
                </label>


                <textarea
                    id="keterangan"
                    name="keterangan"
                    rows="4"
                    class="admin-input @error('keterangan') is-invalid @enderror"
                    placeholder="Masukkan keterangan OPD"
                >{{ old('keterangan', $opd->keterangan) }}</textarea>


                @error('keterangan')

                    <div class="admin-form-error">
                        {{ $message }}
                    </div>

                @enderror

            </div>

        </div>


        {{-- Footer --}}
        <div class="admin-form-footer">

            <a
                href="{{ route('opd.index') }}"
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