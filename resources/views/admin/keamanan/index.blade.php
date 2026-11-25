@extends('layouts.app')

@section('title', 'Keamanan')

@section('content')

<div class="d-flex justify-content-between align-items-start mb-4">

    <div>

        <h1 class="dashboard-title">
            Keamanan
        </h1>

        <p class="dashboard-subtitle">
            Kelola data keamanan digital Kabupaten Karimun.
        </p>

    </div>

    <a
        href="{{ route('keamanan-admin.create') }}"
        class="idds-button"
    >

        <i class="bi bi-plus-lg"></i>

        Tambah Keamanan

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
            Daftar Keamanan
        </h2>

        <p>
            Data keamanan yang terdaftar dalam sistem.
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
                        Nama Keamanan
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

                    <th width="140">
                        Aksi
                    </th>

                </tr>

            </thead>


            <tbody>

                @forelse($keamanans as $index => $keamanan)

                    <tr>

                        {{-- NO --}}
                        <td>
                            {{ $index + 1 }}
                        </td>


                        {{-- NAMA --}}
                        <td>

                            <div class="opd-name">

                                <div class="opd-icon">

                                    <i class="bi bi-shield-lock"></i>

                                </div>

                                <span>
                                    {{ $keamanan->nama }}
                                </span>

                            </div>

                        </td>


                        {{-- KATEGORI --}}
                        <td>

                            <span class="status-badge status-default">

                                {{ $keamanan->kategori ?: '-' }}

                            </span>

                        </td>


                        {{-- DESKRIPSI --}}
                        <td>

                            <span class="description-text">

                                {{ \Illuminate\Support\Str::limit(
                                    $keamanan->deskripsi ?: '-',
                                    50
                                ) }}

                            </span>

                        </td>


                        {{-- STATUS --}}
                        <td>

                            @if(strtolower($keamanan->status) == 'aktif')

                                <span class="status-badge status-active">
                                    Aktif
                                </span>

                            @elseif(strtolower($keamanan->status) == 'nonaktif')

                                <span class="status-badge status-inactive">
                                    Nonaktif
                                </span>

                            @else

                                <span class="status-badge status-default">
                                    {{ $keamanan->status ?: '-' }}
                                </span>

                            @endif

                        </td>


                        {{-- AKSI --}}
                        <td>

                            <div class="table-actions">

                                {{-- EDIT --}}
                                <a
                                    href="{{ route('keamanan-admin.edit', $keamanan->id) }}"
                                    class="table-action table-action-edit"
                                    title="Edit"
                                >

                                    <i class="bi bi-pencil"></i>

                                </a>


                                {{-- HAPUS --}}
                                <form
                                    action="{{ route('keamanan-admin.destroy', $keamanan->id) }}"
                                    method="POST"
                                    onsubmit="return confirm('Yakin ingin menghapus data keamanan ini?')"
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

                                    <i class="bi bi-shield-lock"></i>

                                </div>

                                <h3>
                                    Belum ada data keamanan
                                </h3>

                                <p>
                                    Belum terdapat data keamanan pada sistem.
                                </p>

                                <a
                                    href="{{ route('keamanan-admin.create') }}"
                                    class="idds-button"
                                >

                                    <i class="bi bi-plus-lg"></i>

                                    Tambah Keamanan

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