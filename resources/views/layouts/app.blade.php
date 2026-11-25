<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SIAP Digital - Admin</title>

    {{-- Vite Laravel --}}
    @vite(['resources/css/admin.css', 'resources/js/app.js'])

    {{-- Font Poppins --}}
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet"
    >

    {{-- Bootstrap Icons --}}
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
    >

    {{-- =====================================================
         INA DIGITAL DESIGN SYSTEM (IDDS)
         CSS
    ====================================================== --}}
    <link
        href="https://unpkg.com/@idds/styles@latest/dist/index.min.css"
        rel="stylesheet"
    >

</head>

<body>

    <div class="d-flex">

        {{-- =====================================================
             SIDEBAR ADMIN
        ====================================================== --}}
        @include('components.admin-sidebar')


        {{-- =====================================================
             KONTEN ADMIN
        ====================================================== --}}
        <div class="admin-content flex-grow-1">

            {{-- =================================================
                 NAVBAR ADMIN
            ================================================== --}}
            @include('components.admin-navbar', [
                'title' => trim($__env->yieldContent('title')) ?: 'Dashboard Admin'
            ])


            {{-- =================================================
                 CONTENT
            ================================================== --}}
            <main class="container-fluid p-4">

                @yield('content')

            </main>

        </div>

    </div>


    {{-- =====================================================
         INA DIGITAL DESIGN SYSTEM (IDDS)
         JavaScript
    ====================================================== --}}
    <script
        src="https://unpkg.com/@idds/js@latest/dist/index.iife.js">
    </script>

</body>

</html>