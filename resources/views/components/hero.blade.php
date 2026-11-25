<section class="hero-section">

    <div class="container">

        <div class="row align-items-center g-5">

            {{-- =====================================================
                 TEKS HERO
            ====================================================== --}}

            <div class="col-lg-7">

                {{-- BADGE --}}

                <div class="hero-badge">

                    <i class="bi bi-stars"></i>

                    Sistem Informasi Digital

                </div>


                {{-- JUDUL --}}

                <h1 class="hero-title">

                    SIAP DIGITAL

                    <span>
                        Kabupaten Karimun
                    </span>

                </h1>


                {{-- DESKRIPSI --}}

                <p class="hero-description">

                    Sistem Informasi Administrasi dan Digital Kabupaten Karimun
                    yang menyediakan informasi proses bisnis, layanan, aplikasi,
                    data informasi, infrastruktur, dan keamanan digital
                    pemerintah daerah dalam satu platform.

                </p>


                {{-- =================================================
                     BUTTON
                ================================================== --}}

                <div class="hero-buttons">


                    {{-- TENTANG --}}

                    <a
                        href="#tentang"
                        class="hero-button hero-button-light"
                    >

                        <i class="bi bi-info-circle"></i>

                        Tentang SIAP Digital

                    </a>


                    {{-- JELAJAHI INFORMASI --}}

                    <a
                        href="#informasi"
                        class="hero-button hero-button-outline"
                    >

                        <i class="bi bi-grid"></i>

                        Jelajahi Informasi

                    </a>


                </div>

            </div>



            {{-- =====================================================
                 GAMBAR KARIMUN
            ====================================================== --}}

            <div class="col-lg-5">

                <div class="karimun-wrapper">

                    <img
                        src="{{ asset('images/hero.png') }}"
                        alt="Kabupaten Karimun"
                        class="karimun-image"
                    >

                </div>

            </div>


        </div>

    </div>

</section>



<style>

/* =========================================================
   HERO SECTION
========================================================= */

.hero-section {

    position: relative;

    overflow: hidden;

    padding: 80px 0 90px;

    background:
        linear-gradient(
            135deg,
            #0878f9 0%,
            #108ee8 50%,
            #08a9d9 100%
        );

    color: white;

}


/* =========================================================
   BACKGROUND CIRCLE
========================================================= */

.hero-section::before {

    content: "";

    position: absolute;

    width: 500px;

    height: 500px;

    right: -180px;

    top: -260px;

    border-radius: 50%;

    background: rgba(255,255,255,.08);

}


.hero-section::after {

    content: "";

    position: absolute;

    width: 250px;

    height: 250px;

    left: -130px;

    bottom: -150px;

    border-radius: 50%;

    background: rgba(255,255,255,.05);

}


/* =========================================================
   BADGE
========================================================= */

.hero-badge {

    position: relative;

    z-index: 2;

    display: inline-flex;

    align-items: center;

    gap: 8px;

    padding: 10px 18px;

    margin-bottom: 22px;

    border: 1px solid rgba(255,255,255,.35);

    border-radius: 30px;

    background: rgba(255,255,255,.10);

    color: white;

    font-size: 13px;

    font-weight: 600;

}


/* =========================================================
   TITLE
========================================================= */

.hero-title {

    position: relative;

    z-index: 2;

    margin: 0;

    color: white;

    font-size: 58px;

    font-weight: 700;

    line-height: 1.08;

    letter-spacing: -1px;

}


.hero-title span {

    display: block;

    color: #dff3ff;

}


/* =========================================================
   DESCRIPTION
========================================================= */

.hero-description {

    position: relative;

    z-index: 2;

    max-width: 700px;

    margin: 25px 0 30px;

    color: rgba(255,255,255,.94);

    font-size: 16px;

    line-height: 1.8;

}


/* =========================================================
   BUTTON AREA
========================================================= */

.hero-buttons {

    position: relative;

    z-index: 2;

    display: flex;

    flex-wrap: wrap;

    gap: 14px;

}


/* =========================================================
   BUTTON UMUM
========================================================= */

.hero-button {

    display: inline-flex;

    align-items: center;

    justify-content: center;

    gap: 8px;

    padding: 13px 20px;

    border-radius: 11px;

    text-decoration: none;

    font-size: 14px;

    font-weight: 600;

    transition: all .25s ease;

}


/* =========================================================
   BUTTON TENTANG
========================================================= */

.hero-button-light {

    background: white;

    color: #0878f9;

}


.hero-button-light:hover {

    color: #0878f9;

    transform: translateY(-3px);

    box-shadow:
        0 10px 25px rgba(0,0,0,.15);

}


/* =========================================================
   BUTTON JELAJAHI
========================================================= */

.hero-button-outline {

    border: 1px solid rgba(255,255,255,.55);

    background: rgba(255,255,255,.10);

    color: white;

}


.hero-button-outline:hover {

    background: white;

    color: #0878f9;

    transform: translateY(-3px);

    box-shadow:
        0 10px 25px rgba(0,0,0,.12);

}


/* =========================================================
   GAMBAR KARIMUN
========================================================= */

.karimun-wrapper {

    position: relative;

    z-index: 2;

    display: flex;

    align-items: center;

    justify-content: center;

    width: 100%;

    min-height: 400px;

}


/* =========================================================
   GAMBAR
========================================================= */

.karimun-image {

    display: block;

    width: 100%;

    max-width: 500px;

    height: 380px;

    object-fit: cover;

    object-position: center;

    border-radius: 24px;

    box-shadow:
        0 25px 50px rgba(0,0,0,.20);

}


/* =========================================================
   TABLET
========================================================= */

@media (max-width: 991px) {

    .hero-section {

        padding: 65px 0 70px;

    }


    .hero-title {

        font-size: 46px;

    }


    .hero-description {

        max-width: 650px;

    }


    .karimun-wrapper {

        min-height: 320px;

        margin-top: 10px;

    }


    .karimun-image {

        max-width: 450px;

        height: 320px;

    }

}


/* =========================================================
   MOBILE
========================================================= */

@media (max-width: 576px) {

    .hero-section {

        padding: 50px 0 60px;

    }


    .hero-title {

        font-size: 38px;

        line-height: 1.12;

    }


    .hero-description {

        font-size: 14px;

        line-height: 1.7;

    }


    .hero-buttons {

        flex-direction: column;

        gap: 10px;

    }


    .hero-button {

        width: 100%;

    }


    .karimun-wrapper {

        min-height: 250px;

    }


    .karimun-image {

        width: 100%;

        max-width: 350px;

        height: 250px;

        border-radius: 20px;

    }

}

</style>