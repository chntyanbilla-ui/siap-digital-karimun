<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Edit Infrastruktur - Siap Digital Karimun</title>

    {{-- Bootstrap --}}
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet">

    {{-- Font Awesome --}}
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <style>

        body {
            background-color: #f5f7fb;
            font-family: Arial, sans-serif;
        }

        .navbar-custom {
            background-color: #0d6efd;
        }

        .navbar-custom .navbar-brand {
            color: white;
            font-weight: bold;
        }

        .navbar-custom .nav-link {
            color: white;
        }

        .main-content {
            padding: 40px 20px;
        }

        .card {
            border: none;
            border-radius: 12px;
        }

        .card-header {
            background-color: white;
            border-bottom: 1px solid #eee;
            padding: 20px;
        }

        .card-body {
            padding: 30px;
        }

        .form-label {
            font-weight: 600;
        }

        .btn {
            border-radius: 8px;
        }

    </style>

</head>


<body>


{{-- NAVBAR --}}
<nav class="navbar navbar-expand-lg navbar-custom">

    <div class="container-fluid">

        <a class="navbar-brand"
           href="{{ route('infrastruktur-admin.index') }}">

            <i class="fas fa-server"></i>

            Siap Digital Karimun

        </a>

    </div>

</nav>



{{-- CONTENT --}}
<div class="container main-content">


    {{-- HEADER --}}
    <div class="d-flex justify-content-between align-items-center mb-4">

        <div>

            <h2 class="mb-1">
                Edit Infrastruktur
            </h2>

            <p class="text-muted mb-0">
                Ubah informasi data infrastruktur
            </p>

        </div>


        <a href="{{ route('infrastruktur-admin.index') }}"
           class="btn btn-secondary">

            <i class="fas fa-arrow-left"></i>

            Kembali

        </a>

    </div>



    {{-- ERROR VALIDATION --}}
    @if($errors->any())

        <div class="alert alert-danger">

            <strong>
                Terjadi kesalahan!
            </strong>

            <ul class="mb-0 mt-2">

                @foreach($errors->all() as $error)

                    <li>
                        {{ $error }}
                    </li>

                @endforeach

            </ul>

        </div>

    @endif



    {{-- SUCCESS --}}
    @if(session('success'))

        <div class="alert alert-success">

            {{ session('success') }}

        </div>

    @endif



    {{-- CARD --}}
    <div class="card shadow-sm">

        <div class="card-header">

            <h5 class="mb-0">

                <i class="fas fa-edit text-primary"></i>

                Form Edit Infrastruktur

            </h5>

        </div>


        <div class="card-body">


            {{-- FORM --}}
            <form
                action="{{ route('infrastruktur-admin.update', $infrastruktur_admin->id) }}"
                method="POST"
            >

                @csrf

                @method('PUT')



                {{-- ID --}}
                <div class="mb-3">

                    <label class="form-label">
                        ID Infrastruktur
                    </label>

                    <input
                        type="text"
                        class="form-control"
                        value="{{ $infrastruktur_admin->id }}"
                        disabled
                    >

                </div>



                {{-- NAMA --}}
                <div class="mb-3">

                    <label for="nama"
                           class="form-label">

                        Nama Infrastruktur

                    </label>

                    <input
                        type="text"
                        name="nama"
                        id="nama"
                        class="form-control @error('nama') is-invalid @enderror"
                        value="{{ old('nama', $infrastruktur_admin->nama) }}"
                        placeholder="Masukkan nama infrastruktur"
                        required
                    >

                    @error('nama')

                        <div class="invalid-feedback">

                            {{ $message }}

                        </div>

                    @enderror

                </div>



                {{-- JENIS --}}
                <div class="mb-3">

                    <label for="jenis"
                           class="form-label">

                        Jenis Infrastruktur

                    </label>

                    <input
                        type="text"
                        name="jenis"
                        id="jenis"
                        class="form-control @error('jenis') is-invalid @enderror"
                        value="{{ old('jenis', $infrastruktur_admin->jenis) }}"
                        placeholder="Contoh: server"
                        required
                    >

                    @error('jenis')

                        <div class="invalid-feedback">

                            {{ $message }}

                        </div>

                    @enderror

                </div>



                {{-- DESKRIPSI --}}
                <div class="mb-3">

                    <label for="deskripsi"
                           class="form-label">

                        Deskripsi

                    </label>

                    <textarea
                        name="deskripsi"
                        id="deskripsi"
                        rows="5"
                        class="form-control @error('deskripsi') is-invalid @enderror"
                        placeholder="Masukkan deskripsi infrastruktur"
                    >{{ old('deskripsi', $infrastruktur_admin->deskripsi) }}</textarea>

                    @error('deskripsi')

                        <div class="invalid-feedback">

                            {{ $message }}

                        </div>

                    @enderror

                </div>



                {{-- LOKASI --}}
                <div class="mb-3">

                    <label for="lokasi"
                           class="form-label">

                        Lokasi

                    </label>

                    <input
                        type="text"
                        name="lokasi"
                        id="lokasi"
                        class="form-control @error('lokasi') is-invalid @enderror"
                        value="{{ old('lokasi', $infrastruktur_admin->lokasi) }}"
                        placeholder="Masukkan lokasi"
                    >

                    @error('lokasi')

                        <div class="invalid-feedback">

                            {{ $message }}

                        </div>

                    @enderror

                </div>



                {{-- STATUS --}}
                <div class="mb-4">

                    <label for="status"
                           class="form-label">

                        Status

                    </label>

                    <select
                        name="status"
                        id="status"
                        class="form-select @error('status') is-invalid @enderror"
                        required
                    >

                        <option value="">
                            -- Pilih Status --
                        </option>


                        <option value="Aktif"
                            {{ old('status', $infrastruktur_admin->status) == 'Aktif' ? 'selected' : '' }}>

                            Aktif

                        </option>


                        <option value="Tidak Aktif"
                            {{ old('status', $infrastruktur_admin->status) == 'Tidak Aktif' ? 'selected' : '' }}>

                            Tidak Aktif

                        </option>

                    </select>


                    @error('status')

                        <div class="invalid-feedback">

                            {{ $message }}

                        </div>

                    @enderror

                </div>



                {{-- BUTTON --}}
                <div class="d-flex justify-content-end gap-2">


                    <a
                        href="{{ route('infrastruktur-admin.index') }}"
                        class="btn btn-secondary"
                    >

                        <i class="fas fa-times"></i>

                        Batal

                    </a>


                    <button
                        type="submit"
                        class="btn btn-primary"
                    >

                        <i class="fas fa-save"></i>

                        Simpan Perubahan

                    </button>


                </div>


            </form>

        </div>

    </div>

</div>



{{-- Bootstrap JS --}}
<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
</script>


</body>

</html>