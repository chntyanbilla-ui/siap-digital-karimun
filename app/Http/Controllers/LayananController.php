<?php

namespace App\Http\Controllers;

use App\Models\Layanan;

class LayananController extends Controller
{
    /**
     * Menampilkan layanan untuk masyarakat
     */
    public function index()
    {
        $layanans = Layanan::latest()->get();

        return view(
            'landing.layanan',
            compact('layanans')
        );
    }
}