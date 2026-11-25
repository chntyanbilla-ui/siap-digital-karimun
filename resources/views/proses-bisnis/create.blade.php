@extends('layouts.app')

@section('title', 'Tambah Proses Bisnis')

@section('content')

<div class="card shadow border-0">

    <div class="card-header bg-primary text-white">

        <h4 class="mb-0">Tambah Proses Bisnis</h4>

    </div>

    <div class="card-body">

        <form action="{{ route('proses-bisnis-admin.store') }}" method="POST">

            @csrf

            <div class="mb-3">

                <label class="form-label">Nama Proses Bisnis</label>

                <input type="text"
                       name="nama"
                       class="form-control"
                       required>

            </div>

            <div class="mb-3">

                <label class="form-label">Deskripsi</label>

                <textarea name="deskripsi"
                          rows="5"
                          class="form-control"
                          required></textarea>

            </div>

            <div class="mb-3">

                <label class="form-label">Status</label>

                <select name="status" class="form-select">

                    <option value="Aktif">Aktif</option>

                    <option value="Tidak Aktif">Tidak Aktif</option>

                </select>

            </div>

            <button class="btn btn-primary">

                <i class="bi bi-save"></i>

                Simpan

            </button>

            <a href="{{ route('proses-bisnis-admin.index') }}"
               class="btn btn-secondary">

                Kembali

            </a>

        </form>

    </div>

</div>

@endsection