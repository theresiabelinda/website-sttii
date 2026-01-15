<?php

namespace App\Http\Controllers;

use App\Models\DokumenDoktor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DokumenDoktorController extends Controller
{
    public function index()
    {
        $data = DokumenDoktor::latest()->get();
        return view('backend.content.dokumen_doktor.list', compact('data'));
    }

    public function tambah()
    {
        return view('backend.content.dokumen_doktor.formTambah');
    }

    public function prosesTambah(Request $request)
    {
        $request->validate([
            'nama_file' => 'required',
            'file_pdf'  => 'required|mimes:pdf|max:5120', // Max 5MB, PDF Only
        ]);

        $file = $request->file('file_pdf');
        // Simpan ke folder storage/app/public/doktor_pdf
        $filename = time() . '_' . $file->getClientOriginalName();
        $file->storeAs('public/doktor_pdf', $filename);

        DokumenDoktor::create([
            'nama_file' => $request->nama_file,
            'path_file' => $filename,
        ]);

        return redirect()->route('dokumen_doktor.index')->with('success', 'Dokumen unggahan prodi S3 berhasil ditambahkan');
    }

    public function ubah($id)
    {
        $dokumen_doktor = DokumenDoktor::findOrFail($id);
        return view('backend.content.dokumen_doktor.formUbah', compact('dokumen_doktor'));
    }

    public function prosesUbah(Request $request)
    {
        $request->validate([
            'nama_file' => 'required',
            'file_pdf'  => 'nullable|mimes:pdf|max:5120',
        ]);

        $dokumen_doktor = DokumenDoktor::findOrFail($request->id);
        $dataUpdate = ['nama_file' => $request->nama_file];

        if ($request->hasFile('file_pdf')) {
            // Hapus file lama
            if (Storage::exists('public/doktor_pdf/' . $dokumen_doktor->path_file)) {
                Storage::delete('public/doktor_pdf/' . $dokumen_doktor->path_file);
            }

            // Upload file baru
            $file = $request->file('file_pdf');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->storeAs('public/doktor_pdf', $filename);

            $dataUpdate['path_file'] = $filename;
        }

        $dokumen_doktor->update($dataUpdate);

        return redirect()->route('dokumen_doktor.index')->with('success', 'Dokumen unggahan prodi S3 berhasil diubah');
    }

    public function hapus($id)
    {
        $dokumen_doktor = DokumenDoktor::findOrFail($id);

        // Hapus file fisik
        if (Storage::exists('public/magister_pdf/' . $dokumen_doktor->path_file)) {
            Storage::delete('public/magister_pdf/' . $dokumen_doktor->path_file);
        }

        $dokumen_doktor->delete();

        return redirect()->route('dokumen_doktor.index')->with('success', 'Dokumen unggahan prodi S3 berhasil dihapus');
    }
}
