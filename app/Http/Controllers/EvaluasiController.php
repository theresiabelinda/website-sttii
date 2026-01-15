<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Evaluasi;
use Illuminate\Support\Facades\Storage;

class EvaluasiController extends Controller
{
    public function index()
    {
        $data = Evaluasi::latest()->get();
        return view('backend.content.evaluasi.list', compact('data'));
    }

    public function tambah()
    {
        return view('backend.content.evaluasi.formTambah');
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
        $file->storeAs('public/evaluasi_pdf', $filename);

        Evaluasi::create([
            'nama_file' => $request->nama_file,
            'path_file' => $filename,
        ]);

        return redirect()->route('evaluasi.index')->with('success', 'Dokumen evaluasi berhasil ditambahkan');
    }

    public function ubah($id)
    {
        $evaluasi = Evaluasi::findOrFail($id);
        return view('backend.content.evaluasi.formUbah', compact('evaluasi'));
    }

    public function prosesUbah(Request $request)
    {
        $request->validate([
            'nama_file' => 'required',
            'file_pdf'  => 'nullable|mimes:pdf|max:5120',
        ]);

        $evaluasi = Evaluasi::findOrFail($request->id);
        $dataUpdate = ['nama_file' => $request->nama_file];

        if ($request->hasFile('file_pdf')) {
            // Hapus file lama
            if (Storage::exists('public/evaluasi_pdf/' . $evaluasi->path_file)) {
                Storage::delete('public/evaluasi_pdf/' . $evaluasi->path_file);
            }

            // Upload file baru
            $file = $request->file('file_pdf');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->storeAs('public/evaluasi_pdf', $filename);

            $dataUpdate['path_file'] = $filename;
        }

        $evaluasi->update($dataUpdate);

        return redirect()->route('evaluasi.index')->with('success', 'Dokumen evaluasi berhasil diubah');
    }

    public function hapus($id)
    {
        $evaluasi = Evaluasi::findOrFail($id);

        // Hapus file fisik
        if (Storage::exists('public/evaluasi_pdf/' . $evaluasi->path_file)) {
            Storage::delete('public/evaluasi_pdf/' . $evaluasi->path_file);
        }

        $evaluasi->delete();

        return redirect()->route('evaluasi.index')->with('success', 'Dokumen evaluasi berhasil dihapus');
    }
}
