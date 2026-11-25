<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Aplikasi;

class AplikasiSeeder extends Seeder
{
    public function run(): void
    {
        Aplikasi::create([
            'nama' => 'SIAP Digital Karimun',
            'opd' => 'Diskominfo',
            'deskripsi' => 'Portal layanan digital Pemerintah Kabupaten Karimun.',
            'link' => 'https://karimunkab.go.id',
            'status' => 'Aktif',
        ]);

        Aplikasi::create([
            'nama' => 'SP4N LAPOR!',
            'opd' => 'Diskominfo',
            'deskripsi' => 'Layanan pengaduan masyarakat secara online.',
            'link' => 'https://lapor.go.id',
            'status' => 'Aktif',
        ]);

        Aplikasi::create([
            'nama' => 'SRIKANDI',
            'opd' => 'Seluruh OPD',
            'deskripsi' => 'Aplikasi Sistem Informasi Kearsipan Dinamis Terintegrasi.',
            'link' => 'https://srikandi.kominfo.go.id',
            'status' => 'Aktif',
        ]);
    }
}