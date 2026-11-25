@extends('layouts.app')

@section('title', 'Data Informasi')

@section('content')

<div class="d-flex justify-content-between align-items-start mb-4">

    <div>

        <h1 class="dashboard-title">
            Data Informasi
        </h1>

        <p class="dashboard-subtitle">
            Kelola data dan informasi digital Kabupaten Karimun.
        </p>

    </div>


    <a
        href="{{ route('data-informasi-admin.create') }}"
        class="idds-button"
    >

        <i class="bi bi-plus-lg"></i>

        Tambah Data

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
            Daftar Data Informasi
        </h2>

        <p>
            Data informasi yang terdaftar dalam sistem.
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
                        Judul
                    </th>

                    <th>
                        Kategori
                    </th>

                    <th>
                        Deskripsi
                    </th>

                    <th>
                        Status
                    </th>

                    <th>
                        File
                    </th>

                    <th width="140">
                        Aksi
                    </th>

                </tr>

            </thead>


            <tbody>

                @forelse($dataInformasis as $index => $data)

                    <tr>

                        {{-- NO --}}
                        <td>
                            {{ $index + 1 }}
                        </td>


                        {{-- JUDUL --}}
                        <td>

                            <div class="opd-name">

                                <div class="opd-icon">

                                    <i class="bi bi-file-earmark-text"></i>

                                </div>

                                <span>
                                    {{ $data->judul }}
                                </span>

                            </div>

                        </td>


                        {{-- KATEGORI --}}
                        <td>

                            <span class="status-badge status-default">

                                {{ $data->kategori ?: '-' }}

                            </span>

                        </td>


                        {{-- DESKRIPSI --}}
                        <td>

                            <span class="description-text">

                                {{ \Illuminate\Support\Str::limit(
                                    $data->deskripsi ?: '-',
                                    50
                                ) }}

                            </span>

                        </td>


                        {{-- STATUS --}}
                        <td>

                            @if(strtolower($data->status) == 'aktif')

                                <span class="status-badge status-active">
                                    Aktif
                                </span>

                            @elseif(strtolower($data->status) == 'nonaktif')

                                <span class="status-badge status-inactive">
                                    Nonaktif
                                </span>

                            @else

                                <span class="status-badge status-default">
                                    {{ $data->status ?: '-' }}
                                </span>

                            @endif

                        </td>


                        {{-- FILE --}}
                        <td>

                            @if($data->file)

                                <a
                                    href="{{ asset('storage/' . $data->file) }}"
                                    target="_blank"
                                    class="application-link"
                                    title="Buka file"
                                >

                                    <i class="bi bi-file-earmark-arrow-down"></i>

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
                                    href="{{ route('data-informasi-admin.edit', $data->id) }}"
                                    class="table-action table-action-edit"
                                    title="Edit"
                                >

                                    <i class="bi bi-pencil"></i>

                                </a>


                                {{-- HAPUS --}}
                                <form
                                    action="{{ route('data-informasi-admin.destroy', $data->id) }}"
                                    method="POST"
                                    onsubmit="return confirm('Yakin ingin menghapus data informasi ini?')"
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

                                    <i class="bi bi-file-earmark-text"></i>

                                </div>

                                <h3>
                                    Belum ada data informasi
                                </h3>

                                <p>
                                    Belum terdapat data informasi pada sistem.
                                </p>

                                <a
                                    href="{{ route('data-informasi-admin.create') }}"
                                    class="idds-button"
                                >

                                    <i class="bi bi-plus-lg"></i>

                                    Tambah Data

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