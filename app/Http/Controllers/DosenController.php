<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function index()
    {
        $dosen = Dosen::latest()->paginate(6);
        return view('backend.content.dosen.list', compact('dosen'));
    }

    public function prosesTambah(Request $request) {
        $this->validate($request, [
            'nama_lengkap'  => 'required',
            'nidn'          => 'required|unique:dosen,nidn',
            'nuptk'         => 'nullable|unique:dosen,nuptk',
            'email'         => 'required|email|unique:dosen,email',
            'pendidikan_s1' => 'required',
            'pendidikan_s2' => 'required',
        ]);

        $dosen = new Dosen();
        $dosen->nama_lengkap   = $request->nama_lengkap;
        $dosen->nidn           = $request->nidn;
        $dosen->nuptk          = $request->nuptk;
        $dosen->email          = $request->email;
        $dosen->link_scholar   = $request->link_scholar;
        $dosen->link_sinta     = $request->link_sinta;
        $dosen->pendidikan_s1  = $request->pendidikan_s1;
        $dosen->pendidikan_s2  = $request->pendidikan_s2;
        $dosen->pendidikan_s3  = $request->pendidikan_s3;

        try {
            $dosen->save();

            return redirect(route('dosen.index'))->with('pesan', [
                'success',
                'Data Dosen Berhasil Ditambahkan'
            ]);
        } catch (\Exception $e) {
            return redirect(route('dosen.index'))->with('pesan', [
                'danger',
                'Gagal tambah data! Error: ' . $e->getMessage()
            ]);
        }
    }

    public function ubah($id) {
        $dosen = Dosen::findOrFail($id);
        return view('backend.content.dosen.formUbah', compact('dosen'));
    }

    public function prosesUbah(Request $request) {
        $this->validate($request, [
            'id'            => 'required',
            'nama_lengkap'  => 'required',
            'nidn'          => 'required|unique:dosen,nidn,' . $request->id,
            'nuptk'         => 'nullable|unique:dosen,nuptk,' . $request->id,
            'email'         => 'required|email|unique:dosen,email,' . $request->id,
            'pendidikan_s1' => 'required',
            'pendidikan_s2' => 'required',
        ]);

        $dosen = Dosen::findOrFail($request->id);
        $dosen->nama_lengkap   = $request->nama_lengkap;
        $dosen->nidn           = $request->nidn;
        $dosen->nuptk          = $request->nuptk;
        $dosen->email          = $request->email;
        $dosen->link_scholar   = $request->link_scholar;
        $dosen->link_sinta     = $request->link_sinta;
        $dosen->pendidikan_s1  = $request->pendidikan_s1;
        $dosen->pendidikan_s2  = $request->pendidikan_s2;
        $dosen->pendidikan_s3  = $request->pendidikan_s3;

        try {
            $dosen->save();

            return redirect(route('dosen.index'))->with('pesan', [
                'success',
                'Data Dosen Berhasil Diubah'
            ]);
        } catch (\Exception $e) {
            return redirect(route('dosen.index'))->with('pesan', [
                'danger',
                'Gagal mengubah data! Error: ' . $e->getMessage()
            ]);
        }
    }

    public function hapus($id){
        $dosen = Dosen::findOrFail($id);

        try {
            $dosen->delete();

            return redirect(route('dosen.index'))->with('pesan', ['success','Data dosen berhasil dihapus!']);
        }catch (\Exception $e){
            return redirect(route('dosen.index'))->with('pesan', ['danger','Gagal hapus data dosen!']);
        }
    }
}
