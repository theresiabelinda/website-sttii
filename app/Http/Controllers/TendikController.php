<?php

namespace App\Http\Controllers;

use App\Models\Tendik;
use Illuminate\Http\Request;

class TendikController extends Controller
{
    public function index()
    {
        $tendik = Tendik::latest()->paginate(10);
        return view('backend.content.tendik.list', compact('tendik'));
    }

    public function prosesTambah(Request $request) {
        $this->validate($request, [
            'nama'                => 'required|string|max:255',
            'email'               => 'required|email|unique:tendik,email',
            'pendidikan_terakhir' => 'required|in:SMA,D3,S1,S2,S3',
            'divisi'              => 'required|in:keuangan,pusdatin,sarpras,perpustakaan,p3s,sekprodi,alumni,lppm,spmi,WK II Bag. Kepegawaian','sekretaris lembaga',
            'jurusan'             => 'nullable|string|max:255',
        ]);

        $tendik = new Tendik();
        $tendik->nama                = $request->nama;
        $tendik->email               = $request->email;
        $tendik->pendidikan_terakhir = $request->pendidikan_terakhir;
        $tendik->divisi              = $request->divisi;
        $tendik->jurusan             = $request->jurusan;

        try {
            $tendik->save();

            return redirect(route('tendik.index'))->with('pesan', [
                'success',
                'Data Tendik Berhasil Ditambahkan'
            ]);
        } catch (\Exception $e) {
            return redirect(route('tendik.index'))->with('pesan', [
                'danger',
                'Gagal tambah data! Error: ' . $e->getMessage()
            ]);
        }
    }

    public function prosesUbah(Request $request) {
        $this->validate($request, [
            'id'                  => 'required|exists:tendik,id',
            'nama'                => 'required|string|max:255',
            'email'               => 'required|email|unique:tendik,email,' . $request->id,
            'pendidikan_terakhir' => 'required|in:SMA,D3, S1,S2,S3',
            'divisi'              => 'required|in:keuangan,pusdatin,sarpras,perpustakaan,p3s,sekprodi,alumni,lppm,spmi,WK II Bag. Kepegawaian,sekretaris lembaga',
            'jurusan'             => 'nullable|string|max:255',
        ]);

        $tendik = Tendik::findOrFail($request->id);

        $tendik->nama                = $request->nama;
        $tendik->email               = $request->email;
        $tendik->pendidikan_terakhir = $request->pendidikan_terakhir;
        $tendik->divisi              = $request->divisi;
        $tendik->jurusan             = $request->jurusan;

        try {
            $tendik->save();

            return redirect(route('tendik.index'))->with('pesan', [
                'success',
                'Data Tendik Berhasil Diubah'
            ]);
        } catch (\Exception $e) {
            return redirect(route('tendik.index'))->with('pesan', [
                'danger',
                'Gagal mengubah data! Error: ' . $e->getMessage()
            ]);
        }
    }

    public function hapus($id){
        $tendik = Tendik::findOrFail($id);

        try {
            $tendik->delete();

            return redirect(route('tendik.index'))->with('pesan', ['success','Data tendik berhasil dihapus!']);
        }catch (\Exception $e){
            return redirect(route('tendik.index'))->with('pesan', ['danger','Gagal tendik data dosen!']);
        }
    }
}
