<?php

namespace App\Http\Controllers;

use App\Models\Kebijakan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class KebijakanController extends Controller
{
    public function index()
    {
        $data = Kebijakan::latest()->get();
        return view('backend.content.kebijakan.list', compact('data'));
    }

    public function tambah()
    {
        return view('backend.content.kebijakan.formTambah');
    }

    public function prosesTambah(Request $request)
    {
        $request->validate([
            'nama_file' => 'required',
            'tahun' => 'required',
            'file_pdf'  => 'required|mimes:pdf|max:5120', // Max 5MB, PDF Only
        ]);

        $file = $request->file('file_pdf');
        // Simpan ke folder storage/app/public/kebijakan_pdf
        $filename = time() . '_' . $file->getClientOriginalName();
        $file->storeAs('public/kebijakan_pdf', $filename);

        Kebijakan::create([
            'nama_file' => $request->nama_file,
            'tahun' => $request->tahun,
            'path_file' => $filename,
        ]);

        return redirect()->route('kebijakan.index')->with('success', 'Dokumen kebijakan SPMI berhasil ditambahkan');
    }

    public function ubah($id)
    {
        $kebijakan = Kebijakan::findOrFail($id);
        return view('backend.content.kebijakan.formUbah', compact('kebijakan'));
    }

    public function prosesUbah(Request $request)
    {
        $request->validate([
            'nama_file' => 'required',
            'tahun' => 'required',
            'file_pdf'  => 'nullable|mimes:pdf|max:5120',
        ]);

        $kebijakan = Kebijakan::findOrFail($request->id);
        $dataUpdate = [
            'nama_file' => $request->nama_file,
            'tahun'     => $request->tahun,
        ];

        if ($request->hasFile('file_pdf')) {
            // Hapus file lama
            if (Storage::exists('public/kebijakan_pdf/' . $kebijakan->path_file)) {
                Storage::delete('public/kebijakan_pdf/' . $kebijakan->path_file);
            }

            // Upload file baru
            $file = $request->file('file_pdf');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->storeAs('public/kebijakan_pdf', $filename);

            $dataUpdate['path_file'] = $filename;
        }

        $kebijakan->update($dataUpdate);

        return redirect()->route('kebijakan.index')->with('success', 'Dokumen kebijakan SPMI berhasil diubah');
    }

    public function hapus($id)
    {
        $kebijakan = Kebijakan::findOrFail($id);

        // Hapus file fisik
        if (Storage::exists('public/kebijakan_pdf/' . $kebijakan->path_file)) {
            Storage::delete('public/kebijakan_pdf/' . $kebijakan->path_file);
        }

        $kebijakan->delete();

        return redirect()->route('kebijakan.index')->with('success', 'Dokumen kebijakan SPMI berhasil dihapus');
    }
}
