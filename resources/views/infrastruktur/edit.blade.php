@extends('layouts.app')

@section('content')

<div class="card shadow">

<div class="card-header bg-warning">

Edit Infrastruktur

</div>

<div class="card-body">

<form action="{{ route('infrastruktur-admin.update',$infrastruktur->id) }}" method="POST">

@csrf

@method('PUT')

<div class="mb-3">

<label>Nama</label>

<input type="text"

name="nama"

value="{{ $infrastruktur->nama }}"

class="form-control">

</div>

<div class="mb-3">

<label>Deskripsi</label>

<textarea

name="deskripsi"

class="form-control">{{ $infrastruktur->deskripsi }}</textarea>

</div>

<div class="mb-3">

<label>Status</label>

<input

type="text"

name="status"

value="{{ $infrastruktur->status }}"

class="form-control">

</div>

<button class="btn btn-warning">

Update

</button>

</form>

</div>

</div>

@endsection