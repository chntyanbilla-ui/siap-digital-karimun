<?php

namespace App\Http\Controllers;

use App\Models\Aplikasi;
use Illuminate\Http\Request;

class AplikasiAdminController extends Controller
{
    /**
     * Menampilkan daftar aplikasi.
     */
    public function index()
    {
        $aplikasis = Aplikasi::latest()->get();

        return view('admin.aplikasi.index', compact('aplikasis'));
    }


    /**
     * Menampilkan form tambah aplikasi.
     */
    public function create()
    {
        return view('admin.aplikasi.create');
    }


    /**
     * Menyimpan aplikasi baru.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'opd' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'link' => 'nullable|url|max:500',
            'status' => 'required|string|max:50',
        ]);

        Aplikasi::create($validated);

        return redirect()
            ->route('aplikasi-admin.index')
            ->with('success', 'Data aplikasi berhasil ditambahkan.');
    }


    /**
     * Menampilkan form edit aplikasi.
     */
    public function edit($id)
    {
        $aplikasi = Aplikasi::findOrFail($id);

        return view('admin.aplikasi.edit', compact('aplikasi'));
    }


    /**
     * Memperbarui aplikasi.
     */
    public function update(Request $request, $id)
    {
        $aplikasi = Aplikasi::findOrFail($id);

        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'opd' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'link' => 'nullable|url|max:500',
            'status' => 'required|string|max:50',
        ]);

        $aplikasi->update($validated);

        return redirect()
            ->route('aplikasi-admin.index')
            ->with('success', 'Data aplikasi berhasil diperbarui.');
    }


    /**
     * Menghapus aplikasi.
     */
    public function destroy($id)
    {
        $aplikasi = Aplikasi::findOrFail($id);

        $aplikasi->delete();

        return redirect()
            ->route('aplikasi-admin.index')
            ->with('success', 'Data aplikasi berhasil dihapus.');
    }
}