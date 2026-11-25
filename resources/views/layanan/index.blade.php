@forelse($layanans as $layanan)

<div class="col-lg-4 col-md-6">

    <div class="layanan-card">

        {{-- HEADER CARD --}}
        <div class="layanan-card-header">

            <div class="layanan-icon">

                <i class="bi bi-list-check"></i>

            </div>

        </div>


        {{-- CONTENT --}}
        <div class="layanan-card-content">

            <h3>
                {{ $layanan->nama }}
            </h3>


            @if($layanan->opd)

                <div class="layanan-opd">

                    <i class="bi bi-building"></i>

                    <span>
                        {{ $layanan->opd }}
                    </span>

                </div>

            @endif


            @if($layanan->kategori)

                <span class="layanan-category">

                    {{ $layanan->kategori }}

                </span>

            @endif


            <p>

                {{ \Illuminate\Support\Str::limit(
                    $layanan->deskripsi ?? '-',
                    150
                ) }}

            </p>

        </div>


        {{-- FOOTER --}}
        <div class="layanan-card-footer">

            <a
                href="{{ route('layanan.detail', $layanan->id) }}"
                class="layanan-button"
            >

                <span>
                    Buka Layanan
                </span>

                <i class="bi bi-arrow-up-right"></i>

            </a>

        </div>

    </div>

</div>

@empty

<div class="col-12">

    <div class="layanan-empty">

        <div class="layanan-empty-icon">

            <i class="bi bi-list-check"></i>

        </div>

        <h3>
            Belum Ada Layanan
        </h3>

        <p>
            Belum tersedia layanan digital Kabupaten Karimun.
        </p>

    </div>

</div>

@endforelse