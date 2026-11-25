@extends('layouts.app')

@section('content')

<div class="card shadow">

<div class="card-header bg-primary text-white">

Tambah Infrastruktur

</div>

<div class="card-body">

<form action="{{ route('infrastruktur-admin.store') }}" method="POST">

@csrf

<div class="mb-3">

<label>Nama</label>

<input type="text" name="nama" class="form-control">

</div>

<div class="mb-3">

<label>Deskripsi</label>

<textarea name="deskripsi" class="form-control"></textarea>

</div>

<div class="mb-3">

<label>Status</label>

<input type="text" name="status" class="form-control">

</div>

<button class="btn btn-primary">

Simpan

</button>

</form>

</div>

</div>

@endsection