<?php

namespace App\Http\Controllers;

use App\Models\ProsesBisnis;
use Illuminate\Http\Request;

class ProsesBisnisController extends Controller
{
    public function index()
    {
        $prosesBisnis = ProsesBisnis::latest()->get();

        return view(
            'admin.proses-bisnis.index',
            compact('prosesBisnis')
        );
    }

    public function create()
    {
        return view('admin.proses-bisnis.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'opd' => 'required|string|max:255',
            'kategori' => 'nullable|string|max:255',
            'deskripsi' => 'required|string',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'pdf' => 'nullable|mimes:pdf|max:10240',
            'status' => 'required|in:Aktif,Nonaktif',
        ]);

        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');

            $namaFile = time() . '_' . $file->getClientOriginalName();

            $file->move(
                public_path('uploads/proses-bisnis'),
                $namaFile
            );

            $validated['gambar'] =
                'uploads/proses-bisnis/' . $namaFile;
        }

        if ($request->hasFile('pdf')) {
            $file = $request->file('pdf');

            $namaFile = time() . '_' . $file->getClientOriginalName();

            $file->move(
                public_path('uploads/proses-bisnis/pdf'),
                $namaFile
            );

            $validated['pdf'] =
                'uploads/proses-bisnis/pdf/' . $namaFile;
        }

        ProsesBisnis::create($validated);

        return redirect()
            ->route('proses-bisnis-admin.index')
            ->with('success', 'Data proses bisnis berhasil ditambahkan.');
    }

    public function show($id)
    {
        $prosesBisnis = ProsesBisnis::findOrFail($id);

        return view(
            'admin.proses-bisnis.show',
            compact('prosesBisnis')
        );
    }

    public function edit($id)
    {
        $prosesBisnis = ProsesBisnis::findOrFail($id);

        return view(
            'admin.proses-bisnis.edit',
            compact('prosesBisnis')
        );
    }

    public function update(Request $request, $id)
    {
        $prosesBisnis = ProsesBisnis::findOrFail($id);

        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'opd' => 'required|string|max:255',
            'kategori' => 'nullable|string|max:255',
            'deskripsi' => 'required|string',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'pdf' => 'nullable|mimes:pdf|max:10240',
            'status' => 'required|in:Aktif,Nonaktif',
        ]);

        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');

            $namaFile = time() . '_' . $file->getClientOriginalName();

            $file->move(
                public_path('uploads/proses-bisnis'),
                $namaFile
            );

            $validated['gambar'] =
                'uploads/proses-bisnis/' . $namaFile;
        }

        if ($request->hasFile('pdf')) {
            $file = $request->file('pdf');

            $namaFile = time() . '_' . $file->getClientOriginalName();

            $file->move(
                public_path('uploads/proses-bisnis/pdf'),
                $namaFile
            );

            $validated['pdf'] =
                'uploads/proses-bisnis/pdf/' . $namaFile;
        }

        $prosesBisnis->update($validated);

        return redirect()
            ->route('proses-bisnis-admin.index')
            ->with('success', 'Data proses bisnis berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $prosesBisnis = ProsesBisnis::findOrFail($id);

        $prosesBisnis->delete();

        return redirect()
            ->route('proses-bisnis-admin.index')
            ->with('success', 'Data proses bisnis berhasil dihapus.');
    }
}