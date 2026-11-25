<?php

namespace App\Http\Controllers;

use App\Models\Infrastruktur;
use Illuminate\Http\Request;

class InfrastrukturController extends Controller
{
    public function index(Request $request)
    {
        $query = Infrastruktur::query();

        if ($request->filled('search')) {

            $query->where('nama', 'like', '%' . $request->search . '%')
                  ->orWhere('jenis', 'like', '%' . $request->search . '%')
                  ->orWhere('lokasi', 'like', '%' . $request->search . '%');
        }

        $infrastruktur = $query->latest()->get();

        return view(
            'landing.infrastruktur',
            compact('infrastruktur')
        );
    }

    public function detail($id)
    {
        $infrastruktur = Infrastruktur::findOrFail($id);

        return view(
            'landing.detail-infrastruktur',
            compact('infrastruktur')
        );
    }
}