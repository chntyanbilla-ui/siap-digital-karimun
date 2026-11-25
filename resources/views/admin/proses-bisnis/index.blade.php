@extends('layouts.app')

@section('title', 'Proses Bisnis')

@section('content')

<div class="d-flex justify-content-between align-items-start mb-4">

    <div>
        <h1 class="dashboard-title">
            Proses Bisnis
        </h1>

        <p class="dashboard-subtitle">
            Kelola data proses bisnis Kabupaten Karimun.
        </p>
    </div>

    <a href="{{ route('proses-bisnis-admin.create') }}"
       class="idds-button">

        <i class="bi bi-plus-lg"></i>
        Tambah Proses Bisnis

    </a>

</div>


{{-- ALERT SUCCESS --}}
@if(session('success'))

    <div class="admin-alert admin-alert-success mb-4">

        <div class="admin-alert-icon">
            <i class="bi bi-check-circle"></i>
        </div>

        <div>
            <strong>Berhasil</strong>

            <p>{{ session('success') }}</p>
        </div>

    </div>

@endif


{{-- ALERT ERROR --}}
@if(session('error'))

    <div class="admin-alert admin-alert-error mb-4">

        <div class="admin-alert-icon">
            <i class="bi bi-exclamation-circle"></i>
        </div>

        <div>
            <strong>Gagal</strong>

            <p>{{ session('error') }}</p>
        </div>

    </div>

@endif


{{-- DATA PROSES BISNIS --}}
<div class="admin-table-card">

    <div class="admin-table-header">

        <h2>
            Daftar Proses Bisnis
        </h2>

        <p>
            Data proses bisnis yang terdaftar pada sistem.
        </p>

    </div>


    <div class="table-responsive">

        <table class="admin-table">

            <thead>

                <tr>

                    <th width="70">No</th>

                    <th>Judul Proses Bisnis</th>

                    <th>OPD</th>

                    <th>Kategori</th>

                    <th>Status</th>

                    <th width="150">Aksi</th>

                </tr>

            </thead>


            <tbody>

                @forelse($prosesBisnis as $index => $proses)

                    <tr>

                        <td>
                            {{ $index + 1 }}
                        </td>


                        {{-- JUDUL --}}
                        <td>

                            <div class="opd-name">

                                <div class="opd-icon">

                                    <i class="bi bi-diagram-3"></i>

                                </div>

                                <span>
                                    {{ $proses->judul }}
                                </span>

                            </div>

                        </td>


                        {{-- OPD --}}
                        <td>
                            {{ $proses->opd ?? '-' }}
                        </td>


                        {{-- KATEGORI --}}
                        <td>
                            {{ $proses->kategori ?? '-' }}
                        </td>


                        {{-- STATUS --}}
                        <td>

                            @if($proses->status == 'aktif')

                                <span class="status-badge status-active">
                                    Aktif
                                </span>

                            @elseif($proses->status == 'nonaktif')

                                <span class="status-badge status-inactive">
                                    Nonaktif
                                </span>

                            @else

                                <span class="status-badge status-default">
                                    {{ $proses->status ?? '-' }}
                                </span>

                            @endif

                        </td>


                        {{-- AKSI --}}
                        <td>

                            <div class="d-flex gap-2">

                                {{-- EDIT --}}
                                <a
                                    href="{{ route('proses-bisnis-admin.edit', $proses->id) }}"
                                    class="table-action table-action-edit"
                                    title="Edit"
                                >

                                    <i class="bi bi-pencil"></i>

                                </a>


                                {{-- HAPUS --}}
                                <form
                                    action="{{ route('proses-bisnis-admin.destroy', $proses->id) }}"
                                    method="POST"
                                    onsubmit="return confirm('Apakah kamu yakin ingin menghapus proses bisnis ini?')"
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

                        <td colspan="6">

                            <div class="empty-state">

                                <div class="empty-state-icon">

                                    <i class="bi bi-diagram-3"></i>

                                </div>

                                <h3>
                                    Belum ada proses bisnis
                                </h3>

                                <p>
                                    Silakan tambahkan proses bisnis terlebih dahulu.
                                </p>

                                <a
                                    href="{{ route('proses-bisnis-admin.create') }}"
                                    class="idds-button"
                                >

                                    <i class="bi bi-plus-lg"></i>

                                    Tambah Proses Bisnis

                                </a>

                            </div>

                        </td>

                    </tr>

                @endforelse

            </tbody>

        </table>

    </div>

</div>

@endsection