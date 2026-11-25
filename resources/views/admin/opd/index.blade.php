@extends('layouts.app')

@section('title', 'OPD')

@section('content')

{{-- =========================================================
     HEADER
========================================================= --}}

<div class="d-flex justify-content-between align-items-start mb-4">

    <div>
        <h1 class="dashboard-title">
            Organisasi Perangkat Daerah
        </h1>

        <p class="dashboard-subtitle">
            Kelola data Organisasi Perangkat Daerah Kabupaten Karimun.
        </p>
    </div>

    <a href="{{ route('opd.create') }}" class="idds-button">
        <i class="bi bi-plus-lg"></i>
        Tambah OPD
    </a>

</div>


{{-- =========================================================
     ALERT SUKSES
========================================================= --}}

@if(session('success'))

    <div class="admin-alert admin-alert-success mb-4">

        <div class="admin-alert-icon">
            <i class="bi bi-check-circle"></i>
        </div>

        <div>
            <strong>Berhasil</strong>

            <p>
                {{ session('success') }}
            </p>
        </div>

    </div>

@endif


{{-- =========================================================
     ALERT ERROR
========================================================= --}}

@if(session('error'))

    <div class="admin-alert admin-alert-error mb-4">

        <div class="admin-alert-icon">
            <i class="bi bi-exclamation-circle"></i>
        </div>

        <div>
            <strong>Gagal</strong>

            <p>
                {{ session('error') }}
            </p>
        </div>

    </div>

@endif


{{-- =========================================================
     CARD DATA OPD
========================================================= --}}

<div class="admin-table-card">

    <div class="admin-table-header">

        <div>
            <h2>
                Daftar OPD
            </h2>

            <p>
                Data Organisasi Perangkat Daerah yang terdaftar.
            </p>
        </div>

    </div>


    {{-- =====================================================
         TABLE
    ====================================================== --}}

    <div class="table-responsive">

        <table class="admin-table">

            <thead>

                <tr>

                    <th width="70">
                        No
                    </th>

                    <th>
                        Nama OPD
                    </th>

                    <th>
                        Keterangan
                    </th>

                    <th width="180">
                        Aksi
                    </th>

                </tr>

            </thead>

            <tbody>

                @forelse($opds as $index => $opd)

                    <tr>

                        <td>
                            {{ $opds->firstItem() + $index }}
                        </td>

                        <td>

                            <div class="opd-name">

                                <div class="opd-icon">
                                    <i class="bi bi-building"></i>
                                </div>

                                <span>
                                    {{ $opd->nama_opd }}
                                </span>

                            </div>

                        </td>

                        <td>

                            <span class="text-muted">
                                {{ $opd->keterangan ?? '-' }}
                            </span>

                        </td>

                        <td>

                            <div class="d-flex gap-2">

                                {{-- EDIT --}}
                                <a
                                    href="{{ route('opd.edit', $opd->id) }}"
                                    class="table-action table-action-edit"
                                    title="Edit"
                                >

                                    <i class="bi bi-pencil"></i>

                                </a>


                                {{-- HAPUS --}}
                                <form
                                    action="{{ route('opd.destroy', $opd->id) }}"
                                    method="POST"
                                    onsubmit="return confirm('Apakah kamu yakin ingin menghapus data OPD ini?')"
                                >

                                    @csrf

                                    @method('DELETE')

                                    <button
                                        type="submit"
                                        class="table-action table-action-delete"
                                        title="Hapus"
                                    >

                                        <i class="bi bi-trash"></i>

                                    </button>

                                </form>

                            </div>

                        </td>

                    </tr>

                @empty

                    <tr>

                        <td colspan="4">

                            <div class="empty-state">

                                <div class="empty-state-icon">

                                    <i class="bi bi-building"></i>

                                </div>

                                <h3>
                                    Belum ada data OPD
                                </h3>

                                <p>
                                    Silakan tambahkan data Organisasi
                                    Perangkat Daerah terlebih dahulu.
                                </p>

                                <a
                                    href="{{ route('opd.create') }}"
                                    class="idds-button"
                                >

                                    <i class="bi bi-plus-lg"></i>

                                    Tambah OPD

                                </a>

                            </div>

                        </td>

                    </tr>

                @endforelse

            </tbody>

        </table>

    </div>


    {{-- =====================================================
         PAGINATION
    ====================================================== --}}

    @if($opds instanceof \Illuminate\Pagination\LengthAwarePaginator)

        <div class="admin-pagination">

            <div class="pagination-info">

                Menampilkan
                <strong>{{ $opds->firstItem() ?? 0 }}</strong>
                -
                <strong>{{ $opds->lastItem() ?? 0 }}</strong>
                dari
                <strong>{{ $opds->total() }}</strong>
                data

            </div>

            <div>
                {{ $opds->links() }}
            </div>

        </div>

    @endif

</div>

@endsection