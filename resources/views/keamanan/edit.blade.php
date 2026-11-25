@extends('layouts.app')

@section('content')

<div class="card shadow border-0">

<div class="card-header bg-warning">

<h4>Edit Keamanan</h4>

</div>

<div class="card-body">

<form action="{{ route('keamanan-admin.update',$keamanan->id) }}" method="POST">

@csrf
@method('PUT')

<div class="mb-3">

<label>Nama</label>

<input
type="text"
name="nama"
value="{{ $keamanan->nama }}"
class="form-control">

</div>

<div class="mb-3">

<label>Deskripsi</label>

<textarea
name="deskripsi"
rows="5"
class="form-control">{{ $keamanan->deskripsi }}</textarea>

</div>

<div class="mb-3">

<label>Status</label>

<input
type="text"
name="status"
value="{{ $keamanan->status }}"
class="form-control">

</div>

<button class="btn btn-warning">

Update

</button>

<a href="{{ route('keamanan-admin.index') }}"
class="btn btn-secondary">

Kembali

</a>

</form>

</div>

</div>

@endsection