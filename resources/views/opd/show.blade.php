@extends('layouts.app')

@section('content')

<div class="card shadow border-0">

    <div class="card-header bg-info text-white">

        <h4>Detail OPD</h4>

    </div>

    <div class="card-body">

        <table class="table">

            <tr>

                <th width="200">

                    Nama OPD

                </th>

                <td>

                    {{ $opd->nama }}

                </td>

            </tr>

            <tr>

                <th>

                    Deskripsi

                </th>

                <td>

                    {{ $opd->deskripsi }}

                </td>

            </tr>

            <tr>

                <th>

                    Dibuat

                </th>

                <td>

                    {{ $opd->created_at }}

                </td>

            </tr>

        </table>

        <a href="{{ route('opd.index') }}"
           class="btn btn-primary">

            Kembali

        </a>

    </div>

</div>

@endsection