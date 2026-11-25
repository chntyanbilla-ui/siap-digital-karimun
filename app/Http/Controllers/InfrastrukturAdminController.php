<?php

namespace App\Http\Controllers;

use App\Models\Infrastruktur;
use Illuminate\Http\Request;

class InfrastrukturAdminController extends Controller
{
    /**
     * Menampilkan semua data infrastruktur.
     */
    public function index()
    {
        $infrastruktur_admin = Infrastruktur::latest()->get();

        return view(
            'admin.infrastruktur.index',
            compact('infrastruktur_admin')
        );
    }

    /**
     * Menampilkan form tambah infrastruktur.
     */
    public function create()
    {
        return view('admin.infrastruktur.create');
    }

    /**
     * Menyimpan data infrastruktur baru.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'jenis' => 'required|string|max:100',
            'deskripsi' => 'nullable|string',
            'lokasi' => 'nullable|string|max:255',
            'status' => 'required|string|max:50',
        ]);

        Infrastruktur::create([
            'nama' => $request->nama,
            'jenis' => $request->jenis,
            'deskripsi' => $request->deskripsi,
            'lokasi' => $request->lokasi,
            'status' => $request->status,
        ]);

        return redirect()
            ->route('infrastruktur-admin.index')
            ->with('success', 'Data infrastruktur berhasil ditambahkan.');
    }

    /**
     * Menampilkan form edit.
     */
    public function edit($id)
    {
        $infrastruktur_admin = Infrastruktur::findOrFail($id);

        return view(
            'admin.infrastruktur.edit',
            compact('infrastruktur_admin')
        );
    }

    /**
     * Mengupdate data infrastruktur.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'jenis' => 'required|string|max:100',
            'deskripsi' => 'nullable|string',
            'lokasi' => 'nullable|string|max:255',
            'status' => 'required|string|max:50',
        ]);

        $infrastruktur_admin = Infrastruktur::findOrFail($id);

        $infrastruktur_admin->update([
            'nama' => $request->nama,
            'jenis' => $request->jenis,
            'deskripsi' => $request->deskripsi,
            'lokasi' => $request->lokasi,
            'status' => $request->status,
        ]);

        return redirect()
            ->route('infrastruktur-admin.index')
            ->with('success', 'Data infrastruktur berhasil diperbarui.');
    }

    /**
     * Menghapus data infrastruktur.
     */
    public function destroy($id)
    {
        $infrastruktur_admin = Infrastruktur::findOrFail($id);

        $infrastruktur_admin->delete();

        return redirect()
            ->route('infrastruktur-admin.index')
            ->with('success', 'Data infrastruktur berhasil dihapus.');
    }
}