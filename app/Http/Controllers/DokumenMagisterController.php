<?php

namespace App\Http\Controllers;

use App\Models\DokumenMagister;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DokumenMagisterController extends Controller
{
    public function index()
    {
        $data = DokumenMagister::latest()->get();
        return view('backend.content.dokumen_magister.list', compact('data'));
    }

    public function tambah()
    {
        return view('backend.content.dokumen_magister.formTambah');
    }

    public function prosesTambah(Request $request)
    {
        $request->validate([
            'nama_file' => 'required',
            'file_pdf'  => 'required|mimes:pdf|max:5120', // Max 5MB, PDF Only
        ]);

        $file = $request->file('file_pdf');
        // Simpan ke folder storage/app/public/magister_pdf
        $filename = time() . '_' . $file->getClientOriginalName();
        $file->storeAs('public/magister_pdf', $filename);

        DokumenMagister::create([
            'nama_file' => $request->nama_file,
            'path_file' => $filename,
        ]);

        return redirect()->route('dokumen_magister.index')->with('success', 'Dokumen unggahan prodi S2 berhasil ditambahkan');
    }

    public function ubah($id)
    {
        $dokumen_magister = DokumenMagister::findOrFail($id);
        return view('backend.content.dokumen_magister.formUbah', compact('dokumen_magister'));
    }

    public function prosesUbah(Request $request)
    {
        $request->validate([
            'nama_file' => 'required',
            'file_pdf'  => 'nullable|mimes:pdf|max:5120',
        ]);

        $dokumen_magister = DokumenMagister::findOrFail($request->id);
        $dataUpdate = ['nama_file' => $request->nama_file];

        if ($request->hasFile('file_pdf')) {
            // Hapus file lama
            if (Storage::exists('public/magister_pdf/' . $dokumen_magister->path_file)) {
                Storage::delete('public/magister_pdf/' . $dokumen_magister->path_file);
            }

            // Upload file baru
            $file = $request->file('file_pdf');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->storeAs('public/magister_pdf', $filename);

            $dataUpdate['path_file'] = $filename;
        }

        $dokumen_magister->update($dataUpdate);

        return redirect()->route('dokumen_magister.index')->with('success', 'Dokumen unggahan prodi S2 berhasil diubah');
    }

    public function hapus($id)
    {
        $dokumen_magister = DokumenMagister::findOrFail($id);

        // Hapus file fisik
        if (Storage::exists('public/magister_pdf/' . $dokumen_magister->path_file)) {
            Storage::delete('public/magister_pdf/' . $dokumen_magister->path_file);
        }

        $dokumen_magister->delete();

        return redirect()->route('dokumen_magister.index')->with('success', 'Dokumen unggahan prodi S2 berhasil dihapus');
    }
}
