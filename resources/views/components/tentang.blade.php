<section id="tentang" class="tentang-section">

    <div class="container">

        <div class="row align-items-center g-5">

            {{-- =================================================
                 GAMBAR
            ================================================== --}}

            <div class="col-lg-6">

                <div class="tentang-image-wrapper">

                    <img
                        src="{{ asset('images/karimun.jpg') }}"
                        alt="Kabupaten Karimun"
                        class="tentang-image"
                    >

                </div>

            </div>


            {{-- =================================================
                 KONTEN
            ================================================== --}}

            <div class="col-lg-6">

                <span class="tentang-label">
                    TENTANG SIAP DIGITAL
                </span>


                <h2 class="tentang-title">

                    Sistem Informasi Administrasi
                    dan Digital Kabupaten
                    Karimun

                </h2>


                <p class="tentang-description">

                    SIAP Digital merupakan platform informasi digital
                    Kabupaten Karimun yang menyediakan informasi
                    terintegrasi mengenai berbagai aspek digital
                    pemerintahan.

                </p>


                <p class="tentang-description">

                    Platform ini membantu masyarakat maupun perangkat
                    daerah dalam memperoleh informasi mengenai proses
                    bisnis, layanan, aplikasi, data informasi,
                    infrastruktur, dan keamanan digital.

                </p>


                {{-- =================================================
                     FITUR
                ================================================== --}}

                <div class="tentang-features">


                    {{-- FITUR 1 --}}

                    <div class="tentang-feature">

                        <div class="feature-icon icon-blue">

                            <i class="bi bi-grid-1x2"></i>

                        </div>

                        <div>

                            <h4>
                                Informasi Terintegrasi
                            </h4>

                            <p>
                                Menyediakan informasi digital
                                dalam satu platform.
                            </p>

                        </div>

                    </div>


                    {{-- FITUR 2 --}}

                    <div class="tentang-feature">

                        <div class="feature-icon icon-purple">

                            <i class="bi bi-phone"></i>

                        </div>

                        <div>

                            <h4>
                                Mudah Diakses
                            </h4>

                            <p>
                                Informasi dapat diakses dengan
                                mudah melalui perangkat digital.
                            </p>

                        </div>

                    </div>


                    {{-- FITUR 3 --}}

                    <div class="tentang-feature">

                        <div class="feature-icon icon-green">

                            <i class="bi bi-diagram-3"></i>

                        </div>

                        <div>

                            <h4>
                                Terintegrasi
                            </h4>

                            <p>
                                Mendukung integrasi informasi
                                antar perangkat daerah.
                            </p>

                        </div>

                    </div>


                    {{-- FITUR 4 --}}

                    <div class="tentang-feature">

                        <div class="feature-icon icon-orange">

                            <i class="bi bi-shield-check"></i>

                        </div>

                        <div>

                            <h4>
                                Aman
                            </h4>

                            <p>
                                Mendukung pengelolaan informasi
                                digital yang lebih baik.
                            </p>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>


<style>

/* =====================================================
   TENTANG SECTION
===================================================== */

.tentang-section {

    padding: 100px 0;

    background: #f7faff;

}


/* =====================================================
   IMAGE
===================================================== */

.tentang-image-wrapper {

    position: relative;

    display: flex;

    align-items: center;

    justify-content: center;

    padding: 15px;

}


.tentang-image {

    width: 100%;

    max-width: 520px;

    height: 470px;

    object-fit: cover;

    border-radius: 24px;

    box-shadow:
        0 25px 55px rgba(0, 70, 180, .14);

}


/* =====================================================
   IMAGE BADGE
===================================================== */

.tentang-image-badge {

    position: absolute;

    left: 35px;

    bottom: 35px;

    display: flex;

    align-items: center;

    gap: 12px;

    padding: 13px 18px;

    background: rgba(255,255,255,.96);

    border-radius: 14px;

    box-shadow:
        0 10px 30px rgba(0,0,0,.12);

}


.tentang-image-badge > i {

    width: 42px;

    height: 42px;

    display: flex;

    align-items: center;

    justify-content: center;

    border-radius: 10px;

    background: #1264e8;

    color: white;

    font-size: 19px;

}


.tentang-image-badge div {

    display: flex;

    flex-direction: column;

}


.tentang-image-badge strong {

    color: #14213d;

    font-size: 13px;

}


.tentang-image-badge small {

    margin-top: 2px;

    color: #718096;

    font-size: 10px;

}


/* =====================================================
   LABEL
===================================================== */

.tentang-label {

    display: inline-block;

    margin-bottom: 14px;

    color: #1264e8;

    font-size: 12px;

    font-weight: 700;

    letter-spacing: 1.4px;

}


/* =====================================================
   TITLE
===================================================== */

.tentang-title {

    max-width: 600px;

    margin: 0 0 20px;

    color: #14213d;

    font-size: 38px;

    font-weight: 700;

    line-height: 1.2;

}


/* =====================================================
   DESCRIPTION
===================================================== */

.tentang-description {

    max-width: 600px;

    margin-bottom: 15px;

    color: #64748b;

    font-size: 14px;

    line-height: 1.9;

}


/* =====================================================
   FEATURES
===================================================== */

.tentang-features {

    display: grid;

    grid-template-columns: repeat(2, 1fr);

    gap: 14px;

    margin-top: 25px;

}


/* =====================================================
   FEATURE CARD
===================================================== */

.tentang-feature {

    min-height: 135px;

    padding: 20px;

    display: flex;

    flex-direction: column;

    gap: 13px;

    background: #ffffff;

    border: 1px solid #e6ebf2;

    border-radius: 15px;

    box-shadow:
        0 8px 25px rgba(0,0,0,.05);

    transition: .25s ease;

}


.tentang-feature:hover {

    transform: translateY(-4px);

    box-shadow:
        0 14px 32px rgba(0,0,0,.08);

}


/* =====================================================
   FEATURE ICON
===================================================== */

.feature-icon {

    width: 42px;

    height: 42px;

    display: flex;

    align-items: center;

    justify-content: center;

    border-radius: 10px;

    font-size: 19px;

}


.icon-blue {

    background: #e8f1ff;

    color: #1264e8;

}


.icon-purple {

    background: #f1eaff;

    color: #7c3aed;

}


.icon-green {

    background: #e8f8f0;

    color: #15905a;

}


.icon-orange {

    background: #fff2df;

    color: #f08a00;

}


/* =====================================================
   FEATURE TEXT
===================================================== */

.tentang-feature h4 {

    margin: 0 0 5px;

    color: #172033;

    font-size: 14px;

    font-weight: 700;

}


.tentang-feature p {

    margin: 0;

    color: #718096;

    font-size: 11px;

    line-height: 1.6;

}


/* =====================================================
   RESPONSIVE
===================================================== */

@media (max-width: 991px) {

    .tentang-section {

        padding: 70px 0;

    }

    .tentang-image-wrapper {

        margin-bottom: 20px;

    }

    .tentang-image {

        max-width: 480px;

        height: 380px;

    }

    .tentang-title {

        font-size: 32px;

    }

}


@media (max-width: 576px) {

    .tentang-section {

        padding: 55px 0;

    }

    .tentang-image {

        height: 300px;

        border-radius: 18px;

    }

    .tentang-image-badge {

        left: 25px;

        bottom: 25px;

    }

    .tentang-title {

        font-size: 28px;

    }

    .tentang-features {

        grid-template-columns: 1fr;

    }

}

</style>