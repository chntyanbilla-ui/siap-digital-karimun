@extends('layouts.landing')

@section('content')

<section class="detail-service">

    <div class="container">

        {{-- Tombol kembali --}}
        <div class="mb-4">

            <a href="{{ route('layanan') }}"
               class="back-button">

                <i class="bi bi-arrow-left"></i>

                Kembali ke Layanan

            </a>

        </div>


        {{-- Detail layanan --}}
        <div class="detail-card">

            {{-- Header --}}
            <div class="detail-header">

                <div class="detail-icon">

                    <i class="bi bi-building"></i>

                </div>

                <div>

                    <span class="detail-label">
                        LAYANAN PEMERINTAH KABUPATEN KARIMUN
                    </span>

                    <h1>
                        {{ $layanan->nama }}
                    </h1>

                </div>

            </div>


            {{-- Informasi --}}
            <div class="detail-info">

                <div class="info-item">

                    <span class="info-title">
                        <i class="bi bi-building"></i>
                        Perangkat Daerah
                    </span>

                    <strong>
                        {{ $layanan->opd }}
                    </strong>

                </div>


                <div class="info-item">

                    <span class="info-title">
                        <i class="bi bi-check-circle"></i>
                        Status
                    </span>

                    @if($layanan->status == 'Aktif')

                        <span class="status-active">
                            Aktif
                        </span>

                    @else

                        <span class="status-inactive">
                            {{ $layanan->status }}
                        </span>

                    @endif

                </div>


                @if(!empty($layanan->kategori))

                    <div class="info-item">

                        <span class="info-title">
                            <i class="bi bi-folder"></i>
                            Kategori
                        </span>

                        <strong>
                            {{ $layanan->kategori }}
                        </strong>

                    </div>

                @endif

            </div>


            {{-- Deskripsi --}}
            <div class="detail-description">

                <h2>
                    Tentang Layanan
                </h2>

                <p>
                    {{ $layanan->deskripsi ?? 'Belum ada deskripsi layanan.' }}
                </p>

            </div>

        </div>

    </div>

</section>


<style>

.detail-service {
    padding: 60px 0 80px;
    background: #f7f9fc;
    min-height: 600px;
}

.back-button {
    display: inline-flex;
    align-items: center;
    gap: 8px;

    color: #1264e8;
    text-decoration: none;

    font-size: 14px;
    font-weight: 600;
}

.back-button:hover {
    color: #0d55c8;
}

.detail-card {
    max-width: 900px;

    margin: 0 auto;

    background: white;

    border-radius: 18px;

    padding: 35px;

    box-shadow: 0 8px 30px rgba(0,0,0,.07);

    border: 1px solid #e7ebf0;
}

.detail-header {
    display: flex;
    align-items: center;

    gap: 20px;

    padding-bottom: 30px;

    border-bottom: 1px solid #edf0f3;
}

.detail-icon {
    width: 65px;
    height: 65px;

    flex-shrink: 0;

    display: flex;
    align-items: center;
    justify-content: center;

    background: #1264e8;

    color: white;

    border-radius: 15px;

    font-size: 27px;
}

.detail-label {
    font-size: 11px;

    font-weight: 700;

    color: #198754;
}

.detail-header h1 {
    margin: 7px 0 0;

    font-size: 30px;

    font-weight: 700;

    color: #202630;
}

.detail-info {
    display: grid;

    grid-template-columns: repeat(2, 1fr);

    gap: 20px;

    padding: 30px 0;

    border-bottom: 1px solid #edf0f3;
}

.info-item {
    display: flex;
    flex-direction: column;

    gap: 7px;
}

.info-title {
    display: flex;
    align-items: center;

    gap: 7px;

    color: #7b8491;

    font-size: 12px;
}

.info-item strong {
    color: #252a31;

    font-size: 14px;
}

.status-active {
    width: fit-content;

    padding: 6px 12px;

    border-radius: 20px;

    background: #e8f7ef;

    color: #198754;

    font-size: 12px;

    font-weight: 600;
}

.status-inactive {
    width: fit-content;

    padding: 6px 12px;

    border-radius: 20px;

    background: #eeeeee;

    color: #777;

    font-size: 12px;
}

.detail-description {
    padding-top: 30px;
}

.detail-description h2 {
    margin-bottom: 15px;

    font-size: 21px;

    font-weight: 700;

    color: #202630;
}

.detail-description p {
    margin: 0;

    color: #687386;

    font-size: 14px;

    line-height: 1.9;
}


@media (max-width: 768px) {

    .detail-card {
        padding: 25px;
    }

    .detail-header {
        align-items: flex-start;
    }

    .detail-header h1 {
        font-size: 23px;
    }

    .detail-info {
        grid-template-columns: 1fr;
    }

}

</style>

@endsection