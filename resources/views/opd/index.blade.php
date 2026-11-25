@extends('layouts.app')

@section('title', 'Data OPD')

@section('content')

<div class="container-fluid">

    {{-- HEADER --}}
    <div class="d-flex justify-content-between align-items-center mb-4">

        <div>
            <h2 class="fw-bold mb-1">
                Data OPD
            </h2>

            <p class="text-muted mb-0">
                Kelola data Organisasi Perangkat Daerah
            </p>
        </div>

        <a href="{{ route('opd.create') }}"
           class="btn btn-primary">

            <i class="bi bi-plus-circle me-1"></i>

            Tambah OPD

        </a>

    </div>


    {{-- PESAN BERHASIL --}}
    @if(session('success'))

        <div class="alert alert-success alert-dismissible fade show">

            <i class="bi bi-check-circle me-2"></i>

            {{ session('success') }}

            <button type="button"
                    class="btn-close"
                    data-bs-dismiss="alert">
            </button>

        </div>

    @endif


    {{-- ERROR VALIDASI --}}
    @if($errors->any())

        <div class="alert alert-danger">

            <strong>
                Data belum dapat disimpan.
            </strong>

            <ul class="mb-0 mt-2">

                @foreach($errors->all() as $error)

                    <li>
                        {{ $error }}
                    </li>

                @endforeach

            </ul>

        </div>

    @endif


    {{-- CARD DATA --}}
    <div class="card border-0 shadow-sm">

        <div class="card-body p-0">

            <div class="table-responsive">

                <table class="table table-hover align-middle mb-0">

                    <thead class="table-primary">

                        <tr>

                            <th class="px-3">
                                No
                            </th>

                            <th>
                                Kode
                            </th>

                            <th>
                                Nama OPD
                            </th>

                            <th>
                                Kepala OPD
                            </th>

                            <th>
                                Email
                            </th>

                            <th>
                                Telepon
                            </th>

                            <th class="text-center">
                                Aksi
                            </th>

                        </tr>

                    </thead>


                    <tbody>

                        @forelse($opds as $opd)

                            <tr>

                                <td class="px-3">
                                    {{ $loop->iteration }}
                                </td>


                                <td>

                                    <span class="badge bg-light text-dark border">

                                        {{ $opd->kode_opd }}

                                    </span>

                                </td>


                                <td>

                                    <strong>
                                        {{ $opd->nama_opd }}
                                    </strong>

                                </td>


                                <td>

                                    {{ $opd->kepala_opd }}

                                </td>


                                <td>

                                    {{ $opd->email }}

                                </td>


                                <td>

                                    {{ $opd->telepon }}

                                </td>


                                <td class="text-center">

                                    <div class="d-flex justify-content-center gap-1">

                                        {{-- EDIT --}}

                                        <a href="{{ route('opd.edit', $opd->id) }}"
                                           class="btn btn-warning btn-sm"
                                           title="Edit">

                                            <i class="bi bi-pencil"></i>

                                        </a>


                                        {{-- HAPUS --}}

                                        <form
                                            action="{{ route('opd.destroy', $opd->id) }}"
                                            method="POST"
                                            class="d-inline"
                                        >

                                            @csrf

                                            @method('DELETE')

                                            <button
                                                type="submit"
                                                class="btn btn-danger btn-sm"
                                                title="Hapus"
                                                onclick="return confirm('Yakin ingin menghapus data OPD ini?')"
                                            >

                                                <i class="bi bi-trash"></i>

                                            </button>

                                        </form>

                                    </div>

                                </td>

                            </tr>

                        @empty

                            <tr>

                                <td colspan="7"
                                    class="text-center py-5 text-muted">

                                    <i class="bi bi-building fs-2 d-block mb-2"></i>

                                    Belum ada data OPD.

                                </td>

                            </tr>

                        @endforelse

                    </tbody>

                </table>

            </div>

        </div>

    </div>

</div>

@endsection