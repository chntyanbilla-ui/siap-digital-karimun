@extends('layouts.guest')

@section('content')

<div class="container">

    <div class="row justify-content-center align-items-center vh-100">

        <div class="col-md-5">

            <div class="card shadow-lg border-0 rounded-4">

                <div class="card-body p-5">

                    <div class="text-center mb-4">

                        <img src="{{ asset('images/logo-karimun.png') }}"
                             width="80">

                        <h3 class="mt-3 fw-bold">

                            SIAP DIGITAL

                        </h3>

                        <p class="text-muted">

                            Kabupaten Karimun

                        </p>

                    </div>

                    <form method="POST"
                          action="{{ route('login') }}">

                        @csrf

                        <div class="mb-3">

                            <label>Email</label>

                            <input type="email"
                                   name="email"
                                   class="form-control"
                                   required>

                        </div>

                        <div class="mb-4">

                            <label>Password</label>

                            <input type="password"
                                   name="password"
                                   class="form-control"
                                   required>

                        </div>

                        <div class="text-center mt-4">

    Belum punya akun?

    <a href="{{ route('register') }}">

        Daftar

    </a>

</div>

                        <button class="btn btn-primary w-100">

                            Login

                        </button>

                    </form>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection