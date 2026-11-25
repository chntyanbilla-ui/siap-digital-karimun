<?php

namespace App\Http\Controllers;

use App\Models\Opd;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class OpdController extends Controller
{
    /**
     * Menampilkan daftar OPD
     */
    public function index()
    {
        $opds = Opd::latest()->get();

        return view('opd.index', compact('opds'));
    }

    /**
     * Form tambah OPD
     */
    public function create()
    {
        return view('opd.create');
    }

    /**
     * Simpan OPD
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'kode_opd' => [
                'required',
                'string',
                'max:50',
                'unique:opd,kode_opd',
            ],

            'nama_opd' => [
                'required',
                'string',
                'max:255',
            ],

            'kepala_opd' => [
                'nullable',
                'string',
                'max:255',
            ],

            'email' => [
                'nullable',
                'email',
                'max:255',
            ],

            'telepon' => [
                'nullable',
                'string',
                'max:30',
            ],
        ], [
            'kode_opd.required' => 'Kode OPD wajib diisi.',
            'kode_opd.unique' => 'Kode OPD sudah digunakan.',
            'nama_opd.required' => 'Nama OPD wajib diisi.',
            'email.email' => 'Format email tidak valid.',
        ]);

        Opd::create($validated);

        return redirect()
            ->route('opd.index')
            ->with('success', 'Data OPD berhasil ditambahkan.');
    }

    /**
     * Detail OPD
     */
    public function show(Opd $opd)
    {
        return view('opd.show', compact('opd'));
    }

    /**
     * Form edit OPD
     */
    public function edit(Opd $opd)
    {
        return view('opd.edit', compact('opd'));
    }

    /**
     * Update OPD
     */
    public function update(Request $request, Opd $opd)
    {
        $validated = $request->validate([
            'kode_opd' => [
                'required',
                'string',
                'max:50',
                Rule::unique('opd', 'kode_opd')->ignore($opd->id),
            ],

            'nama_opd' => [
                'required',
                'string',
                'max:255',
            ],

            'kepala_opd' => [
                'nullable',
                'string',
                'max:255',
            ],

            'email' => [
                'nullable',
                'email',
                'max:255',
            ],

            'telepon' => [
                'nullable',
                'string',
                'max:30',
            ],
        ], [
            'kode_opd.required' => 'Kode OPD wajib diisi.',
            'kode_opd.unique' => 'Kode OPD sudah digunakan.',
            'nama_opd.required' => 'Nama OPD wajib diisi.',
            'email.email' => 'Format email tidak valid.',
        ]);

        $opd->update($validated);

        return redirect()
            ->route('opd.index')
            ->with('success', 'Data OPD berhasil diperbarui.');
    }

    /**
     * Hapus OPD
     */
    public function destroy(Opd $opd)
    {
        $opd->delete();

        return redirect()
            ->route('opd.index')
            ->with('success', 'Data OPD berhasil dihapus.');
    }
}