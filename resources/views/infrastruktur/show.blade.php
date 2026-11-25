@extends('layouts.app')

@section('content')

<div class="card shadow">

<div class="card-header bg-info text-white">

Detail Infrastruktur

</div>

<div class="card-body">

<table class="table">

<tr>

<th>Nama</th>

<td>{{ $infrastruktur->nama }}</td>

</tr>

<tr>

<th>Deskripsi</th>

<td>{{ $infrastruktur->deskripsi }}</td>

</tr>

<tr>

<th>Status</th>

<td>{{ $infrastruktur->status }}</td>

</tr>

</table>

<a href="{{ route('infrastruktur-admin.index') }}"
class="btn btn-primary">

Kembali

</a>

</div>

</div>

@endsection