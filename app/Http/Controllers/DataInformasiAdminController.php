<?php

namespace App\Http\Controllers;

use App\Models\DataInformasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DataInformasiAdminController extends Controller
{
    /**
     * Menampilkan daftar data informasi.
     */
    public function index()
    {
        $dataInformasis = DataInformasi::latest()->get();

        return view(
            'admin.data-informasi.index',
            compact('dataInformasis')
        );
    }


    /**
     * Menampilkan form tambah.
     */
    public function create()
    {
        return view('admin.data-informasi.create');
    }


    /**
     * Menyimpan data informasi.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'kategori' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'file' => 'nullable|file|max:10240',
            'status' => 'required|string|max:50',
        ]);

        if ($request->hasFile('file')) {

            $validated['file'] = $request
                ->file('file')
                ->store('data-informasi', 'public');
        }

        DataInformasi::create($validated);

        return redirect()
            ->route('data-informasi-admin.index')
            ->with(
                'success',
                'Data informasi berhasil ditambahkan.'
            );
    }


    /**
     * Menampilkan form edit.
     */
    public function edit($id)
    {
        $dataInformasi = DataInformasi::findOrFail($id);

        return view(
            'admin.data-informasi.edit',
            compact('dataInformasi')
        );
    }


    /**
     * Memperbarui data informasi.
     */
    public function update(Request $request, $id)
    {
        $dataInformasi = DataInformasi::findOrFail($id);

        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'kategori' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'file' => 'nullable|file|max:10240',
            'status' => 'required|string|max:50',
        ]);

        if ($request->hasFile('file')) {

            // Hapus file lama
            if ($dataInformasi->file) {

                Storage::disk('public')
                    ->delete($dataInformasi->file);
            }

            // Simpan file baru
            $validated['file'] = $request
                ->file('file')
                ->store('data-informasi', 'public');
        }

        $dataInformasi->update($validated);

        return redirect()
            ->route('data-informasi-admin.index')
            ->with(
                'success',
                'Data informasi berhasil diperbarui.'
            );
    }


    /**
     * Menghapus data informasi.
     */
    public function destroy($id)
    {
        $dataInformasi = DataInformasi::findOrFail($id);

        // Hapus file jika ada
        if ($dataInformasi->file) {

            Storage::disk('public')
                ->delete($dataInformasi->file);
        }

        $dataInformasi->delete();

        return redirect()
            ->route('data-informasi-admin.index')
            ->with(
                'success',
                'Data informasi berhasil dihapus.'
            );
    }
}