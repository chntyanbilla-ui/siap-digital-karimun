<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\DataInformasi;

class DataInformasiSeeder extends Seeder
{
    public function run(): void
    {
        DataInformasi::create([
            'judul' => 'Statistik Penduduk',
            'kategori' => 'Statistik',
            'deskripsi' => 'Data statistik jumlah penduduk Kabupaten Karimun.',
            'status' => 'Aktif',
        ]);

        DataInformasi::create([
            'judul' => 'Data Pendidikan',
            'kategori' => 'Pendidikan',
            'deskripsi' => 'Informasi sekolah dan peserta didik Kabupaten Karimun.',
            'status' => 'Aktif',
        ]);

        DataInformasi::create([
            'judul' => 'Data Kesehatan',
            'kategori' => 'Kesehatan',
            'deskripsi' => 'Informasi fasilitas dan layanan kesehatan.',
            'status' => 'Aktif',
        ]);
    }
}