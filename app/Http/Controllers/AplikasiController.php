<?php

namespace App\Http\Controllers;

use App\Models\Aplikasi;

class AplikasiController extends Controller
{
    /**
     * Menampilkan daftar aplikasi digital
     */
    public function index()
    {
        $aplikasis = Aplikasi::orderBy('created_at', 'desc')->get();

        return view('aplikasi.index', compact('aplikasis'));
    }


    /**
     * Menampilkan detail aplikasi
     */
    public function detail($id)
    {
        $aplikasi = Aplikasi::findOrFail($id);

        return view('aplikasi.detail', compact('aplikasi'));
    }
}