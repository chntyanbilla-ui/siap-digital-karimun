@extends('layouts.landing')

@section('content')

<section class="py-5">

    <div class="container">

        <a href="{{ route('aplikasi') }}"
           class="btn btn-outline-success mb-4">

            ← Kembali

        </a>

        <div class="card shadow border-0">

            <div class="card-body">

                <h2>{{ $aplikasi->nama }}</h2>

                <h5>{{ $aplikasi->opd }}</h5>

                <hr>

                <p>

                    {{ $aplikasi->deskripsi }}

                </p>

                @if($aplikasi->link)

                    <a href="{{ $aplikasi->link }}"
                       target="_blank"
                       class="btn btn-primary">

                        Buka Aplikasi

                    </a>

                @endif

            </div>

        </div>

    </div>

</section>

@endsection