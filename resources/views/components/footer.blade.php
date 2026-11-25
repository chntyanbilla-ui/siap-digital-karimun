<footer class="public-footer">

    <div class="container">

        <div class="row g-4">


            {{-- BRAND --}}
            <div class="col-lg-5">

                <div class="footer-brand">

                    <img
                        src="{{ asset('images/logo-karimun.png') }}"
                        width="45"
                        height="45"
                        alt="Logo Kabupaten Karimun"
                    >

                    <div>

                        <h5>
                            SIAP DIGITAL
                        </h5>

                        <p>
                            Kabupaten Karimun
                        </p>

                    </div>

                </div>


                <p class="footer-description">

                    Sistem Informasi Administrasi dan Digital
                    Kabupaten Karimun untuk mendukung transformasi
                    digital pemerintahan dan pelayanan publik.

                </p>

            </div>


            {{-- MENU --}}
            <div class="col-lg-3 col-md-6">

                <h6>
                    Navigasi
                </h6>

                <a href="{{ route('home') }}">
                    Beranda
                </a>

                <a href="{{ route('proses-bisnis') }}">
                    Proses Bisnis
                </a>

                <a href="{{ route('layanan') }}">
                    Layanan
                </a>

                <a href="{{ route('aplikasi') }}">
                    Aplikasi
                </a>

            </div>


            {{-- INFORMASI --}}
            <div class="col-lg-4 col-md-6">

                <h6>
                    Informasi
                </h6>

                <a href="{{ route('data-informasi') }}">
                    Data Informasi
                </a>

                <a href="{{ route('infrastruktur') }}">
                    Infrastruktur
                </a>

                <a href="{{ route('keamanan') }}">
                    Keamanan
                </a>

                <a href="#tentang">
                    Tentang SIAP Digital
                </a>

            </div>

        </div>


        <hr>


        <div class="footer-bottom">

            <span>
                © {{ date('Y') }} SIAP Digital Kabupaten Karimun
            </span>

            <span>
                Sistem Informasi Administrasi dan Digital
            </span>

        </div>

    </div>

</footer>