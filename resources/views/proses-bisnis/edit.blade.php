@extends('layouts.app')

@section('title', 'Edit Proses Bisnis')

@section('content')

<div class="card shadow border-0">

    <div class="card-header bg-warning">

        <h4 class="mb-0">

            Edit Proses Bisnis

        </h4>

    </div>

    <div class="card-body">

        <form action="{{ route('proses-bisnis-admin.update',$prosesBisnis->id) }}"
              method="POST">

            @csrf

            @method('PUT')

            <div class="mb-3">

                <label class="form-label">

                    Nama Proses Bisnis

                </label>

                <input type="text"
                       name="nama"
                       value="{{ $prosesBisnis->nama }}"
                       class="form-control"
                       required>

            </div>

            <div class="mb-3">

                <label class="form-label">

                    Deskripsi

                </label>

                <textarea
                    name="deskripsi"
                    rows="5"
                    class="form-control"
                    required>{{ $prosesBisnis->deskripsi }}</textarea>

            </div>

            <div class="mb-3">

                <label class="form-label">

                    Status

                </label>

                <select
                    name="status"
                    class="form-select">

                    <option value="Aktif"
                        {{ $prosesBisnis->status=='Aktif' ? 'selected':'' }}>

                        Aktif

                    </option>

                    <option value="Tidak Aktif"
                        {{ $prosesBisnis->status=='Tidak Aktif' ? 'selected':'' }}>

                        Tidak Aktif

                    </option>

                </select>

            </div>

            <button class="btn btn-warning">

                <i class="bi bi-pencil-square"></i>

                Update

            </button>

            <a href="{{ route('proses-bisnis-admin.index') }}"
               class="btn btn-secondary">

                Kembali

            </a>

        </form>

    </div>

</div>

@endsection