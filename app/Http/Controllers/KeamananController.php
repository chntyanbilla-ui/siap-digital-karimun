<?php

namespace App\Http\Controllers;

use App\Models\Keamanan;
use Illuminate\Http\Request;

class KeamananController extends Controller
{
    /**
     * Menampilkan daftar keamanan digital
     */
    public function index(Request $request)
    {
        $keamanans = Keamanan::query()

            ->when($request->search, function ($query, $search) {

                $query->where('nama', 'like', "%{$search}%")
                    ->orWhere('kategori', 'like', "%{$search}%")
                    ->orWhere('deskripsi', 'like', "%{$search}%");

            })

            ->latest()

            ->get();


        return view(
            'landing.keamanan',
            compact('keamanans')
        );
    }


    /**
     * Menampilkan detail keamanan
     */
    public function detail($id)
    {
        $keamanan = Keamanan::findOrFail($id);

        return view(
            'landing.detail-keamanan',
            compact('keamanan')
        );
    }
}