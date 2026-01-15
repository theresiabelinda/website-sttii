<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Laporan;
use Illuminate\Support\Facades\Storage;

class LaporanController extends Controller
{
    public function index()
    {
        $data = Laporan::latest()->get();
        return view('backend.content.laporan.list', compact('data'));
    }

    public function tambah()
    {
        return view('backend.content.laporan.formTambah');
    }

    public function prosesTambah(Request $request)
    {
        $request->validate([
            'nama_file' => 'required',
            'tahun' => 'required',
            'file_pdf'  => 'required|mimes:pdf|max:5120',
        ]);

        $file = $request->file('file_pdf');
        $filename = time() . '_' . $file->getClientOriginalName();
        $file->storeAs('public/laporan_pdf', $filename);

        Laporan::create([
            'nama_file' => $request->nama_file,
            'tahun' => $request->tahun,
            'path_file' => $filename,
        ]);

        return redirect()->route('laporan.index')->with('success', 'Dokumen laporan SPMI berhasil ditambahkan');
    }

    public function ubah($id)
    {
        $laporan = Laporan::findOrFail($id);
        return view('backend.content.laporan.formUbah', compact('laporan'));
    }

    public function prosesUbah(Request $request)
    {
        $request->validate([
            'nama_file' => 'required',
            'tahun' => 'required',
            'file_pdf'  => 'nullable|mimes:pdf|max:5120',
        ]);

        $laporan = Laporan::findOrFail($request->id);
        $dataUpdate = [
            'nama_file' => $request->nama_file,
            'tahun'     => $request->tahun,
        ];

        if ($request->hasFile('file_pdf')) {
            // Hapus file lama
            if (Storage::exists('public/laporan_pdf/' . $laporan->path_file)) {
                Storage::delete('public/laporan_pdf/' . $laporan->path_file);
            }

            // Upload file baru
            $file = $request->file('file_pdf');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->storeAs('public/laporan_pdf', $filename);

            $dataUpdate['path_file'] = $filename;
        }

        $laporan->update($dataUpdate);

        return redirect()->route('laporan.index')->with('success', 'Dokumen laporan SPMI berhasil diubah');
    }

    public function hapus($id)
    {
        $laporan = Laporan::findOrFail($id);

        // Hapus file fisik
        if (Storage::exists('public/laporan_pdf/' . $laporan->path_file)) {
            Storage::delete('public/laporan_pdf/' . $laporan->path_file);
        }

        $laporan->delete();

        return redirect()->route('laporan.index')->with('success', 'Dokumen laporan SPMI berhasil dihapus');
    }
}
