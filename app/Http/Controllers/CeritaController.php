<?php

namespace App\Http\Controllers;

use App\Models\Cerita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CeritaController extends Controller
{
    public function index()
    {
        $cerita = Cerita::latest()->paginate(10);
        return view('backend.content.cerita.list', compact('cerita'));
    }

    public function prosesTambah(Request $request)
    {
        $request->validate([
            'nama'        => 'required|string|max:255',
            'angkatan'    => 'required',
            'pekerjaan'   => 'required',
            'kesan_pesan' => 'required',
            'prodi'       => 'required',
            'foto'        => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $namaFile = null;
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $namaFile = time() . '_' . $file->getClientOriginalName();
            // Simpan ke public/uploads/cerita
            $file->storeAs('public/uploads/cerita', $namaFile);
        }

        Cerita::create([
            'nama'        => $request->nama,
            'angkatan'    => $request->angkatan,
            'pekerjaan'   => $request->pekerjaan,
            'prodi'       => $request->prodi,
            'kesan_pesan' => $request->kesan_pesan,
            'foto'        => $namaFile,
        ]);

        return redirect()->back()->with('success', 'Berhasil ditambah!');
    }

    public function prosesUbah(Request $request)
    {
        $cerita = Cerita::findOrFail($request->id);

        if ($request->hasFile('foto')) {
            if ($cerita->foto && Storage::exists('public/uploads/cerita/' . $cerita->foto)) {
                Storage::delete('public/uploads/cerita/' . $cerita->foto);
            }

            // 2. Upload foto baru
            $file = $request->file('foto');
            $namaFile = time() . '_' . $file->getClientOriginalName();
            $file->storeAs('public/uploads/cerita', $namaFile);
            $cerita->foto = $namaFile;
        }

        $cerita->update([
            'nama' => $request->nama,
            'angkatan' => $request->angkatan,
            'prodi' => $request->prodi,
            'pekerjaan' => $request->pekerjaan,
            'kesan_pesan' => $request->kesan_pesan,
            'foto' => $cerita->foto
        ]);

        return redirect()->back()->with('success', 'Berhasil diubah!');
    }

    public function hapus($id)
    {
        $cerita = Cerita::findOrFail($id);
        if ($cerita->foto && Storage::exists('public/uploads/cerita/' . $cerita->foto)) {
            Storage::delete('public/uploads/cerita/' . $cerita->foto);
        }

        $cerita->delete();
        return redirect()->back()->with('success', 'Data dan foto berhasil dihapus!');
    }
}
