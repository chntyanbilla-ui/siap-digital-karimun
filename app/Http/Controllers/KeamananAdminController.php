<?php

namespace App\Http\Controllers;

use App\Models\Keamanan;
use Illuminate\Http\Request;

class KeamananAdminController extends Controller
{
    /**
     * Menampilkan daftar keamanan.
     */
    public function index()
    {
        $keamanans = Keamanan::latest()->get();

        return view(
            'admin.keamanan.index',
            compact('keamanans')
        );
    }


    /**
     * Menampilkan form tambah keamanan.
     */
    public function create()
    {
        return view('admin.keamanan.create');
    }


    /**
     * Menyimpan data keamanan.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'kategori' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'status' => 'required|string|max:50',
        ]);

        Keamanan::create($validated);

        return redirect()
            ->route('keamanan-admin.index')
            ->with(
                'success',
                'Data keamanan berhasil ditambahkan.'
            );
    }


    /**
     * Menampilkan detail keamanan.
     */
    public function show(Keamanan $keamanan)
    {
        return view(
            'admin.keamanan.show',
            compact('keamanan')
        );
    }


    /**
     * Menampilkan form edit.
     */
    public function edit(Keamanan $keamanan)
    {
        return view(
            'admin.keamanan.edit',
            compact('keamanan')
        );
    }


    /**
     * Memperbarui data keamanan.
     */
    public function update(
        Request $request,
        Keamanan $keamanan
    ) {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'kategori' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'status' => 'required|string|max:50',
        ]);

        $keamanan->update($validated);

        return redirect()
            ->route('keamanan-admin.index')
            ->with(
                'success',
                'Data keamanan berhasil diperbarui.'
            );
    }


    /**
     * Menghapus data keamanan.
     */
    public function destroy(Keamanan $keamanan)
    {
        $keamanan->delete();

        return redirect()
            ->route('keamanan-admin.index')
            ->with(
                'success',
                'Data keamanan berhasil dihapus.'
            );
    }
}