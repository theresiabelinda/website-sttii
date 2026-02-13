<?php

namespace App\Http\Controllers;

use App\Models\Bimbingan;
use App\Models\Dosen;
use Illuminate\Http\Request;

class BimbinganController extends Controller
{
    public function index() {
        $bimbingan = Bimbingan::with(['pembimbing1', 'pembimbing2'])
            ->latest()
            ->paginate(8);

        $dosen = Dosen::orderBy('nama_lengkap', 'asc')->get();

        return view('backend.content.bimbingan.list', compact('bimbingan', 'dosen'));
    }

    public function prosesTambah(Request $request) {
        $request->validate([
            'nama_mahasiswa' => 'required',
            'nim'            => 'required|unique:bimbingan,nim',
            'pembimbing_1_id' => 'required',
            'pembimbing_2_id' => 'required|different:pembimbing_1_id',
            'judul_disertasi' => 'required',
            'tahun_akademik'  => 'required',
            'semester'        => 'required'
        ], [
            'pembimbing_2_id.different' => 'Pembimbing 1 dan 2 tidak boleh orang yang sama.',
            'nim.unique' => 'NIM ini sudah terdaftar dalam bimbingan.'
        ]);

        try {
            Bimbingan::create([
                'nama_mahasiswa'  => $request->nama_mahasiswa,
                'nim'             => $request->nim,
                'semester'        => $request->semester,
                'tahun_akademik'  => $request->tahun_akademik,
                'pembimbing_1_id' => $request->pembimbing_1_id,
                'pembimbing_2_id' => $request->pembimbing_2_id,
                'judul_disertasi' => $request->judul_disertasi,
            ]);
            return redirect()->route('bimbingan.index')->with('pesan', ['success', 'Data bimbingan berhasil ditambahkan!']);

        } catch (\Exception $e) {
            return back()->withInput()->with('pesan', ['danger', 'Gagal menyimpan data: ' . $e->getMessage()]);
        }
    }

    public function ubah($id) {
        $bimbingan = Bimbingan::findOrFail($id);
        $dosen = Dosen::orderBy('nama_lengkap', 'asc')->get();

        return view('backend.content.bimbingan.formUbah', compact('bimbingan', 'dosen'));
    }

    public function prosesUbah(Request $request) {
        $request->validate([
            'id'              => 'required',
            'nama_mahasiswa'  => 'required',
            'nim'             => 'required|unique:bimbingan,nim,' . $request->id,
            'semester'        => 'required',
            'tahun_akademik'  => 'required',
            'pembimbing_1_id' => 'required',
            'pembimbing_2_id' => 'required|different:pembimbing_1_id',
            'judul_disertasi' => 'required',
        ], [
            'pembimbing_2_id.different' => 'Pembimbing 1 dan 2 tidak boleh orang yang sama.'
        ]);

        $bimbingan = Bimbingan::findOrFail($request->id);

        try {
            $bimbingan->update([
                'nama_mahasiswa'  => $request->nama_mahasiswa,
                'nim'             => $request->nim,
                'semester'        => $request->semester,
                'tahun_akademik'  => $request->tahun_akademik,
                'pembimbing_1_id' => $request->pembimbing_1_id,
                'pembimbing_2_id' => $request->pembimbing_2_id,
                'judul_disertasi' => $request->judul_disertasi,
            ]);

            return redirect()->route('bimbingan.index')->with('pesan', [
                'success',
                'Data Bimbingan Berhasil Diperbarui'
            ]);
        } catch (\Exception $e) {
            return redirect()->route('bimbingan.index')->with('pesan', [
                'danger',
                'Gagal mengubah data: ' . $e->getMessage()
            ]);
        }
    }

    public function hapus($id)
    {
        $bimbingan = Bimbingan::findOrFail($id);

        try {
            $bimbingan->delete();
            return redirect()->route('bimbingan.index')->with('pesan', [
                'success',
                'Data bimbingan mahasiswa berhasil dihapus!'
            ]);
        } catch (\Exception $e) {
            return redirect()->route('bimbingan.index')->with('pesan', [
                'danger',
                'Gagal menghapus data bimbingan!'
            ]);
        }
    }
}
