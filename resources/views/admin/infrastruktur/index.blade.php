@extends('layouts.app')

@section('content')

<div class="container-fluid">

    {{-- Header --}}
    <div class="d-flex justify-content-between align-items-center mb-4">

        <div>
            <h1 class="h3 mb-1 text-gray-800">
                Infrastruktur
            </h1>

            <p class="text-muted mb-0">
                Kelola data infrastruktur Kabupaten Karimun
            </p>
        </div>

        <a href="{{ route('infrastruktur-admin.create') }}"
           class="btn btn-primary">
            <i class="fas fa-plus"></i>
            Tambah Infrastruktur
        </a>

    </div>


    {{-- Success Message --}}
    @if(session('success'))

        <div class="alert alert-success alert-dismissible fade show">

            {{ session('success') }}

            <button type="button"
                    class="close"
                    data-dismiss="alert">
                <span>&times;</span>
            </button>

        </div>

    @endif


    {{-- Table --}}
    <div class="card shadow">

        <div class="card-header py-3">

            <h6 class="m-0 font-weight-bold text-primary">
                Data Infrastruktur
            </h6>

        </div>


        <div class="card-body">

            <div class="table-responsive">

                <table class="table table-bordered table-hover">

                    <thead>
                        <tr>
                            <th width="60">No</th>
                            <th>Nama</th>
                            <th>Deskripsi</th>
                            <th>Lokasi</th>
                            <th>Status</th>
                            <th width="180">Aksi</th>
                        </tr>
                    </thead>


                    <tbody>

                        @forelse($infrastruktur_admin as $data)

                            <tr>

                                <td>
                                    {{ $loop->iteration }}
                                </td>

                                <td>
                                    {{ $data->nama }}
                                </td>

                                <td>
                                    {{ $data->deskripsi ?? '-' }}
                                </td>

                                <td>
                                    {{ $data->lokasi ?? '-' }}
                                </td>

                                <td>

                                    @if($data->status == 'aktif')

                                        <span class="badge badge-success">
                                            Aktif
                                        </span>

                                    @else

                                        <span class="badge badge-secondary">
                                            {{ ucfirst($data->status) }}
                                        </span>

                                    @endif

                                </td>

                                <td>

                                    <a href="{{ route('infrastruktur-admin.edit', $data->id) }}"
                                       class="btn btn-sm btn-warning">

                                        <i class="fas fa-edit"></i>
                                        Edit

                                    </a>


                                    <form action="{{ route('infrastruktur-admin.destroy', $data->id) }}"
                                          method="POST"
                                          class="d-inline">

                                        @csrf
                                        @method('DELETE')

                                        <button type="submit"
                                                class="btn btn-sm btn-danger"
                                                onclick="return confirm('Yakin ingin menghapus data ini?')">

                                            <i class="fas fa-trash"></i>
                                            Hapus

                                        </button>

                                    </form>

                                </td>

                            </tr>

                        @empty

                            <tr>

                                <td colspan="6"
                                    class="text-center">

                                    Belum ada data infrastruktur.

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