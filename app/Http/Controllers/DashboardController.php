<?php

namespace App\Http\Controllers;

use App\Models\Opd;
use App\Models\ProsesBisnis;
use App\Models\Layanan;
use App\Models\Aplikasi;
use App\Models\DataInformasi;
use App\Models\Infrastruktur;
use App\Models\Keamanan;

class DashboardController extends Controller
{
    public function index()
    {
        $totalOpd = Opd::count();

        $totalProsesBisnis = ProsesBisnis::count();

        $totalLayanan = Layanan::count();

        $totalAplikasi = Aplikasi::count();

        $totalDataInformasi = DataInformasi::count();

        $totalInfrastruktur = Infrastruktur::count();

        $totalKeamanan = Keamanan::count();

        return view('dashboard', compact(

            'totalOpd',

            'totalProsesBisnis',

            'totalLayanan',

            'totalAplikasi',

            'totalDataInformasi',

            'totalInfrastruktur',

            'totalKeamanan'

        ));
    }
}