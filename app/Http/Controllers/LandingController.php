<?php

namespace App\Http\Controllers;

use App\Models\Opd;
use App\Models\Aplikasi;
use App\Models\Layanan;
use App\Models\DataInformasi;
use App\Models\ProsesBisnis;
use App\Models\Infrastruktur;
use App\Models\Keamanan;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        $totalOpd = Opd::count();
        $totalAplikasi = Aplikasi::count();
        $totalLayanan = Layanan::count();
        $totalDataInformasi = DataInformasi::count();
        $totalProsesBisnis = ProsesBisnis::count();
        $totalInfrastruktur = Infrastruktur::count();
        $totalKeamanan = Keamanan::count();

        return view('landing.index', compact(
            'totalOpd',
            'totalAplikasi',
            'totalLayanan',
            'totalDataInformasi',
            'totalProsesBisnis',
            'totalInfrastruktur',
            'totalKeamanan'
        ));
    }

    public function prosesBisnis(Request $request)
    {
        $proses = ProsesBisnis::query()
            ->when($request->search, function ($query, $search) {
                $query->where('judul', 'like', "%{$search}%")
                      ->orWhere('opd', 'like', "%{$search}%")
                      ->orWhere('kategori', 'like', "%{$search}%");
            })
            ->latest()
            ->paginate(10)
            ->withQueryString();

        return view('proses-bisnis.index', compact('proses'));
    }

    public function detailProsesBisnis($id)
    {
        $proses = ProsesBisnis::findOrFail($id);

        return view('proses-bisnis.detail', compact('proses'));
    }
}