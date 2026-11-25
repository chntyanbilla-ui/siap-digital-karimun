<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Infrastruktur;

class InfrastrukturSeeder extends Seeder
{
    public function run(): void
    {
        Infrastruktur::create([
            'nama' => 'Data Center Kabupaten Karimun',
            'jenis' => 'Server',
            'deskripsi' => 'Pusat penyimpanan data Pemerintah Kabupaten Karimun.',
            'lokasi' => 'Diskominfo',
            'status' => 'Aktif',
        ]);

        Infrastruktur::create([
            'nama' => 'Jaringan Fiber Optik',
            'jenis' => 'Jaringan',
            'deskripsi' => 'Jaringan komunikasi antar OPD.',
            'lokasi' => 'Seluruh OPD',
            'status' => 'Aktif',
        ]);

        Infrastruktur::create([
            'nama' => 'Cloud Server',
            'jenis' => 'Cloud',
            'deskripsi' => 'Infrastruktur cloud untuk aplikasi SPBE.',
            'lokasi' => 'Data Center',
            'status' => 'Aktif',
        ]);
    }
}