@extends('layouts.app')

@section('content')

<div class="card shadow border-0">

<div class="card-header bg-primary text-white">

<h4>Tambah Keamanan</h4>

</div>

<div class="card-body">

<form action="{{ route('keamanan-admin.store') }}" method="POST">

@csrf

<div class="mb-3">

<label>Nama</label>

<input type="text"
       name="nama"
       class="form-control"
       required>

</div>

<div class="mb-3">

<label>Deskripsi</label>

<textarea
name="deskripsi"
rows="5"
class="form-control"></textarea>

</div>

<div class="mb-3">

<label>Status</label>

<input
type="text"
name="status"
class="form-control">

</div>

<button class="btn btn-primary">

Simpan

</button>

<a href="{{ route('keamanan-admin.index') }}"
class="btn btn-secondary">

Kembali

</a>

</form>

</div>

</div>

@endsection