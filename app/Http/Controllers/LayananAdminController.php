<?php

namespace App\Http\Controllers;

use App\Models\Layanan;
use Illuminate\Http\Request;

class LayananAdminController extends Controller
{
    public function index()
    {
        $layanans = Layanan::latest()->get();

        return view('admin.layanan.index', compact('layanans'));
    }

    public function create()
    {
        return view('admin.layanan.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nama'      => 'required|string|max:255',
            'opd'       => 'required|string|max:255',
            'kategori'  => 'nullable|string|max:255',
            'deskripsi' => 'required|string',
            'link'      => 'nullable|url|max:255',
        ]);

        Layanan::create($data);

        return redirect()
            ->route('layanan-admin.index')
            ->with('success', 'Data layanan berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $layanan = Layanan::findOrFail($id);

        return view('admin.layanan.edit', compact('layanan'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'nama'      => 'required|string|max:255',
            'opd'       => 'required|string|max:255',
            'kategori'  => 'nullable|string|max:255',
            'deskripsi' => 'required|string',
            'link'      => 'nullable|url|max:255',
        ]);

        Layanan::findOrFail($id)->update($data);

        return redirect()
            ->route('layanan-admin.index')
            ->with('success', 'Data layanan berhasil diubah.');
    }

    public function destroy($id)
    {
        Layanan::findOrFail($id)->delete();

        return redirect()
            ->route('layanan-admin.index')
            ->with('success', 'Data layanan berhasil dihapus.');
    }
}