<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BukuJurnal;
use App\Models\Dosen;

class BukuJurnalController extends Controller
{
    public function index()
    {
        $dosen = Dosen::select('id', 'nama_lengkap')->get();
        $buku_jurnal = BukuJurnal::with('dosen')->latest()->paginate(10);

        return view('backend.content.buku_jurnal.list', compact('dosen', 'buku_jurnal'));
    }

    public function prosesTambah(Request $request)
    {
        $request->validate([
            'dosen_id' => 'required|exists:dosen,id',
            'judul'    => 'required|string|max:255',
            'tipe'     => 'required|in:buku,jurnal,artikel',
            'tahun'    => 'required|digits:4',
            'link'     => 'nullable|url', // Menu input link optional
        ]);

        BukuJurnal::create([
            'dosen_id' => $request->dosen_id,
            'judul'    => $request->judul,
            'tipe'     => $request->tipe,
            'tahun'    => $request->tahun,
            'link'     => $request->link, // Bisa kosong (null)
        ]);

        return redirect()->back()->with('success', 'Data buku/jurnal berhasil ditambahkan!');
    }

    public function prosesUbah(Request $request)
    {
        $request->validate([
            'id'       => 'required|exists:buku_jurnal,id',
            'dosen_id' => 'required|exists:dosen,id',
            'judul'    => 'required|string|max:255',
            'tipe'     => 'required|in:buku,jurnal,artikel',
            'tahun'    => 'required|digits:4',
            'link'     => 'nullable', // Diubah jadi nullable saja agar lebih fleksibel
        ]);

        $buku = BukuJurnal::findOrFail($request->id);

        try {
            $buku->update([
                'dosen_id' => $request->dosen_id,
                'judul'    => $request->judul,
                'tipe'     => $request->tipe,
                'tahun'    => $request->tahun,
                'penerbit' => $request->penerbit,
                'link'     => $request->link,
        ]);

            return redirect()->route('buku_jurnal.index')->with('pesan', [
                'success',
                'Data Buku & Jurnal Berhasil Diperbarui'
            ]);

        } catch (\Exception $e) {
            return redirect()->route('buku_jurnal.index')->with('pesan', [
                'danger',
                'Gagal mengubah data: ' . $e->getMessage()
            ]);
        }
    }

    public function hapus($id)
    {
        $buku = BukuJurnal::findOrFail($id);
        $buku->delete();

        return redirect()->back()->with('success', 'Data berhasil dihapus!');
    }
}
