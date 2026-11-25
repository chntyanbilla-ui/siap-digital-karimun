@extends('layouts.guest')

@section('content')

<div class="container">

    <div class="row justify-content-center align-items-center vh-100">

        <div class="col-md-6 col-lg-5">

            <div class="card shadow-lg border-0 rounded-4">

                <div class="card-body p-5">

                    <div class="text-center mb-4">

                        <img src="{{ asset('images/logo-karimun.png') }}"
                             width="80"
                             class="mb-3">

                        <h3 class="fw-bold text-primary">

                            SIAP DIGITAL

                        </h3>

                        <p class="text-muted">

                            Kabupaten Karimun

                        </p>

                    </div>

                    @if ($errors->any())

                        <div class="alert alert-danger">

                            <ul class="mb-0">

                                @foreach ($errors->all() as $error)

                                    <li>{{ $error }}</li>

                                @endforeach

                            </ul>

                        </div>

                    @endif

                    <form method="POST"
                          action="{{ route('register') }}">

                        @csrf

                        <div class="mb-3">

                            <label class="form-label fw-semibold">

                                Nama Lengkap

                            </label>

                            <input
                                type="text"
                                name="name"
                                value="{{ old('name') }}"
                                class="form-control @error('name') is-invalid @enderror"
                                placeholder="Masukkan nama lengkap"
                                required>

                            @error('name')

                                <div class="invalid-feedback">

                                    {{ $message }}

                                </div>

                            @enderror

                        </div>

                        <div class="mb-3">

                            <label class="form-label fw-semibold">

                                Email

                            </label>

                            <input
                                type="email"
                                name="email"
                                value="{{ old('email') }}"
                                class="form-control @error('email') is-invalid @enderror"
                                placeholder="contoh@email.com"
                                required>

                            @error('email')

                                <div class="invalid-feedback">

                                    {{ $message }}

                                </div>

                            @enderror

                        </div>

                        <div class="mb-3">

                            <label class="form-label fw-semibold">

                                Password

                            </label>

                            <input
                                type="password"
                                name="password"
                                class="form-control @error('password') is-invalid @enderror"
                                placeholder="Minimal 8 karakter"
                                required>

                            @error('password')

                                <div class="invalid-feedback">

                                    {{ $message }}

                                </div>

                            @enderror

                        </div>

                        <div class="mb-4">

                            <label class="form-label fw-semibold">

                                Konfirmasi Password

                            </label>

                            <input
                                type="password"
                                name="password_confirmation"
                                class="form-control"
                                placeholder="Ulangi password"
                                required>

                        </div>

                        <button
                            type="submit"
                            class="btn btn-primary w-100 py-2">

                            <i class="bi bi-person-plus-fill"></i>

                            Daftar

                        </button>

                    </form>

                    <div class="text-center mt-4">

                        <small>

                            Sudah memiliki akun?

                            <a href="{{ route('login') }}"
                               class="text-decoration-none fw-semibold">

                                Login

                            </a>

                        </small>

                    </div>

                    <div class="text-center mt-2">

                        <a href="{{ route('home') }}"
                           class="text-decoration-none text-secondary">

                            <i class="bi bi-arrow-left"></i>

                            Kembali ke Beranda

                        </a>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection