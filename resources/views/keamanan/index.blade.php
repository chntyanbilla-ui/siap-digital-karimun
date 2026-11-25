@extends('layouts.app')

@section('title','Data Keamanan')

@section('content')

<div class="card shadow border-0">

    <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">

        <h4 class="mb-0">Data Keamanan</h4>

        <a href="{{ route('keamanan-admin.create') }}" class="btn btn-light">
            <i class="bi bi-plus-circle"></i>
            Tambah Data
        </a>

    </div>

    <div class="card-body">

        @if(session('success'))

            <div class="alert alert-success">

                {{ session('success') }}

            </div>

        @endif

        <table class="table table-bordered table-hover">

            <thead class="table-primary">

                <tr>

                    <th>No</th>
                    <th>Nama</th>
                    <th>Deskripsi</th>
                    <th>Status</th>
                    <th width="220">Aksi</th>

                </tr>

            </thead>

            <tbody>

               @forelse($data as $item)

                <tr>

                    <td>{{ $loop->iteration }}</td>

                    <td>{{ $item->nama }}</td>

                    <td>{{ $item->deskripsi }}</td>

                    <td>{{ $item->status }}</td>

                    <td>

                        <a href="{{ route('keamanan-admin.show',$item->id) }}"
                           class="btn btn-info btn-sm">

                            Detail

                        </a>

                        <a href="{{ route('keamanan-admin.edit',$item->id) }}"
                           class="btn btn-warning btn-sm">

                            Edit

                        </a>

                        <form action="{{ route('keamanan-admin.destroy',$item->id) }}"
                              method="POST"
                              class="d-inline">

                            @csrf
                            @method('DELETE')

                            <button class="btn btn-danger btn-sm"
                                    onclick="return confirm('Hapus data?')">

                                Hapus

                            </button>

                        </form>

                    </td>

                </tr>

                @empty

                <tr>

                    <td colspan="5" class="text-center">

                        Belum ada data.

                    </td>

                </tr>

                @endforelse

            </tbody>

        </table>

    </div>

</div>

@endsection