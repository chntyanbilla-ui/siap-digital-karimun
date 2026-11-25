<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Layanan;

class LayananSeeder extends Seeder
{
    public function run(): void
    {
        Layanan::create([
            'nama' => 'Siap PPDB Online',
            'opd' => 'Dinas Pendidikan',
            'kategori' => 'Pendidikan',
            'deskripsi' => 'Sistem layanan inovatif terpadu yang dirancang untuk memfasilitasi dan mengoptimalkan proses seleksi dalam pelaksanaan Penerimaan Peserta Didik Baru (PPDB).',
        ]);

        Layanan::create([
            'nama' => 'Siap Nari',
            'opd' => 'Dinas Tenaga Kerja dan Perindustrian Kabupaten Karimun',
            'kategori' => 'Administrasi Kependudukan',
            'deskripsi' => 'Sistem yang mempermudah masyarakat dan perusahaan dalam mengakses layanan pengurusan kartu pencari kerja, pelaporan ketenagakerjaan, pendaftaran pelatihan, serta penyampaian informasi lowongan kerja.',
        ]);

        Layanan::create([
            'nama' => 'E-SPPT',
            'opd' => 'Badan Pendapatan Daerah (Bapenda) Kabupaten Karimun',
            'kategori' => 'Transaksi Keuangan Negara',
            'deskripsi' => 'Aplikasi untuk cetak SPPT online serta melakukan pembayaran PBB-P2 melalui sistem QRIS.',
        ]);

        Layanan::create([
            'nama' => 'ARAHKAN',
            'opd' => 'Dinas Perikanan',
            'kategori' => 'Produktivitas',
            'deskripsi' => 'Sistem informasi tentang perikanan tangkap, budidaya, pengolahan perikanan serta pengurusan rekomendasi BBM kapal.',
        ]);

        Layanan::create([
            'nama' => 'SISMIop',
            'opd' => 'Badan Pendapatan Daerah (Bapenda) Kabupaten Karimun',
            'kategori' => 'Transaksi Keuangan Negara',
            'deskripsi' => 'Aplikasi untuk mengelola data wajib pajak Pajak Bumi dan Bangunan Perdesaan dan Perkotaan (PBB-P2).',
        ]);

        Layanan::create([
            'nama' => 'Si Ikan Pari',
            'opd' => 'Badan Pendapatan Daerah (Bapenda) Kabupaten Karimun',
            'kategori' => 'Transaksi Keuangan Negara',
            'deskripsi' => 'Aplikasi informatif berbasis web yang berisi informasi mengenai pajak daerah dan retribusi.',
        ]);

        Layanan::create([
            'nama' => 'E-BPHTB',
            'opd' => 'Badan Pendapatan Daerah (Bapenda) Kabupaten Karimun',
            'kategori' => 'Permukiman',
            'deskripsi' => 'Sistem informasi pengelolaan Bea Perolehan Hak Atas Tanah dan Bangunan (BPHTB) untuk mendukung pelayanan BPHTB.',
        ]);

        Layanan::create([
            'nama' => 'SIMTARU',
            'opd' => 'Dinas PUPR',
            'kategori' => 'Lain-Lain',
            'deskripsi' => 'Informasi aktivitas perencanaan, pemanfaatan, dan pengendalian tata ruang wilayah melalui Rencana Tata Ruang Wilayah (RTRW) dan Rencana Detail Tata Ruang (RDTR) dan aduan masyarakat terkait layanan tata ruang.',
        ]);

        Layanan::create([
            'nama' => 'E-Puskesmas',
            'opd' => 'UPTD Puskesmas',
            'kategori' => 'Kesehatan',
            'deskripsi' => 'Aplikasi untuk memfasilitasi proses bisnis di puskesmas mulai dari pendaftaran hingga pemberian resep obat.',
        ]);
    }
}