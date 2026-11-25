<?php

namespace Database\Seeders;

use App\Models\ProsesBisnis;
use Illuminate\Database\Seeder;

class ProsesBisnisSeeder extends Seeder
{
    public function run(): void
    {

        
        $data = [
            [
                'judul' => 'Pengelolaan Surat Masuk dan Surat Keluar',
                'opd' => 'Sekretariat Daerah',
                'kategori' => 'Administrasi',
                'deskripsi' => 'Proses pencatatan, pendistribusian, dan pengarsipan surat masuk maupun surat keluar secara digital, mulai dari penerimaan surat hingga tindak lanjut disposisi.',
                'status' => 'Aktif',
            ],
            [
                'judul' => 'Pelayanan Administrasi Kependudukan',
                'opd' => 'Disdukcapil',
                'kategori' => 'Pelayanan Publik',
                'deskripsi' => 'Alur pengurusan dokumen kependudukan seperti KTP, KK, dan akta, mulai dari permohonan, verifikasi data, hingga penerbitan dokumen.',
                'status' => 'Aktif',
            ],
            [
                'judul' => 'Pengelolaan Pengaduan Masyarakat',
                'opd' => 'Diskominfo',
                'kategori' => 'Pelayanan Publik',
                'deskripsi' => 'Proses penerimaan, verifikasi, dan penindaklanjutan pengaduan masyarakat melalui kanal digital hingga pelaporan penyelesaian.',
                'status' => 'Aktif',
            ],
            [
                'judul' => 'Pengelolaan Kepegawaian',
                'opd' => 'BKPSDM',
                'kategori' => 'Administrasi',
                'deskripsi' => 'Alur pengelolaan data dan administrasi kepegawaian, termasuk kenaikan pangkat, mutasi, dan cuti pegawai.',
                'status' => 'Aktif',
            ],
            [
                'judul' => 'Pengelolaan Perizinan',
                'opd' => 'DPMPTSP',
                'kategori' => 'Pelayanan Publik',
                'deskripsi' => 'Proses pengajuan, verifikasi, survei lapangan, hingga penerbitan izin usaha maupun izin lainnya secara terintegrasi.',
                'status' => 'Aktif',
            ],
        ];

        foreach ($data as $item) {
            ProsesBisnis::create($item);
        }
    }
}