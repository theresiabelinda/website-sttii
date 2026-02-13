<?php

namespace App\Http\Controllers;

use App\Models\DokumenSarjana;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DokumenSarjanaController extends Controller
{
    public function index()
    {
        $data = DokumenSarjana::latest()->get();
        return view('backend.content.dokumen_sarjana.list', compact('data'));
    }

    public function prosesTambah(Request $request)
    {
        $request->validate([
            'nama_file' => 'required',
            'file_pdf'  => 'required|mimes:pdf|max:5120', // Max 5MB, PDF Only
        ]);

        $file = $request->file('file_pdf');
        // Simpan ke folder storage/app/public/pedoman_pdf
        $filename = time() . '_' . $file->getClientOriginalName();
        $file->storeAs('public/sarjana_pdf', $filename);

        DokumenSarjana::create([
            'nama_file' => $request->nama_file,
            'path_file' => $filename,
        ]);

        return redirect()->route('dokumen_sarjana.index')->with('success', 'Dokumen unggahan prodi S1 berhasil ditambahkan');
    }

    public function ubah($id)
    {
        $dokumen_sarjana = DokumenSarjana::findOrFail($id);
        return view('backend.content.dokumen_sarjana.formUbah', compact('dokumen_sarjana'));
    }

    public function prosesUbah(Request $request)
    {
        $request->validate([
            'nama_file' => 'required',
            'file_pdf'  => 'nullable|mimes:pdf|max:5120',
        ]);

        $dokumen_sarjana = DokumenSarjana::findOrFail($request->id);
        $dataUpdate = ['nama_file' => $request->nama_file];

        if ($request->hasFile('file_pdf')) {
            // Hapus file lama
            if (Storage::exists('public/sarjana_pdf/' . $dokumen_sarjana->path_file)) {
                Storage::delete('public/sarjana_pdf/' . $dokumen_sarjana->path_file);
            }

            // Upload file baru
            $file = $request->file('file_pdf');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->storeAs('public/sarjana_pdf', $filename);

            $dataUpdate['path_file'] = $filename;
        }

        $dokumen_sarjana->update($dataUpdate);

        return redirect()->route('dokumen_sarjana.index')->with('success', 'Dokumen unggahan prodi S1 berhasil diubah');
    }

    public function hapus($id)
    {
        $dokumen_sarjana = DokumenSarjana::findOrFail($id);

        // Hapus file fisik
        if (Storage::exists('public/sarjana_pdf/' . $dokumen_sarjana->path_file)) {
            Storage::delete('public/sarjana_pdf/' . $dokumen_sarjana->path_file);
        }

        $dokumen_sarjana->delete();

        return redirect()->route('dokumen_sarjana.index')->with('success', 'Dokumen unggahan prodi S1 berhasil dihapus');
    }
}
