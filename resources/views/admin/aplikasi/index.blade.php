@extends('layouts.app')

@section('title', 'Aplikasi')

@section('content')

<div class="d-flex justify-content-between align-items-start mb-4">

    <div>

        <h1 class="dashboard-title">
            Aplikasi
        </h1>

        <p class="dashboard-subtitle">
            Kelola data aplikasi digital Kabupaten Karimun.
        </p>

    </div>


    <a
        href="{{ route('aplikasi-admin.create') }}"
        class="idds-button"
    >

        <i class="bi bi-plus-lg"></i>

        Tambah Aplikasi

    </a>

</div>


{{-- SUCCESS --}}
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


{{-- ERROR --}}
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


{{-- TABLE --}}
<div class="admin-table-card">

    <div class="admin-table-header">

        <h2>
            Daftar Aplikasi
        </h2>

        <p>
            Data aplikasi yang terdaftar dalam sistem.
        </p>

    </div>


    <div class="table-responsive">

        <table class="admin-table">

            <thead>

                <tr>

                    <th width="60">
                        No
                    </th>

                    <th>
                        Nama Aplikasi
                    </th>

                    <th>
                        OPD
                    </th>

                    <th>
                        Deskripsi
                    </th>

                    <th>
                        Status
                    </th>

                    <th width="100">
                        Link
                    </th>

                    <th width="140">
                        Aksi
                    </th>

                </tr>

            </thead>


            <tbody>

                @forelse($aplikasis as $index => $aplikasi)

                    <tr>

                        {{-- NO --}}
                        <td>
                            {{ $index + 1 }}
                        </td>


                        {{-- NAMA --}}
                        <td>

                            <div class="opd-name">

                                <div class="opd-icon">

                                    <i class="bi bi-window"></i>

                                </div>

                                <span>

                                    {{ $aplikasi->nama }}

                                </span>

                            </div>

                        </td>


                        {{-- OPD --}}
                        <td>

                            {{ $aplikasi->opd ?: '-' }}

                        </td>


                        {{-- DESKRIPSI --}}
                        <td>

                            <span class="description-text">

                                {{ \Illuminate\Support\Str::limit(
                                    $aplikasi->deskripsi ?: '-',
                                    50
                                ) }}

                            </span>

                        </td>


                        {{-- STATUS --}}
                        <td>

                            @if(strtolower($aplikasi->status) == 'aktif')

                                <span class="status-badge status-active">

                                    Aktif

                                </span>

                            @elseif(strtolower($aplikasi->status) == 'nonaktif')

                                <span class="status-badge status-inactive">

                                    Nonaktif

                                </span>

                            @else

                                <span class="status-badge status-default">

                                    {{ $aplikasi->status ?: '-' }}

                                </span>

                            @endif

                        </td>


                        {{-- LINK --}}
                        <td>

                            @if($aplikasi->link)

                                <a
                                    href="{{ $aplikasi->link }}"
                                    target="_blank"
                                    class="application-link"
                                    title="Buka aplikasi"
                                >

                                    <i class="bi bi-box-arrow-up-right"></i>

                                </a>

                            @else

                                <span class="text-muted">
                                    -
                                </span>

                            @endif

                        </td>


                        {{-- AKSI --}}
                        <td>

                            <div class="table-actions">

                                {{-- EDIT --}}
                                <a
                                    href="{{ route('aplikasi-admin.edit', $aplikasi->id) }}"
                                    class="table-action table-action-edit"
                                    title="Edit"
                                >

                                    <i class="bi bi-pencil"></i>

                                </a>


                                {{-- DELETE --}}
                                <form
                                    action="{{ route('aplikasi-admin.destroy', $aplikasi->id) }}"
                                    method="POST"
                                    onsubmit="return confirm('Yakin ingin menghapus aplikasi ini?')"
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

                        <td colspan="7">

                            <div class="empty-state">

                                <div class="empty-state-icon">

                                    <i class="bi bi-window"></i>

                                </div>

                                <h3>
                                    Belum ada aplikasi
                                </h3>

                                <p>
                                    Belum terdapat data aplikasi pada sistem.
                                </p>

                                <a
                                    href="{{ route('aplikasi-admin.create') }}"
                                    class="idds-button"
                                >

                                    <i class="bi bi-plus-lg"></i>

                                    Tambah Aplikasi

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