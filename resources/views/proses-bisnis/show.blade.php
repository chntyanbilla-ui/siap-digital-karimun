@extends('layouts.app')

@section('title', 'Detail Proses Bisnis')

@section('content')

<div class="card shadow border-0">

    <div class="card-header bg-info text-white">

        <h4 class="mb-0">

            Detail Proses Bisnis

        </h4>

    </div>

    <div class="card-body">

        <table class="table">

            <tr>

                <th width="220">

                    Nama

                </th>

                <td>

                    {{ $prosesBisnis->nama }}

                </td>

            </tr>

            <tr>

                <th>

                    Deskripsi

                </th>

                <td>

                    {{ $prosesBisnis->deskripsi }}

                </td>

            </tr>

            <tr>

                <th>

                    Status

                </th>

                <td>

                    {{ $prosesBisnis->status }}

                </td>

            </tr>

        </table>

        <a href="{{ route('proses-bisnis-admin.index') }}"
           class="btn btn-primary">

            Kembali

        </a>

    </div>

</div>

@endsection