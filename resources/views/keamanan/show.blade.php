@extends('layouts.app')

@section('content')

<div class="card shadow border-0">

<div class="card-header bg-info text-white">

<h4>Detail Keamanan</h4>

</div>

<div class="card-body">

<table class="table">

<tr>

<th width="200">Nama</th>

<td>{{ $keamanan->nama }}</td>

</tr>

<tr>

<th>Deskripsi</th>

<td>{{ $keamanan->deskripsi }}</td>

</tr>

<tr>

<th>Status</th>

<td>{{ $keamanan->status }}</td>

</tr>

</table>

<a href="{{ route('keamanan-admin.index') }}"
class="btn btn-primary">

Kembali

</a>

</div>

</div>

@endsection