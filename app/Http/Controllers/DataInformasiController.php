<?php

namespace App\Http\Controllers;

use App\Models\DataInformasi;

class DataInformasiController extends Controller
{
    /**
     * Menampilkan daftar Data Informasi
     */
    public function index()
    {
        $dataInformasis = DataInformasi::latest()->get();

        return view(
            'landing.data-informasi',
            compact('dataInformasis')
        );
    }

    /**
     * Menampilkan detail Data Informasi
     */
    public function detail($id)
    {
        $data = DataInformasi::findOrFail($id);

        return view(
            'landing.detail-data-informasi',
            compact('data')
        );
    }
}