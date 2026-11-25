@extends('layouts.app')

@section('title', 'Layanan')

@section('content')

<style>
    .lyn-header{display:flex;justify-content:space-between;align-items:flex-start;gap:16px;margin-bottom:28px}
    .lyn-title{font-size:2.2rem;font-weight:700;margin:0;color:#0f172a}
    .lyn-subtitle{margin:6px 0 0;color:#64748b}
    .lyn-btn-add{display:inline-flex;align-items:center;gap:8px;background:#1d4ed8;color:#fff;font-weight:600;padding:12px 20px;border-radius:10px;text-decoration:none}
    .lyn-btn-add:hover{background:#1e40af;color:#fff}
    .lyn-card{background:#fff;border:1px solid #e2e8f0;border-radius:14px;overflow:hidden}
    .lyn-card-head{padding:24px}
    .lyn-card-head h2{font-size:1.25rem;font-weight:600;margin:0;color:#0f172a}
    .lyn-card-head p{margin:4px 0 0;font-size:.875rem;color:#64748b}
    .lyn-table-wrap{overflow-x:auto}
    .lyn-table{width:100%;border-collapse:collapse;font-size:.9rem}
    .lyn-table th{background:#f8fafc;color:#475569;text-align:left;font-weight:600;padding:16px 24px;border-top:1px solid #e2e8f0;border-bottom:1px solid #e2e8f0}
    .lyn-table td{padding:18px 24px;border-bottom:1px solid #e2e8f0;vertical-align:middle;color:#334155}
    .lyn-table tr:hover td{background:#f8fafc}
    .lyn-name{display:flex;align-items:center;gap:12px}
    .lyn-icon{width:40px;height:40px;flex-shrink:0;display:flex;align-items:center;justify-content:center;background:#eff6ff;color:#1d4ed8;border-radius:10px;font-size:1.1rem}
    .lyn-name strong{display:block;color:#0f172a}
    .lyn-name small{color:#64748b}
    .lyn-link{color:#1d4ed8;text-decoration:none}
    .lyn-link:hover{text-decoration:underline}
    .lyn-actions{display:flex;gap:8px}
    .lyn-action{width:40px;height:40px;display:flex;align-items:center;justify-content:center;border-radius:10px;background:#fff;cursor:pointer;text-decoration:none}
    .lyn-edit{border:1px solid #93c5fd;color:#1d4ed8}
    .lyn-edit:hover{background:#eff6ff}
    .lyn-delete{border:1px solid #fca5a5;color:#dc2626}
    .lyn-delete:hover{background:#fef2f2}
    .lyn-alert{margin-bottom:16px;padding:12px 16px;border:1px solid #bbf7d0;background:#f0fdf4;color:#15803d;border-radius:10px;font-size:.9rem}
    .lyn-empty{text-align:center;color:#64748b;padding:40px !important}
</style>

<div class="lyn-header">
    <div>
        <h1 class="lyn-title">Layanan</h1>
        <p class="lyn-subtitle">Kelola data layanan Kabupaten Karimun.</p>
    </div>

    <a href="{{ route('layanan-admin.create') }}" class="lyn-btn-add">
        <i class="bi bi-plus-lg"></i>
        Tambah Layanan
    </a>
</div>

@if (session('success'))
    <div class="lyn-alert">{{ session('success') }}</div>
@endif

<div class="lyn-card">
    <div class="lyn-card-head">
        <h2>Daftar Layanan</h2>
        <p>Data layanan yang terdaftar pada sistem.</p>
    </div>

    <div class="lyn-table-wrap">
        <table class="lyn-table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Layanan</th>
                    <th>OPD</th>
                    <th>Kategori</th>
                    <th>Link</th>
                    <th>Aksi</th>
                </tr>
            </thead>

            <tbody>
                @forelse ($layanans as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>

                        <td>
                            <div class="lyn-name">
                                <div class="lyn-icon">
                                    <i class="bi bi-list-check"></i>
                                </div>
                                <div>
                                    <strong>{{ $item->nama }}</strong>
                                    <small>{{ \Illuminate\Support\Str::limit($item->deskripsi, 80) }}</small>
                                </div>
                            </div>
                        </td>

                        <td>{{ $item->opd }}</td>
                        <td>{{ $item->kategori ?? '-' }}</td>

                        <td>
                            @if ($item->link)
                                <a href="{{ $item->link }}" target="_blank" class="lyn-link">Buka Layanan</a>
                            @else
                                -
                            @endif
                        </td>

                        <td>
                            <div class="lyn-actions">
                                <a href="{{ route('layanan-admin.edit', $item->id) }}"
                                   class="lyn-action lyn-edit" title="Edit">
                                    <i class="bi bi-pencil"></i>
                                </a>

                                <form action="{{ route('layanan-admin.destroy', $item->id) }}"
                                      method="POST"
                                      onsubmit="return confirm('Hapus layanan ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="lyn-action lyn-delete" title="Hapus">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="lyn-empty">Belum ada data layanan.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

@endsection