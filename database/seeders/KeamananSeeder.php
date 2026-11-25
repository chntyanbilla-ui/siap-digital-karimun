<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Keamanan;

class KeamananSeeder extends Seeder
{
    public function run(): void
    {
        Keamanan::create([
            'nama' => 'Firewall Jaringan',
            'kategori' => 'Jaringan',
            'deskripsi' => 'Perlindungan jaringan internal Pemerintah Kabupaten Karimun.',
            'status' => 'Aktif',
        ]);

        Keamanan::create([
            'nama' => 'Backup Data',
            'kategori' => 'Data',
            'deskripsi' => 'Pencadangan data secara berkala.',
            'status' => 'Aktif',
        ]);

        Keamanan::create([
            'nama' => 'SSL Website',
            'kategori' => 'Website',
            'deskripsi' => 'Pengamanan komunikasi website menggunakan SSL.',
            'status' => 'Aktif',
        ]);
    }
}