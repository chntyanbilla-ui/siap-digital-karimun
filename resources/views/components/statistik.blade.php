<section class="statistics-section">

    <div class="container">

        <div class="text-center mb-5">

            <span class="section-subtitle">
                Statistik
            </span>

            <h2 class="section-title">
                Data Digital Kabupaten Karimun
            </h2>

            <p class="section-description">
                Ringkasan data yang tersedia pada sistem SIAP Digital
                Kabupaten Karimun.
            </p>

        </div>


        <div class="row g-4">


            {{-- OPD --}}
            <div class="col-lg-3 col-md-6">

                <div class="stat-card">

                    <div class="stat-icon bg-primary">

                        <i class="bi bi-building"></i>

                    </div>

                    <h1>
                        {{ $totalOpd ?? 0 }}
                    </h1>

                    <h5>
                        OPD
                    </h5>

                    <p>
                        Organisasi Perangkat Daerah
                    </p>

                </div>

            </div>


            {{-- PROSES BISNIS --}}
            <div class="col-lg-3 col-md-6">

                <div class="stat-card">

                    <div class="stat-icon bg-success">

                        <i class="bi bi-diagram-3"></i>

                    </div>

                    <h1>
                        {{ $totalProsesBisnis ?? 0 }}
                    </h1>

                    <h5>
                        Proses Bisnis
                    </h5>

                    <p>
                        Proses bisnis pemerintah daerah
                    </p>

                </div>

            </div>


            {{-- LAYANAN --}}
            <div class="col-lg-3 col-md-6">

                <div class="stat-card">

                    <div class="stat-icon bg-warning">

                        <i class="bi bi-list-check"></i>

                    </div>

                    <h1>
                        {{ $totalLayanan ?? 0 }}
                    </h1>

                    <h5>
                        Layanan
                    </h5>

                    <p>
                        Layanan digital pemerintah
                    </p>

                </div>

            </div>


            {{-- APLIKASI --}}
            <div class="col-lg-3 col-md-6">

                <div class="stat-card">

                    <div class="stat-icon bg-info">

                        <i class="bi bi-window"></i>

                    </div>

                    <h1>
                        {{ $totalAplikasi ?? 0 }}
                    </h1>

                    <h5>
                        Aplikasi
                    </h5>

                    <p>
                        Aplikasi digital pemerintah
                    </p>

                </div>

            </div>

        </div>

    </div>

</section>