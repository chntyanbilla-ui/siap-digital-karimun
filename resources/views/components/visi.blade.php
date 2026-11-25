<section class="visi-section">

    <div class="container">

        <div class="row align-items-center g-5">

            {{-- TEKS --}}
            <div class="col-lg-6">

                <span class="visi-label">
                    VISI & ARAH
                </span>

                <h2 class="visi-title">
                    Mewujudkan
                    <br>
                    Pemerintahan Digital
                    <br>
                    yang Terintegrasi
                </h2>

                <p class="visi-description">
                    SIAP Digital Kabupaten Karimun hadir sebagai pusat informasi
                    digital yang membantu menyediakan informasi mengenai proses
                    bisnis, layanan, aplikasi, data, infrastruktur, dan keamanan
                    pemerintah daerah.
                </p>


                <div class="visi-list">

                    <div class="visi-item">
                        <i class="bi bi-check-circle-fill"></i>
                        <span>Pemerintahan berbasis digital</span>
                    </div>

                    <div class="visi-item">
                        <i class="bi bi-check-circle-fill"></i>
                        <span>Integrasi layanan pemerintahan</span>
                    </div>

                    <div class="visi-item">
                        <i class="bi bi-check-circle-fill"></i>
                        <span>Pemanfaatan teknologi informasi</span>
                    </div>

                    <div class="visi-item">
                        <i class="bi bi-check-circle-fill"></i>
                        <span>Pelayanan publik yang lebih efektif</span>
                    </div>

                </div>

            </div>


            {{-- GAMBAR KARIMUN --}}
            <div class="col-lg-6">

                <div class="visi-image-wrapper">

                    <img
                        src="{{ asset('images/visi-spbe.png') }}"
                        alt="Kabupaten Karimun"
                        class="visi-image"
                    >

                </div>

            </div>

        </div>

    </div>

</section>


<style>

/* =====================================================
   VISI SECTION
===================================================== */

.visi-section {

    padding: 90px 0;

    background: #ffffff;

}


/* =====================================================
   LABEL
===================================================== */

.visi-label {

    display: inline-block;

    margin-bottom: 15px;

    color: #1264e8;

    font-size: 12px;

    font-weight: 700;

    letter-spacing: 1.5px;

}


/* =====================================================
   TITLE
===================================================== */

.visi-title {

    margin: 0 0 20px;

    color: #14213d;

    font-size: 38px;

    font-weight: 700;

    line-height: 1.2;

}


/* =====================================================
   DESCRIPTION
===================================================== */

.visi-description {

    max-width: 570px;

    margin-bottom: 25px;

    color: #64748b;

    font-size: 14px;

    line-height: 1.9;

}


/* =====================================================
   LIST
===================================================== */

.visi-list {

    display: flex;

    flex-direction: column;

    gap: 12px;

}


.visi-item {

    display: flex;

    align-items: center;

    gap: 10px;

    max-width: 520px;

    padding: 13px 15px;

    border-radius: 11px;

    background: #f3f7ff;

    color: #172033;

    font-size: 13px;

    font-weight: 600;

}


.visi-item i {

    color: #1264e8;

    font-size: 16px;

}


/* =====================================================
   IMAGE
===================================================== */

.visi-image-wrapper {

    display: flex;

    justify-content: center;

    align-items: center;

    min-height: 450px;

    padding-left: 25px;

}


.visi-image {

    width: 100%;

    max-width: 500px;

    height: 430px;

    object-fit: cover;

    border-radius: 22px;

    box-shadow:
        0 20px 45px rgba(0,0,0,.12);

}


/* =====================================================
   RESPONSIVE
===================================================== */

@media (max-width: 991px) {

    .visi-section {

        padding: 65px 0;

    }

    .visi-title {

        font-size: 32px;

    }

    .visi-image-wrapper {

        min-height: auto;

        padding-left: 0;

        margin-top: 15px;

    }

    .visi-image {

        max-width: 450px;

        height: 350px;

    }

}


@media (max-width: 576px) {

    .visi-title {

        font-size: 28px;

    }

    .visi-description {

        font-size: 13px;

    }

    .visi-image {

        height: 280px;

    }

}

</style>