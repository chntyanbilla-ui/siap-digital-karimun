@extends('layouts.app')

@section('content')

<div class="card shadow border-0">

    <div class="card-header bg-warning text-dark">

        <h4>Edit OPD</h4>

    </div>

    <div class="card-body">

        <form action="{{ route('opd.update',$opd->id) }}"
              method="POST">

            @csrf

            @method('PUT')

            <div class="mb-3">

                <label class="form-label">

                    Nama OPD

                </label>

                <input
                    type="text"
                    name="nama"
                    class="form-control"
                    value="{{ $opd->nama }}"
                    required>

            </div>

            <div class="mb-3">

                <label class="form-label">

                    Deskripsi

                </label>

                <textarea
                    name="deskripsi"
                    rows="5"
                    class="form-control">{{ $opd->deskripsi }}</textarea>

            </div>

            <button class="btn btn-warning">

                Update

            </button>

            <a href="{{ route('opd.index') }}"
               class="btn btn-secondary">

                Kembali

            </a>

        </form>

    </div>

</div>

@endsection