<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <meta name="description"
          content="SIAP Digital Kabupaten Karimun">

    <title>
        @yield('title', 'SIAP Digital Kabupaten Karimun')
    </title>


    {{-- =====================================================
         VITE
    ====================================================== --}}

    @vite([
        'resources/css/app.css',
        'resources/js/app.js'
    ])


    {{-- =====================================================
         GOOGLE FONT
    ====================================================== --}}

    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet"
    >


    {{-- =====================================================
         BOOTSTRAP ICON
    ====================================================== --}}

    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
    >


    {{-- =====================================================
         NAVBAR STYLE
    ====================================================== --}}

    <style>

        /* =================================================
           NAVBAR
        ================================================= */

        .navbar-custom {

            background: #ffffff;

            min-height: 82px;

            border-bottom: 1px solid #e8edf3;

            box-shadow:
                0 2px 12px rgba(15, 23, 42, .04);

            position: relative;

            z-index: 1050;

        }


        .navbar-custom .container {

            min-height: 82px;

        }


        /* =================================================
           LOGO
        ================================================= */

        .navbar-custom .navbar-brand {

            flex-shrink: 0;

            text-decoration: none;

        }


        .navbar-custom .navbar-brand img {

            width: 50px;

            height: 50px;

            object-fit: contain;

        }


        .navbar-custom .navbar-brand h5 {

            margin: 0;

            color: #1264e8 !important;

            font-size: 20px;

            font-weight: 700;

        }


        .navbar-custom .kabupaten {

            display: block;

            margin-top: 2px;

            color: #64748b;

            font-size: 12px;

            font-weight: 500;

        }


        /* =================================================
           MENU
        ================================================= */

        .navbar-custom .navbar-nav {

            display: flex;

            align-items: center;

            gap: 2px;

        }


        .navbar-custom .nav-link {

            display: block;

            padding: 10px 11px !important;

            border-radius: 8px;

            color: #1e293b;

            font-size: 14px;

            font-weight: 500;

            white-space: nowrap;

            text-decoration: none;

            transition: all .2s ease;

        }


        .navbar-custom .nav-link:hover {

            color: #1264e8;

            background: #f0f6ff;

        }


        /* =================================================
           ACTIVE MENU
        ================================================= */

        .navbar-custom .nav-link.active {

            color: #1264e8;

            font-weight: 700;

            background: transparent;

        }


        /* =================================================
           LOGIN
        ================================================= */

        .navbar-custom .nav-login {

            margin-left: 12px;

        }


        .navbar-custom .nav-login .btn {

            padding: 10px 18px;

            border-radius: 10px;

            border: 1px solid #1264e8;

            color: #1264e8;

            background: #ffffff;

            font-size: 14px;

            font-weight: 600;

            white-space: nowrap;

        }


        .navbar-custom .nav-login .btn:hover {

            color: #ffffff;

            background: #1264e8;

        }


        /* =================================================
           REGISTER
        ================================================= */

        .navbar-custom .nav-register {

            margin-left: 6px;

        }


        .navbar-custom .nav-register .btn {

            padding: 10px 18px;

            border-radius: 10px;

            border: 1px solid #1264e8;

            background: #1264e8;

            color: #ffffff;

            font-size: 14px;

            font-weight: 600;

            white-space: nowrap;

        }


        .navbar-custom .nav-register .btn:hover {

            background: #0d55c8;

            border-color: #0d55c8;

        }


        /* =================================================
           HAMBURGER
        ================================================= */

        .navbar-custom .navbar-toggler {

            padding: 8px 12px;

            border: 1px solid #d9e2ef;

            border-radius: 10px;

            color: #1264e8;

            background: #ffffff;

        }


        .navbar-custom .navbar-toggler i {

            font-size: 20px;

        }


        .navbar-custom .navbar-toggler:focus {

            box-shadow: none;

        }


        /* =================================================
           TABLET
        ================================================= */

        @media (max-width: 1200px) {

            .navbar-custom .nav-link {

                padding-left: 7px !important;

                padding-right: 7px !important;

                font-size: 13px;

            }

        }


        /* =================================================
           MOBILE
        ================================================= */

        @media (max-width: 991px) {

            .navbar-custom {

                min-height: 76px;

            }


            .navbar-custom .container {

                min-height: 76px;

            }


            .navbar-custom .navbar-collapse {

                margin-top: 15px;

                padding: 10px;

                background: #ffffff;

                border: 1px solid #e5eaf1;

                border-radius: 16px;

                box-shadow:
                    0 15px 35px rgba(15, 23, 42, .10);

            }


            .navbar-custom .navbar-nav {

                display: block;

                width: 100%;

            }


            .navbar-custom .nav-item {

                width: 100%;

                margin: 0 !important;

            }


            .navbar-custom .nav-link {

                width: 100%;

                padding: 12px 14px !important;

                margin-bottom: 3px;

                border-radius: 9px;

                font-size: 14px;

            }


            .navbar-custom .nav-link:hover {

                background: #f0f6ff;

            }


            .navbar-custom .nav-link.active {

                background: #edf5ff;

            }


            /* LOGIN */

            .navbar-custom .nav-login {

                margin-top: 12px !important;

            }


            /* REGISTER */

            .navbar-custom .nav-register {

                margin-top: 8px !important;

            }


            .navbar-custom .nav-login .btn,
            .navbar-custom .nav-register .btn {

                display: block;

                width: 100%;

                text-align: center;

            }

        }


        /* =================================================
           HP KECIL
        ================================================= */

        @media (max-width: 576px) {

            .navbar-custom .navbar-brand h5 {

                font-size: 16px;

            }


            .navbar-custom .navbar-brand img {

                width: 43px;

                height: 43px;

            }


            .navbar-custom .kabupaten {

                font-size: 10px;

            }

        }

    </style>

</head>


<body>


{{-- =====================================================
     NAVBAR
===================================================== --}}

<nav class="navbar navbar-expand-lg navbar-custom sticky-top">

    <div class="container">


        {{-- =================================================
             LOGO
        ================================================== --}}

        <a
            class="navbar-brand d-flex align-items-center"
            href="{{ route('home') }}"
        >

            <img
                src="{{ asset('images/logo-karimun.png') }}"
                alt="Logo Kabupaten Karimun"
                width="50"
                height="50"
                class="me-3"
            >


            <div>

                <h5>
                    SIAP DIGITAL
                </h5>

                <small class="kabupaten">
                    Kabupaten Karimun
                </small>

            </div>

        </a>


        {{-- =================================================
             MOBILE BUTTON
        ================================================== --}}

        <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSIAP"
            aria-controls="navbarSIAP"
            aria-expanded="false"
            aria-label="Buka menu"
        >

            <i class="bi bi-list"></i>

        </button>


        {{-- =================================================
             MENU
        ================================================== --}}

        <div
            class="collapse navbar-collapse"
            id="navbarSIAP"
        >

            <ul class="navbar-nav ms-auto align-items-lg-center">


                {{-- BERANDA --}}
                <li class="nav-item">

                    <a
                        href="{{ route('home') }}"
                        class="nav-link
                        {{ request()->routeIs('home') ? 'active' : '' }}"
                    >
                        Beranda
                    </a>

                </li>


                {{-- PROSES BISNIS --}}
                <li class="nav-item">

                    <a
                        href="{{ route('proses-bisnis') }}"
                        class="nav-link
                        {{ request()->routeIs('proses-bisnis*') ? 'active' : '' }}"
                    >
                        Proses Bisnis
                    </a>

                </li>


                {{-- LAYANAN --}}
                <li class="nav-item">

                    <a
                        href="{{ route('layanan') }}"
                        class="nav-link
                        {{ request()->routeIs('layanan*') ? 'active' : '' }}"
                    >
                        Layanan
                    </a>

                </li>


                {{-- APLIKASI --}}
                <li class="nav-item">

                    <a
                        href="{{ route('aplikasi') }}"
                        class="nav-link
                        {{ request()->routeIs('aplikasi*') ? 'active' : '' }}"
                    >
                        Aplikasi
                    </a>

                </li>


                {{-- DATA INFORMASI --}}
                <li class="nav-item">

                    <a
                        href="{{ route('data-informasi') }}"
                        class="nav-link
                        {{ request()->routeIs('data-informasi*') ? 'active' : '' }}"
                    >
                        Data Informasi
                    </a>

                </li>


                {{-- INFRASTRUKTUR --}}
                <li class="nav-item">

                    <a
                        href="{{ route('infrastruktur') }}"
                        class="nav-link
                        {{ request()->routeIs('infrastruktur*') ? 'active' : '' }}"
                    >
                        Infrastruktur
                    </a>

                </li>


                {{-- KEAMANAN --}}
                <li class="nav-item">

                    <a
                        href="{{ route('keamanan') }}"
                        class="nav-link
                        {{ request()->routeIs('keamanan*') ? 'active' : '' }}"
                    >
                        Keamanan
                    </a>

                </li>


                {{-- TENTANG --}}
                <li class="nav-item">

                    <a
                        href="{{ route('home') }}#tentang"
                        class="nav-link"
                    >
                        Tentang
                    </a>

                </li>


                {{-- =================================================
                     LOGIN / REGISTER
                ================================================== --}}

                @guest

                    {{-- LOGIN --}}
                    <li class="nav-item nav-login">

                        <a
                            href="{{ route('login') }}"
                            class="btn"
                        >
                            Login
                        </a>

                    </li>


                    {{-- REGISTER --}}
                    <li class="nav-item nav-register">

                        <a
                            href="{{ route('register') }}"
                            class="btn"
                        >
                            Register
                        </a>

                    </li>

                @else

                    {{-- JIKA SUDAH LOGIN --}}
                    <li class="nav-item nav-register">

                        <a
                            href="{{ route('dashboard') }}"
                            class="btn"
                        >
                            Dashboard
                        </a>

                    </li>

                @endguest


            </ul>

        </div>

    </div>

</nav>


{{-- =====================================================
     MAIN CONTENT
===================================================== --}}

<main>

    @yield('content')

</main>


{{-- =====================================================
     FOOTER
===================================================== --}}

@include('components.footer')


</body>

</html>